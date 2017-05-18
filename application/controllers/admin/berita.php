<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/berita_model');
	}
	
	public function index() {
		$query = $this->berita_model->daftar_berita();
		$data=array('title'=>'Manajemen Berita - Java Web Media',
					'berita' => $query,
					'isi'  =>'admin/berita/berita_view'
						);
		$this->load->view('admin/layout/wrapper',$data);	
	}

	//controler tambah berita disini
public function tambah() {
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
	$this->form_validation->set_rules('isi', 'Isi berita', 'required');
	if ($this->form_validation->run() === FALSE) {
		$data=array('title'=>'Menambah Berita - Java Web Media',
					'isi'  =>'admin/berita/tambah_berita'					
						);
		$this->load->view('admin/layout/wrapper',$data);	
	}else{
		$slug = url_title($this->input->post('judul'), 'dash', TRUE);
		$data = array(
					'judul' 	=> $this->input->post('judul'),
					'slug'		=> $slug,
					'ringkasan'	=> $this->input->post('ringkasan'),
					'isi' 		=> $this->input->post('isi'),
					'status_berita'	=> $this->input->post('status_berita'),
					'id_user'	=> $this->input->post('id_user')
				);
		$this->berita_model->tambah($data);
		redirect(base_url().'admin/berita/');
	}
	}

		// Menampilkan halaman edit
	public function edit($id='') {	
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('isi', 'Isi berita', 'required');
		if ($this->form_validation->run() === FALSE) {
		$data['berita'] = $this->berita_model->detail_berita();
		$data['detail']	= $this->berita_model->detail_berita($id);
		$data=array('title'		=> 'Mengubah berita: '.$data['detail']['judul'],
					'berita'	=> $this->berita_model->detail_berita(),
					'detail' 	=> $this->berita_model->detail_berita($id),
					'isi'  		=>'admin/berita/edit_berita'
						);
		$this->load->view('admin/layout/wrapper',$data);
		// Kalau tidak ada error berita diupdate
		}else{
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			$data = array(
					'id_berita'	=> $this->input->post('id_berita'),
					'judul' 	=> $this->input->post('judul'),
					'slug'		=> $slug,
					'ringkasan'	=> $this->input->post('ringkasan'),
					'isi' 		=> $this->input->post('isi'),
					'status_berita'	=> $this->input->post('status_berita'),
					'id_user'	=> $this->input->post('id_user')
				);
			$this->berita_model->edit_berita($data);
			redirect(base_url().'admin/berita/');
		}
	}
	
	// Menghapus berita
	public function delete($id) {
		$this->berita_model->delete_berita($id);
		redirect(base_url().'admin/berita/');
	}
}
