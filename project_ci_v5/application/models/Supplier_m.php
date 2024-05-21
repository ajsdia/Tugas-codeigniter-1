<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_m extends CI_Model
{
	public function get($id=null)
	{
        $this->db->select();
        $this->db->from('supplier');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
	}

    public function save($post)
	{
		$data = [
            'name' => $post['name'],
            'description' => $post['description'],
            'phone' => $post['phone'],
            'address' => $post['address'],
        ];

        $this->db->insert('supplier', $data);
	}

    public function update($post)
	{
		$data = [
            'name' => $post['name'],
            'description' => $post['description'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'updated_date' => date('Y-m-d H:i:s'),
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('supplier', $data);
	}

    public function cek_data($name)
	{
        $this->db->select();
        $this->db->from('supplier');
        $this->db->where('name', $name);
        $query = $this->db->get();
        return $query;
	}

    public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('supplier');
	}
}
