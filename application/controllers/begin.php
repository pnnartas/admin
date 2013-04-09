<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Begin extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->library('parser');
        $this->session->userdata('user_id');

    }

    function index() {
        $data['title']='LOGİN SAYFA';
        $data['content'] = $this->load->view('template/outside/login',$data,true);
        $this->load->view('template/outside/template', $data);

    }


    function login() {
        $this->load->model('users');
        $username = $this->input->post('mail');
        $password = base64_encode($this->input->post('pass'));
        $nameOfUser=  $this->users->userControl($username,$password);
        $this->session->set_userdata('user_id', $nameOfUser->user_id);

        echo $nameOfUser->user_id;
    }

    function dashboard() {
        $this->output->enable_profiler(true);

    }


	function forgotPassword()
	{
        $data['title']='PAROLA SIFIRLAMA';
        $data['content'] = $this->load->view('template/outside/password',$data,true);
        $this->load->view('template/outside/template', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */