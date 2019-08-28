<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{

		$this->load->view('login_view');
	//	$path = './assets/captcha/'; //-posisi folder captcha

		//-logic folder captcha jika tidak ada
	//	if (!file_exists($path)) {
	//		$buat = mkdir($path,0777); //membuat folder captcha
	//		if (!$buat) {
	//			return;
	//		}
	//	}
		//-menampilkan huruf acak untuk dijadikan captcha
	//	$kata = array_merge(range('0', '9'),range('A', 'Z'));
	//	$acak = shuffle($kata);
	//	$str  = substr(implode($kata), 0,5); //-dimulai dari 0 dengan panjang 5 huruf dari hasil acak tadi

		//-menyimpan huruf acak tersebut ke dalam session
	//	$data_ses = array('captcha_str'=>$str);
	//	$this->session->set_userdata($data_ses);

		//-array untuk menampilkan gambar captcha
	//	$vals = array(
	//		'word' => $str,
	//		'img_path' => $path,
	//		'img_url' => base_url().'assets/captcha/',
	//		'img_width' => '150',
	//		'img_height' => 40,
	//		'expiration' => 7200
	//	);
	//	$capc = create_captcha($vals);
	//	$data['captcha_image'] = $capc['image'];

	//	$this->load->view('login_view',$data);

	}
	public function kirim()
	{
	//	$po_captcha = $this->input->post('captcha');
		
	//	if ($po_captcha != $this->session->userdata('captcha_str')) {
	//		$this->session->set_flashdata('notif','
	//			<div class="alert alert-warning"> Captcha Salah </div>
	//			');
	//		redirect('login');

	//	} else {

			$user = trim($this->input->post('user'));
			$pass = md5(trim($this->input->post('pass')));

			$akses = $this->db->query("select id_user, username, nama, level, foto FROM user 
				WHERE username = '$user' AND password = '$pass'");

    		if($akses->num_rows() == 1)
			{
				foreach($akses->result_array() as $data)
				{

					$session['username'] = $data['username'];
					$session['id_user'] = $data['id_user'];
					$session['nama'] = $data['nama'];
					$session['level'] = $data['level'];
					$session['foto'] = $data['foto'];

					$this->session->set_userdata($session);

					$level = $data['level'];
					if ($level == 'admin') {
						redirect('homeadmin/index');

					} elseif ($level == 'peminjam') {
						redirect('homeuser/index');

					} elseif ($level == 'manager') {
						redirect('homemanager/index');
					}
				
				}

			} else {

				$this->session->set_flashdata('notif', '
					<div class="alert bg-danger" role="alert">
			    	 username / Password salah.
			    	</div>
			    	');
				redirect('login');
			}
	//	}
	}
	public function ceklogin()
	{
		
			$user = trim($this->input->post('user'));
			$pass = trim($this->input->post('pass'));

			$this->load->model('App_model');
			$cek  = $this->App_model->proseslogin($user,$pass);
			$hasil = count((array)$cek);
			if ($hasil > 0) {
				echo 'Login Berhasil';
			} else {
				$this->session->set_flashdata('notif', '
					<div class="alert bg-danger" role="alert">
			    	 username / Password salah.
			    	</div>
			    	');
				redirect('login');
			}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
  		redirect('login');
	}
}
