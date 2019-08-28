<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Homeuser extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('MDashboard','modal');
		$this->load->library(array('templateus'));

		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}
	public function index()
	{
		$level = trim($this->session->userdata('level'));
		$id_user = $this->session->userdata('id_user');

		//notifikasi
			
		$sql_notif = "SELECT COUNT(*) jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() AND peminjaman.tgl_kembali = '0000-00-00' AND status = '1' AND id_user = '$id_user'";
		$row_notif = $this->db->query($sql_notif)->row();

		// end notifikasi

		$data = array(
			'title' => 'Pinjaman',
			'level' => $level,
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotifuser($id_user),
			'datajenis' => $this->modal->getdatajenis());
		$this->templateus->user('konten/v_pinjam_jenis',$data);
	}
	
}
?>