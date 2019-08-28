<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Nup extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$cari_nup = "SELECT * FROM nup WHERE nnup IN (SELECT MAX(nnup) FROM nup)";
        $row = $this->db->query($cari_nup)->row();
        $data['nup'] = $row->nnup;


		$this->load->view('nup', $data);
	}

	public function input()
	{
		$nup = $this->input->post('nup');

		$data['nnup'] = $nup;
		
		$this->load->view('submit_nup', $data);
	}

	public function simpan()
	{
		$nup = $this->input->post('nup');

		$data['nnup'] = $nup;

		$this->db->trans_start();

		$this->db->insert('nup', $data);

		$this->db->trans_complete();

		redirect('nup/input');
	}

	public function antrian()
	{
		
		$this->load->view('konten/antrian');
	}
	
}