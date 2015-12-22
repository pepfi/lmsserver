<?php
class Device extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    public function index(){
        $data = array('home_nav_class' => '', 'device_nav_class' => "class='active'", 'user_nav_class' => '', 'log_nav_class' => '');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/device');
        $this->load->view('admin/footer');
    }
    
}