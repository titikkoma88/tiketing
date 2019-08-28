<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends CI_Controller {

function __construct(){
    parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('model_app');

       if(!$this->session->userdata('id_user'))
       {
            $this->session->set_flashdata("msg", "<div class='alert alert-info'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
                </div>"
            );

            redirect('login');
        }         
}


function approval_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/approval";


        $id_user = trim($this->session->userdata('id_user'));
        $nama_user_kategori = trim($this->session->userdata('nama_user_kategori'));
        $app = trim($this->session->userdata('app'));

        //notification 

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

        //end notification
               
        $dataapproval = $this->model_app->dataapproval($app);
	    $data['dataapproval'] = $dataapproval;
        

        $this->load->view('template', $data);

 }

  function approval_no($ticket)
 {
 	
        $data['status'] = 7;

        $id_user = trim($this->session->userdata('id_user'));
        $tanggal = $time = date("Y-m-d  H:i:s");

            //Variabel untuk email ke pelapor tocket
            $sql_reported = "SELECT D.email, C.id_ticket
                FROM ticket C 
                LEFT JOIN user D ON D.id_user = C.reported 
                WHERE C.id_ticket = '$ticket'";

            $row_reported = $this->db->query($sql_reported)->row();
            $email_reported = $row_reported->email;

            //Perintah untuk mengirim email
                $subjek = 'Rejected Ticket '.$ticket;
                $this->load->library('email');
                $this->email->initialize(array(
                    'protocol' => "smtp",
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_user' => "pt.modernland@gmail.com",
                    'smtp_pass' => 'modern888',
                    'smtp_port' => 465,
                    'mailtype' => 'html',
                    'newline' => "\r\n" 
                ));

                $this->email->from('pt.modernland@gmail.com','Rejected Ticket');
                $this->email->to($email_reported);
                //$this->email->cc('ticketing.ast@modernland.co.id');
                $this->email->subject($subjek);
                $this->email->message('Please Check http://ticket.modernland.co.id/  Rejected Ticket ID    '.$ticket);
                $this->email->send();
            //Mengirim email

            $tracking['id_ticket'] = $ticket;
            $tracking['tanggal'] = $tanggal;
            $tracking['status'] = "Ticket tidak disetujui";
            $tracking['deskripsi'] = "";
            $tracking['id_user'] = $id_user;

            $tracking_email['id_ticket'] = $ticket;
            $tracking_email['tanggal'] = $tanggal;
            $tracking_email['status'] = 7;
            $tracking_email['subject'] = $subjek;
            $tracking_email['id_user'] = $id_user;
            $tracking_email['tujuan'] = $email_reported;
  
        $this->db->trans_start();

     	$this->db->where('id_ticket', $ticket);
     	$this->db->update('ticket', $data);

        $this->db->insert('tracking_email', $tracking_email);

        $this->db->insert('tracking', $tracking);

     	$this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {

            redirect('approval/approval_list');   
        } else {
                
            redirect('approval/approval_list');   
        }
 }

 function approval_reaction($ticket)
 {

    $data['status'] = 1;

    $id_user = trim($this->session->userdata('id_user'));
    $tanggal = $time = date("Y-m-d  H:i:s");


        //Variabel untuk email ke pelapor tocket
        $sql_reported = "SELECT D.email, C.id_ticket
                    FROM ticket C 
                    LEFT JOIN user D ON D.id_user = C.reported 
                    WHERE C.id_ticket = '$ticket'";

        $row_reported = $this->db->query($sql_reported)->row();
        $email_reported = $row_reported->email;

        //Perintah untuk mengirim email
            $subjek = 'Reprocessed Ticket '.$ticket;
            $this->load->library('email');
            $this->email->initialize(array(
                'protocol' => "smtp",
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_user' => "pt.modernland@gmail.com",
                'smtp_pass' => 'modern888',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'newline' => "\r\n" 
            ));

            $this->email->from('pt.modernland@gmail.com','Reprocessed Ticket');
            $this->email->to($email_reported);
            //$this->email->cc('ticketing.ast@modernland.co.id');
            $this->email->subject($subjek);
            $this->email->message('Please Check http://ticket.modernland.co.id/  Ticket Is Reprocessed    '.$ticket);
            $this->email->send();
        //Mengirim email

        $tracking['id_ticket'] = $ticket;
        $tracking['tanggal'] = $tanggal;
        $tracking['status'] = "Ticket dikembalikan ke posisi belum di setujui";
        $tracking['deskripsi'] = "";
        $tracking['id_user'] = $id_user;

        $tracking_email['id_ticket'] = $ticket;
        $tracking_email['tanggal'] = $tanggal;
        $tracking_email['status'] = 1;
        $tracking_email['subject'] = $subjek;
        $tracking_email['id_user'] = $id_user;
        $tracking_email['tujuan'] = $email_reported;

    $this->db->trans_start();

    $this->db->where('id_ticket', $ticket);
    $this->db->update('ticket', $data);

    $this->db->insert('tracking_email', $tracking_email);

    $this->db->insert('tracking', $tracking);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
               
        redirect('approval/approval_list');   
    } else {
                
        redirect('approval/approval_list');   
    }

 }

  function approval_yes($ticket)
 {

    $id_user = trim($this->session->userdata('id_user'));
    $tanggal = $time = date("Y-m-d  H:i:s");

    $data['status'] = 4;
    $data['id_support'] = $id_user;
    $data['tanggal_proses'] = $tanggal;    

        //Variabel untuk email ke support
        $sql_support = "SELECT B.email, A.id_support
                FROM ticket A 
                LEFT JOIN user B ON B.id_user = A.id_support 
                WHERE A.id_support = '$id_user'";

        $row_support = $this->db->query($sql_support)->row();
        $email_support = $row_support->email;

        //Variabel untuk email ke pelapor tocket
        $sql_reported = "SELECT D.email, C.id_ticket
                FROM ticket C 
                LEFT JOIN user D ON D.id_user = C.reported 
                WHERE C.id_ticket = '$ticket'";

        $row_reported = $this->db->query($sql_reported)->row();
        $email_reported = $row_reported->email;

        //Perintah untuk mengirim email
            $subjek = 'Approved Ticket '.$ticket;
            $this->load->library('email');
            $this->email->initialize(array(
                'protocol' => "smtp",
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_user' => "pt.modernland@gmail.com",
                'smtp_pass' => 'modern888',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'newline' => "\r\n" 
            ));

            $this->email->from('pt.modernland@gmail.com','Approval Ticket');
            $this->email->to($email_reported);
            //$this->email->cc('ticketing.ast@modernland.co.id');
            $this->email->subject($subjek);
            $this->email->message('Please Check http://ticket.modernland.co.id/  Approved Ticket    '.$ticket);
            $this->email->send();
        //Mengirim email

        $tracking['id_ticket'] = $ticket;
        $tracking['tanggal'] = $tanggal;
        $tracking['status'] = "Ticket disetujui";
        $tracking['deskripsi'] = "TICKET DITERIMA VENDOR SUPPORT";
        $tracking['id_user'] = $id_user;

        $tracking_email['id_ticket'] = $ticket;
        $tracking_email['tanggal'] = $tanggal;
        $tracking_email['status'] = 2;
        $tracking_email['subject'] = $subjek;
        $tracking_email['id_user'] = $id_user;
        $tracking_email['tujuan'] = $email_reported;
  
    $this->db->trans_start();

    $this->db->insert('tracking_email', $tracking_email);

    $this->db->where('id_ticket', $ticket);
    $this->db->update('ticket', $data);

    $this->db->insert('tracking', $tracking);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {

        redirect('approval/approval_list');   
    } else {
                
        redirect('approval/approval_list');   
    }
    
 }

