<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang.. selamat belajar web programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($nilai1, $nilai2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai 1'] = $nilai1;
        $data['nilai 2'] = $nilai2;
        $data['hasil'] = $this->Model_latihan1->jumlah($nilai1, $nilai2);

        $this->load->view('view-latihan');
    }
}