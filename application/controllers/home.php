<?php if ( ! defined ('BASEPATH')) exit ('No direct script acces allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('berita_model');
	}

	public function index() {
		$data=array ('title'=>'Tutorial Code Igniter-RAZE Developer','berita' => $this->berita_model->daftar_berita(),
			'isi'=>'home/index_home'
			);
		$this->load->view('layout/wrapper',$data);
	}

	//Read berita
	public function read($read) {
		$data['berita'] = $this->berita_model->daftar_berita();
		$data['detail'] = $this->berita_model->daftar_berita($read);
		$data=array('title'	=> $data['detail'] ['judul'], 'berita' => $this->berita_model->daftar_berita(), 'detail' => $this->berita_model->daftar_berita($read), 'isi' =>'home/read_view' );

		$this->load->view('layout/wrapper',$data);
	}

}