<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Jenis extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MJenis','modal');
		
		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}
	public function index()
	{
		$this->load->library('template');

		//notifikasi
			
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();

		// end notifikasi

		$data = array(
			'title' => 'Jenis Barang',
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(), 
			'datajenis' => $this->modal->getdata());
		$this->template->admin('konten/v_jenis',$data);
	}
	public function simpan()
	{

		$id 			= $this->input->post('id');
		$jenis 			= $this->input->post('jenis');
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

			$data = array(
				'id_jenis' => $id,
				'nm_jenis' => $jenis,
				'gambar' => $gambar);

			if ($id == null || $id =="") {
				$this->modal->insert($data);
				$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");	
			} else {
				$this->modal->ubah($data,$id);
				$this->session->set_flashdata('sukses',"Data Berhasil Dirubah");
			} 

		redirect('jenis');
	}
	public function hapus($id_jenis)
	{
		
		$this->modal->hapus($id_jenis);
		$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");

		redirect('jenis');
	}
	public function pinjam()
	{
		$level = trim($this->session->userdata('level'));
		$id_user = $this->session->userdata('id_user');

		//notifikasi
		$sql_notif = "SELECT COUNT(*) jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() AND peminjaman.tgl_kembali = '0000-00-00' AND status = '1' AND id_user = '$id_user'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$this->load->library(array('templateus'));
		$data = array(
			'title' => 'Jenis Barang',
			'level' => $level,
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotifuser($id_user),
			'datajenis' => $this->modal->getdata());
		$this->templateus->user('konten/v_pinjam_jenis',$data);
	}
	public function pinjam_admin()
	{
		$level = trim($this->session->userdata('level'));

		//notifikasi
		$sql_notif = "SELECT COUNT(*) AS jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() OR peminjaman.tgl_pinjam = '0000-00-00' AND status = '0'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi

		$this->load->library('template');
		$data = array(
			'title' => 'Jenis Barang',
			'level' => $level,
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(),
			'datajenis' => $this->modal->getdata());
		$this->template->admin('konten/v_pinjam_jenis',$data);
	}
	public function rep_jenis()
	{
		$this->load->library('template');

		$data = array(
			'title' => 'Report Jenis Barang',
			'datajenis' => $this->modal->getdata());
		$this->template->admin('konten/rep_jenis',$data);
	}
	public function print_jenis()
	{

		$data['datajenis'] = $this->modal->getdata();
		$this->load->view('konten/print_jenis',$data);
	}
	public function pdf_jenis()
	{
		$this->load->library('dompdf_gen');

		$data['datajenis'] = $this->modal->getdata();

		$this->load->view('konten/pdf_jenis',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_jenis.pdf", array('Attachment' =>0));
	}
	public function excel_jenis()
	{

		$data['datajenis'] = $this->modal->getdata();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Jiepiranha");
		$object->getProperties()->setLastModifiedBy("Jiepiranha");
		$object->getProperties()->setTitle("Jenis Barang Peminjaman");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('B1', 'No');
		$object->getActiveSheet()->setCellValue('C1', 'Nama Jenis');
		$object->getActiveSheet()->setCellValue('D1', 'Jumlah');

		$baris = 2;
		$no = 1;

		foreach ($data['datajenis']->result() as $rows) {

			$jml_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis}";
            $row_barang = $this->db->query($jml_brg)->row();

			$object->getActiveSheet()->setCellValue('B'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rows->nm_jenis);
			$object->getActiveSheet()->setCellValue('D'.$baris, $row_barang->jml);

			$baris++;
		}

		$filename="Jenis_Barang_Peminjaman".'.xlsx';

		$object->getActiveSheet()->setTitle("Jenis Barang Peminjaman");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}
	public function search()
	{

		$keyword	= $this->input->post('keyword');

		$level 		= trim($this->session->userdata('level'));
		$id_user	= $this->session->userdata('id_user');

		//notifikasi
		$sql_notif = "SELECT COUNT(*) jml FROM peminjaman WHERE peminjaman.tgl_pinjam = CURDATE() AND peminjaman.tgl_kembali = '0000-00-00' AND status = '1' AND id_user = '$id_user'";
		$row_notif = $this->db->query($sql_notif)->row();
		// end notifikasi
		
		$this->load->library(array('templateus'));
		$data = array(
			'title' => 'Jenis Barang',
			'level' => $level,
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotifuser($id_user),
			'datajenis' => $this->modal->getkeyword($keyword));
		$this->templateus->user('konten/v_pinjam_jenis',$data);
	}
}
?>