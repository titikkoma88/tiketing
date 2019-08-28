<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myticket extends CI_Controller {

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


 function myticket_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/myticket";

        $id = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

        //notification 

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id' AND app='$app' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;


        $datamyticket = $this->model_app->datamyticket($id,$app);
	    $data['datamyticket'] = $datamyticket;
        
        $this->load->view('template', $data);
 }

  function myticket_list_spv()
 {

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/myticket_spv";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
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
        WHERE D.app='$app' AND A.status = 1";
        $row_approvalticket = $this->db->query($sql_approvalticket)->row();

        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

        $datamyticketspv = $this->model_app->datamyticketspv();
        $data['datamyticketspv'] = $datamyticketspv;
        
        $this->load->view('template', $data);
 }

 function ticket_unsolved() {
    $data = array(
        'id_user' => $this->session->userdata('id_user'),
        'id_ticket' => $this->input->post('id_ticket'),
        'deskripsi' => $this->input->post('pesan'),
        'status' => 'Unsolved',
        'tanggal' => date('Y-m-d H:i:s')
    );

    if ($this->db->insert('tracking', $data)) {
       $data = array();
       $data['feedback'] = 0;
       $data['reported'] = $this->session->userdata('id_user');
       $data['id_ticket'] = $this->input->post('id_ticket');
       $data['deskripsi'] = $this->input->post('pesan');

           //Variabel untuk email ke support
            $sql_support = "SELECT B.email, A.id_ticket
                FROM ticket A 
                LEFT JOIN user B ON B.id_user = A.id_support
                WHERE A.id_ticket = '$data[id_ticket]'";

            $row_support = $this->db->query($sql_support)->row();
            $email_support = $row_support->email;

            $subjek = 'Complain Ticket '.$data['id_ticket'];

            $tracking_email['id_ticket'] = $this->input->post('id_ticket');
            $tracking_email['tanggal'] = date('Y-m-d H:i:s');
            $tracking_email['status'] = 6;
            $tracking_email['subject'] = $subjek;
            $tracking_email['id_user'] = $this->session->userdata('id_user');
            $tracking_email['tujuan'] = $email_support;

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

                $this->email->from('pt.modernland@gmail.com','Ticket Unsolved');
                $this->email->to($email_support);
                $this->email->cc('ticketing.ast@modernland.co.id');
                $this->email->subject($subjek);
                $this->email->message('Please Check http://ticket.modernland.co.id/   '.$data['deskripsi']);
                $this->email->send();
            //Mengirim email
     
               $this->db->trans_start();
               $this->db->insert('history_feedback', $data);
               $this->db->where('id_ticket', $data['id_ticket']);
               $this->db->update('ticket', array('status'=>3));
               $this->db->insert('tracking_email', $tracking_email);
               $this->db->trans_complete();
                echo 'ok';
    }
 }

 function myticket_detail($id)
 {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/progress_teknisi";

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

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE id_support='$id_user' AND status IN (3,4,5)";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id_user' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

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

        $data['url'] = "myticket/progress_teknisi";
        
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

 function progress_teknisi()
 {

    $id_user  = trim($this->session->userdata('id_user'));
    $tanggal  = $time = date("Y-m-d  H:i:s");

    $ticket   = strtoupper(trim($this->input->post('id_ticket')));

    
    $this->db->trans_start();
    
        $name_array = array();
        $this->load->library('upload');
        $count = count($_FILES['userfile']['name']);
        $nama_files = $_FILES['userfile']['name'][0];

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

                $new_name               = date('YmdHis').'_'.str_replace(" ", "_", $_FILES['userfile']['name']);
                $config['file_name']    = $new_name;
             
                //$image_path = realpath(APPPATH . './v2/assets/file');
                //$config['upload_path'] = $image_path;
                //$config['upload_path']  = $_SERVER['DOCUMENT_ROOT']."/v2/assets/file/";
                //$uploadpath = $config['upload_path'];

                $config['upload_path']  = './assets/file/';

                //echo $uploadpath; exit();

                //$config['max_size']     = 0;
                $config['allowed_types']= 'gif|jpg|png|pdf|docx|doc|xls|xlsx|jpeg|rar|zip';
                
                $nama_path              = $_FILES['userfile']['name'];
                $ext                    = pathinfo($nama_path, PATHINFO_EXTENSION);

                if ($ext=="gif" || $ext=="jpg" || $ext=="JPG" || $ext=="png" || $ext=="jpeg" ||
                    $ext=="pdf" || $ext=="doc" || $ext=="docx" || $ext=="xls" || $ext=="xlsx" ||
                    $ext=="rar" || $ext=="zip"){
                    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('userfile');
                
                    $data = $this->upload->data();


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

                else {
                                      
                }                
            }
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
            {
               
                redirect('myticket/myticket_detail/'.$ticket);   
            } else 
            {
                
                redirect('myticket/myticket_detail/'.$ticket);  
            }

 }

function file_lampiran($id_tracking)
 {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/lampiran";

          $sql = "SELECT A.status, A.progress,A.tanggal, A.tanggal_solved, A.tanggal_proses, A.tanggal_solved, A.problem_summary, A.problem_detail, D.nama AS nama_reported, E.nama AS nama_support, C.id_kategori, A.id_ticket, A.tanggal, B.nama_sub_kategori, C.nama_kategori, F.id_tracking, F.deskripsi, F.status
                FROM ticket A 
                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                LEFT JOIN user D ON D.id_user = A.reported 
                LEFT JOIN user E ON E.id_user = A.id_support
                LEFT JOIN tracking F ON F.id_ticket = A.id_ticket
                WHERE F.id_tracking = '$id_tracking'";

        $row = $this->db->query($sql)->row();

        $id_kategori = $row->id_kategori;
        $id_ticket = $row->id_ticket;

        $id_user = trim($this->session->userdata('id_user'));
                    
        $data['id_tracking'] = $id_tracking;
        $data['id_ticket'] = $id_ticket;
        $data['id_user'] = $id_user;  
        $data['nama_support'] = $row->nama_support;       
        $data['tanggal'] = $row->tanggal;
        $data['nama_sub_kategori'] = $row->nama_sub_kategori;
        $data['nama_kategori'] = $row->nama_kategori;
        $data['problem_summary'] = $row->problem_summary;
        $data['problem_detail'] = $row->problem_detail;
        $data['reported'] = $row->nama_reported;
        $data['progress'] = $row->progress;

        $data['deskripsi'] = $row->deskripsi;
        $data['status'] = $row->status;

        $data['tanggal_proses'] = $row->tanggal_proses;

        $data['tanggal'] = $row->tanggal;
        $data['tanggal_solved'] = $row->tanggal_solved;

        //TRACKING TICKET
        $data_trackingticket = $this->model_app->data_trackingticket($id_ticket);
        $data['data_trackingticket'] = $data_trackingticket;

        $data['url'] = "myticket/save";

        $this->load->view('template', $data);       
}

 function save()
 {

    $id_user = trim($this->input->post('id_user'));

    $id_tracking = trim($this->input->post('id_tracking'));
    

    $name_array = array();
    $this->load->library('upload');
    $count = count($_FILES['userfile']['name']);
    $nama_files = $_FILES['userfile']['name'][0];

        $config = array();
        foreach($_FILES as $key=>$value){
            unset($config);
            for($s=0; $s<$count; $s++) {

                $_FILES['userfile']['name']     = $value['name'][$s];
                $_FILES['userfile']['type']     = $value['type'][$s];
                $_FILES['userfile']['error']    = $value['error'][$s];
                $_FILES['userfile']['size']     = $value['size'][$s];  
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
             
                $config['upload_path'] = './v2/assets/file/';
                //$image_path = realpath(APPPATH . '../file');
                //$config['upload_path'] = $image_path;

                $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xls|xlsx|jpeg';
                $config['max_size'] = 0;
                //$config['max_width']  = '1024';
                //$config['max_height']  = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile')){

                    $error = array('error' => $this->upload->display_errors());

                    echo $error;
                    

                }else{

               // $this->upload->do_upload('userfile');

                $data = $this->upload->data();

                $nm_file = str_replace(" ", "_", $_FILES['userfile']['name']);
                  
                $data = array(
                        'nama' => $nm_file,
                        'type' => $_FILES['userfile']['type'],
                        'ukuran' => $_FILES['userfile']['size'],
                        'reported' => $id_user,
                        'id_tracking' => $id_tracking,
                );
                    $this->model_app->insertData("file_tracking",$data);

                    redirect('myticket/file_lampiran/'.$id_tracking);
                    
                }   
                
            }
        }       
 }

  function feedback_yes($id_ticket, $id_support)
 {
    
    $id_user = trim($this->session->userdata('id_user'));
    $tanggal = $time = date("Y-m-d  H:i:s");

    //Variabel untuk email ke support
    $sql_support = "SELECT B.email, A.id_ticket
                FROM ticket A 
                LEFT JOIN user B ON B.id_user = A.id_support
                WHERE A.id_ticket = '$id_ticket'";

    $row_support = $this->db->query($sql_support)->row();
    $email_support = $row_support->email;

    //Perintah untuk mengirim email
        $subjek = 'Solved Ticket '.$id_ticket;
        
        $this->load->library('PHPMailerAutoload');
        
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth= true;
        $mail->Username='pt.modernland@gmail.com';
        $mail->Password='modern888';
        $mail->Port = 465; 
        $mail->SMTPDebug = 2; 
        $mail->SMTPSecure = 'ssl';  
        // set email content
        $mail->setFrom('pt.modernland@gmail.com', 'Finished Ticket');
        $pecahemail = explode(',', '$email_support');
        $ttl = count($pecahemail);
        for ($i=0; $i < $ttl ; $i++) { 
            $mail->addAddress($pecahemail[$i]);
        }
        
        $mail->Subject = $subjek;
        $mail->Body = 'Ticket Done, Thank You.';
        
        $mail->Send();
        
    /*  $this->load->library('email');
        $this->email->initialize(array(
            'protocol' => "smtp",
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => "pt.modernland@gmail.com",
            'smtp_pass' => 'modern888',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'newline' => "\r\n" 
             ));

        $this->email->from('pt.modernland@gmail.com','Ticketing Finished');
        $this->email->to($email_support);
        $this->email->cc('ticketing.ast@modernland.co.id');
        $this->email->subject($subjek);
        $this->email->message('Ticketing Done, Thank You.');
        $this->email->send();
    */ 
    //Mengirim email

        $data['feedback'] = 1;
        $data['reported'] = $id_user;
        $data['id_ticket'] = $id_ticket;

        $tracking_email['id_ticket'] = $id_ticket;
        $tracking_email['tanggal'] = $tanggal;
        $tracking_email['status'] = 6;
        $tracking_email['subject'] = $subjek;
        $tracking_email['id_user'] = $id_user;
        $tracking_email['tujuan'] = $email_support;


        //$sql_teknisi = "SELECT * FROM teknisi WHERE id_teknisi = '$id_teknisi'";
        //$row = $this->db->query($sql_teknisi)->row();
        //$data2['point'] = $row->point;

        $data2['status'] = 6;
        $data2['progress'] = 100;
        $data2['feedback'] = "Y";
  
    $this->db->trans_start();

    $this->db->insert('history_feedback', $data);

    $this->db->insert('tracking_email', $tracking_email);

    $this->db->where('id_ticket', $id_ticket);
    $this->db->update('ticket', $data2);

    //$this->db->where('id_teknisi', $id_teknisi);
    //$this->db->update('teknisi', $data2);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
               
                redirect('myticket/myticket_list');   
            } else 
            {
                
                redirect('myticket/myticket_list');   
            }
 
 }

 function feedback_no($id_ticket, $id_support)
 {

    $id_user = trim($this->session->userdata('id_user'));
    $tanggal = $time = date("Y-m-d  H:i:s");

    //Variabel untuk email ke support
    $sql_support = "SELECT B.email, A.id_ticket
                FROM ticket A 
                LEFT JOIN user B ON B.id_user = A.id_support
                WHERE A.id_ticket = '$id_ticket'";

    $row_support = $this->db->query($sql_support)->row();
    $email_support = $row_support->email;

    //Variabel untuk email ke pelapor tocket
    $sql_reported = "SELECT D.email, C.id_ticket
                FROM ticket C 
                LEFT JOIN user D ON D.id_user = C.reported 
                WHERE C.id_ticket = '$id_ticket'";

    $row_reported = $this->db->query($sql_reported)->row();
    $email_reported = $row_reported->email;

        //Perintah untuk mengirim email
        $subjek = 'Complain Ticketing '.$id_ticket;
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

        $this->email->from('pt.modernland@gmail.com','Ticketing Unsolved');
        $this->email->to($email_support);
        $this->email->cc('ticketing.ast@modernland.co.id');
        $this->email->subject($subjek);
        $this->email->message('Please Check http://ticket.modernland.co.id/');
        $this->email->send();
        //Mengirim email

        $data['feedback'] = 0;
        $data['reported'] = $id_user;
        $data['id_ticket'] = $id_ticket;

        $data2['status'] = 4;
        $data2['progress'] = 0;
        $data2['feedback'] = " ";
        //$sql_teknisi = "SELECT * FROM teknisi WHERE id_teknisi = '$id_teknisi'";
        //$row = $this->db->query($sql_teknisi)->row();
        //$data2['point'] = $row->point;
  
    $this->db->trans_start();

    $this->db->insert('history_feedback', $data);

    $this->db->where('id_ticket', $id_ticket);
    $this->db->update('ticket', $data2);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
               
                redirect('myticket/myticket_list');   
            } else 
            {
                
                redirect('myticket/myticket_list');   
            }
 }

