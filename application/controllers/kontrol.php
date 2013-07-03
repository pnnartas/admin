<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontrol extends CI_Controller {

    function __construct() {
        parent::__construct();
        $sc = $this->session->userdata('user_id');
        $this->rewrite->setURL();
        $this->output->enable_profiler(false);
       if ($sc != NULL && $sc>0 && $sc!="" &&isset($sc)){
        //giriş yaptı session_id var
         }else{
           redirect('begin/index');
         }


    }


    function index() {

        $nameName=  $this->users->userName($this->session->userdata('user_id'));

        $data = array(
            'title' => 'ANA SAYFA',
            'solMenu' => $this->load->view('template/inside/left-menu','',TRUE),
            'content' =>$this->load->view('template/inside/anasayfa','',TRUE),
            'footer' =>$this->load->view('template/inside/footer','',TRUE),
            'username' =>$nameName->name

        );
        $this->parser->parse('template/inside/template', $data);
       // echo $data;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */