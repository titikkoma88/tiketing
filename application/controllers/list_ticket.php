<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_ticket extends CI_Controller {

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


 function ticket_list($status="")
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/list_ticket";

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

        $data['status'] = $status; 

        $datalist_ticket = $this->model_app->datalist_ticket($status,$app);
	    $data['datalist_ticket'] = $datalist_ticket;
        
        $this->load->view('template', $data);
 }


 function pilih_teknisi($id)
 {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/pilih_teknisi";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));

        //notification 

        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
        $row_listticket = $this->db->query($sql_listticket)->row();

        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;

        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
        LEFT JOIN user D ON D.id_user = A.reported 
        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
        $row_approvalticket = $this->db->query($sql_approvalticket)->row();

        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_support='$id_user'  AND app ='$app'";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

        $sql = "SELECT A.status, D.nama, C.id_kategori, A.id_ticket, A.tanggal, A.problem_summary, A.problem_detail, B.nama_sub_kategori, C.nama_kategori
                FROM ticket A 
                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                LEFT JOIN user D ON D.id_user = A.reported 
                WHERE A.id_ticket = '$id'";

        $row = $this->db->query($sql)->row();

        $sql_support = "SELECT id_user, nama AS nama_support FROM user WHERE id_user = '$id_user'";
        $row_support = $this->db->query($sql_support)->row();

        $nama_support = $row_support->nama_support;
        $id_support = $row_support->id_user; 

        $id_kategori = $row->id_kategori;

        $data['url'] = "list_ticket/assignment"; 

        //$data['dd_teknisi'] = $this->model_app->dropdown_teknisi($id_kategori);
        //$data['id_teknisi'] = "";
            
        $data['id_ticket'] = $id;       
        $data['tanggal'] = $row->tanggal;
        $data['nama_sub_kategori'] = $row->nama_sub_kategori;
        $data['nama_kategori'] = $row->nama_kategori;
        $data['problem_summary'] = $row->problem_summary;
        $data['problem_detail'] = $row->problem_detail;
        $data['reported'] = $row->nama;

        $data['nama_support'] = $nama_support;
        $data['id_support'] = $id_support;
        
        $this->load->view('template', $data);

 }


 function assignment()
 {

    $id_ticket = strtoupper(trim($this->input->post('id_ticket')));
    $id_support = strtoupper(trim($this->input->post('id_support')));

    $id_user = trim($this->session->userdata('id_user'));
    $tanggal = $time = date("Y-m-d  H:i:s");

  
    //Variabel untuk email ke support
    $sql_support = "SELECT B.email, A.id_support
                FROM ticket A 
                LEFT JOIN user B ON B.id_user = A.id_support 
                WHERE A.id_support = '$id_support'";

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
        $subjek = 'Waiting for the Approval Ticketing '.$id_ticket;
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

        $this->email->from('pt.modernland@gmail.com','Approval Ticketing');
        $this->email->to($email_support);
        $this->email->cc($email_reported);
        $this->email->subject($subjek);
        $this->email->message('Please Check http://app.modernland.co.id/ticketing/');
        $this->email->send();
    //Mengirim email


    $data['id_support'] = $id_support;
    $data['status'] = 3;

    $tracking['id_ticket'] = $id_ticket;
    $tracking['tanggal'] = $tanggal;
    $tracking['status'] = "Pemilihan Support vendor";
    $tracking['deskripsi'] = "TICKET DIBERIKAN KEPADA VENDOR SUPPORT";
    $tracking['id_user'] = $id_user;

    $this->db->trans_start();

    $this->db->where('id_ticket', $id_ticket);
    $this->db->update('ticket', $data);

    $this->db->insert('tracking', $tracking);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
                </div>");
                redirect('list_ticket/ticket_list'); 
            } else 
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>");
                redirect('list_ticket/ticket_list'); 
            }

 }

 function view_progress_teknisi($id)
 {

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/progress_teknisi";

        $id_dept = trim($this->session->userdata('id_dept'));
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
        LEFT JOIN user D ON D.id_user = A.reported WHERE D.vendor='$namavendor' AND A.status = 1  OR A.status= 7";
        $row_approvalticket = $this->db->query($sql_approvalticket)->row();

        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE id_support='$id_user' AND app ='$app' AND status IN (3,4,5)";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

         $sql = "SELECT A.status, A.progress, A.tanggal,  A.tanggal_proses, A.tanggal_solved, A.problem_summary, A.problem_detail, E.nama AS nama_support, D.nama, C.id_kategori, A.id_ticket, A.tanggal, B.nama_sub_kategori, C.nama_kategori
                FROM ticket A 
                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                LEFT JOIN user D ON D.id_user = A.reported 
                LEFT JOIN user E ON E.id_user = A.id_support 
                WHERE A.id_ticket = '$id'";

        $row = $this->db->query($sql)->row();

        $id_kategori = $row->id_kategori;

        $data['file'] = $this->model_app->file($id);
        $data['file_tracking'] = $this->model_app->file_tracking($id);

        $data['dd_support'] = $this->model_app->dropdown_support();
        $data['id_support'] = "";
            
        $data['id_ticket'] = $id;  
        $data['nama_support'] = $row->nama_support;       
        $data['tanggal'] = $row->tanggal;
        $data['nama_sub_kategori'] = $row->nama_sub_kategori;
        $data['nama_kategori'] = $row->nama_kategori;
        $data['problem_summary'] = $row->problem_summary;
        $data['problem_detail'] = $row->problem_detail;
        $data['reported'] = $row->nama;
        $data['progress'] = $row->progress;
        $data['tanggal_proses'] = $row->tanggal_proses;

        $data['tanggal'] = $row->tanggal;
        $data['tanggal_solved'] = $row->tanggal_solved;

        //TRACKING TICKET
        $data_trackingticket = $this->model_app->data_trackingticket($id);
        $data['data_trackingticket'] = $data_trackingticket;

        
        $this->load->view('template', $data);

 }

 public function pdflistticket($status="")
    {

    $app = trim($this->session->userdata('app'));
        
    $data['status'] = $status;
    $datalist_ticket = $this->model_app->datalist_ticket($status,$app);
    $data['datalist_ticket'] = $datalist_ticket;
    
    
    ob_start();
        $content = $this->load->view('body/pdflistticket',$data);
        $content = ob_get_clean();      
        $this->load->library('html2pdf');
        try
        {
            $html2pdf = new HTML2PDF('L', 'A4', 'en');
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
            $html2pdf->Output('Report_ppic.pdf');
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    
    }

    public function hapusfile($id_ticket, $id_file_tracking){

        $data['id_file'] = $id_file_tracking;
        $data['id_ticket'] = $id_ticket;

    
        $sql_file = "SELECT * FROM file_tracking WHERE id_file_tracking = '$id_file_tracking'";
        $row = $this->db->query($sql_file)->row();

        //echo $id_ticket;exit();
 
        $this->db->trans_start();

        $this->db->where('id_file_tracking', $id_file_tracking);
        $this->db->delete('file_tracking');

        unlink('./assets/file/'.$row->nama);

        $this->db->trans_complete();

              
         redirect('list_ticket/view_progress_teknisi/'.$id_ticket);   

     }
    
}
