<?php
class Berita_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// Menampilkand data berita
	public function daftar_berita($read = FALSE) {
	if ($read === FALSE)	{
		$query = $this->db->query('SELECT * FROM berita WHERE status_berita ="Publish" ORDER BY id_berita DESC');
		return $query->result_array();
	}

	$query = $this->db->get_where('berita', array('slug' => $read));
	return $query->row_array();
}
	
}