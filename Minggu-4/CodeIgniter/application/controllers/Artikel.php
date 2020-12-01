<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $role = $_SESSION['role'];
        if($role==1){
            $data['articles'] = $this->user->getAll();
            $this->load->view('artikel_home',$data);
        }else{
            $data['articles'] = $this->user->getByUsername($_SESSION['username']);
            $this->load->view('artikel_home',$data);
        }
    }
    public function update($id){
        $where = [ 'id' => $id ];
        $data['article'] = $this->user->update($where)->result();
        $this->load->view('artikel_update',$data);
    }
    public function add(){
        $this->load->view('artikel_add');
    }
    public function tambah(){
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        if($this->form_validation->run()==false){
            $this->load->view('artikel_add');
        }else{
            $data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'username' => $_SESSION['username']
            ];
            $this->db->insert('artikel', $data);
            redirect('artikel');
        }
    }
    public function ubah(){
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        if($this->form_validation->run()==false){
            $this->load->view('artikel_add');
        }else{
            $id = [
                'id' => $this->input->post('id')
            ];
            $data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'username' => $_SESSION['username']
            ];
            $this->db->where($id)->update('artikel', $data);
            redirect('artikel');
        }
    }

    public function hapus($id){
        $data = [
            'id' => $id
        ];
        $this->db->where($data)->delete('artikel');
        redirect('artikel');
    }
}
