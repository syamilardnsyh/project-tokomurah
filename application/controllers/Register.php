<?php
class Register extends CI_Controller
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
            $this->process_registration();
        }

        $data = [
            'title' => 'Login',
            'user' => $this->user
        ];

        $this->load->view('layouts/v_header', $data);
        $this->load->view('halaman/register_view', $data);
        $this->load->view('layouts/v_footer', $data);
    }

    public function process_registration()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 1,
            'is_active' => 1,
            'tanggal_input' => date('Y-m-d H:i:s')
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('success', 'Registrasi berhasil dilakukan, silahkan login');
        redirect('login');
    }
}
