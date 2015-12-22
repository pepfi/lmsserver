<?php
class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    public function index(){
        $data = array('home_nav_class' => "", 'device_nav_class' => "", 'user_nav_class' => "class='active'", 'log_nav_class' => "");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/footer');
    }
    
}