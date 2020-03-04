<?php 

class Produk_model extends CI_Model{

	public function semuaProduk($kat = false,$limit=0,$offset=0)
	{
		//semua data tergantung kategori
		if($kat){
			$this->db->where('kategori',$kat);
		}

		//data yang dicari
		$key = $this->input->get('cari');
		$this->db->like('nama_produk',$key);
		
		//limit
		if($limit!=0){
			$this->db->limit($limit, $offset);
		}
		return $this->db->get('produk')->result_array();
	}

	public function produk($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('produk');
	}

	public function totalProduk($kat = false)
	{
		$key = $this->input->get('cari');
		$this->db->like('nama_produk',$key);
		if($kat){
			$this->db->where('kategori',$kat);
		}
		return $this->db->count_all_results('produk');
	}

	public function postProduk($data)
	{
		$this->db->insert('produk',$data);
		return $this->db->insert_id();
	}

	public function editProduk($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('produk', $data);
		return $this->db->affected_rows();
	}

	public function hapusProduk($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('produk');
		return $this->db->affected_rows();
	}

}