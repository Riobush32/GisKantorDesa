<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {
    public function input($data)
    {
        $this->db->insert('kantordesa', $data);
    }
    #mengambil keseluruhan data
    public function allData()
    {
        # code...
        $this->db->select('*');
        $this->db->from('kantordesa');
        return $this->db->get()->result();
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('kantordesa');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    #editdata
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('kantordesa', $data);
    }
    #deletedata
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('kantordesa', $data);
        
    }
}