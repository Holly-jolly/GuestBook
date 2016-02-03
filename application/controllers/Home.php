<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
    $this->load->model('home_model'); //load model 
    
  }

//---------------------------------------------------------------------------------------------------------------------------------- 
  
  public function index()
  { 
    $data['guests']=$this->home_model->showGuest();// calling Home model method showGuest();
    $this->load->view('home_view', $data); //load the view file, passing $data array in the view file
    

  }

//---------------------------------------------------------------------------------------------------------------------------------- 
  public function create_data()
  { 
    $this->load->library('form_validation');
    $this->form_validation->set_rules('firstname',"firstname","required");
    $this->form_validation->set_rules("lastname","lastname","required");
    $this->form_validation->set_rules("email","email","required|valid_email|is_unique"); 

    if($this->form_validation->run()==false)
    {
      $this->output->set_output(json_encode([
        "result" => 0,
        "error" => $this->form_validation->error_array()
      ])

      
    );
      return false;
    };
    
    $result = $this->db->insert('guest',[
      'firstname' => $this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'email'=>$this->input->post('email'),
      'comment'=>$this->input->post('comment')
    ]);
    

    if ($result)
    { 
      $this->output->set_output(json_encode(["result" => 1,
        "firstname" => $this->input->post('firstname'),
        'lastname'=>$this->input->post('lastname'),
        'email'=>$this->input->post('email'),
        'comment'=>$this->input->post('comment')
        ]));
      return false;
    }
     $this->output->set_output(json_encode([
      "result" => 0,
      "error" => "Failed to insert data"
     ]));  
  }

//----------------------------------------------------------------------------------------------------------------------------------
  //delete guest data from db
  public function delete_data($id)
  {
    $this->home_model->deleteGuest($id);
    echo "<script>
    window.location.href='http://localhost:8888/guestbook/home';
    alert('Confirm to delete this guest');
    </script>";

    redirect("http://localhost:8888/guestbook/home");
  }

}