public function pdfmyticket()
    {

        $id = trim($this->session->userdata('id_user'));

        $app = trim($this->session->userdata('app'));

        $datamyticket = $this->model_app->datamyticket($id,$app);
        $data['datamyticket'] = $datamyticket;    
    
    ob_start();
        $content = $this->load->view('body/pdfmyticket',$data);
        $content = ob_get_clean();      
        $this->load->library('html2pdf');
        try
        {
            $html2pdf = new HTML2PDF('L', 'A4', 'en');
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
            $html2pdf->Output('Report_ticket.pdf');
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
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

              
    redirect('myticket/myticket_detail/'.$id_ticket);   

 }
    
public function email_ticket($id_ticket){

    $id_user = trim($this->session->userdata('id_user'));
    $app = trim($this->session->userdata('app'));
    $tanggal = $time = date("Y-m-d  H:i:s");

    //Variabel untuk email ke vendor support
    $sql_support = "SELECT * FROM user A
                LEFT JOIN user_app B ON B.id_user = A.id_user  
                WHERE B.app ='$app' AND B.akses ='vendor'";
    //echo $sql_support; exit();
    
    $row_support = $this->db->query($sql_support)->row();
    $email_support = $row_support->email;

    //echo $email_support; exit();

    //Perintah untuk mengirim email
        $subjek = 'Confirm New Ticket '.$id_ticket;
    //    $message = 'Please Check http://ticket.modernland.co.id/ '.$ticket;

        $this->load->library('PHPMailerAutoload');
        
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth= true;
        $mail->Username='pt.modernland@gmail.com';
        $mail->Password='modern888';
        $mail->Port = 465; 
        $mail->SMTPDebug = 2; 
        $mail->SMTPSecure = 'ssl';  
        // set email content
        $mail->setFrom('pt.modernland@gmail.com', 'Confirm Ticket Created ');
        $pecahemail = explode(',', $email_support);
        $ttl = count($pecahemail);
        for ($i=0; $i < $ttl ; $i++) { 
            $mail->addAddress($pecahemail[$i]);
        }
        
        $mail->Subject = $subjek;
        $mail->Body = 'Please Check http://ticket.modernland.co.id/ New Ticket '.$id_ticket;
        
        $mail->Send();

        $tracking_email['id_ticket'] = $id_ticket;
        $tracking_email['tanggal'] = $tanggal;
        $tracking_email['status'] = 8;
        $tracking_email['subject'] = $subjek;
        $tracking_email['id_user'] = $id_user;
        $tracking_email['tujuan'] = $email_support;


    $this->db->trans_start(); 

    $this->db->insert('tracking_email', $tracking_email);
    
    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
                </div>");
                redirect('myticket/myticket_list'); 
            } else 
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>");
                redirect('myticket/myticket_list');     
            }


