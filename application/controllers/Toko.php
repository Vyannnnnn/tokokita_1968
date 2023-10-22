<?php
defined('BASEPATH') or exit('No direct script access allowed');

class toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['toko'] = $this->Madmin->get_all_data('tbl_toko')->result();
        $this->load->view('home/layout/header');

        $this->load->view('home/toko/index', $data);
        $this->load->view('home/layout/footer');
    }
    public function add()
    {

        $this->load->view('home/layout/header');
        $this->load->view('home/toko/add_toko');
        $this->load->view('home/layout/footer');
    }
    public function save()
    {
        $this->load->library('upload');
        $id = $this->session->userdata('idKonsumen');
        $namatoko = $this->input->post('namatoko');
        $deskripsi = $this->input->post('deskripsi');
        $config['upload_path'] = './assets/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        if ($this->upload->do_upload('logo')) {
            $data_file = $this->upload->data();
            $data_insert = array(
                'idKonsumen' => $id,
                'namatoko' => $namatoko,
                'logo' => $data_file['file_name'],
                'deskripsi' => $deskripsi,
                'statusAktif' => 'Y'
            );
            $this->Madmin->insert('tbl_toko', $data_insert);
            redirect('toko');
        } else {

            redirect('toko/add');
        }
    }
}
