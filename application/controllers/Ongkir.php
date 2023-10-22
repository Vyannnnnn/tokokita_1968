<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ongkir extends CI_Controller
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
        $data['order'] = $this->Madmin->get_all_data('tbl_order')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/ongkir/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        $this->session->userdata('idOrder');
        $idKonsumen = $this->input->post('idKonsumen');
        $idToko = $this->input->post('idToko');
        $tglOrder = $this->input->post('tglOrder');
        $statusOrder = $this->input->post('statusOrder');
        $kurir = $this->input->post('kurir');
        $ongkir = $this->input->post('ongkir');

        $dataInput = array(
            'idKonsumen' => $idKonsumen,
            'idToko' => $idToko,
            'tglOrder' => $tglOrder,
            'statusOrder' => $statusOrder,
            'kurir' => $kurir,
            'ongkir' => $ongkir
        );

        $this->Madmin->insert('tbl_order', $dataInput);
        redirect('ongkir');
    }
    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/ongkir/add');
        $this->load->view('admin/layout/footer');
    }
    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->Madmin->delete('tbl_order', 'idOrder', $id);
        redirect('ongkir');
    }
    public function edit()
    {


        $id = $this->input->post('id');


        $tglOrder = $this->input->post('tglOrder');
        $statusOrder = $this->input->post('statusOrder');
        $kurir = $this->input->post('kurir');
        $ongkir = $this->input->post('ongkir');

        $dataUpdate = array(

            'tglOrder' => $tglOrder,
            'statusOrder' => $statusOrder,
            'kurir' => $kurir,
            'ongkir' => $ongkir

        );

        $this->Madmin->update('tbl_order', $dataUpdate, 'idOrder', $id);
        redirect('ongkir');
    }
    public function get_by_id($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $dataWhere = array('idOrder' => $id);
        $data['order'] =  $this->Madmin->get_by_id('tbl_order', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/ongkir/edit', $data);
        $this->load->view('admin/layout/footer');
    }
}