/*
        $email_support = str_replace("_", "@", $email_support);
        $email_reported = str_replace("_", "@", $email_reported);
        $subjek = 'New Ticketing '.$id_ticket;
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

        $this->email->from('pt.modernland@gmail.com','New Ticketing');
        $this->email->to($email_reported);
        $this->email->cc('jie.piranha@gmail.com');
        $this->email->subject($subjek);
        $this->email->message('TICKET CREATED, Please Check http://ticket.modernland.co.id/');

        if ($this->email->send()) {
                echo "<script>window.alert('email berhasil dikirim');
        window.location=('../../../../myticket/myticket_list')</script>";
            } else {
                show_error($this->email->print_debugger());
            }
*/
    }

    function feedback_user($id_ticket)
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/feedback_user";

        $id_user = trim($this->session->userdata('id_user'));

        $sql = "SELECT A.status, A.progress, A.tanggal, A.tanggal_solved, A.tanggal_proses, A.tanggal_solved, A.problem_summary, A.problem_detail, A.id_ticket, B.nama_sub_kategori, C.id_kategori, C.nama_kategori, D.nama AS nama_reported, E.nama AS nama_support, F.id_tracking
                FROM ticket A 
                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                LEFT JOIN user D ON D.id_user = A.reported 
                LEFT JOIN user E ON E.id_user = A.id_support
                LEFT JOIN tracking F ON F.id_ticket = A.id_ticket 
                WHERE A.id_ticket = '$id_ticket'";

        $row = $this->db->query($sql)->row();

        $id_kategori = $row->id_kategori;

        $data['file'] = $this->model_app->file($id_ticket);

        $data['url'] = "myticket/kirim_feedback"; 

        //$data['dd_teknisi'] = $this->model_app->dropdown_teknisi($id_kategori);
        //$data['id_teknisi'] = "";
            
        $data['id_ticket'] = $id_ticket;
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
        $data_trackingticket = $this->model_app->data_trackingticket($id_ticket);
        $data['data_trackingticket'] = $data_trackingticket;

        $this->load->view('template', $data);

    }

