<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioxsine extends CI_Controller {

	public function index()
	{
		$data=array('title'=>'Bioxsine Indonesia - Mazta Farma');
		$this->load->view('landing',$data);
	}
}
