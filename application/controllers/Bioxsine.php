<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioxsine extends CI_Controller {

	public function index()
	{
		//$data=array('title'=>'BioxsineIndonesia','isi' =>'nav_bar/nav_bar');
		$this->load->view('landing');
	}
}
