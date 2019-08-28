<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MJenis extends CI_model
{
	public function getdata()
	{
		$data = $this->db->get('jenis');
		return $data;
	}
	public function getkeyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('jenis');
		$this->db->like('nm_jenis',$keyword);
		return $this->db->get();
	}
	public function insert($data)
	{
		$this->db->insert('jenis',$data);
	}
	public function ubah($data,$id)
	{
		$this->db->where('id_jenis',$id);
		$this->db->update('jenis',$data);
	}
	public function hapus($id_jenis)
	{
		$this->db->where('id_jenis',$id_jenis);
		$this->db->delete('jenis');
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
    public function getnotifuser($id_user)
    {
    	$this->db->select("peminjaman.*, barang.kondisi, barang.spek_barang, jenis.nm_jenis, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where("peminjaman.tgl_pinjam = CURDATE() AND peminjaman.id_user = '$id_user'");
        $this->db->order_by("peminjaman.tgl_pinjam ASC");
 		return $this->db->get('peminjaman');
    }
}

?>