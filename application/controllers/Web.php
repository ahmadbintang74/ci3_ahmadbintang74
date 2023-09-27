<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    function __contruct(){
        parent::__contruct();
    }
}

public function index(){
    $data['judul'] = "halaman depan";
    $this->load->view('v_header.php',$data);
    $this->load->view('v_index.php',$data);
    $this->load->view('v_footer.php',$data);
}