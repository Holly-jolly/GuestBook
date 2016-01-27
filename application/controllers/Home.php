<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->view('home_view');
   
  }
  

 // public function test ()
  // {
  //   //show everything from guest table
  //   $q=$this->db->get('guest');
  //   print_r($q->result());
    
  // }
}
