<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo extends CI_Controller {

	public function index()
	{
		$this->load->view('modulo');
	}

   public function modul(){
       $a= $_POST['a'];
       $b= $_POST['b'];
       
       $hasil = $a%$b;
       echo "Hasil dari ".$a." mod ".$b." adalah ".$hasil;
   }
}
