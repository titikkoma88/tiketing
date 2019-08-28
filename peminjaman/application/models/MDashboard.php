<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MDashboard extends CI_model
{
    public function getdatajenis()
    {
        $data = $this->db->get('jenis');
        return $data;
    }
	public function getdata($id_user)
	{
		$this->db->select("peminjaman.*, barang.spek_barang, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where('peminjaman.id_user',$id_user);
 		return $this->db->get('peminjaman');
	}
	public function getdatapinjam()
	{
		$bulan = date('m');

		$this->db->select("peminjaman.*, barang.kondisi, barang.spek_barang, jenis.nm_jenis, user.nama");
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where("MONTH(tgl_kembali) = '$bulan'");
        $this->db->order_by("peminjaman.id_pinjam DESC");
 		return $this->db->get('peminjaman');
	}
	public function getdatarusak()
	{
		$this->db->select("ganti_rugi.*, barang.spek_barang, jenis.nm_jenis, user.nama");
		$this->db->join('peminjaman ', 'peminjaman.id_pinjam=ganti_rugi.id_pinjam');
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where("ganti_rugi.kondisi='rusak'");
 		return $this->db->get('ganti_rugi');
	}
	public function getdatahilang()
	{
		$this->db->select("ganti_rugi.*, barang.spek_barang, jenis.nm_jenis, user.nama");
		$this->db->join('peminjaman ', 'peminjaman.id_pinjam=ganti_rugi.id_pinjam');
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where("ganti_rugi.kondisi='hilang'");
 		return $this->db->get('ganti_rugi');
	}
    public function getdataav()
    {
        $this->db->select("barang.*, jenis.nm_jenis");
        $this->db->join('jenis ','jenis.id_jenis = barang.id_jenis');
        $this->db->where("barang.kondisi IN ('baik','rusak') AND barang.status_barang = 0");
        return $this->db->get('barang');
    }
    public function getdatanotav()
    {
        $this->db->select("barang.*, jenis.nm_jenis, user.nama, peminjaman.tgl_pinjam");
        $this->db->join('peminjaman ','peminjaman.id_barang = barang.id_barang');
        $this->db->join('jenis ', 'barang.id_jenis=jenis.id_jenis');
        $this->db->join('user ','user.id_user = peminjaman.id_user');
        $this->db->where("barang.status_barang = 1 AND peminjaman.status = 1");
        return $this->db->get('barang');
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
        $this->db->where("peminjaman.tgl_pinjam = CURDATE() AND peminjaman.id_user = '$id_user' AND peminjaman.status = 1");
        $this->db->order_by("peminjaman.tgl_pinjam ASC");
 		return $this->db->get('peminjaman');
    }
	
}

?>