<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('custom_view');
	}

	public function simpan()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$smt = $this->input->post('smt');
		$kelas = $this->input->post('kelas');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$minat = $this->input->post('minat');
		$this->db->query("insert into tbl_mahasiswa values('$nim','$nama','$prodi','$smt','$kelas','$email','$phone','$minat')");
		redirect('', 'refresh');
	}

	public function tampil()
	{
		$data['data'] = $this->db->query('select * from tbl_mahasiswa');
		$this->load->view('tampil', $data);
	}
}
