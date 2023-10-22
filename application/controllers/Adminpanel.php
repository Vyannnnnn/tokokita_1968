<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }



    public function index()
    {
        //echo password_hash("321", PASSWORD_DEFAULT) . "\n";

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $this->login();
        }
    }
    public function dashboard()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
    public function login()
    {
        $this->load->model('Madmin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Madmin->getUserByUsername($username, 'tbl_admin');

        if ($user && password_verify($password, $user->password)) {
            $data_session = array(
                'userName' => $username,
                'password' => $user->password // Simpan password yang dienkripsi dari database
            );
            $this->session->set_userdata($data_session);
            redirect('adminpanel/dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Username or password is not found</div>');
            redirect('adminpanel');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('adminpanel/login');
    }
}
