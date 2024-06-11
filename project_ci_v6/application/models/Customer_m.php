<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_m extends CI_Model
{
	public function get($id=null)
	{
        $this->db->select();
        $this->db->from('customer');
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
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => $post['description'],
        ];

        $this->db->insert('customer', $data);
	}

    public function update($post)
	{
		$data = [
            'name' => $post['name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => $post['description'],
            'updated_date' => date('Y-m-d H:i:s'),
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('customer', $data);
	}

    public function cek_data($name)
	{
        $this->db->select();
        $this->db->from('customer');
        $this->db->where('name', $name);
        $query = $this->db->get();
        return $query;
	}

    public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('customer');
	}
}
