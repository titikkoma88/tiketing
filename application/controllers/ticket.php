<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

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


 function hapus()
 {
 	$id = $_POST['id'];

 	$this->db->trans_start();

 	$this->db->where('id_user', $id);
 	$this->db->delete('user');

 	$this->db->trans_complete();
	
 }

 function add()
 {

 	    $data['header']    = "header/header";
        $data['navbar']    = "navbar/navbar";
        $data['sidebar']   = "sidebar/sidebar";
        $data['body']      = "body/form_ticket";

        $id_user            = trim($this->session->userdata('id_user'));
        $nama_user_kategori = trim($this->session->userdata('nama_user_kategori'));
        $app                = trim($this->session->userdata('app'));

        
        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
        $row_listticket = $this->db->query($sql_listticket)->row();
        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;

        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
        LEFT JOIN user_app D ON D.id_user = A.reported WHERE A.status = 1 and D.app='$app'";
        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_support='$id_user'";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
        
        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id_user' AND app='$app' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();
        $data['notif_myticket'] = $row_myticket->jml_my_ticket;
        

        $cari_data = "SELECT * FROM user A
    				  WHERE id_user = '$id_user'";

        $row = $this->db->query($cari_data)->row();

        $data['id_ticket'] = "";
        $data['id_user'] = $id_user;

        $data['nama'] = $row->nama;
		
		$data['dd_kategori'] = $this->model_app->dropdown_kategori();
		$data['id_kategori'] = "";

		$data['problem_summary'] = "";
		$data['problem_detail'] = "";

		$data['status'] = "";
		$data['progress'] = "";

		$data['url'] = "ticket/save";

		$data['flag'] = "add";
    
        $this->load->view('template', $data);

 }

 function save()
 {

 	$getkodeticket      = $this->model_app->getkodeticket();

	$ticket             = $getkodeticket;

 	$id_user            = trim($this->input->post('id_user'));
    $nama_user_kategori = trim($this->session->userdata('nama_user_kategori'));
    $app                = trim($this->session->userdata('app'));

    $tanggal    = $time = date("Y-m-d  H:i:s");

 	$id_sub_kategori    = strtoupper(trim($this->input->post('id_sub_kategori')));
 	$problem_summary    = strtoupper(trim($this->input->post('problem_summary')));
 	$problem_detail     = strtoupper(trim($this->input->post('problem_detail')));
 	$id_support         = strtoupper(trim($this->input->post('id_support')));

        //Variabel untuk email ke vendor support
        $sql_support = "SELECT A.email 
                FROM user A 
                LEFT JOIN user_app B ON B.id_user = A.id_user
                WHERE B.app = '$app' AND B.akses = 'vendor'";
    
        $row_support = $this->db->query($sql_support)->result();
        //$email_support = $row_support->email;


    $subjek = 'Created Ticket '.$ticket;

    $data['id_ticket'] = $ticket;
    $data['reported'] = $id_user;
    $data['tanggal'] = $tanggal;
    $data['id_sub_kategori'] = $id_sub_kategori;
    $data['problem_summary'] = $problem_summary;
    $data['problem_detail'] = $problem_detail;
    $data['id_support'] = $id_support;
    $data['status'] = 1;
    $data['progress'] = 0;
    $data['app'] = $app;

    $tracking['id_ticket'] = $ticket;
    $tracking['tanggal'] = $tanggal;
    $tracking['status'] = "Created Ticket";
    $tracking['deskripsi'] = "TIKET DI BUAT";
    $tracking['id_user'] = $id_user;

        //Perintah untuk mengirim email
        
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
        $mail->setFrom('pt.modernland@gmail.com', 'Created Ticketing');

            foreach ($row_support as $key) {
                $mail->addAddress($key->email);

                $email_support = $key->email;

                $tracking_email['id_ticket'] = $ticket;
                $tracking_email['tanggal'] = $tanggal;
                $tracking_email['status'] = 1;
                $tracking_email['subject'] = $subjek;
                $tracking_email['id_user'] = $id_user;
                $tracking_email['tujuan'] = $email_support;

                //echo $email_support; exit();
            }
        
        $mail->Subject = $subjek;
        $mail->Body = $problem_detail;
        $mail->Body .= '   Please Check http://ticket.modernland.co.id/ New Ticket '.$ticket;
        $mail->IsHTML(true);

        if(!$mail->Send()) {
            echo 'Error : ' . $mail->ErrorInfo;
        } else {
            
        $this->db->trans_start();

        $this->db->insert('ticket', $data);
        $this->db->insert('tracking', $tracking);
        $this->db->insert('tracking_email', $tracking_email);
        $this->uploadFile($ticket,$id_user);    

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
        } 

 	
		
 }

    public function uploadFile($ticket,$id_user){
        
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

                $new_name = date('YmdHis').'_'.str_replace(" ", "_", $_FILES['userfile']['name']);
                $config['file_name'] = $new_name;
             
                $config['upload_path'] = './assets/file/';
                //$config['max_size'] = 0;
                $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xls|xlsx|jpeg|rar|zip';
                  
                $nama_path     = $_FILES['userfile']['name'];
                $ext = pathinfo($nama_path, PATHINFO_EXTENSION);
                
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
            }
        }
    }
 
    function test_mail(){
       // load library email
        $this->load->library('PHPMailerAutoload');
        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth= true;
        $mail->Username='pt.modernland@gmail.com';
        $mail->Password='modern888';
        $mail->Port = 465; 
        $mail->SMTPDebug = 2; 
        $mail->SMTPSecure = 'ssl';
        $mail->SetFrom('pt.modernland@gmail.com', 'Created Ticket');
        $mail->AddAddress('simatupangfunky@gmail.com', 'Aritio');
        $mail->Subject = 'Subject';
        $mail->Subject = "Here is the subject";
        $mail->Body    = "This is the HTML message body <b>in bold!</b>";
        $mail->AltBody = "This is the body in plain text for non-HTML mail    clients";
        if(!$mail->Send()) {
            echo 'Error : ' . $mail->ErrorInfo;
        } else {
            echo 'Ok!!';
        } 
       
    }


}
