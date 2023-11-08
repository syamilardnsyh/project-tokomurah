<?php

class Profile extends CI_Controller
{
    public $user;
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
        $this->load->helper('form');

        $this->user = $this->session->userdata('user') ?? null;
    }

    public function index()
    {
        $data = [
            'title' => 'Profile',
            'user' => $this->user
        ];

        $this->load->view('layouts/v_header', $data);
        $this->load->view('halaman/profile_view', $data);
        $this->load->view('layouts/v_footer', $data);
    }
}
