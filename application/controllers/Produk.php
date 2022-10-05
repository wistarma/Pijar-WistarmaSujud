<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}


	public function index()
	{
		$data = array(
			'title' => 'Produk',
			'produk' => $this->m_produk->get_all_data(),
		);
		$this->load->view('produk', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'keterangan' => $this->input->post('keterangan'),
			'harga' => $this->input->post('harga'),
			'jumlah' => $this->input->post('jumlah'),

		);
		$this->m_produk->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('produk');
	}
}

/* End of file Produk.php */
