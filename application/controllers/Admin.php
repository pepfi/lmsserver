<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//added by pepfiwireless@163.com 2015-12-17

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
    

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'login';
        $data['error'] = '';
        $this->load->view('admin/login_form', $data);
	}
    
    function validate_credentials()
    {
        $this->load->model('admin_model');
        $this->session->set_userdata('res',$this->admin_model->validate());
        $this->session->set_userdata('username',$this->input->post('username'));
        if (!$_SESSION['res']) {
            $data['error'] = 'Invalid Username or Password';
            $this->load->view('admin/login_form', $data);        
        }
        else {
            redirect('home/index');
        }
    }
    
    
}
