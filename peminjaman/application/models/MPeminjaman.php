<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MPeminjaman extends CI_model
{
	public function getdata($id_user)
	{
		$this->db->select("peminjaman.*, barang.spek_barang, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where('peminjaman.id_user',$id_user);
 		return $this->db->get('peminjaman');
	}
	public function getdatapesan()
	{
		$this->db->select("peminjaman.*, barang.spek_barang, jenis.nm_jenis, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where('peminjaman.status',0);
 		return $this->db->get('peminjaman');
	}
	public function getdatapinjam()
	{
		$this->db->select("peminjaman.*, barang.spek_barang, jenis.nm_jenis, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where('peminjaman.status',1);
 		return $this->db->get('peminjaman');
	}
	public function getdatakembali()
	{
		$this->db->select("peminjaman.*, barang.spek_barang, jenis.nm_jenis, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where('peminjaman.status',2);
        $this->db->order_by("peminjaman.id_pinjam DESC");
 		return $this->db->get('peminjaman');
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
	public function ubahstatus($data,$id_pinjam)
	{
		$this->db->where('id_pinjam',$id_pinjam);
		$this->db->update('peminjaman',$data);
	}
	public function ubahstatusbrg($data2,$id_barang)
	{
		$this->db->where('id_barang',$id_barang);
		$this->db->update('barang',$data2);
	}
	public function insertgt($ganti_rugi)
	{
		$this->db->insert('ganti_rugi',$ganti_rugi);
	}
	public function ubahkondisi($kondisi_barang,$id_barang)
	{
		$this->db->where('id_barang',$id_barang);
		$this->db->update('barang',$kondisi_barang);
	}
	public function insert($data)
	{
		$this->db->insert('barang',$data);
	}
	public function ubah($data,$id)
	{
		$this->db->where('id_barang',$id);
		$this->db->update('barang',$data);
	}
	public function hapus($id_barang)
	{
		$this->db->where('id_barang',$id_barang);
		$this->db->delete('barang');
	}
	
}

?>