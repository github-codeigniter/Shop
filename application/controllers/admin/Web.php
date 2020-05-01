<?php

	class Web extends CI_Controller{

		public function __construct()
		{
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
			$this->load->view('admin/overview', $data);
		}
		
		public function products()
		{
			$data['title'] = 'Semua Produk';
			$data["tampil"] = $this->M_Produk->getAll();
			$this->load->view('admin/products', $data);
		}

		public function products_baju()
		{
			$data['title'] = 'Produk Baju';
			$data["baju"] =	$this->M_Produk->sortir_baju();
			$this->load->view('admin/products_baju', $data);
		}

		public function products_celana()
		{
			$data['title'] = 'Produk Celana';
			$data["celana"] = $this->M_Produk->sortir_celana();
			$this->load->view('admin/products_celana', $data);
		}

		public function products_baju_dalam()
		{
			$data['title'] = 'Produk Celana';
			$data["baju_dalam"] = $this->M_Produk->sortir_baju_dalam();
			$this->load->view('admin/products_celana', $data);
		}

		public function products_celana_dalam()
		{
			$data['title'] = 'Produk Celana';
			$data["celana_dalam"] = $this->M_Produk->sortir_celana_dalam();
			$this->load->view('admin/products_celana', $data);
		}

		public function products_aksesoris()
		{
			$data['title'] = 'Produk Celana';
			$data["aksesoris"] = $this->M_Produk->sortir_aksesoris();
			$this->load->view('admin/products_celana', $data);
		}


	//CREATE
		public function add()
		{
			$data['title'] = 'Tambah Produk';
			$product = $this->M_Produk;
			$validation = $this->form_validation;
			$validation->set_rules($product->rules());

			if ($validation->run()) {
				$product->save();
				$this->session->set_flashdata('success','Berhasil disimpan');
			}
			//$this->load->view("admin/i_tes");
			$this->load->view("admin/form", $data);
		}

	//UPDATE
		public function edit($id = null)
		{
			$data['title'] = 'Edit Produk';

			if (!isset($id)) redirect('dashboard/products');
			$product = $this->M_Produk;
			$validation = $this->form_validation;
			$validation->set_rules($product->rules());
			if ($validation->run()) {
				$product->update();
				$this->session->set_flashdata('success','Berhasil di update');
			}

			$data["tampil"] = $product->getbyid($id);
			if (!$data["tampil"]) show_404();
			$this->load->view("admin/form_edit", $data);
		}

	//DELETE
		public function delete($id=null)
		{
			if (!isset($id)) show_404();
			if ($this->M_Produk->delete($id)) 
			{
				redirect(site_url('dashboard/products'));
			}
		}

	//LOG-OUT
		public function logOut(){
			$this->session->sess_destroy();
			redirect('login');
		}

}