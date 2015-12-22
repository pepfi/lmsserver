<?php
class Admin_model extends CI_Model{
    function validate()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->where('blocked', "0");
        $query = $this->db->get('admin');
        if ($query->num_rows())
        {
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
    }
}