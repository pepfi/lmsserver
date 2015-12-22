<?php
class Log extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    public function index(){
        $data = array('home_nav_class' => "", 'device_nav_class' => "", 'user_nav_class' => '', 'log_nav_class' => "class='active'");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/log');
        $this->load->view('admin/footer');
    }
    
}