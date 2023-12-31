<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('CustomerModel');
        $this->load->model('BarangModel');
	}
	public function index()
	{
		$data = [
			'title' => 'Customers',
            'customers' => $this->CustomerModel->getData(),
            'barangs' => $this->BarangModel->getData(),
		];

		$this->load->view('customers', $data);
	}

	public function add(){
		$data = $this->input->post();
		$insert = $this->CustomerModel->addData($data);
		if ($insert) {
			return redirect()->back();
		}
	}
}
