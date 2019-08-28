<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_ticket_user extends CI_Controller {

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


 function ticket_list_user($status="")
 {
        //echo $status;exit();
 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/list_ticket_user";

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

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id_user' AND app='$app' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

        //end notification

        $data['status'] = $status; 

        $datalist_ticket = $this->model_app->datalist_ticket($status,$app);
	    $data['datalist_ticket'] = $datalist_ticket;
        
        $this->load->view('template', $data);
 }

 function list_user($reported, $awal, $akhir)
 {
        //echo $reported;exit();
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/list_user";

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

        $data['reported'] = $reported;
        $data['awal'] = $awal;
        $data['akhir'] = $akhir; 

        $datalist_user = $this->model_app->datalist_user($reported, $awal, $akhir);
        $data['datalist_user'] = $datalist_user;
        
        $this->load->view('template', $data);
 }


 function ticket_view($id)
 {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/list_ticket_user_view";

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

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id_user' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

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
            $html2pdf->Output('Report_list_ticket.pdf');
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

              
    redirect('list_ticket_user/ticket_list_user');   

 }
    
}
