<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$data['heading'] = "CI Home Page";

		$this->load->view('includes/header');
		$this->load->view('home_view', $data);
		$this->load->view('includes/footer');
	}

	public function test() {

		$myArray['thisHeading'] = "Lose Yourself";
		$myArray['description'] = "His palms are sweaty, knees weak, arms are heavy. There's vomit on his sweater already - mom's spaghetti.";

		$this->load->view('includes/header');
		$this->load->view('test_view', $myArray); //have to add the array as a second parameter to make it accessible.
		$this->load->view('includes/footer');
	}
}