<?php 
class User extends CI_Model {
    private $_table = "artikel";
    public $title;
    public $content;
    public $username;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByUsername($username)
    {
        return $this->db->get_where($this->_table, ["username" => $username])->result();
    }

    public function update($data)
    {

        return $this->db->get_where('artikel', $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}
?>