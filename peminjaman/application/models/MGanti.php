<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MGanti extends CI_model
{
	public function getdatagt()
	{
		$this->db->select("ganti_rugi.*, barang.spek_barang, user.nama");
		$this->db->join('peminjaman ', 'peminjaman.id_pinjam=ganti_rugi.id_pinjam');
        $this->db->join('barang ', 'peminjaman.id_barang=barang.id_barang');
        $this->db->join('user ', 'peminjaman.id_user=user.id_user');
        $this->db->where("ganti_rugi.kondisi='rusak' OR ganti_rugi.kondisi='hilang'");
 		return $this->db->get('ganti_rugi');
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
	public function ubahstatus($data,$id_gt)
	{
		$this->db->where('id_gt',$id_gt);
		$this->db->update('ganti_rugi',$data);
	}
	public function ubahstatusbrg($data2,$id_barang)
	{
		$this->db->where('id_barang',$id_barang);
		$this->db->update('barang',$data2);
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