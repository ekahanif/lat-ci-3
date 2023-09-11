<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('BarangModel');
	}
	public function index()
	{
		$data = [
			'title' => 'Barangs',
            'barangs' => $this->BarangModel->getData(),
		];

		$this->load->view('barangs', $data);
	}

	public function add(){
		$data = $this->input->post();
		$insert = $this->BarangModel->addData($data);
		if ($insert) {
			return redirect()->back();
		}
	}
}
