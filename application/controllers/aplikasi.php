<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends CI_Controller {

function __construct(){
        parent::__construct();
        $this->load->model('model_app');

        if(!$this->session->userdata('id_user'))
       {
        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
       </div>");
        redirect('login');
        }
        
    }


 function aplikasi_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/aplikasi";

        $data['link'] = "aplikasi/hapus";

        $dataaplikasi = $this->model_app->dataaplikasi();
	    $data['dataaplikasi'] = $dataaplikasi;
        
        $this->load->view('template', $data);

 }

  function hapus()
 {
 	$id = $_POST['id'];

 	$this->db->trans_start();

 	$this->db->where('id_app', $id);
 	$this->db->delete('aplikasi');

 	$this->db->trans_complete();
	
 }

 function add()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_aplikasi";

        $data['id_app'] = "";		
		$data['nama_app'] = "";

		$data['url'] = "aplikasi/save";
        
        $this->load->view('template', $data);

 }

 function save()
 {

 	// strtoupper 	*huruf Kapital semua
 	// ucfirst 		*huruf kapital di awal
 	// strtolower 	*huruf kecil semua
 	// lcfirst 		*huruf kecil di awal
 	// ucwords 		*huruf kapital di setiap awal kata
 	
    $nama_app = strtolower(trim($this->input->post('nama_app')));

    $nama_apps = str_replace(" ", "_", $nama_app);

 	$data['nama_app'] = $nama_apps;

 	$this->db->trans_start();

 	$this->db->insert('aplikasi', $data);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
                
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('aplikasi/aplikasi_list');	
			} else 
			{
                redirect('aplikasi/aplikasi_list'); 

				$this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data  tersimpan.
			    </div>");
				
			}
		
 }

 function edit($id)
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_aplikasi";


        $sql = "SELECT * FROM aplikasi WHERE id_app = '$id'";
		$row = $this->db->query($sql)->row();

		$data['url'] = "aplikasi/update";
			
		$data['id_app'] = $id;		
		$data['nama_app'] = str_replace("_", " ", $row->nama_app);	 

        $this->load->view('template', $data);

 }

 function update()
 {

 	$id_app = trim($this->input->post('id_app'));
    $nama_app = strtolower(trim($this->input->post('nama_app')));

    $nama_apps = str_replace(" ", "_", $nama_app);

 	$data['nama_app'] = $nama_apps;

 	$this->db->trans_start();

 	$this->db->where('id_app', $id_app);
 	$this->db->update('aplikasi', $data);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('aplikasi/aplikasi_list');	
			} else 
			{
                redirect('aplikasi/aplikasi_list'); 

				$this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
			    </div>");
				
			}

 }


    
}
