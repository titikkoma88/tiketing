<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Ganti extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MGanti','modal');
		$this->load->helper(array('form', 'url'));
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
			'title' => 'Ganti Rugi',
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(),
			'datagt' => $this->modal->getdatagt());
		$this->template->admin('konten/v_gantirugi',$data);
	}
	public function rep_ganti()
	{

		$data = array(
			'title' => 'Ganti Rugi',
			'datagt' => $this->modal->getdatagt());
		$this->template->admin('konten/rep_ganti',$data);
	}
	public function bayar($id_gt)
	{
		$tanggal = date("Y-m-d");

		$sql_brg = "SELECT A.id_barang 
					FROM barang A
					LEFT JOIN peminjaman B ON A.id_barang = B.id_barang
					LEFT JOIN ganti_rugi C ON B.id_pinjam = C.id_pinjam
					WHERE C.id_gt = '$id_gt'";
		$row_brg = $this->db->query($sql_brg)->row();
		$id_barang = $row_brg->id_barang;

		//echo $id_barang;exit();

		$data = array(
			'tgl_bayar_gt' => $tanggal,
			'status_gt' => 1);

		$data2['status_barang'] = 0;
		
		$this->modal->ubahstatus($data,$id_gt);
		$this->modal->ubahstatusbrg($data2,$id_barang);

		$this->session->set_flashdata('sukses',"Data Ganti Rugi Berhasil Diupdate");

		redirect('ganti');
	}
	public function print_ganti()
	{

		$data['datagt'] = $this->modal->getdatagt();
		$this->load->view('konten/print_ganti',$data);
	}
	public function pdf_ganti()
	{
		$this->load->library('dompdf_gen');

		$data['datagt'] = $this->modal->getdatagt();

		$this->load->view('konten/pdf_ganti',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_gantirugi.pdf", array('Attachment' =>0));
	}
	public function excel_ganti()
	{

		$data['datagt'] = $this->modal->getdatagt();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Jiepiranha");
		$object->getProperties()->setLastModifiedBy("Jiepiranha");
		$object->getProperties()->setTitle("Data Ganti Rugi Peminjaman");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Nama Peminjam');
		$object->getActiveSheet()->setCellValue('C1', 'Nama Barang');
		$object->getActiveSheet()->setCellValue('D1', 'Kondisi');
		$object->getActiveSheet()->setCellValue('E1', 'Tanggal Kejadian');
		$object->getActiveSheet()->setCellValue('F1', 'Tanggal Diganti');
		$object->getActiveSheet()->setCellValue('G1', 'Keterangan');

		$baris = 2;
		$no = 1;

		foreach ($data['datagt']->result() as $rows) {

			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rows->nama);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rows->spek_barang);
			$object->getActiveSheet()->setCellValue('D'.$baris, $rows->kondisi);
			$object->getActiveSheet()->setCellValue('E'.$baris, $rows->tgl);
			$object->getActiveSheet()->setCellValue('F'.$baris, $rows->tgl_bayar_gt);

			if($rows->status_gt === '0'){
				$object->getActiveSheet()->setCellValue('G'.$baris, 'Belum diganti');
            }elseif($rows->status_gt === '1'){
            	$object->getActiveSheet()->setCellValue('G'.$baris, 'Sudah diganti');
            }

			$baris++;
		}

		$filename="Data_GantiRugi_Peminjaman".'.xlsx';

		$object->getActiveSheet()->setTitle("Data Ganti Rugi Peminjaman");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}
}
?>