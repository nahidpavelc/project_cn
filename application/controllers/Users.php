<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Users extends CI_Controller {
 
    public function index(){
      $data['title'] = 'Fetch Database Info';
      $query = $this->db->get('users');
      $data['users'] = $query->result_array();
      $this->load->view('users',$data);
   }
}
?>