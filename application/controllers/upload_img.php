<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Upload_Img extends CI_Controller {

  

  function __construct() {

  parent::__construct();

  $this->load->helper(array('url','html','form'));

  }

    public function index() {

   $this->load->view('uploadimg');

  }

 
  public function upload() {

   if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];

    $fileName = $_FILES['file']['name'];

    $fileType = $_FILES['file']['type'];

    $fileSize = $_FILES['file']['size'];

    $targetPath = './assets/uploads/';

    $targetFile = $targetPath . $fileName ;

    move_uploaded_file($tempFile, $targetFile);


    $this->db->insert('gambar',array('type' => $fileType, 'nama' => $fileName, 'ukuran' => $fileSize));

     }

  }

 }

?>