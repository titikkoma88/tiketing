<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Kategori extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MKategori','modal');
		$this->load->library('template');

		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}
	public function index()
	{
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();

		$data = array('title' => 'Master Kategori', 'datakategori' => $this->modal->getdata());
		$this->template->admin('konten/v_kategori',$data);
	}
	public function simpan()
	{
		$id 		= $this->input->post('id');
		$kategori 	= $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'kategori' => $kategori,
			'keterangan' => $keterangan);

		if ($id == null || $id =="") {
			$this->modal->insert($data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");	
		} else {
			$this->modal->ubah($data,$id);
			$this->session->set_flashdata('sukses',"Data Berhasil Dirubah");
		} 

		redirect('Kategori');
	}
	public function hapus($id)
	{
		
		$this->modal->hapus($id);
		$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");

		redirect('Kategori');
	}
}
?>