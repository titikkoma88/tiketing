<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Controller {

function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }

  function select_sub_kategori()
 {

 	   $id_kategori = $this->input->post('id_kategori');
		
		if(trim($id_kategori) == ""){
			$data['dd_sub_kategori'] = $this->model_app->dropdown_sub_kategori('ea');
			$data['id_sub_kategori'] = "";
		}else{
			$data['dd_sub_kategori'] = $this->model_app->dropdown_sub_kategori($id_kategori);
			$data['id_sub_kategori'] = "";
		}
		
		$this->load->view('combo/select_sub_kategori',$data);	

 }

 function select_akses()
 {

 	   $id_ket_kategori = $this->input->post('id_ket_kategori');
		
		if(trim($id_ket_kategori) == ""){
			$data['dd_akses'] = $this->model_app->dropdown_user_akses('ea');
			$data['id_akses'] = "";
		}else{
			$data['dd_akses'] = $this->model_app->dropdown_user_akses($id_ket_kategori);
			$data['id_akses'] = "";
		}
		
		$this->load->view('combo/select_user_akses',$data);	

 }



    
}
