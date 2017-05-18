<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index() {
		$data=array('title'=>'Contact Us - Raze Developer',
					'isi'  =>'home/kontak_view'
						);
		$this->load->view('layout/wrapper',$data);	
	}
}