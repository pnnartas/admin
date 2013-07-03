<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Begin extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->output->enable_profiler(true);
    }

    function index() {
        $data['title']='LOGİN SAYFA';
        $data['content'] = $this->load->view('template/outside/login',$data,true);
        $this->load->view('template/outside/template', $data);
        $this->session->unset_userdata('adminlogin');
        $this->session->unset_userdata('user_id');
    }


    function login() {
        $this->load->model('users');
        $username = $this->input->post('mail');
        $password = base64_encode($this->input->post('pass'));
        $nameOfUser=  $this->users->userControl($username,$password);

        if($nameOfUser->user_id>0){
            $this->session->set_userdata('user_id', $nameOfUser->user_id);
            $this->session->set_userdata('adminlogin','1');
            echo $nameOfUser->user_id;
        }
    }

    function logout(){

        $this->session->unset_userdata('adminlogin');
        $this->session->unset_userdata('user_id');
        redirect('begin/index');
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