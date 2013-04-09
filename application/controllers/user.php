<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('parser');
        $this->output->enable_profiler(false);

    }

    function change_user() {
        $data['title']='ANA SAYFA';
        $data['solMenu'] =$this->load->view('template/inside/left-menu',$data,true);
        $data['content'] = $this->load->view('user/change_user',$data,true);
        $this->load->view('template/inside/template', $data);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */