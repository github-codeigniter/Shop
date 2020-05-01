<?php

class Home extends CI_Controller
{
	public function __construct()
		{
			parent ::__construct();
			$this->load->model("M_Produk");
		}
		public function index(){
			$data = array(
				'title'		=> 'HOME',

				'baju'		=>	$this->M_Produk->sortir_baju(),
				'celana'	=>	$this->M_Produk->sortir_celana(),
				'baju_dalam'=>	$this->M_Produk->sortir_baju_dalam(),
				'celana_dalam'=>$this->M_Produk->sortir_celana_dalam(),
				'aksesoris'	=>	$this->M_Produk->sortir_aksesoris(),
			);
			
			$this->load->view('users/home', $data);
		}

		public function lihatProduk($id = null){
			$data["title"] = 'View Produk';
			$data["page"] = 'Web_off';

			$lihat = $this->M_Produk;
			$data["tampil"] = $lihat->getbyid($id);
			if (!$data["tampil"]) show_404();
			$this->load->view('users/view_produk', $data);
		}

		public function kategoriShop(){
			$data["title"] = 'Kategori Produk';

			$this->load->view('users/kategori_shop', $data);
		}

}