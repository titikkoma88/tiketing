<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Peminjaman extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MPeminjaman','modal');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('templateus'));

		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}
	public function index()
	{
		$id_user = trim($this->session->userdata('id_user'));

		//notifikasi
		$sql_notif = "SELECT COUNT(*) jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() AND peminjaman.tgl_kembali = '0000-00-00' AND status = '1' AND id_user = '$id_user'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$data = array(
			'title' => 'Peminjaman',
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotifuser($id_user),
			'datapeminjaman' => $this->modal->getdata($id_user));
		$this->templateus->user('konten/v_peminjaman',$data);
	}
	public function peminjaman_terkini()
	{
		$tanggal = date("Y-m-d");

		$this->load->library('template');
		//$id_user = trim($this->session->userdata('id_user'));

		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();
		
		$data = array(
			'title' => 'Peminjaman',
			'notif' => $row_notif->jml,
			'hariini' => $tanggal,
			'datanotif' => $this->modal->getnotif(),
			'datapesan' => $this->modal->getdatapesan(),
			'datapinjam' => $this->modal->getdatapinjam(),
			'datakembali' => $this->modal->getdatakembali()
			);
		$this->template->admin('konten/v_peminjaman_terkini',$data);
	}
	public function rep_peminjaman()
	{
		$this->load->library('template');
		//$id_user = trim($this->session->userdata('id_user'));

		
		$data = array(
			'title' => 'Peminjaman',
			'datapesan' => $this->modal->getdatapesan(),
			'datapinjam' => $this->modal->getdatapinjam(),
			'datakembali' => $this->modal->getdatakembali()
			);
		$this->template->admin('konten/rep_peminjaman',$data);
	}
	public function pinjamkan($id_pinjam)
	{
		$tanggal = date("Y-m-d");

		$data = array(
			'tgl_pinjam' => $tanggal,
			'status' => 1);
		
		$this->modal->ubahstatus($data,$id_pinjam);

		$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");

		redirect('peminjaman/peminjaman_terkini');
	}
	public function selesai($id_pinjam)
	{
		$tanggal = date("Y-m-d");

		$sql_brg = "SELECT * FROM peminjaman WHERE id_pinjam = '$id_pinjam'";
		$row_brg = $this->db->query($sql_brg)->row();
		$id_barang = $row_brg->id_barang;
		
		$data = array(
			'tgl_kembali' => $tanggal,
			'status' => 2);

		$data2['status_barang'] = 0;
		
		$this->modal->ubahstatus($data,$id_pinjam);
		$this->modal->ubahstatusbrg($data2,$id_barang);

		$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");

		redirect('peminjaman/peminjaman_terkini');
	}
	public function kondisi()
	{
		$id_pinjam 	= $this->input->post('id_pinjam');
		$id_barang 	= $this->input->post('id_barang');
		$kondisi 	= $this->input->post('kondisi');
		$kembali 	= $this->input->post('kembali');
		$ket 		= $this->input->post('ket');
		$tanggal 	= date("Y-m-d");

		$data = array(
			'tgl_kembali' => $tanggal,
			'status' => 2,
			'kembali' => $kembali,
			'ket' => $ket);

		$data2['status_barang'] = 0;

		$ganti_rugi = array(
			'id_pinjam' => $id_pinjam,
			'kondisi' => $kondisi,
			'tgl' => $tanggal,
			'status_gt' => 0);

		$kondisi_barang = array (
			'kondisi' => $kondisi);

		if ($kondisi == "baik") {
			$this->modal->ubahstatus($data,$id_pinjam);
			$this->session->set_flashdata('sukses',"Data Barang Baik Disimpan");
		} else if ($kondisi == "rusak") {
			$this->modal->ubahstatus($data,$id_pinjam);
			$this->modal->insertgt($ganti_rugi);
			$this->modal->ubahkondisi($kondisi_barang,$id_barang);
			$this->session->set_flashdata('sukses',"Data Barang Rusak Disimpan");
		} else if ($kondisi == "hilang") {
			$this->modal->ubahstatus($data,$id_pinjam);
			$this->modal->insertgt($ganti_rugi);
			$this->modal->ubahkondisi($kondisi_barang,$id_barang);
			$this->session->set_flashdata('sukses',"Data Barang Hilang Disimpan");	
		} else {
			//$this->modal->ubahstatus($data,$id_pinjam);
			$this->session->set_flashdata('sukses',"Data Barang Gagal Disimpan");
		} 

		$this->modal->ubahstatusbrg($data2,$id_barang);

		redirect('peminjaman/peminjaman_terkini');
	}
	
}
?>