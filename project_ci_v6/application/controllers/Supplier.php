<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('supplier_m');
        check_not_login();
	}

    public function index()
	{
        $data['supplier'] = $this->supplier_m->get()->result();
        $this->template->load('template', 'supplier/supplier_data', $data);
	}

    public function cek_supplier()
	{
		$name = $this->input->post('data');
        $cek_data = $this->supplier_m->cek_data($name)->row_array();
        $return_data = ($cek_data) ? "ADA" : "TIDAK ADA";
        header('Content-Type: application/json');
        echo json_encode($return_data);
	}

    public function save()
	{
		$post = $this->input->post();
        $this->supplier_m->save($post);

        $this->session->set_flashdata('pesan', 'Data supplier berhasil di simpan.');
        redirect('supplier');
	}

    public function edit()
	{
		$id = $this->input->post('id');
        $data = $this->supplier_m->get($id)->row_array();

        header('Content-Type: application/json');
        echo json_encode($data);
	}

    public function update()
	{
		$post = $this->input->post();
        $this->supplier_m->update($post);
        
        $this->session->set_flashdata('pesan', 'Data supplier berhasil diupdate.');
        redirect('supplier');
	}

    public function delete()
	{
		$id = $this->input->post('id');
        $this->supplier_m->delete($id);

        $this->session->set_flashdata('pesan', 'Data supplier berhasil dihapus!');
        redirect('supplier');
	}
}
