<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Akses extends CI_Controller {

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


 function user_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/user_akses";

        $id_user = trim($this->session->userdata('id_user'));

        $data['link'] = "user_akses/hapus";

        $dataakses = $this->model_app->dataakses();
	    $data['dataakses'] = $dataakses;
        
        $this->load->view('template', $data);

 }

  function hapus()
 {
 	$id = $_POST['id'];

 	$this->db->trans_start();

 	$this->db->where('id_akses', $id);
 	$this->db->delete('user_akses');

 	$this->db->trans_complete();
	
 }

 function add()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_user_akses";

        $id_user = trim($this->session->userdata('id_user'));


        $data['id_akses'] = "";		
		$data['user'] = "";

        $data['dd_ket_kategori'] = $this->model_app->dropdown_ket_kategori();
        $data['id_ket_kategori'] = "";

		$data['url'] = "user_akses/save";
        
        $this->load->view('template', $data);

 }

 function save()
 {

 	$user = trim($this->input->post('user'));
    $id_ket_kategori = trim($this->input->post('id_ket_kategori'));

 	$data['user'] = $user;
    $data['akses'] = $id_ket_kategori;

 	$this->db->trans_start();

 	$this->db->insert('user_akses', $data);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
                
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('user_akses/user_list');	
			} else 
			{
                redirect('user_akses/user_list'); 

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
        $data['body'] = "body/form_user_akses";

        $id_user = trim($this->session->userdata('id_user'));

        $sql = "SELECT * FROM user_akses WHERE id_akses = '$id'";
		$row = $this->db->query($sql)->row();

		$data['url'] = "user_akses/update";
			
		$data['id_akses'] = $id;		
		$data['user'] = $row->user;
        $data['dd_ket_kategori'] = $this->model_app->dropdown_ket_kategori();
        $data['id_ket_kategori'] = "";
 

        $this->load->view('template', $data);

 }

 function update()
 {

 	$id_akses = trim($this->input->post('id_akses'));
 	$user = trim($this->input->post('user'));
    $id_ket_kategori = trim($this->input->post('id_ket_kategori'));

 	$data['user'] = $user;
    $data['akses'] = $id_ket_kategori;

 	$this->db->trans_start();

 	$this->db->where('id_akses', $id_akses);
 	$this->db->update('user_akses', $data);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('user_akses/user_list');	
			} else 
			{
                redirect('user_akses/user_list'); 

				$this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
			    </div>");
				
			}

 }


    
}
