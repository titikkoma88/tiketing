<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library(array('template'));
		$this->load->library(array('templateus'));

		if(!$this->session->userdata('id_user'))
       	{
        	$this->session->set_flashdata("sukses", "login terlebih dahulu.");
       		redirect('login');
        }
	}

	public function index()
	{
		$data = array('title' => 'Dashboard', );
		//$this->template->admin('konten/dashboard',$data);
		$this->templateus->user('konten/dashboard_user',$data);
	}
}
