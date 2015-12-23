<?php
class Device extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('device_model');
    }
    public function list_deviceinfo(){
        $data['home_nav_class'] = "";
        $data['device_nav_class'] = "class='active'";
        $data['user_nav_class'] = '';
        $data['log_nav_class'] = '';
        $data['deviceinfo'] = $this->device_model->list_deviceinfo();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/device', $data);
        $this->load->view('admin/footer');        
    }
    
}