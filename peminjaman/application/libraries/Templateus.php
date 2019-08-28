<?php 
/**
 * 
 */
class Templateus
{
	protected $_CI;
	public function __construct()
	{
		$this->_CI=&get_instance();
	}
	public function user($user,$data=null)
	{
		$data['header'] =  $this->_CI->load->view('templateus/header',$data,true);
		$data['konten'] =  $this->_CI->load->view($user,$data,true);
		$this->_CI->load->view('templateus/template_user.php',$data);
	}
}