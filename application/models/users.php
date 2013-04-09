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
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $this->db->where('active =', 1);
        $query = $this->db->get();

        $row = $query->row();

        return $row;
       /* if ($query->num_rows() > 0) {
            return 1;
        }else{
            return 0;
        }*/
    }
}
?>