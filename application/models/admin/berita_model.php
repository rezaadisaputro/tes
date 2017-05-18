<?php
class Berita_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkand data berita
	public function daftar_berita() {
		$query = $this->db->query('SELECT berita.judul, berita.status_berita, berita.slug, berita.id_berita, berita.tanggal, users.nama FROM berita, users WHERE berita.id_user = users.id_user ORDER BY id_berita DESC');
		return $query->result_array();
	}
	
	// Model untuk menambah berita
	public function tambah($data) {
		return $this->db->insert('berita', $data);
	}
	
	// Detail berita
	public function detail_berita($id = FALSE) {
	if ($id === FALSE)	{
		$query = $this->db->get('berita');
		return $query->result_array();
	}
	$query = $this->db->get_where('berita', array('id_berita' => $id));
	return $query->row_array();
	}
	
	// Update berita
	public function edit_berita($data) {
		$this->db->where('id_berita', $data['id_berita']);
		return $this->db->update('berita', $data);
	}
	
	// Hapus berita
	public function delete_berita($id) {
		$this->db->where('id_berita',$id);
		return $this->db->delete('berita');
	}
}