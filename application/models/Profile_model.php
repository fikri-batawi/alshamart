<?php 

class Profile_model extends CI_Model{

    public function profile()
    {
        return $this->db->get('data_toko')->result_array();
    }


    public function editProfile($id,$data)
    {
        $this->db->where('id',$id);
		$this->db->update('data_toko', $data);
		return $this->db->affected_rows();
    }

}