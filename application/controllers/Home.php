<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
    public function index(){
        $data = array('home_nav_class' => "class='active'", 'device_nav_class' => "", 'user_nav_class' => '', 'log_nav_class' => '');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/home');
        $this->load->view('admin/footer');     
    }
}