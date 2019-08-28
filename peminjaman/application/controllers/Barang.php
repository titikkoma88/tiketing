<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Barang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MBarang','modal');
		$this->load->library('template');
		$this->load->helper(array('form', 'url'));

		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}
	public function index()
	{
		//notifikasi
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$data = array(
			'title' => 'Master Barang',
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(), 
			'databarang' => $this->modal->getdata(),
			'dd_jenis' => $this->modal->getjenis(),
			'dd_supplier' => $this->modal->getsupplier());
		$this->template->admin('konten/v_barang',$data);
	}
	public function simpan()
	{

		$id 			= $this->input->post('id');
		$jenis 			= $this->input->post('jenis');
		$spek_barang 	= $this->input->post('spek_barang');
		$harga			= $this->input->post('harga');
		$kondisi		= $this->input->post('kondisi');
		$suplier		= $this->input->post('suplier');
		$tanggal_beli	= $this->input->post('tanggal_beli');
		$qr_asset		= $this->input->post('qr_asset');
		//$reservation	= $this->input->post('reservation');
		$gambar 		= $_FILES['gambar'];

		if ($gambar=''){}else{
			$config['upload_path']	= './assets/dist/img';
			$config['allowed_types']= 'jpg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Upload Gagal"; die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		
		//$gambar	 = "brg-".round(microtime(true)).".".end($extensi);
		//$sumber	 = $_FILES['gambar']['tmp_name'];
		//$upload  = move_uploaded_file($sumber, "./dist/img/".$gambar_barang);

		//echo $upload; exit();

					$data = array(
						'id_jenis' => $jenis,
						'spek_barang' => $spek_barang,
						'harga' => $harga,
						'kondisi' => $kondisi,
						'id_supplier' => $suplier,
						'tanggal_beli' => $tanggal_beli,
						'qr_asset' => $qr_asset,
						'gambar_barang' => $gambar);

					if ($id == null || $id =="") {

						$this->modal->insert($data);
						$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");	
					} else {

						$this->modal->ubah($data,$id);
						$this->session->set_flashdata('sukses',"Data Berhasil Dirubah");
					}


		redirect('barang');
	}
	public function hapus($id_barang)
	{
		
		$this->modal->hapus($id_barang);
		$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");

		redirect('barang');
	}
	public function jenis($id_jenis)
	{
		//notifikasi
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$data = array(
			'title' => 'Master Barang',
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(), 
			'databarang' => $this->modal->getdatajenis($id_jenis), 
			'dd_jenis' => $this->modal->getjenis(),
			'dd_supplier' => $this->modal->getsupplier());
		$this->template->admin('konten/v_barang',$data);
	}
	public function pinjam_barang($id_jenis)
	{
		$this->load->library(array('templateus'));

		$id_user = $this->session->userdata('id_user');

		//notifikasi
		$sql_notif = "SELECT COUNT(*) jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() AND peminjaman.tgl_kembali = '0000-00-00' AND status = '1' AND id_user = '$id_user'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$data = array(
			'id_jenis' => $id_jenis,
			'title' => 'Pinjam Barang', 
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotifuser($id_user),
			'databarang' => $this->modal->getdatajenis($id_jenis), 
			'dd_jenis' => $this->modal->getjenis(),
			'dd_supplier' => $this->modal->getsupplier());
		$this->templateus->user('konten/v_pinjam_barang',$data);
	}
	public function pinjam($id_barang)
	{

		$id_user = trim($this->session->userdata('id_user'));

		$data = array(
			'id_barang' => $id_barang,
			'id_user' => $id_user);

		if ($id_barang == null || $id_barang =="") {

			$this->session->set_flashdata('sukses',"Data Gagal Disimpan");	
		} else {

		$data2['status_barang'] = 1;

			$this->modal->insert_pinjam($data);
			$this->modal->ubahstatusbrg($data2,$id_barang);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
		} 

		redirect('jenis/pinjam');
	}
	public function pinjam_admin($id_jenis)
	{
		//notifikasi
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$data = array(
			'title' => 'Pinjam Barang', 
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(), 
			'databarang' => $this->modal->getdatajenis($id_jenis), 
			'dd_jenis' => $this->modal->getjenis(),
			'dd_user' => $this->modal->getuser());
		$this->template->admin('konten/v_pinjam_admin',$data);
	}
	public function pinjamkan()
	{

		$id_barang = $this->input->post('id');
		$user 	   = $this->input->post('user');
		$tanggal   = date("Y-m-d");

		$data 	= array(
			'id_user' => $user,
			'id_barang' => $id_barang,
			'tgl_pinjam' => $tanggal,
			'status' => 1);

		if ($id_barang == null || $id_barang =="") {

			$this->session->set_flashdata('sukses',"Data Gagal Disimpan");	
		} else {

			$data2['status_barang'] = 1;

			$this->modal->ubahstatusbrg($data2,$id_barang);
			$this->modal->insert_pinjam($data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
		} 

		redirect('jenis/pinjam_admin');
	}
	public function rep_barang()
	{

		$data = array(
			'title' => 'Report Barang',
			'databarang' => $this->modal->getdata());
		$this->template->admin('konten/rep_barang',$data);
	}
	public function rep_barang_jenis($id_jenis)
	{

		$data = array(
			'title' => 'Report Barang',
			'databarang' => $this->modal->getdatajenis($id_jenis));
		$this->template->admin('konten/rep_barang',$data);
	}
	public function rep_barang_supplier($id_supplier)
	{

		$data = array(
			'title' => 'Report Barang',
			'databarang' => $this->modal->getdatasupplier($id_supplier), 
			'dd_jenis' => $this->modal->getjenis(),
			'dd_supplier' => $this->modal->getsupplier());
		$this->template->admin('konten/rep_barang',$data);
	}
	public function det_barang($id_barang)
	{

		$data = array(
			'title' => 'Report Barang',
			'trackingbarang' => $this->modal->gettrackingbarang($id_barang),
			'databarang' => $this->modal->getdatabarang($id_barang));
		$this->template->admin('konten/det_barang',$data);
	}
	public function print_barang()
	{

		$data['databarang'] = $this->modal->getdata();
		$this->load->view('konten/print_barang',$data);
	}
	public function pdf_barang()
	{
		$this->load->library('dompdf_gen');

		$data['databarang'] = $this->modal->getdata();

		$this->load->view('konten/pdf_barang',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_barang.pdf", array('Attachment' =>0));
	}
	public function excel_barang()
	{

		$data['databarang'] = $this->modal->getdata();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Jiepiranha");
		$object->getProperties()->setLastModifiedBy("Jiepiranha");
		$object->getProperties()->setTitle("Data Barang Peminjaman");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Nama Jenis');
		$object->getActiveSheet()->setCellValue('C1', 'Spesifikasi Barang');
		$object->getActiveSheet()->setCellValue('D1', 'Harga Barang');
		$object->getActiveSheet()->setCellValue('E1', 'Kondisi');
		$object->getActiveSheet()->setCellValue('F1', 'Supplier');
		$object->getActiveSheet()->setCellValue('G1', 'Tanggal Beli');

		$baris = 2;
		$no = 1;

		foreach ($data['databarang']->result() as $rows) {

			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rows->nm_jenis);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rows->spek_barang);
			$object->getActiveSheet()->setCellValue('D'.$baris, "Rp." . number_format($rows->harga,2,',','.'));
			$object->getActiveSheet()->setCellValue('E'.$baris, $rows->kondisi);
			$object->getActiveSheet()->setCellValue('F'.$baris, $rows->nm_supplier);
			$object->getActiveSheet()->setCellValue('G'.$baris, $rows->tanggal_beli);

			$baris++;
		}

		$filename="Data_Barang_Peminjaman".'.xlsx';

		$object->getActiveSheet()->setTitle("Data Barang Peminjaman");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}
}
?>