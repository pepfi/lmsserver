<?php
class Device_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function list_deviceinfo(){
        $search_array = array(
            'mac' => trim($this->input->post('mac')),
            'state' => trim($this->input->post('state')),
            'ip_address' => trim($this->input->post('ip_address')),
            'firmware_version' => trim($this->input->post('firmware_version')),
            'ip_location' => trim($this->input->post('ip_location')),
            'content_version' => trim($this->input->post('content_version'))
        );
        foreach ($search_array as $key=>$value){
            if(isset($value)) {
                $this->db->like($key,$value);
            }
        }
        $query = $this->db->get('deviceinfo');
        return $query;
    }
}