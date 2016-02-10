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

  public function updateGuest($each_guest,$id)
  {
    $this->db->update('guest', $each_guest, array('id' => $id));

  }

  public function deleteGuest($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('guest');
  }

  public function get_Guest_Update($id)
  {
    $this->db->select('*');
    $this->db->from('guest');
    $this->db->where('id', $id);
    $query = $this->db->get();
      if($query->num_rows()>0)
      {
        return $query->result();
      } else 
      {
        return $query->result();
      }

    
  }

}


?>