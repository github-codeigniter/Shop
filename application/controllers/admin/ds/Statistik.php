<?php

	class Statistik extends CI_Controller{

		public function __construct(){
		parent ::__construct();
		$this->load->model("M_Produk");
		$this->load->library('form_validation');
		if ($this->M_Produk->isRole()!= 'admin') {
			redirect("login");
		 } 
	}

	//READ
		public function index()
		{
			$data['title'] = 'Dashboard';
			$this->load->view('admin/statistik', $data);
		}


}