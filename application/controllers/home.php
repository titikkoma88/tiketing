<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){
        parent::__construct();
        

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
        $data['body'] = "body/dashboard";

        $id_user = trim($this->session->userdata('id_user'));
        $nama_user_kategori = trim($this->session->userdata('nama_user_kategori'));
        $app = trim($this->session->userdata('app'));

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


        $sql_ticket = "SELECT COUNT(id_ticket) AS jml_ticket FROM ticket where app ='$app'";
		$row_ticket = $this->db->query($sql_ticket)->row();

        $sql_ticket_all = "SELECT COUNT(id_ticket) AS jml_ticket_all FROM ticket";
		$row_ticket_all = $this->db->query($sql_ticket_all)->row();

		$sql_user = "SELECT COUNT(A.id_user) AS jml_user FROM user A LEFT JOIN user_app B ON A.id_user = B.id_user where B.app ='$app'";
		$row_user = $this->db->query($sql_user)->row();


		$sql_ticket_solved = "SELECT COUNT(id_ticket) AS jml_ticket_solved FROM ticket where status = 6 AND app ='$app'";
		$row_ticket_solved = $this->db->query($sql_ticket_solved)->row();

		$sql_ticket_process = "SELECT COUNT(id_ticket) AS jml_ticket_process FROM ticket WHERE status = 4 AND app ='$app'";
		$row_ticket_process = $this->db->query($sql_ticket_process)->row();

		$sql_ticket_reprocess = "SELECT COUNT(id_ticket) AS jml_ticket_reprocess FROM ticket WHERE status = 3 AND app ='$app'";
		$row_ticket_reprocess = $this->db->query($sql_ticket_reprocess)->row();

		$sql_wait_ticket_approve = "SELECT COUNT(id_ticket) AS jml_ticket_approve FROM ticket WHERE status = 1 AND app ='$app'";
		$row_wait_ticket_approve = $this->db->query($sql_wait_ticket_approve)->row();

		$sql_wait_ticket_solve = "SELECT COUNT(id_ticket) AS jml_ticket_solve FROM ticket WHERE status = 5 AND app ='$app'";
		$row_wait_ticket_solve = $this->db->query($sql_wait_ticket_solve)->row();

		$sql_wait_ticket_cancel = "SELECT COUNT(id_ticket) AS jml_ticket_cancel FROM ticket WHERE status = 7 AND app ='$app'";
		$row_wait_ticket_cancel = $this->db->query($sql_wait_ticket_cancel)->row();


        $sql_ticket_app_int = "SELECT COUNT(a.id_ticket) AS jml_ticket_app_int FROM ticket a
        						LEFT JOIN user b ON a.reported=b.id_user WHERE a.status = 1 ";

		$row_ticket_app_int = $this->db->query($sql_ticket_app_int)->row();


		//KEPUASAN USER			
		$data['jml_ticket_all'] = $row_ticket_all->jml_ticket_all;
		$data['jml_ticket'] = $row_ticket->jml_ticket;
		$data['jml_user'] = $row_user->jml_user;


		$precent_ticket_solved = $row_ticket->jml_ticket == 0 ? 0 : $row_ticket_solved->jml_ticket_solved / $row_ticket->jml_ticket * 100;

		$precent_ticket_process = $row_ticket->jml_ticket == 0 ? 0 : $row_ticket_process->jml_ticket_process / $row_ticket->jml_ticket * 100;

		$precent_ticket_reprocess = $row_ticket->jml_ticket == 0 ? 0 : $row_ticket_reprocess->jml_ticket_reprocess / $row_ticket->jml_ticket * 100;

		$precent_ticket_wait_approve = $row_ticket->jml_ticket == 0 ? 0 : $row_wait_ticket_approve->jml_ticket_approve / $row_ticket->jml_ticket * 100;

		$precent_ticket_wait_solve = $row_ticket->jml_ticket == 0 ? 0 : $row_wait_ticket_solve->jml_ticket_solve / $row_ticket->jml_ticket * 100;

		$precent_ticket_cancel = $row_ticket->jml_ticket == 0 ? 0 : $row_wait_ticket_cancel->jml_ticket_cancel / $row_ticket->jml_ticket * 100;

		$precent_ticket_app_int = $row_ticket->jml_ticket == 0 ? 0 : $row_ticket_app_int->jml_ticket_app_int / $row_ticket->jml_ticket * 100;

		//$precent_ticket_app_tek = $row_ticket->jml_ticket == 0 ? 0 : $row_ticket_app_tek->jml_ticket_app_tek / $row_ticket->jml_ticket * 100;

		$ticket_solved = $row_ticket_solved->jml_ticket_solved == 0 ? 0 :$row_ticket_solved->jml_ticket_solved;
		$ticket_process = $row_ticket_process->jml_ticket_process == 0 ? 0 :$row_ticket_process->jml_ticket_process;
		$ticket_reprocess = $row_ticket_reprocess->jml_ticket_reprocess == 0 ? 0 :$row_ticket_reprocess->jml_ticket_reprocess;
		$ticket_wait_approve = $row_wait_ticket_approve->jml_ticket_approve == 0 ? 0 :$row_wait_ticket_approve->jml_ticket_approve;
		$ticket_wait_solve = $row_wait_ticket_solve->jml_ticket_solve == 0 ? 0 :$row_wait_ticket_solve->jml_ticket_solve;
		$ticket_cancel = $row_wait_ticket_cancel->jml_ticket_cancel == 0 ? 0 :$row_wait_ticket_cancel->jml_ticket_cancel;


		$tot_ticket_waiting = $row_ticket_app_int->jml_ticket_app_int;

        if($app=='ast_desktop'){
      
            $namaapp = 'AST DESKTOP';
        }
        else if($app=='ast_web'){

            $namaapp = 'AST WEB';
        }
        else {
            $app = ' ';
        }
		
		$data['app'] = $app;
   		$data['namaapp'] = $namaapp;
		$data['ticket_solved'] = $ticket_solved;
		$data['ticket_process'] = $ticket_process;
		$data['ticket_reprocess'] = $ticket_reprocess;
		$data['ticket_wait_approve'] = $ticket_wait_approve;
		$data['ticket_wait_solve'] = $ticket_wait_solve;
		$data['ticket_cancel'] = $ticket_cancel;


		$data['jml_ticket_solved'] = $precent_ticket_solved;
		$data['jml_ticket_process'] = $precent_ticket_process;
		$data['jml_ticket_reprocess'] = $precent_ticket_reprocess;
		$data['jml_ticket_wait_approve'] = $precent_ticket_wait_approve;
		$data['jml_ticket_wait_solve'] = $precent_ticket_wait_solve;
		$data['jml_ticket_cancel'] = $precent_ticket_cancel;	
		$data['jml_ticket_app_int'] = $precent_ticket_app_int;
		//$data['jml_ticket_app_tek'] = $precent_ticket_app_tek;


		$sql_feedback = "SELECT COUNT(id_feedback) AS jml_feedback FROM history_feedback";
		$row_feedback = $this->db->query($sql_feedback)->row();

		$sql_feedback_positiv = "SELECT COUNT(id_feedback) AS jml_feedback_positiv FROM history_feedback WHERE feedback =1";
		$row_feedback_positiv = $this->db->query($sql_feedback_positiv)->row();

		$sql_feedback_negativ = "SELECT COUNT(id_feedback) AS jml_feedback_negativ FROM history_feedback WHERE feedback =0";
		$row_feedback_negativ = $this->db->query($sql_feedback_negativ)->row();

		$data['ticket_unsolved'] = $row_feedback_positiv->jml_feedback_positiv + $row_feedback_negativ->jml_feedback_negativ;


		if($row_feedback_positiv->jml_feedback_positiv == 0)
		{
		$data['jml_feedback_positiv'] = 0;
		}
		else
		{
		$data['jml_feedback_positiv'] = $row_feedback_positiv->jml_feedback_positiv / $row_feedback->jml_feedback * 100;	
		}	

		

		if($row_feedback_negativ->jml_feedback_negativ == 0)
		{
		$data['jml_feedback_negativ'] = 0;
		}
		else
		{
		$data['jml_feedback_negativ'] = $row_feedback_negativ->jml_feedback_negativ / $row_feedback->jml_feedback * 100;	
		}	
       

        $this->load->view('template', $data);
    }
    
}
