<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MUser','modal');
		$this->load->library('template');

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
			'title' => 'Master Pengguna',
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(), 
			'datauser' => $this->modal->getdata());
		$this->template->admin('konten/v_user',$data);
	}
	public function simpan()
	{

		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$username 	= $this->input->post('username');
		$email		= $this->input->post('email');
		$notelp		= $this->input->post('notelp');
		$alamat		= $this->input->post('alamat');
		$level		= $this->input->post('level');
		$password	= md5(12345);
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
				'nama' => $nama,
				'username' => $username,
				'email' => $email,
				'telp' => $notelp,
				'alamat' => $alamat,
				'password' => $password,
				'level' => $level,
				'foto' => $gambar);

			if ($id == null || $id =="") {
				$this->modal->insert($data);
				$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");	
			} else {
				$this->modal->ubah($data,$id);
				$this->session->set_flashdata('sukses',"Data Berhasil Dirubah");
			} 

		redirect('user');
	}
	public function hapus($id_user)
	{
		
		$this->modal->hapus($id_user);
		$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");

		redirect('user');
	}
	public function rep_user()
	{

		$data = array(
			'title' => 'Report Pengguna',
			'datauser' => $this->modal->getdata());
		$this->template->admin('konten/rep_user',$data);
	}
	public function det_user($id_user)
	{

		$data = array(
			'title' => 'Report Pengguna',
			'datauser' => $this->modal->getdatauser($id_user));
		$this->template->admin('konten/det_user',$data);
	}
	public function print_user()
	{
		$data['datauser'] = $this->modal->getdata();
		$this->load->view('konten/print_user',$data);
	}
	public function pdf_user()
	{
		$this->load->library('dompdf_gen');

		$data['datauser'] = $this->modal->getdata();

		$this->load->view('konten/pdf_user',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_barang.pdf", array('Attachment' =>0));
	}
	public function excel_user()
	{

		$data['datauser'] = $this->modal->getdata();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Jiepiranha");
		$object->getProperties()->setLastModifiedBy("Jiepiranha");
		$object->getProperties()->setTitle("Data Pengguna Peminjaman");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'ID User');
		$object->getActiveSheet()->setCellValue('B1', 'Nama');
		$object->getActiveSheet()->setCellValue('C1', 'Username');
		$object->getActiveSheet()->setCellValue('D1', 'Email');
		$object->getActiveSheet()->setCellValue('E1', 'No Telp');
		$object->getActiveSheet()->setCellValue('F1', 'Alamat');
		$object->getActiveSheet()->setCellValue('G1', 'Level');

		$baris = 2;
		$no = 1;

		foreach ($data['datauser']->result() as $rows) {

			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rows->nama);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rows->username);
			$object->getActiveSheet()->setCellValue('D'.$baris, $rows->email);
			$object->getActiveSheet()->setCellValue('E'.$baris, $rows->telp);
			$object->getActiveSheet()->setCellValue('F'.$baris, $rows->alamat);
			$object->getActiveSheet()->setCellValue('G'.$baris, $rows->level);

			$baris++;
		}

		$filename="Data_Pengguna_Peminjaman".'.xlsx';

		$object->getActiveSheet()->setTitle("Data Pengguna Peminjaman");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}
}
?>