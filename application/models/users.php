<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class users extends CI_Model{
    function __construct(){
        parent::__construct();


    }

    function userControl($username, $password) {
        //login kontrolu
        $this->db->select('user_id,email');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('active =', 1);
        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }



    function userName($user_id) {

        $q ="SELECT CONCAT(name, ' ', surname) as name,email,name as ad ,surname,adres,username from users where user_id='".$user_id."' and active='1'";
        $query = $this->db->query($q);

        $row = $query->row();

        return $row;

    }


    function UserProfilUpdate(){
        $data = array(
            'name'=>$this->input->post('ad'),
            'surname'=>$this->input->post('soyad'),
            'email'=>$this->input->post('email'),
            'adres'=>$this->input->post('adres'),
        );
        $this->db->where('user_id',$this->input->post('user_id'));
        $this->db->update('users',$data);
    }
}
?>