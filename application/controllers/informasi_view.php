<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_view extends CI_Controller {

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

    
function index()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/news";
        
        $id_user = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));

        $vendor = trim($this->session->userdata('vendor'));

        //notification 
        if($vendor=='ast'){
            $namavendor = 'modernland';
        }
        else if($vendor=='ast_web'){
            $namavendor = 'modernland_astweb';
        }
        else{
            $namavendor = 'pgm';
        }


        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
        $row_listticket = $this->db->query($sql_listticket)->row();

        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;

        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
        LEFT JOIN user_app D ON D.id_user = A.reported AND D.app = A.app 
        WHERE D.app='$app' AND A.status = 1 OR  A.status= 7";
        $row_approvalticket = $this->db->query($sql_approvalticket)->row();

        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE id_support='$id_user' AND app ='$app' AND status IN (3,4,5)";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;


        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id_user' AND app='$app' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

        //end notification

        $datainformasi = $this->model_app->datainformasi();
	    $data['datainformasi'] = $datainformasi;

	
        $this->load->view('template', $data);
    }

    
}
