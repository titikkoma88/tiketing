<?php

class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //  ================= AUTOMATIC CODE ==================
    public function getkodeticket()
    {
        $query = $this->db->query("select max(id_ticket) as max_code FROM ticket");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 9, 4);

        $max_nik = $max_fix + 1;

        $tanggal = $time = date("d");
        $bulan = $time = date("m");
        $tahun = $time = date("Y");

        $nik = "T".$tahun.$bulan.$tanggal.sprintf("%04s", $max_nik);
        return $nik;
    }

     public function getkodeuser()
    {
        $query = $this->db->query("select max(id_user) as max_code FROM user");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 1, 4);

        $max_id_user = $max_fix + 1;

        $id_user = "U".sprintf("%04s", $max_id_user);
        return $id_user;
    }

    public function getjumlahtiketuser($awal, $akhir, $app)
    {

        $this->db->select("ticket.*, user.nama, COUNT(*) AS jumlah");
        $this->db->join('user', 'user.id_user=ticket.reported');
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.app='$app'");
        $this->db->group_by('ticket.reported');
     return $this->db->get('ticket')->result();
    }

    public function getjumlahtiketkategori($awal, $akhir, $app)
    {
        $this->db->select("ticket.*, sub_kategori.nama_sub_kategori, COUNT(*) AS jumlah");
        $this->db->join('sub_kategori', 'sub_kategori.id_sub_kategori=ticket.id_sub_kategori');
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.app='$app'");
        $this->db->group_by('ticket.id_sub_kategori');
     return $this->db->get('ticket')->result();
    }

    public function getjumlahtiketprogress($status, $sub_kategori, $awal, $akhir, $app)
    {
    if ($status == '1') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '1'");
      } else if ($status == '2') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '2'");
      } else if ($status == '3') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '3'");
      } else if ($status == '4') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '4'");
      } else if ($status == '5') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '5'");
      } else if ($status == '6') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '6'");
      } else if ($status == '7') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = '7'");
      } else if ($status == '8') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status = 8");
      } else if ($status == '9') {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND ticket.id_sub_kategori='$sub_kategori' AND ticket.app='$app' AND ticket.status IN (1,2,3,4,5,6,7)");
      } else {
        $this->db->where("DATE(ticket.tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
      }

        $this->db->select("ticket.*, sub_kategori.nama_sub_kategori, user.nama");
        $this->db->join('sub_kategori ', 'sub_kategori.id_sub_kategori=ticket.id_sub_kategori');
        $this->db->join('user ', 'user.id_user=ticket.reported');
       
     return $this->db->get('ticket')->result();
    }

    public function getjumlahtiket($jenis, $awal, $akhir)
    {
      if ($jenis == 'create') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
      } else if ($jenis == 'solved') {
        $this->db->where("DATE(tanggal_solved) BETWEEN '{$awal}' AND '{$akhir}'");
      } else {
        $this->db->where("DATE(tanggal_proses) BETWEEN '{$awal}' AND '{$akhir}'");
      }
      $this->db->select("ticket.*,");
      return $this->db->get('ticket')->result();
    }

        public function getjumlahemail($status, $awal, $akhir)
    {
      if ($status == '1') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 1");
      } else if ($status == '2') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 2");
      } else if ($status == '3') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 3");
      } else if ($status == '4') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 4");
      } else if ($status == '5') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 5");
      } else if ($status == '6') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 6");
      } else if ($status == '7') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 7");
      } else if ($status == '8') {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}' AND status = 8");
      } else {
        $this->db->where("DATE(tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
      }
      $this->db->select("tracking_email.*, user.nama,");
      $this->db->join('user', 'user.id_user=tracking_email.id_user');
      return $this->db->get('tracking_email')->result();
    }

    public function datalist_ticket($status,$app)
    {
      if ($status=="" || empty($status)){
        $kondisi="WHERE A.app='$app' AND A.status IN (1,2,3,4,5,6,7)";
      }
      else if ($status=="9"){
        $kondisi="WHERE A.app='$app'";
      }
      else{
        $kondisi="WHERE A.app='$app' AND A.status='$status'";
      }
        $query = $this->db->query("SELECT D.nama, A.status, A.id_ticket, A.tanggal, A.problem_summary, A.progress, A.app, B.nama_sub_kategori, C.nama_kategori, A.feedback
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN user D ON D.id_user = A.reported
                                   LEFT JOIN history_feedback G ON G.id_ticket = A.id_ticket
                                   $kondisi");
        return $query->result();

    }

    public function datalist_user($reported, $awal, $akhir)
    {
        $query = $this->db->query("SELECT D.nama, A.status, A.id_ticket, A.tanggal, A.problem_summary, A.reported, B.nama_sub_kategori, C.nama_kategori, A.feedback
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN user D ON D.id_user = A.reported
                                   LEFT JOIN history_feedback G ON G.id_ticket = A.id_ticket
                                   WHERE A.reported='$reported' AND DATE(A.tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
        return $query->result();

    }

    public function datareport($id_sub_kategori, $awal, $akhir, $app)
    {
        $query = $this->db->query("SELECT D.nama, A.status, A.id_ticket, A.tanggal, A.problem_summary, A.progress, A.app, B.nama_sub_kategori, C.nama_kategori, A.feedback
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN user D ON D.id_user = A.reported
                                   LEFT JOIN history_feedback G ON G.id_ticket = A.id_ticket
                                    WHERE A.id_sub_kategori='$id_sub_kategori' AND A.app='$app' AND DATE(A.tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
        return $query->result();

    }

    public function dataticket($sub_kategori, $awal, $akhir, $app)
    {

        $query = $this->db->query("SELECT D.nama, A.status, A.id_ticket, A.tanggal, A.problem_summary, A.progress, A.app, B.nama_sub_kategori, C.nama_kategori, A.feedback
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN user D ON D.id_user = A.reported
                                   LEFT JOIN history_feedback G ON G.id_ticket = A.id_ticket
                                   WHERE A.id_sub_kategori='$sub_kategori' AND A.app='$app' AND DATE(A.tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
        return $query->result();

    }

    public function datareport_kategori($id_sub_kategori, $awal, $akhir, $app)
    {
        $query = $this->db->query("SELECT D.nama, A.status, A.id_ticket, A.tanggal, A.problem_summary, A.progress, A.reported, B.nama_sub_kategori, C.nama_kategori, A.feedback
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN user D ON D.id_user = A.reported
                                   LEFT JOIN history_feedback G ON G.id_ticket = A.id_ticket
                                   WHERE A.id_sub_kategori='$id_sub_kategori' AND A.app='$app' AND DATE(A.tanggal) BETWEEN '{$awal}' AND '{$akhir}'");
        return $query->result();

    }

    public function tampil_user()
    {
    $query = $this->db->query('SELECT reported count(reported) AS jumlah FROM ticket GROUP BY reported"');
    return $query->result();    
    }


    public function data_trackingticket($id)
    {

        $query = $this->db->query("SELECT A.tanggal, A.hari, A.bulan, A.tahun, A.status, A.deskripsi, A.id_tracking, B.nama
                                   FROM tracking A 
                                   LEFT JOIN user B ON B.id_user = A.id_user
                                   WHERE A.id_ticket ='$id'");
        return $query->result();

    }


    public function datainformasi()
    {

        $query = $this->db->query("SELECT A.tanggal, A.subject, A.pesan, C.nama, A.id_informasi
                                   FROM informasi A 
                                   LEFT JOIN user C ON C.id_user =  A.id_user
                                   WHERE A.status = 1");
        return $query->result();

    }

    public function datamyticket($id,$app)
    {
        $query = $this->db->query("SELECT A.progress, A.tanggal_proses, A.tanggal_solved, A.id_support, D.feedback AS feedback_history, A.feedback AS feedback_user, A.status, A.id_ticket, A.tanggal, A.problem_summary, B.nama_sub_kategori, C.nama_kategori, E.id_user, A.reported, E.email AS email_reported, F.email AS email_support
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                                   LEFT JOIN history_feedback D ON D.id_ticket = A.id_ticket
                                   LEFT JOIN user E ON E.id_user = A.reported
                                   LEFT JOIN user F ON F.id_user = A.id_support
                                   WHERE A.reported = '$id' and A.app='$app'");
    return $query->result();
    }

    public function datamyticketspv()
    {
        $query = $this->db->query("SELECT A.progress, A.tanggal_proses, A.tanggal_solved, A.id_support, D.feedback AS feedback_history, A.feedback AS feedback_user, A.status, A.id_ticket, A.tanggal, A.problem_summary, B.nama_sub_kategori, C.nama_kategori, E.id_user, E.nama, A.reported, E.email AS email_reported, F.email AS email_support
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                                   LEFT JOIN history_feedback D ON D.id_ticket = A.id_ticket
                                   LEFT JOIN user E ON E.id_user = A.reported
                                   LEFT JOIN user F ON F.id_user = A.id_support
                                   WHERE A.status IN (4,5)");
    return $query->result();
    }

    public function datamyassignment($id,$app)
    {
        $query = $this->db->query("SELECT A.progress, A.status, A.progress, A.id_ticket, A.reported, A.tanggal, A.problem_summary, B.nama_sub_kategori, C.nama_kategori, D.email AS email_reported, E.email AS email_support, G.feedback

                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN user D ON D.id_user = A.reported
                                   LEFT JOIN user E ON E.id_user = A.id_support
                                   LEFT JOIN history_feedback G ON G.id_ticket = A.id_ticket
                                   WHERE E.id_user = '$id' AND A.app='$app'
                                   AND A.status IN (3,4,5)
                                   ");
        return $query->result();
    }

     public function dataapproval($id)
    {
    $query = $this->db->query("SELECT A.status, D.nama ,A.status, A.id_ticket, A.tanggal, A.problem_summary, B.nama_sub_kategori, C.nama_kategori 
        FROM ticket A 
        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
        LEFT JOIN user D ON D.id_user = A.reported
        LEFT JOIN user_app E ON D.id_user = E.id_user AND A.app = E.app 
        WHERE E.app='$id' AND A.status = 1 OR  A.status= 7");
    return $query->result();
    }

     public function datadepartemen()
    {
    $query = $this->db->query('SELECT * FROM departemen');
    return $query->result();
    }

     public function databagiandepartemen()
    {
    $query = $this->db->query('SELECT * FROM bagian_departemen A LEFT JOIN departemen B ON B.id_dept = A.id_dept');
    return $query->result();
    }

    public function datakondisi()
    {
    $query = $this->db->query('SELECT * FROM kondisi');
    return $query->result();
    }

    public function datauser()
    {
         $query = $this->db->query('SELECT * FROM user');

         return $query->result();
    }

    public function datauser_app()
    {
         $query = $this->db->query('SELECT A.id, A.app, A.akses, B.id_user, B.nama  
                                    FROM user_app A 
                                    LEFT JOIN user B ON B.id_user = A.id_user
                                    ORDER BY B.id_user ASC');

         return $query->result();
    }

    public function datakategori()
    {
    $query = $this->db->query('SELECT * FROM kategori');
    return $query->result();
    }

    public function dataakses()
    {
    $query = $this->db->query('SELECT * FROM user_akses');
    return $query->result();
    }

    public function dataaplikasi()
    {
    $query = $this->db->query('SELECT * FROM aplikasi');
    return $query->result();
    }

    public function dataassigment($id)
    {
    $query = $this->db->query('SELECT A.status, D.nama, C.id_kategori, A.id_ticket, A.tanggal, B.nama_sub_kategori, C.nama_kategori
                FROM ticket A 
                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
                LEFT JOIN user D ON D.id_user = A.reported 
                WHERE A.id_teknisi = "$id"');
    return $query->result();
    }

    public function datasubkategori()
    {
    $query = $this->db->query('SELECT * FROM sub_kategori A LEFT JOIN kategori B ON B.id_kategori = A.id_kategori ');
    return $query->result();
    }

    public function tampil_tgl($tgl1, $tgl2)
    {
    $query = $this->db->query('SELECT * FROM ticket WHERE tanggal BETWEEN "$tgl1" AND "$tgl2"');
    return $query->result();    
    }

    public function dropdown_user()
    {
        $sql = "SELECT * FROM user ORDER BY nama";
            $query = $this->db->query($sql);
            
            $value[''] = '-- PILIH --';
            foreach ($query->result() as $row){
                $value[$row->id_user] = $row->nama;
            }
            return $value;
    }

    public function dropdown_kondisi()
    {
        $sql = "SELECT * FROM kondisi ORDER BY nama_kondisi";
        $query = $this->db->query($sql);
            
        $value[''] = '-- PILIH --';
        foreach ($query->result() as $row){
            $value[$row->id_kondisi] = $row->nama_kondisi."  -  (TARGET PROSES ".$row->waktu_respon." "."HARI)";
        }
        return $value;
    }

    function dropdown_support()
    {

        $sql = "SELECT * FROM user";
        $query = $this->db->query($sql);
            
        $value[''] = '-- PILIH --';
        foreach ($query->result() as $row){
            $value[$row->id_user] = $row->nama;
        }
        return $value;

    }

    public function dropdown_level()
    {
        $value[''] = '-- PILIH --';            
        $value['ADMIN'] = 'ADMIN';
        $value['VENDOR'] = 'VENDOR';
        $value['USER'] = 'USER';
        $value['SUPERVISOR'] = 'SUPERVISOR';           
            
            return $value;
    }

     public function dropdown_kategori()
    {
        $sql = "SELECT * FROM kategori ORDER BY nama_kategori";
        $query = $this->db->query($sql);
            
            $value[''] = '-- PILIH --';
            foreach ($query->result() as $row){
                $value[$row->id_kategori] = $row->nama_kategori;
            }
            return $value;
    }

    public function dropdown_sub_kategori($id_kategori)
    {
        $sql = "SELECT * FROM sub_kategori where id_kategori ='$id_kategori' ORDER BY nama_sub_kategori";
        $query = $this->db->query($sql);
            
        $value[''] = '-- PILIH --';
        foreach ($query->result() as $row){
            $value[$row->id_sub_kategori] = $row->nama_sub_kategori;
        }
        return $value;
    }

    public function dropdown_ket_kategori()
    {
        $value[''] = '-- PILIH --';            
        $value['modernland'] = 'Modernland User';
        $value['vendor'] = 'Vendor Support';
            
            return $value;
    }

    public function dropdown_user_akses()
    {
        $sql = "SELECT * FROM user_akses ORDER BY user";
        $query = $this->db->query($sql);
            
        $value[''] = '-- PILIH --';
        foreach ($query->result() as $row){
            $value[$row->id_akses] = $row->user;
        }
        return $value;
    }

    public function dropdown_user_kategori()
    {
        $sql = "SELECT * FROM user_akses";
        $query = $this->db->query($sql);
            
        $value[''] = '-- PILIH --';
        foreach ($query->result() as $row){
              $value[$row->user] = strtolower($row->user);
        }
        return $value;
    }

     public function dropdown_app()
    {
        $sql = "SELECT * FROM aplikasi";
        $query = $this->db->query($sql);
            
        $value[''] = '-- PILIH --';
        foreach ($query->result() as $row){
              $value[$row->nama_app] = ucwords(str_replace("_", " ", $row->nama_app));
        }
        return $value;
    }

    public function dropdown_status_ticket()
    {
        $value[''] = '--PILIH--';            
        $value['1'] = 'CREATED TICKET';
        $value['2'] = 'APPROVED TICKET';
        $value['3'] = 'COMPLAIN / REPROCESS TICKET';
        $value['4'] = 'PROCESS TICKET';
        $value['5'] = 'COMPLETE TICKET';
        $value['6'] = 'SOLVED TICKET';
        $value['7'] = 'REJECTED TICKET';
        $value['8'] = 'CONFIRM NEW TICKET';           
            
            return $value;
    }

        public function dropdown_status_progress()
    {
        $value['9'] = 'TAMPILKAN SEMUA';            
        $value['1'] = 'CREATED TICKET';
        $value['2'] = 'APPROVED TICKET';
        $value['3'] = 'COMPLAIN / REPROCESS TICKET';
        $value['4'] = 'PROCESS TICKET';
        $value['5'] = 'COMPLETE TICKET';
        $value['6'] = 'SOLVED TICKET';
        $value['7'] = 'REJECTED TICKET';
        $value['8'] = 'CONFIRM NEW TICKET';           
            
            return $value;
    }

  function insertData($table,$data)
  {
    $this->db->insert($table,$data);
  }

  function file($id_ticket)
  {
  $this->db->select('*');
  $this->db->from('file');
  $this->db->where('id_ticket',$id_ticket);
  $query = $this->db->get();
  return $query->result();
    }

public function cari_file($id_file){
        $this->db->select('*');
        $this->db->from('file');
        $this->db->where('id_file',$id_file);
        $query = $this->db->get();
        return $query->result();
  }

    function hapus_data($table,$field,$uid)
    {
      $this->db->delete($table, array($field => $uid)); 
    }

}