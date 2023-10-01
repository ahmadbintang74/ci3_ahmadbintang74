<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    function __contruct(){
        parent::__contruct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header.php',$data);
        $this->load->view('v_index.php',$data);
        $this->load->view('v_footer.php',$data);
    }

    public function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header.php',$data);
        $this->load->view('v_about.php',$data);
        $this->load->view('v_footer.php',$data);
    }
}