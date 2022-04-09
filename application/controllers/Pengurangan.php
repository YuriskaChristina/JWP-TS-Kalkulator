<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurangan extends CI_Controller {

	public function index()
	{
		$this->load->view('pengurangan');
	}

    public function hasil()
    {
        $a=$_POST['bil1'];
        $b=$_POST['bil2'];
        $hasil=$a-$b;
        echo "Hasil dari " .$a. " - " .$b. " adalah " .$hasil;
    }
}