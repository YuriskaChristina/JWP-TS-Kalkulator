<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpangkatan extends CI_Controller {

	public function index()
	{
		$this->load->view('perpangkatan');
	}

   public function pangkat()
   {
       $a= $_POST['a'];
       $b= $_POST['b'];
       $hasil = pow($a,$b);
       echo "Hasil dari ".$a. " ^ " .$b. " adalah ".$hasil;
   }
}
