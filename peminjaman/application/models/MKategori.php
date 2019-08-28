<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MKategori extends CI_model
{
	public function getdata()
	{
		$data = $this->db->get('kategori');
		return $data;
	}
	public function insert($data)
	{
		$this->db->insert('kategori',$data);
	}
	public function ubah($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->insert('kategori',$data);
	}
	public function hapus($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kategori');
	}
}

?>