<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()==false){
            $this->load->view('user_login');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['username' => $username])->row_array();
            if($user){
                if(password_verify($password, $user['password'])){
                    $data=[
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('artikel');
                }else{
                    redirect('auth');
                }
            }else{
                redirect('auth');
            }
        }
    }
    public function register(){
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email already registered'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()==false){
            $this->load->view('user_register');
        }else{
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 2
            ];
            $this->db->insert('user', $data);
            redirect('auth');
        }
    }
}
