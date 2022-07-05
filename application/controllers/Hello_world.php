<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_world extends CI_Controller{
  
  function index(){
    $data['title']='My first application created with Code Igniter';
    $data['message']='Hello world!';
// load 'helloworld' view
    $this->load->view('helloworld',$data);
  }
}
?>