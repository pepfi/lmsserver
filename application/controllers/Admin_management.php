<?php
class Admin_management extends CI_Controller{
  
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('admin_management_model');
        $data = array('home_nav_class' => '', 'device_nav_class' => '', 'user_nav_class' => '', 'log_nav_class' => '');
        $this->load->vars($data);
    } 
    public function list_admin(){
        $data['userslist'] = $this->admin_management_model->list_admin();
        $this->load->view('admin/header');        
        $this->load->view('admin/list_admin', $data);        
        $this->load->view('admin/footer');
    }
    public function add_admin(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
//        $this->form_validation->set_rules('blocked', 'Blocked', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['error'] = '';
            $this->load->view('admin/header');
            $this->load->view('admin/add_admin', $data);
            $this->load->view('admin/footer');
        }else {
            $data['admininfo'] = array('firstname' => 'Tom',
                                       'lastname' => 'John', 
                                       'username' => $this->input->post('username'),
                                       'password' => md5($this->input->post('password')),
                                       'email' => $this->input->post('email'),
                                       'role' => $this->input->post('role'),
                                       'language' => 'english',
                                       'blocked' => ($this->input->post('blocked')=='')?'1':'0',);
            if (!$this->admin_management_model->validate_admin($data['admininfo']['username'])){
                $res = $this->admin_management_model->add_admin($data['admininfo']);
                if ($res) {
                    redirect('admin_management/list_admin');
                }
                else {
                    echo "添加失败，请检查数据表字段";
                }
            }
            else {
            $data['error'] = "账号".$this->input->post('username')."已经存在！";
            $this->load->view('admin/header');
            $this->load->view('admin/add_admin', $data);
            $this->load->view('admin/footer');            
            }
        }
    }
    public function del_admin(){
        $res = $this->admin_management_model->del_admin();        
        if ($res) {
            redirect('admin_management/list_admin');
        }
        else {
            echo "删除失败";
        }
    }
    public function modify_admin_updatedata(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
//        $this->form_validation->set_rules('blocked', 'Blocked', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['modify_info'] = $this->admin_management_model->modify_admin_getdata();
            $this->load->view('admin/header');
            $this->load->view('admin/modify_admin', $data);
            $this->load->view('admin/footer');
        }else { 
                $res= $this->admin_management_model->modify_admin_updatedata();
                if ($res) {
                    redirect('admin_management/list_admin');
                }
                else {
                    echo "修改失败";
                }

        }       
    }    
}