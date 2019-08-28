<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_ticket extends CI_Controller {

function __construct()
 {
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

function report_list($status="")
 {
        //echo $status;exit();
      $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/report_ticket";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));

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

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE id_support='$id_user' AND status IN (3,4,5)";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

        if($vendor=='ast'){
            $app = 'ast_desktop';
        }
        else if($vendor=='modernland'){
            $app = 'ast_desktop';
        }
        else if($vendor=='ast_web'){
            $app = 'ast_web';
        }
        else if($vendor=='modernland_astweb'){
            $app = 'ast_web';
        }
        else {
            $app = ' ';
        }

        $data['app'] = $app;

        $data['status'] = $status; 

        $datalist_ticket = $this->model_app->datalist_ticket($status,$app);
      $data['datalist_ticket'] = $datalist_ticket;
        
        $this->load->view('template', $data);
 }

function report_kategori($nama_sub_kategori, $awal, $akhir)
 {
        //echo $reported;exit();
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/report_kategori";

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

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE id_support='$id_user' AND status IN (3,4,5)";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification

        $data['nama_sub_kategori'] = $nama_sub_kategori;
        $data['awal'] = $awal;
        $data['akhir'] = $akhir;

        $data['tglAwal'] = date("d F Y", strtotime($awal));
        $data['tglAkhir'] = date("d F Y", strtotime($akhir)); 

        $datareport_kategori = $this->model_app->datareport_kategori($nama_sub_kategori, $awal, $akhir, $app);
        $data['datareport_kategori'] = $datareport_kategori;
        
        $this->load->view('template', $data);
 }

 public function pdfreport($id_sub_kategori, $awal, $akhir)
    {

    $app = trim($this->session->userdata('app'));
    
    $sql_kategori = "SELECT * FROM sub_kategori WHERE id_sub_kategori = '$id_sub_kategori'";
    $row_kategori = $this->db->query($sql_kategori)->row();
    $data['nama_sub_kategori'] = $row_kategori->nama_sub_kategori;
    
    $datareport = $this->model_app->datareport($id_sub_kategori, $awal, $akhir, $app);
    $data['tglAwal'] = date("d-m-Y", strtotime($awal));
    $data['tglAkhir'] = date("d-m-Y", strtotime($akhir));
    $data['datareport'] = $datareport;
    
    
    ob_start();
        $content = $this->load->view('body/pdfreport',$data);
        $content = ob_get_clean();      
        $this->load->library('html2pdf');
        try
        {
            $html2pdf = new HTML2PDF('L', 'A4', 'en', true, 'UTF-8',array(5, 5, 5, 8));
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
            $html2pdf->Output('Report_ticket.pdf');
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    
    }

public function pdfticket($status, $sub_kategori, $awal, $akhir)
    {

    $id_user = trim($this->session->userdata('id_user'));
    $nama_user_kategori = trim($this->session->userdata('nama_user_kategori'));
    $app = trim($this->session->userdata('app'));

        $sql_ticket = "SELECT COUNT(id_ticket) AS jml_ticket FROM ticket 
                        WHERE app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_ticket = $this->db->query($sql_ticket)->row();

        $sql_ticket_all = "SELECT COUNT(id_ticket) AS jml_ticket_all FROM ticket
                            WHERE DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_ticket_all = $this->db->query($sql_ticket_all)->row();


        $sql_ticket_solved = "SELECT COUNT(id_ticket) AS jml_ticket_solved FROM ticket 
                            WHERE status = 6 AND app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_ticket_solved = $this->db->query($sql_ticket_solved)->row();

        $sql_ticket_process = "SELECT COUNT(id_ticket) AS jml_ticket_process FROM ticket 
                            WHERE status = 4 AND app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_ticket_process = $this->db->query($sql_ticket_process)->row();

        $sql_ticket_reprocess = "SELECT COUNT(id_ticket) AS jml_ticket_reprocess FROM ticket 
                            WHERE status = 3 AND app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_ticket_reprocess = $this->db->query($sql_ticket_reprocess)->row();

        $sql_wait_ticket_approve = "SELECT COUNT(id_ticket) AS jml_ticket_approve FROM ticket 
                            WHERE status = 1 AND app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_wait_ticket_approve = $this->db->query($sql_wait_ticket_approve)->row();

        $sql_wait_ticket_solve = "SELECT COUNT(id_ticket) AS jml_ticket_solve FROM ticket 
                            WHERE status = 5 AND app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_wait_ticket_solve = $this->db->query($sql_wait_ticket_solve)->row();

        $sql_wait_ticket_cancel = "SELECT COUNT(id_ticket) AS jml_ticket_cancel FROM ticket 
                            WHERE status = 7 AND app ='$app' AND id_sub_kategori ='$sub_kategori' AND DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'";
        $row_wait_ticket_cancel = $this->db->query($sql_wait_ticket_cancel)->row();

        if($app=='ast_desktop'){
      
            $namaapp = 'AST Desktop';
        }
        else if($app=='ast_web'){

            $namaapp = 'AST Web';
        }
        else {
            $app = ' ';
        }

        $data['namaapp'] = $namaapp;
        $data['jml_ticket_all'] = $row_ticket_all->jml_ticket_all;
        $data['jml_ticket'] = $row_ticket->jml_ticket;

        $ticket_solved = $row_ticket_solved->jml_ticket_solved == 0 ? 0 :$row_ticket_solved->jml_ticket_solved;
        $ticket_process = $row_ticket_process->jml_ticket_process == 0 ? 0 :$row_ticket_process->jml_ticket_process;
        $ticket_reprocess = $row_ticket_reprocess->jml_ticket_reprocess == 0 ? 0 :$row_ticket_reprocess->jml_ticket_reprocess;
        $ticket_wait_approve = $row_wait_ticket_approve->jml_ticket_approve == 0 ? 0 :$row_wait_ticket_approve->jml_ticket_approve;
        $ticket_wait_solve = $row_wait_ticket_solve->jml_ticket_solve == 0 ? 0 :$row_wait_ticket_solve->jml_ticket_solve;
        $ticket_cancel = $row_wait_ticket_cancel->jml_ticket_cancel == 0 ? 0 :$row_wait_ticket_cancel->jml_ticket_cancel;

        $data['ticket_solved'] = $ticket_solved;
        $data['ticket_process'] = $ticket_process;
        $data['ticket_reprocess'] = $ticket_reprocess;
        $data['ticket_wait_approve'] = $ticket_wait_approve;
        $data['ticket_wait_solve'] = $ticket_wait_solve;
        $data['ticket_cancel'] = $ticket_cancel;


    $sql_kategori = "SELECT * FROM sub_kategori WHERE id_sub_kategori = '$sub_kategori'";
    $row_kategori = $this->db->query($sql_kategori)->row();

    $data['nama_sub_kategori'] = $row_kategori->nama_sub_kategori;
    
    $dataticket = $this->model_app->dataticket($sub_kategori, $awal, $akhir, $app);

    if($status==1) {
         $progress = 'TICKET CREATED';
         }
    else if($status==2) {
         $progress = 'APPROVAL INTERNAL';
        }
    else if($status==3) {
         $progress = 'MENUNGGU APPROVAL VENDOR';
        }
    else if($status==4) {
         $progress = 'PROSES VENDOR';
        }
    else if($status==5) {
         $progress = 'PENDING VENDOR';
        }
    else if($status==6) {
         $progress = 'SOLVED';
        }
    else if($status==7) {
         $progress = 'REJECTED TICKET';
        }
    else if($status==9) {
         $progress = 'ALL';
        }

    $data['progress'] = $progress;
    $data['tglAwal'] = date("d-m-Y", strtotime($awal));
    $data['tglAkhir'] = date("d-m-Y", strtotime($akhir));
    $data['dataticket'] = $dataticket;
    
    ob_start();
        $content = $this->load->view('body/pdfticket',$data);
        $content = ob_get_clean();      
        $this->load->library('html2pdf');
        
        try
        {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8',array(5, 5, 5, 8));
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
            $html2pdf->Output('Report_ticket.pdf');
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    
    }


}