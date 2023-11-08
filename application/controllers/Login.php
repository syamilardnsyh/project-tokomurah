<?php
class Login extends CI_Controller
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
        if ($this->input->post()) {
            $this->process_login();
        }

        $data = [
            'title' => 'Login',
            'user' => $this->user
        ];

        $this->load->view('layouts/v_header', $data);
        $this->load->view('halaman/login_view', $data);
        $this->load->view('layouts/v_footer', $data);
    }

    public function process_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('User_model');
        $user = $this->User_model->check_login($email, $password);

        if ($user) {
            // buat session
            $this->session->set_userdata('user', $user);
            redirect('/');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
        }
    }
}