function kirim_feedback()
    {

    
    $id_user  = trim($this->session->userdata('id_user'));
    $tanggal  = $time = date("Y-m-d  H:i:s");

    $ticket   = strtoupper(trim($this->input->post('id_ticket')));
    $deskripsi_progress = trim($this->input->post('deskripsi_progress'));

    $subjek = 'User Comment On Processing Ticket '.$ticket;

    $app = trim($this->session->userdata('app'));

    //Variabel untuk email ke vendor support
    $sql_support = "SELECT * FROM user A
                LEFT JOIN user_app B ON B.id_user = A.id_user  
                WHERE B.app = '$app' AND B.akses ='vendor'";
    //echo $sql_support; exit();
    
    $row_support = $this->db->query($sql_support)->row();
    $email_support = $row_support->email;

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

        $this->email->from('pt.modernland@gmail.com','Processing Ticket');
        $this->email->to($email_support);
        //$this->email->cc('ticketing.ast@modernland.co.id');
        $this->email->subject($subjek);
        $this->email->message('Please Check http://ticket.modernland.co.id '.$deskripsi_progress);
        $this->email->send();
    //Mengirim email
    
    $tracking['id_ticket'] = $ticket;
    $tracking['tanggal'] = $tanggal;
    $tracking['status'] = "Feedback User ";
    $tracking['deskripsi'] = $deskripsi_progress;
    $tracking['id_user'] = $id_user;

    $data['status'] = 4;

    $tracking_email['id_ticket'] = $ticket;
    $tracking_email['tanggal'] = $tanggal;
    $tracking_email['status'] = 4;
    $tracking_email['subject'] = $subjek;
    $tracking_email['id_user'] = $id_user;
    $tracking_email['tujuan'] = $email_support;

  
    $this->db->trans_start();

    $this->db->where('id_ticket', $ticket);
    $this->db->update('ticket', $data);

    $this->db->insert('tracking', $tracking);

    $this->db->insert('tracking_email', $tracking_email);

    $this->uploadFileLamp($ticket,$id_user);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
               
                redirect('myticket/myticket_list');   
            } else 
            {
                
                redirect('myticket/myticket_list');  
            }

    }

    public function uploadFileLamp($ticket,$id_user){
        
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
