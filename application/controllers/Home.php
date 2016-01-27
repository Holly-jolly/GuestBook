<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->view('home_view');

  }

//---------------------------------------------------------------------------------------------------------------------------------- 
  public function create_data()
  { 
    $this->load->library('form_validation');
    $this->form_validation->set_rules('firstname',"firstname","required");
    $this->form_validation->set_rules("lastname","lastname","required");
    $this->form_validation->set_rules("email","email","required"); 

    if($this->form_validation->run()==false){
      $this->output->set_output(json_encode([
        "result" => 0,
        "error" => $this->form_validation->error_array()
      ]));
      return false;
    };
    
    $result = $this->db->insert('guest',[
      'firstname' => $this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'email'=>$this->input->post('email'),
      'comment'=>$this->input->post('comment')
    ]);

    if ($result){
      $this->output->set_output(json_encode(["result" => 1]));
      return false;
    }
     $this->output->set_output(json_encode([
      "result" => 0,
      "error" => "Failed to insert data"
     ]));
    
  }

//-----------------------------------------------------------------------------------------------
 // public function test ()
  // {
  //   //show everything from guest table
  //   $q=$this->db->get('guest');
  //   print_r($q->result());
    
  // }
}
