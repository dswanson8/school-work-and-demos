<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$data['heading'] = "Error 404: It's a trap!!";
		$data['pictures'] = "error404.png";

		$this->load->view('includes/header');
		$this->load->view('error404_view', $data);
		$this->load->view('includes/footer');
	}


}