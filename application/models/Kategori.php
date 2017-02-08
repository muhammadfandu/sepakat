<?php
Class Kategori extends CI_Model{
  var $table = 'kategori';

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_categories()
  {
  $this->db->from('kategori');
  $query=$this->db->get();
  return $query->result();
  }

  public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id_kategori',$id);
    $query = $this->db->get();

    return $query->row();
  }

  public function kategori_add($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function kategori_update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }

  public function delete_by_id($id)
  {
    $this->db->where('id_kategori', $id);
    $this->db->delete($this->table);
  }
}
?>
