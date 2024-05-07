<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_m extends CI_Model
{
	public function get($id=null)
	{
        $this->db->select();
        $this->db->from('category');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
	}

    public function save($post)
	{
		$data = [
            'name' => $post['name']
        ];

        $this->db->insert('category', $data);
	}

    public function update($post)
	{
		$data = [
            'name' => $post['name'],
            'updated_date' => date('Y-m-d H:i:s'),
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('category', $data);
	}

    public function cek_data($name)
	{
        $this->db->select();
        $this->db->from('category');
        $this->db->where('name', $name);
        $query = $this->db->get();
        return $query;
	}

    public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('category');
	}
}
