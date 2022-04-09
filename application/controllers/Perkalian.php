<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('perkalian');
    }

    public function perkalian()
    {
        $angka1 = $this->input->post("angka1");
        $angka2 = $this->input->post("angka2");
        $jumlah = $angka1 * $angka2;
        $data['jumlah'] = $jumlah;
        echo "Hasil dari ".$angka1." x ".$angka2." adalah ".$jumlah;
    }
}
