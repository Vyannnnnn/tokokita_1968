<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        //echo password_hash("12345", PASSWORD_DEFAULT) . "\n";

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('home/login');
        } else {
            $this->login();
        }
    }
    public function dashboard()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('main');
        }
        $this->load->view('home/layout/header');

        $this->load->view('home/layanan');

        $this->load->view('home/home');

        $this->load->view('home/layout/footer');
    }
    public function login()
    {
        $this->load->model('Madmin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Madmin->getUserByUsername($username, 'tbl_member');

        if ($user && password_verify($password, $user->password)) {
            $data_session = array(
                'userName' => $username,
                'password' => $user->password, // Simpan password yang dienkripsi dari database
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('main/dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Username or password is not found</div>');
            redirect('main');
        }
    }
}
