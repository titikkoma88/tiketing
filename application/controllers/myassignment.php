<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myassignment extends CI_Controller {

function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
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


 function myassignment_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/myassignment";

        $id_user = trim($this->session->userdata('id_user'));
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
        
        $datamyassignment = $this->model_app->datamyassignment($id_user,$app);
	    $data['datamyassignment'] = $datamyassignment;
        
        $this->load->view('template', $data);
 }

 function terima($ticket)
 {

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
        $subjek = 'Reprocess Ticket '.$ticket;
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

        $this->email->from('pt.modernland@gmail.com','Reprocess Ticket');
        $this->email->to($email_reported);
        //$this->email->cc('ticketing.ast@modernland.co.id');
        $this->email->subject($subjek);
        $this->email->message('Please Check http://ticket.modernland.co.id/  Reprocess Ticket '.$ticket);
        $this->email->send();
    //Mengirim email

    $tracking['id_ticket'] = $ticket;
    $tracking['tanggal'] = $tanggal;
    $tracking['status'] = "Diproses oleh vendor support";
    $tracking['deskripsi'] = "";
    $tracking['id_user'] = $id_user;

    $data['status'] = 4;
    $data['tanggal_proses'] = $tanggal;

    $tracking_email['id_ticket'] = $ticket;
    $tracking_email['tanggal'] = $tanggal;
    $tracking_email['status'] = 6;
    $tracking_email['subject'] = $subjek;
    $tracking_email['id_user'] = $id_user;
    $tracking_email['tujuan'] = $email_reported;
  
    $this->db->trans_start();

    $this->db->where('id_ticket', $ticket);
    $this->db->update('ticket', $data);

    $this->db->insert('tracking', $tracking);

    $this->db->insert('tracking_email', $tracking_email);

    $this->db->trans_complete();

     if ($this->db->trans_status() === FALSE)
            {
               
                redirect('myassignment/myassignment_list');   
            } else 
            {
                
                redirect('myassignment/myassignment_list');   
            }
 }

 function pending($ticket)
 {
    $data['status'] = 5;

    $id_user = trim($this->session->userdata('id_user'));
    $tanggal = $time = date("Y-m-d  H:i:s");

    $tracking['id_ticket'] = $ticket;
    $tracking['tanggal'] = $tanggal;
    $tracking['status'] = "Pending oleh vendor support";
    $tracking['deskripsi'] = "";
    $tracking['id_user'] = $id_user;
  
    $this->db->trans_start();

    $this->db->where('id_ticket', $ticket);
    $this->db->update('ticket', $data);

    $this->db->insert('tracking', $tracking);

    $this->db->trans_complete();

     if ($this->db->trans_status() === FALSE)
            {
               
                redirect('myassignment/myassignment_list');   
            } else 
            {
                
                redirect('myassignment/myassignment_list');   
            }
 }


 function ticket_detail($id)
 {

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/up_progress";

        $id_user = trim($this->session->userdata('id_user'));
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

        $sql = "SELECT A.status, A.progress, A.tanggal, A.tanggal_solved, A.tanggal_proses, A.tanggal_solved, A.problem_summary, A.problem_detail, A.id_ticket, B.nama_sub_kategori, C.id_kategori, C.nama_kategori, D.nama AS nama_reported, E.nama AS nama_support, F.id_tracking
                FROM ticket A 
                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                LEFT JOIN user D ON D.id_user = A.reported 
                LEFT JOIN user E ON E.id_user = A.id_support
                LEFT JOIN tracking F ON F.id_ticket = A.id_ticket 
                WHERE A.id_ticket = '$id'";

        $row = $this->db->query($sql)->row();

        $id_kategori = $row->id_kategori;

        $data['file'] = $this->model_app->file($id);

        $data['url'] = "myassignment/up_progress"; 

        //$data['dd_teknisi'] = $this->model_app->dropdown_teknisi($id_kategori);
        //$data['id_teknisi'] = "";
            
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


 function up_progress()
 {
    
    $id_user  = trim($this->session->userdata('id_user'));
    $tanggal  = $time = date("Y-m-d  H:i:s");

    $ticket   = strtoupper(trim($this->input->post('id_ticket')));

    $progress = strtoupper(trim($this->input->post('progress')));

    $deskripsi_progress = trim($this->input->post('deskripsi_progress'));

    $feedback     = trim($this->input->post('feedback'));

    //echo $feedback;exit();

    if($progress==100)
    {
        $data['status'] = 5;
        $data['tanggal_solved'] = $tanggal;

        $subjek = 'Completed Ticket '.$ticket; 

        //Variabel untuk email ke pelapor tocket
        $sql_reported2 = "SELECT B.email, A.id_ticket, A.problem_detail, A.problem_summary
                    FROM ticket A 
                    LEFT JOIN user B ON B.id_user = A.reported 
                    WHERE A.id_ticket = '$ticket'";

        $row_reported2 = $this->db->query($sql_reported2)->row();
        $email_reported2 = $row_reported2->email;
        $problem_detail2 = $row_reported2->problem_detail;
        $problem_summary2 = $row_reported2->problem_summary;

        $tracking_email['status'] = 5;
        $tracking_email['tujuan'] = $email_reported2;

        //Perintah untuk mengirim email
    
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

            $this->email->from('pt.modernland@gmail.com','Assigment Ticket');
            $this->email->to($email_reported2);
            //$this->email->cc('ticketing.ast@modernland.co.id');
            $this->email->subject($subjek);
            $this->email->message('Please Check http://ticket.modernland.co.id    '.$deskripsi_progress);
            $this->email->send();
        //Mengirim email

    }
    else
    {

        $data['status'] = 5;

        $subjek = 'Processing Ticket '.$ticket;

        //Variabel untuk email ke pelapor tocket
        $sql_reported = "SELECT D.email, C.id_ticket, C.problem_detail, C.problem_summary
                    FROM ticket C 
                    LEFT JOIN user D ON D.id_user = C.reported 
                    WHERE C.id_ticket = '$ticket'";

        $row_reported = $this->db->query($sql_reported)->row();
        $email_reported = $row_reported->email;
        $problem_detail = $row_reported->problem_detail;
        $problem_summary = $row_reported->problem_summary;

        $tracking_email['status'] = 4;
        $tracking_email['tujuan'] = $email_reported;

        //Perintah untuk mengirim email
        
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

            $this->email->from('pt.modernland@gmail.com','Assigment Ticket');
            $this->email->to($email_reported);
            //$this->email->cc('ticketing.ast@modernland.co.id');
            $this->email->subject($subjek);
            $this->email->message('Please Check http://ticket.modernland.co.id    '.$deskripsi_progress);
            $this->email->send();
        //Mengirim email

    }

        $tanggal_selesai = date('Y-m-d', strtotime($this->input->post('selesai')));

        list($ys, $ms, $ds) = explode ( '-', $tanggal_selesai);
        list($ym, $mm, $dm) = explode ( '-', $tanggal);
        $dt = $ds - $dm;
        $mt = $ms - $mm;
        $yt = $ys - $ym;

    $tracking['id_ticket'] = $ticket;
    $tracking['tanggal'] = $tanggal;
    //$tracking['status'] = "Up Progress To ".$progress." %";
    $tracking['status'] = "Up Progress";
    $tracking['tanggal_selesai'] = $tanggal_selesai;
    $tracking['hari'] = $dt;
    $tracking['bulan'] = $mt;
    $tracking['tahun'] = $yt;
    $tracking['deskripsi'] = $deskripsi_progress;
    $tracking['id_user'] = $id_user;

    $data['progress'] = $progress;
    $data['feedback'] = $feedback;

    $data2['hari'] = Null;
    $data2['bulan'] = Null;
    $data2['tahun'] = Null;

    $tracking_email['id_ticket'] = $ticket;
    $tracking_email['tanggal'] = $tanggal;
    
    $tracking_email['subject'] = $subjek;
    $tracking_email['id_user'] = $id_user;

  
    $this->db->trans_start();

    $this->db->where('id_ticket', $ticket);
    $this->db->update('ticket', $data);

    $this->db->where('id_ticket', $ticket);
    $this->db->update('tracking', $data2);

    $this->db->where('id_ticket', $ticket);
    $this->db->delete('history_feedback');

    $this->db->insert('tracking_email', $tracking_email);

    $this->db->insert('tracking', $tracking);

    $this->uploadFileLamp($ticket,$id_user);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
        {

            redirect('myassignment/myassignment_list');   
        } else 
        {
                
            redirect('myassignment/myassignment_list');  
        }

 }

 public function hapusfile($id_ticket, $id_file){

        $data['id_file'] = $id_file;
        $data['id_ticket'] = $id_ticket;

        
        $sql_file = "SELECT * FROM file WHERE id_file = '$id_file'";
        $row = $this->db->query($sql_file)->row();

    //echo $id_ticket;exit();

    $this->db->trans_start();

    $this->db->where('id_file', $id_file);
    $this->db->delete('file');

    unlink('./assets/file/'.$row->nama);

    $this->db->trans_complete();

    redirect('myassignment/ticket_detail/'.$id_ticket);   

 }


 public function uploadFileLamp($ticket,$id_user)
 {

    //require_once('fpdf17/fpdf.php');
    //require_once('FPDI_New/fpdi.php'); 

    //$pdf = new FPDI();

    $name_array = array();
    $this->load->library('upload');
    $count = count($_FILES['userfile']['name']);
    $nama_files = $_FILES['userfile']['name'][0];

    //if($nama_files ==''){
    //    redirect('dokumen');
    //}
    $config = array();
    foreach($_FILES as $key=>$value)
    {
        unset($config);
        for($s=0; $s<$count; $s++) 
        {

            $_FILES['userfile']['name']     = $value['name'][$s];
            $_FILES['userfile']['type']     = $value['type'][$s];
            $_FILES['userfile']['error']    = $value['error'][$s];
            $_FILES['userfile']['size']     = $value['size'][$s];  
            $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];

            $new_name = date('YmdHis').'_'.str_replace(" ", "_", $_FILES['userfile']['name']);
            $config['file_name'] = $new_name;
            
            $config['upload_path'] = './assets/file/';
            $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xls|xlsx|jpeg|rar|zip|sql|rpt|sct|scx|exe';
            $config['max_size'] = 0;
            //$config['max_width']  = '1024';
            //$config['max_height']  = '768';

            $this->load->library('upload', $config);
                
            $this->upload->initialize($config);

            $this->upload->do_upload('userfile');
                
            $data = $this->upload->data();

                //$nm_file = str_replace(" ", "_", $_FILES['userfile']['name']);

                $data = array(
                        'nama' => $new_name,
                        'type' => $_FILES['userfile']['type'],
                        'ukuran' => $_FILES['userfile']['size'],
                        'reported' => $id_user,
                        'id_ticket' => $ticket,
                );                    
                
                if (empty($nama_files)){

                }
                else {

                $this->model_app->insertData("file",$data);
                   
                }

        }
    }
 }

    
}
