<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelola_toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    public function index()
    {

        $data['kelola_toko'] = $this->Madmin->get_all_data('tbl_toko')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola_toko/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function validasi_add()
    {



        // Set aturan validasi untuk form input
        $this->form_validation->set_rules('idKonsumen', 'Id Konsumen', 'required');
        $this->form_validation->set_rules('namaToko', 'Nama Toko', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('statusAktif', 'Status Aktif', 'required');

        if ($this->form_validation->run() == false) {
            // Jika form input kosong, tampilkan alert data tidak boleh kosong
            // Ganti dengan URL form input kategori sesuai dengan struktur aplikasi Anda
            $this->add();
        } else {
            // Proses penyimpanan data ke database atau tindakan lainnya
            $this->save();
        }
    }
    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $dataWhere = array('idToko' => $id);
        $data['kelola_toko'] =  $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola_toko/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {

        $id = $this->input->post('id');
        $namaToko = $this->input->post('namaToko');
        $logo = $this->input->post('logo');
        $deskripsi = $this->input->post('deskripsi');
        $statusAktif = $this->input->post('statusAktif');

        $dataUpdate = array(
            'namaToko' => $namaToko,
            'logo' => $logo,
            'deskripsi' => $deskripsi,
            'statusAktif' => $statusAktif
        );
        $this->Madmin->update('tbl_toko', $dataUpdate, 'idToko', $id);
        redirect('kelola_toko');
    }
    public function add()
    {

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola_toko/formAdd');
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        $this->load->library('upload');
        $this->session->userdata('idToko');
        $idKonsumen = $this->input->post('idKonsumen');
        $namaToko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');
        $statusAktif = $this->input->post('statusAktif');
        $config['upload_path'] = './assets/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';


        $data_file = $this->upload->data();
        $dataInsert = array(

            'idKonsumen' => $idKonsumen,
            'namaToko' => $namaToko,
            'logo' => $data_file['file_name'],
            'deskripsi' => $deskripsi,
            'statusAktif' => $statusAktif
        );

        $this->Madmin->insert('tbl_toko', $dataInsert);
        redirect('kelola_toko');
    }
    public function delete($id)
    {


        $this->Madmin->delete('tbl_toko', 'idToko', $id);
        redirect('kelola_toko');
    }
}