// function approval()
//{

// 	      $data['header'] = "header/header";
//        $data['navbar'] = "navbar/navbar";
//        $data['sidebar'] = "sidebar/sidebar";
//        $data['body'] = "body/form_jabatan";

//        $id_user = trim($this->session->userdata('id_user'));
//        $nama_user_kategori = trim($this->session->userdata('nama_user_kategori'));
//        $app = trim($this->session->userdata('app'));

        //notification 

//        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
//        $row_listticket = $this->db->query($sql_listticket)->row();

//        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;

//        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
//        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
//        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
//        LEFT JOIN user_kategori D ON D.id_user = A.reported AND D.app = A.app 
//        WHERE D.app='$app' AND A.status = 1 OR  A.status= 7";
//        $row_approvalticket = $this->db->query($sql_approvalticket)->row();

//        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

//        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_support='$id_user'";
//        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

//        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

//	    $data['url'] = "jabatan/save";
			
//		$data['id_jabatan'] = "";		
//		$data['nama_jabatan'] = "";
        

//        $this->load->view('template', $data);

// }

function ticket_view($id)
 {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/list_ticket_user_view";

        //notification 

        $id_user = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));
        

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

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE id_support='$id_user' AND status IN (3,4,5)";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

            $sql = "SELECT A.status, A.progress,A.tanggal, A.tanggal_solved, A.tanggal_proses, A.tanggal_solved, A.problem_summary, A.problem_detail, D.nama AS nama_reported, E.nama AS nama_support, C.id_kategori, A.id_ticket, A.tanggal, B.nama_sub_kategori, C.nama_kategori
                    FROM ticket A 
                    LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                    LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                    LEFT JOIN user D ON D.id_user = A.reported 
                    LEFT JOIN user E ON E.id_user = A.id_support
                    WHERE A.id_ticket = '$id'";

            $row = $this->db->query($sql)->row();

            $id_kategori = $row->id_kategori;

            $data['file'] = $this->model_app->file($id);
                
            $data['id_ticket'] = $id;
            $data['id_user'] = $id_user;  
            $data['nama_support'] = $row->nama_support;       
            $data['tanggal'] = $row->tanggal;
            $data['nama_sub_kategori'] = $row->nama_sub_kategori;
            $data['nama_kategori'] = $row->nama_kategori;
            $data['problem_summary'] = $row->problem_summary;
            $data['problem_detail'] = $row->problem_detail;
            $data['reported'] = $row->nama_reported;
            $data['progress'] = $row->progress;
            $data['tanggal_proses'] = $row->tanggal_proses;

            $data['tanggal'] = $row->tanggal;
            $data['tanggal_solved'] = $row->tanggal_solved;

            //TRACKING TICKET
            $data_trackingticket = $this->model_app->data_trackingticket($id);
            $data['data_trackingticket'] = $data_trackingticket;

        
        $this->load->view('template', $data);
 }

    
}
