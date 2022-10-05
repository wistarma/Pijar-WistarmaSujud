<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
	public function add($data)
	{
		$this->db->insert('produk', $data);
	}

	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->order_by('nama_produk', 'asc');
		return $this->db->get()->result();
	}

	public function edit($data)
	{
		$this->db->where('nama_produk', $data['nama_produk']);
		$this->db->update('produk', $data);
	}

	public function delete($data)
	{
		$this->db->where('nama_produk', $data['nama_produk']);
		$this->db->delete('produk', $data);
	}
}

/* End of file M_produk.php */
