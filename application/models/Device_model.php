<?php
class Device_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function index($offset, $pagesize){
        $sql = "select mac,state,ip_address,ip_location,firmware_version,content_version,first_registration_time,last_registration_time from deviceinfo limit $offset,$pagesize";
        return $this->db->query($sql);
    }
    public function search(){
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
        if($this->input->post('first_registration_time_start')){
            $this->db->where('first_registration_time >', $this->input->post('first_registration_time_start'));
        }
        if($this->input->post('first_registration_time_end')){
            $this->db->where('first_registration_time <', $this->input->post('first_registration_time_end'));
        }
        if($this->input->post('last_registration_time_start')){
            $this->db->where('last_registration_time >', $this->input->post('last_registration_time_start'));
        }
        if($this->input->post('last_registration_time_end')){
            $this->db->where('last_registration_time <', $this->input->post('last_registration_time_end'));
        }
        //获得数据库的数据条数
        //分页
        //前200
        $query = $this->db->get('deviceinfo');
        return $query;
    }
}