<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kategori extends CI_Controller {

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


 function sub_kategori_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/sub_kategori";

        $id_user = trim($this->session->userdata('id_user'));

        $data['link'] = "sub_kategori/hapus";

        $datasubkategori = $this->model_app->datasubkategori();
	    $data['datasubkategori'] = $datasubkategori;
        
        $this->load->view('template', $data);

 }

 function hapus()
 {
 	$id = $_POST['id'];

 	$this->db->trans_start();

 	$this->db->where('id_sub_kategori', $id);
 	$this->db->delete('sub_kategori');

 	$this->db->trans_complete();
	
 }

 function add()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_sub_kategori";

        $id_user = trim($this->session->userdata('id_user'));


        $data['id_sub_kategori'] = "";		
		$data['nama_sub_kategori'] ="";

        $data['dd_kategori'] = $this->model_app->dropdown_kategori();
		$data['id_kategori'] = "";

		$data['url'] ="sub_kategori/save";

    
        $this->load->view('template', $data);

 }

 function save()
 {

 	$nama_sub_kategori = strtoupper(trim($this->input->post('nama_sub_kategori')));
 	$id_kategori = strtoupper(trim($this->input->post('id_kategori')));

 	$data['nama_sub_kategori'] = $nama_sub_kategori;
 	$data['id_kategori'] = $id_kategori;

 	$this->db->trans_start();

 	$this->db->insert('sub_kategori', $data);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('sub_kategori/sub_kategori_list');	
			} else 
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
			    </div>");
				redirect('sub_kategori/sub_kategori_list');	
			}
		
 }

function edit($id)
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_sub_kategori";

        $id_user = trim($this->session->userdata('id_user'));


        $sql = "SELECT * FROM sub_kategori WHERE id_sub_kategori = '$id'";
		$row = $this->db->query($sql)->row();

		$data['url'] = "sub_kategori/update";
			
		$data['id_sub_kategori'] = $id;		
		$data['nama_sub_kategori'] = $row->nama_sub_kategori;

		$data['dd_kategori'] = $this->model_app->dropdown_kategori();
		$data['id_kategori'] = $row->id_kategori;

        $this->load->view('template', $data);

 }

 function update()
 {
 	$id_sub_kategori = strtoupper(trim($this->input->post('id_sub_kategori')));
 	$id_kategori = strtoupper(trim($this->input->post('id_kategori')));
 	$nama_sub_kategori = strtoupper(trim($this->input->post('nama_sub_kategori')));

 	$data['nama_sub_kategori'] = $nama_sub_kategori;
 	$data['id_kategori'] = $id_kategori;

 	$this->db->trans_start();

 	$this->db->where('id_sub_kategori', $id_sub_kategori);
 	$this->db->update('sub_kategori', $data);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('sub_kategori/sub_kategori_list');	
			} else 
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
			    </div>");
				redirect('sub_kategori/sub_kategori_list');	
			}

 }

    
}
