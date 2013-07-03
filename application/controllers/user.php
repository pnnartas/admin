<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->rewrite->setURL();


    }



    function change_user() {
        $nameName=  $this->users->userName($this->session->userdata('user_id'));

        $data['query']=$nameName;
        $data = array(
            'title' => 'ANA SAYFA',
            'solMenu' => $this->load->view('template/inside/left-menu','',TRUE),
            'content' =>$this->load->view('user/change_user',$data,TRUE),
            'footer' =>$this->load->view('template/inside/footer','',TRUE),
            'username' =>$nameName->email

        );

        if (isset($_POST['processtype']) && $_POST['processtype'] == 'save_form') {

            $User_ID=$this->session->userdata('user_id');
            $this->users->UserProfilUpdate($User_ID);
            header("Location: $User_ID");
        }

        $this->parser->parse('template/inside/template', $data);

    }

    function create_user() {
        $nameName=  $this->users->userName($this->session->userdata('user_id'));
        $data = array(
            'title' => 'ANA SAYFA',
            'solMenu' => $this->load->view('template/inside/left-menu','',TRUE),
            'content' =>$this->load->view('template/inside/anasayfa','',TRUE),
            'footer' =>$this->load->view('template/inside/footer','',TRUE),
            'username' =>$nameName->email

        );
        $this->parser->parse('template/inside/template', $data);

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */