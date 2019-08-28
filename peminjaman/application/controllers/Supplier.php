<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Supplier extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MSupplier','modal');
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
			'title' => 'Master Supplier', 
			'notif' => $row_notif->jml,
			'datanotif' => $this->modal->getnotif(),
			'datasupplier' => $this->modal->getdata());
		$this->template->admin('konten/v_supplier',$data);
	}
	public function simpan()
	{

		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$notelp		= $this->input->post('notelp');
		$alamat		= $this->input->post('alamat');
		$data = array(
			'nm_supplier' => $nama,
			'telp_supplier' => $notelp,
			'alamat' => $alamat);

		if ($id == null || $id =="") {
			$this->modal->insert($data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");	
		} else {
			$this->modal->ubah($data,$id);
			$this->session->set_flashdata('sukses',"<div class='alert alert-info alert-dismissible'>
       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
       		<h4><i class='icon fa fa-info'></i> Alert!</h4>
       		Data Berhasil Dirubah
       		</div>");
		} 

		redirect('supplier');
	}
	public function hapus($id_supplier)
	{
		
		$this->modal->hapus($id_supplier);
		$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");

		redirect('supplier');
	}
	public function rep_supplier()
	{

		$data = array(
			'title' => 'Report Supplier',
			'datasupplier' => $this->modal->getdata());
		$this->template->admin('konten/rep_supplier',$data);
	}
	public function print_supplier()
	{
		$data['datasupplier'] = $this->modal->getdata();
		$this->load->view('konten/print_supplier',$data);
	}
	public function pdf_supplier()
	{
		$this->load->library('dompdf_gen');

		$data['datasupplier'] = $this->modal->getdata();

		$this->load->view('konten/pdf_supplier',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_supplier.pdf", array('Attachment' =>0));
	}
	public function excel_supplier()
	{

		$data['datasupplier'] = $this->modal->getdata();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Jiepiranha");
		$object->getProperties()->setLastModifiedBy("Jiepiranha");
		$object->getProperties()->setTitle("Data Supplier Peminjaman");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'No');
		$object->getActiveSheet()->setCellValue('B1', 'Nama');
		$object->getActiveSheet()->setCellValue('C1', 'No Telp');
		$object->getActiveSheet()->setCellValue('D1', 'Alamat');
		$object->getActiveSheet()->setCellValue('E1', 'Jumlah Barang');

		$baris = 2;
		$no = 1;

		foreach ($data['datasupplier']->result() as $rows) {

			$jml_brg = "SELECT COUNT(*) jml FROM barang WHERE id_supplier = {$rows->id_supplier}";
            $row_barang = $this->db->query($jml_brg)->row();

			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rows->nm_supplier);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rows->telp_supplier);
			$object->getActiveSheet()->setCellValue('D'.$baris, $rows->alamat);
			$object->getActiveSheet()->setCellValue('E'.$baris, $row_barang->jml);

			$baris++;
		}

		$filename="Data_Supplier_Peminjaman".'.xlsx';

		$object->getActiveSheet()->setTitle("Data Supplier Peminjaman");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}
}
?>