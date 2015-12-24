<?php
class Pagetest extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
    }
    public function page(){
        $config['base_url'] = 'http://127.0.0.1/index.php/pagetest/page/';
        $config['total_rows'] = 200;
        $config['per_page'] = 20;
        
        $this->pagination->initialize($config);
        
        echo $this->pagination->create_links();        
    }
}