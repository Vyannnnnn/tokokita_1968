<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelola_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {

        $data['kelola_admin'] = $this->Madmin->get_all_data('tbl_admin')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola_admin/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function get_by_id($id)
    {

        $dataWhere = array('idAdmin' => $id);
        $data['kelola_admin'] =  $this->Madmin->get_by_id('tbl_admin', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola_admin/edit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {

        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $dataUpdate = array(
            'password' => $password,
            'userName' => $username
        );
        $this->Madmin->update('tbl_admin', $dataUpdate, 'idAdmin', $id);
        redirect('kelola_admin');
    }
}
