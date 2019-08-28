<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Homeadmin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('MDashboard','modal');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('template'));

		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}
	public function index()
	{
		//notifikasi
			
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND peminjaman.status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();

		$sql_user = "SELECT COUNT(*) jml FROM user";
		$row_user = $this->db->query($sql_user)->row();

		$sql_jenis = "SELECT COUNT(*) jml FROM jenis";
		$row_jenis = $this->db->query($sql_jenis)->row();

		$sql_barang = "SELECT COUNT(*) jml FROM barang";
		$row_barang = $this->db->query($sql_barang)->row();

		$sql_supplier = "SELECT COUNT(*) jml FROM supplier";
		$row_supplier = $this->db->query($sql_supplier)->row();

		// end notifikasi

		$data = array(
			'title' => 'Dashboard',
			'notif' => $row_notif->jml,
			'user' => $row_user->jml,
			'jenis' => $row_jenis->jml,
			'barang' => $row_barang->jml,
			'supplier' => $row_supplier->jml,
			'datanotif' => $this->modal->getnotif(),
			'datarusak' => $this->modal->getdatarusak(),
			'datahilang' => $this->modal->getdatahilang(),
			'datapinjam' => $this->modal->getdatapinjam(),
			'dataavailable' => $this->modal->getdataav(),
			'datanoavailable' => $this->modal->getdatanotav()
			);
		$this->template->admin('konten/dashboard',$data);
	}
	
}
?>