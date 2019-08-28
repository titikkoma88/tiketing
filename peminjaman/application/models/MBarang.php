<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MBarang extends CI_model
{
	public function getdata()
	{
		$this->db->select("barang.*, jenis.nm_jenis, supplier.nm_supplier");
        $this->db->join('jenis ', 'jenis.id_jenis=barang.id_jenis');
        $this->db->join('supplier ', 'supplier.id_supplier=barang.id_supplier');
 		return $this->db->get('barang');
	}
	public function getdatabarang($id_barang)
	{
		$this->db->select("barang.*, jenis.nm_jenis, supplier.nm_supplier");
        $this->db->join('jenis ', 'jenis.id_jenis=barang.id_jenis');
        $this->db->join('supplier ', 'supplier.id_supplier=barang.id_supplier');
        $this->db->where('barang.id_barang',$id_barang);
 		return $this->db->get('barang');
	}
	public function gettrackingbarang($id_barang)
	{
		$this->db->select("peminjaman.*, user.nama");
        $this->db->join('user ', 'user.id_user=peminjaman.id_user');
        $this->db->where("peminjaman.id_barang = '$id_barang' AND peminjaman.status IN (1,2)");
        $this->db->order_by("peminjaman.id_pinjam ASC");
 		return $this->db->get('peminjaman');
	}
	public function getdatajenis($id_jenis)
	{
		if ($id_jenis == "" || empty($id_jenis)){

		} else {
			$this->db->where('barang.id_jenis',$id_jenis);
		}
		$this->db->select("barang.*, jenis.nm_jenis, supplier.nm_supplier");
        $this->db->join('jenis ', 'jenis.id_jenis=barang.id_jenis');
        $this->db->join('supplier ', 'supplier.id_supplier=barang.id_supplier');
 		return $this->db->get('barang');
	}
	public function getdatasupplier($id_supplier)
	{
		$this->db->select("barang.*, jenis.nm_jenis, supplier.nm_supplier");
        $this->db->join('jenis ', 'jenis.id_jenis=barang.id_jenis');
        $this->db->join('supplier ', 'supplier.id_supplier=barang.id_supplier');
        $this->db->where('barang.id_supplier',$id_supplier);
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
        $this->db->where("peminjaman.tgl_pinjam = CURDATE() AND peminjaman.id_user = '$id_user'");
        $this->db->order_by("peminjaman.tgl_pinjam ASC");
 		return $this->db->get('peminjaman');
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
	public function dropdown_jenis()
    {
        $sql = "SELECT * FROM jenis ORDER BY nm_jenis";
            $query = $this->db->query($sql);
            
            $value[''] = '-- PILIH --';
            foreach ($query->result() as $row){
                $value[$row->id_jenis] = $row->nm_jenis;
            }
            return $value;
    }
    public function getjenis(){

    	$this->db->select("jenis.*");
    	$data = $this->db->get('jenis');
		return $data->result();
	}
	public function getsupplier(){

    	$this->db->select("supplier.*");
    	$data = $this->db->get('supplier');
		return $data->result();
	}
	public function getuser(){

    	$this->db->select("user.*");
    	$data = $this->db->get('user');
		return $data->result();
	}
	public function insert_pinjam($data)
	{
		$this->db->insert('peminjaman',$data);
	}
	public function ubahstatusbrg($data2,$id_barang)
	{
		$this->db->where('id_barang',$id_barang);
		$this->db->update('barang',$data2);
	}
}

?>