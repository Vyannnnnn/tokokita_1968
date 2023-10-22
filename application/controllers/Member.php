<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $data['member'] = $this->Madmin->get_all_data('tbl_member')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/member/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {


        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namakonsumen = $this->input->post('namakonsumen');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $idkota = $this->input->post('idkota');
        $statusaktif = $this->input->post('statusaktif');

        $dataUpdate = array(
            'userName' => $username,
            'password' => $password,
            'namaKonsumen' => $namakonsumen,
            'alamat' => $alamat,
            'email' => $email,
            'tlpn' => $telepon,
            'idKota' => $idkota,
            'statusAktif' => $statusaktif
        );

        $this->Madmin->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member');
    }
    public function get_by_id($id)
    {

        $dataWhere = array('idKonsumen' => $id);
        $data['member'] =  $this->Madmin->get_by_id('tbl_member', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/member/edit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->Madmin->delete('tbl_member', 'idKonsumen', $id);
        redirect('member');
    }
}
