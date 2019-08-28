<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_App extends CI_Controller {

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


 function user_list()
 {
        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar']= "sidebar/sidebar";
        $data['body']   = "body/user_app";

        $data['link'] = "user_app/hapus";

        $datauser_app = $this->model_app->datauser_app();
        $data['datauser_app'] = $datauser_app;
        
        $this->load->view('template', $data);

 }

  function hapus()
 {
    $id = $_POST['id'];

    $this->db->trans_start();

    $this->db->where('id', $id);
    $this->db->delete('user_app');

    $this->db->trans_complete();
    
 }

function add()
 {

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_user_app";
        
        $data['id'] = "";

        $data['dd_nmuser'] = $this->model_app->dropdown_user();
        $data['id_nmuser'] = "";

        $data['dd_ket_kategori'] = $this->model_app->dropdown_ket_kategori();
        $data['id_ket_kategori'] = "";

        $data['dd_app'] = $this->model_app->dropdown_app();
        $data['id_app'] = "";
    
        $data['url'] = "user_app/save";

        $data['flag'] = "add";
    
        $this->load->view('template', $data);

 }

  function save()
 {

    $id_user         = trim($this->input->post('id_nmuser'));
    $id_ket_kategori = trim($this->input->post('id_ket_kategori'));
    $id_app          = trim($this->input->post('id_app'));
    $id_akses          = trim($this->input->post('id_akses'));

    $data['app'] = $id_app;
    $data['akses'] = $id_ket_kategori;
    $data['id_user'] = $id_user;
    $data['id_akses'] = $id_akses;

    $sql = "SELECT * FROM user_app WHERE id_user ='$id_user' AND akses ='$id_ket_kategori' AND app ='$id_app'";

    $row = $this->db->query($sql)->row();

    if($row != NULL)
    {
           
       echo "<script>window.alert('data sudah ada');
        window.history.back()</script>";  
      
    } else {


    
    $this->db->trans_start();

    $this->db->insert('user_app', $data);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
                </div>");
                redirect('user_app/user_list'); 
            } else 
            {
                redirect('user_app/user_list');
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>"); 
            }
    }
 }

function edit($id)
 {

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_user_app";

        $sql = "SELECT A.id_user, A.akses, A.app, C.user FROM user_app A 
                LEFT JOIN user B ON B.id_user = A.id_user 
                LEFT JOIN user_akses C ON C.akses = A.akses WHERE A.id = '$id'";
        $row = $this->db->query($sql)->row();

        //echo $sql;exit();

        $data['url'] = "user_app/update";

        $data['id'] = $id;
 
        $data['dd_nmuser'] = $this->model_app->dropdown_user();
        $data['id_nmuser'] = $row->id_user;

        $data['dd_ket_kategori'] = $this->model_app->dropdown_ket_kategori();
        $data['id_ket_kategori'] = $row->akses;

        $data['dd_akses'] = $this->model_app->dropdown_user_akses('id_ket_kategori');
        $data['id_akses'] = $row->user;

        $data['dd_app'] = $this->model_app->dropdown_app();
        $data['id_app'] = $row->app;


        $data['flag'] = "edit";

        $this->load->view('template', $data);

 }


function update()
 {
    $id                 = trim($this->input->post('id'));
    $id_user            = trim($this->input->post('id_nmuser'));
    $id_ket_kategori    = trim($this->input->post('id_ket_kategori'));
    $id_app             = trim($this->input->post('id_app'));
    //$id_akses           = trim($this->input->post('id_akses'));

    $data['akses']   = $id_ket_kategori;
    $data['app']     = $id_app;
    $data['id_user'] = $id_user;
    //$data['id_akses'] = $id_akses;
        
    $this->db->trans_start();

    $this->db->where('id', $id);
    $this->db->update('user_app', $data);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
                </div>");
                redirect('user_app/user_list'); 
            } else 
            {
                redirect('user_app/user_list'); 
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>");
                
            }   
 }

}
