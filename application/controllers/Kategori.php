<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formAdd');
        $this->load->view('admin/layout/footer');
    }
    public function validasi_add()
    {
        


        // Set aturan validasi untuk form input
        $this->form_validation->set_rules('namaKat', 'Nama Kategori', 'required');

        if ($this->form_validation->run() == false) {
            // Jika form input kosong, tampilkan alert data tidak boleh kosong
            // Ganti dengan URL form input kategori sesuai dengan struktur aplikasi Anda
            $this->add();
        } else {
            // Proses penyimpanan data ke database atau tindakan lainnya
            $this->save();
        }
    }
    public function save()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $namaKat = $this->input->post('namaKat');
        $dataExist = $this->db->get_where('tbl_kategori', array('namaKat' => $namaKat))->row();

        if ($dataExist) {
            // Jika data sudah ada, tampilkan alert dan kembali ke form edit kategori
            $this->session->set_flashdata('message', '<div align="center" class="text-danger pl-3" role="alert">Nama kategori sudah ada</div>');
            $this->add(); // Ganti dengan URL form edit kategori sesuai dengan struktur aplikasi Anda
        } else {

            $dataInput = array('namaKat' => $namaKat);
            $this->Madmin->insert('tbl_kategori', $dataInput);
            redirect('kategori');
        }
    }
    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $dataWhere = array('idKat' => $id);
        $data['kategori'] =  $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $id = $this->input->post('id');
        $namaKategori = $this->input->post('namaKat');
        $dataUpdate = array('namaKat' => $namaKategori);
        $this->Madmin->update('tbl_kategori', $dataUpdate, 'idKat', $id);
        redirect('kategori');
    }
    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->Madmin->delete('tbl_kategori', 'idKat', $id);
        redirect('kategori');
    }
}
