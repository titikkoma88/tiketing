<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

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

    
function view()
    {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/profil";

        $id = trim($this->session->userdata('id_user'));
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

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_support='$id'";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        $sql_myticket = "SELECT COUNT(id_ticket) AS jml_my_ticket FROM ticket WHERE reported='$id' AND status IN (1,2,3,4,5)";
        $row_myticket = $this->db->query($sql_myticket)->row();

        $data['notif_myticket'] = $row_myticket->jml_my_ticket;

        //end notification

       $id = $this->session->userdata('id_user');

        $sql = 
        "SELECT A.id_user, A.nama, A.alamat, A.level, A.username, A.password, C.user 
        FROM user A 
        LEFT JOIN user_app B ON A.id_user = B.id_user
        LEFT JOIN user_akses C ON B.id_akses = C.id_akses 
        WHERE A.id_user ='$id'
        GROUP BY A.id_user";

        $row = $this->db->query($sql)->row();

        $data['url'] = "profile/update";

        //general
        $data['id_user'] = $row->id_user;
        $data['nama'] = $row->nama;
        $data['alamat'] = $row->alamat;

        //bussines
        //$data['akses'] = $row->akses;
        $data['level'] = $row->level;
        $data['user'] = $row->user;

        //info jabatan
        //$data['dept'] = $row->nama_dept;
        //$data['bagian'] = $row->nama_bagian_dept;

        $data['username'] = $row->username;
        $data['password'] = $row->password;

	
        $this->load->view('template', $data);
    }

function update()
 {

    $id_user = trim($this->input->post('id_user'));
 
    $password = trim($this->input->post('password'));
    
    $data['password'] = md5($password);
    

    $this->db->trans_start();

    $this->db->where('id_user', $id_user);
    $this->db->update('user', $data);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
                </div>");
                redirect('home'); 
            } else 
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>");
                redirect('home'); 
            }

 }

    
}
