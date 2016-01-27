<?php
class Home_model extends CI_Model 
{
  public function showGuest()
  {
    $query=$this->db->get('guest');
    return $query;
  }

  public function insertGuest()
  {

  }

  public function updateGuest()
  {

  }

  public function deleteGuest($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('guest');
  }

}


?>