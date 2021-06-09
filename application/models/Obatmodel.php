<?php 

class Obatmodel extends CI_Model{
    public function tampildata()
    {
        return $query = $this->db->get("obat")->result_array();
    }

    public function carisupplier()
    {
        return $query = $this->db->get("supplier")->result_array();
    }

    public function insertdata($data)
    {
         $this->db->insert('obat', $data);
    }
}


?>