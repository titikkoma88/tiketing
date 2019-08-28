<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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

    function user()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/tampil_user";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));

        //notification 

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE status = 5 AND reported='$id_user'";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

        //end notification
    
        $this->load->view('template', $data);
    }

    function ticket()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/tampil_ticket";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));

        //notification 

        //end notification
    
        $this->load->view('template', $data);
    }

function tanggal()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/tampil_tanggal";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));

        //notification 

        //end notification


        $this->load->view('template', $data);
    }

function email_status()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/tampil_email_status";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));

        $data['dd_status_tkt'] = $this->model_app->dropdown_status_ticket();
        $data['id_status_tkt'] = "";
        //notification 

        //end notification


        $this->load->view('template', $data);
    }

   function kategori()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/tampil_kategori";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));


        //notification 

        //end notification


        $this->load->view('template', $data);
    }

    function ticket_list()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/tampil_list_ticket";

        $id_user = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));

        //notification 

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id_user' AND app='$app' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

        //end notification

        $data['dd_kategori'] = $this->model_app->dropdown_kategori();
        $data['id_kategori'] = "";

        $data['dd_status_tkt'] = $this->model_app->dropdown_status_progress();
        $data['id_status_tkt'] = "";


        $this->load->view('template', $data);
    }
    
}

