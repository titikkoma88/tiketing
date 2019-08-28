<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $data['body']   = "body/user";

        $id_user = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));

        $data['link'] = "user/hapus";

        $datauser = $this->model_app->datauser();
        $data['datauser'] = $datauser;
        
        $this->load->view('template', $data);

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

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_user";

        $id_user = trim($this->session->userdata('id_user'));

        $data['dd_level'] = $this->model_app->dropdown_level();
        $data['id_level'] = "";
    
        $data['nama'] = "";
        $data['alamat'] = "";
        $data['email'] = "";
        $data['username'] = "";
        $data['password'] = "";
        $data['id_user'] = "";

        $data['url'] = "user/save";

        $data['flag'] = "add";
    
        $this->load->view('template', $data);

 }

  function save()
 {
    $getkodeuser = $this->model_app->getkodeuser();
    $id_user = $getkodeuser;

    $nama = strtoupper(trim($this->input->post('nama')));
    $alamat = strtoupper(trim($this->input->post('alamat')));
    $email = strtolower(trim($this->input->post('email')));

    $username = trim($this->input->post('username'));
    $password = trim($this->input->post('password'));
    $id_level = strtoupper(trim($this->input->post('id_level')));

    $data['id_user'] = $id_user;
    $data['nama'] = $nama;
    $data['alamat'] = $alamat;
    $data['email'] = $email;
    $data['username'] = $username;
    $data['password'] = md5($password);
    $data['level'] = $id_level;
    

    $this->db->trans_start();

    $this->db->insert('user', $data);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE)
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
                </div>");
                redirect('user/user_list'); 
            } else 
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>");
                redirect('user/user_list'); 
            }
        
 }

function edit($id)
 {

        $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_user";

        $id_user = trim($this->session->userdata('id_user'));
        $app = trim($this->session->userdata('app'));

        $sql = "SELECT * FROM user WHERE id_user = '$id'";
        $row = $this->db->query($sql)->row();

        $data['url'] = "user/update";
    
        $data['id_user'] = $row->id_user;
        $data['nama'] = $row->nama;
        $data['alamat'] = $row->alamat;
        $data['email'] = $row->email;

        $data['username'] = $row->username;
        $data['password'] = "";

        $data['dd_level'] = $this->model_app->dropdown_level();
        $data['id_level'] = $row->level;

        $data['flag'] = "edit";

        $this->load->view('template', $data);

 }


function update()
 {

    $id_user = strtoupper(trim($this->input->post('id_user')));    
    $nama = strtoupper(trim($this->input->post('nama')));
    $alamat = strtoupper(trim($this->input->post('alamat')));
    $email = strtolower(trim($this->input->post('email')));

    $username = trim($this->input->post('username'));
    $password = trim($this->input->post('password'));
    
    $id_level = strtoupper(trim($this->input->post('id_level')));

    $data['nama'] = $nama;
    $data['alamat'] = $alamat;
    $data['email'] = $email;

    $data['username'] = $username;
    $data['password'] = md5($password);
    
    $data['level'] = $id_level;
        
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
                redirect('user/user_list'); 
            } else 
            {
                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
                </div>");
                redirect('user/user_list'); 
            }

 }

}
