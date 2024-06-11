<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('item.*, item.stock,  category.name as name_category, unit.name as name_unit');
        $this->db->from('item');
        $this->db->join('category', 'item.category_id = category.id');
        $this->db->join('unit', 'item.unit_id = unit.id');
        if ($id != null) {
            $this->db->where('item.id', $id);
        }
       // $this->db->order_by('barcode', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function save($post)
    {
        $data = [
            'barcode' => $post['barcode'],
            'name' => $post['nama_produk'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'stock' => $post['stock'],
            'gambar' => $post['gambar']
        ];

        $this->db->insert('item', $data);
    }

    public function update($post)
    {
        $data = [
            'barcode' => $post['barcode'],
            'name' => $post['nama_produk'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'stock' => $post['stock'],
            'gambar' => $post['gambar'],
            'updated_date' => date('Y-m-d H:i:s')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('item', $data);
    }

    public function cek_data($barcode)
    {
        $this->db->select();
        $this->db->from('item');
        $this->db->where('barcode', $barcode);
        $query = $this->db->get();
        return $query;
    }
    public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('item');
	}
}
