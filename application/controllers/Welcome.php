<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'user' => $this->session->userdata('user') ?? null
		];

		$this->load->view('layouts/v_header', $data);
		$this->load->view('v_home', $data);
		$this->load->view('layouts/v_footer', $data);
	}
}
