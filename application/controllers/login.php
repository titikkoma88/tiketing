<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }

    
function index()
    {
        $data = "";

	    $data['dd_app'] = $this->model_app->dropdown_app();
	    $data['id_app'] = "";

        $this->load->view('login', $data);
    }


  function login_akses()
  {
  	//echo 'test';exit();
  	$username = trim($this->input->post('username'));
  	
  	$password = md5(trim($this->input->post('password')));

    $id_app = trim($this->input->post('id_app'));
  	
	$akses = $this->db->query("SELECT A.id_user, A.username, A.password, A.nama, A.level, B.id_user, B.app FROM user A 
	LEFT JOIN user_app B ON B.id_user = A.id_user WHERE A.username = '$username' AND A.password = '$password' AND B.app ='$id_app'");

    if($akses->num_rows() == 1)
	{
	
	foreach($akses->result_array() as $data)
	{

	$session['username'] = $data['username'];
	$session['id_user'] = $data['id_user'];
	$session['nama'] = $data['nama'];
	$session['level'] = $data['level'];
	$session['app'] = $data['app'];

	$this->session->set_userdata($session);
    redirect('home');
	}
	
	}
	else
	{
	$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> username / Password salah.
			    </div>");
	redirect('login');
	}

	
  }


  public function logout() {

  $this->session->sess_destroy();

  redirect('login');
    


}


    
}
