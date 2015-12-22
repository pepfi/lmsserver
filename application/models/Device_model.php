<?php
class Device_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function devicesInfo(){
        $sql = "select mac,ip_address,ip_location,firmware_version,content_version,first_registration_time,last_registration_time,state from deviceinfo";
        return $this->db->query($sql);
    }
}