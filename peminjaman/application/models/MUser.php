<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MUser extends CI_model
{
	public function getdata()
	{
		$data = $this->db->get('user');
		return $data;
	}
	public function getdatauser($id_user)
	{
		$this->db->select("user.*");
        $this->db->where('id_user',$id_user);
		$data = $this->db->get('user');
		return $data;
	}
	public function insert($data)
	{
		$this->db->insert('user',$data);
	}
	public function ubah($data,$id)
	{
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);
	}
	public function hapus($id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');
	}
	public function getnotif()
    {
    	$this->db->select("peminjaman.*, barang.kondisi, barang.spek_barang, jenis.nm_jenis, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where("peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00'");
        $this->db->order_by("peminjaman.tgl_pinjam ASC");
 		return $this->db->get('peminjaman');
    }
}

?>