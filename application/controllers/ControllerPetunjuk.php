<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPetunjuk extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}

	// tampil list picker dan get session
	public function index()
	{
		$username = $this->session->username;
		$data['username'] = $username;

		$this->load->view('petunjuk');	
	}

	

}