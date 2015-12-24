<?php
class Device extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('device_model');
        $this->load->library('pagination');
    }
    
    public function index(){
        if($this->session->userdata('username') == null){
            redirect('admin/validate_credentials');
            exit;
        }
        
        //Each page shows given data
        if($this->uri->segment(4)){
            switch($this->uri->segment(4)){
                case 1:
                    $this->session->set_userdata('pageSize',1);
                    break;
                case 2:
                    $this->session->set_userdata('pageSize',2);
                    break;
                case 3:
                    $this->session->set_userdata('pageSize',3);
                    break;
                case 4:
                    $this->session->set_userdata('pageSize',4);
            }        
        }
        
        //To construct the paging
        $config['base_url'] = 'http://127.0.0.1/device/index/';
        $config['total_rows'] = 10;        
        if($this->session->userdata('pageSize')){//Url increasing span
            $config['per_page'] = $this->session->userdata('pageSize');    
        }else {
            $config['per_page'] = 1;        
        }        
        $config['first_link'] = '首页';        
        $config['last_link'] = '尾页';
        $config['prev_link'] = '上一页'; 
        $config['next_link'] = '下一页';
        $config['cur_tag_open'] = "<div style='display:block;width:20px;height:20px;float:left;background:#337ab7;color:white;text-align:center'>";
        $config['cur_tag_close'] = '</div>';
        $config['num_tag_open'] = "<div style='display:block;width:20px;height:20px;float:left;text-align:center'>";
        $config['num_tag_close'] = '</div>';        
        $this->pagination->initialize($config);        
        $data['page'] = $this->pagination->create_links();
        
        if($this->uri->segment(3) == 'per_page'){//offset of data start
            $offset = 0;
        }else {
            $offset = ($this->uri->segment(3) == null)?0:$this->uri->segment(3);
        }
        $pageSize = $config['per_page'];//the number of data each page
        
        $data['home_nav_class'] = "";
        $data['device_nav_class'] = "class='active'";
        $data['user_nav_class'] = '';
        $data['log_nav_class'] = '';
        $data['deviceinfo'] = $this->device_model->index($offset, $pageSize);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/device', $data);
        $this->load->view('admin/footer');        
    }
    
    public function search(){
        $data['home_nav_class'] = "";
        $data['device_nav_class'] = "class='active'";
        $data['user_nav_class'] = '';
        $data['log_nav_class'] = '';
        $data['page'] = '';
        $data['deviceinfo'] = $this->device_model->search();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/device', $data);
        $this->load->view('admin/footer');         
    }
    
    
    
}