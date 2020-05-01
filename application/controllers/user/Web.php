<!--
home
	HEADER
		NAVBAR
			CONTENT_
			FOOTER
		MODAL
	FOOTJS
-->

<?php
	class Web extends CI_Controller{

		public function __construct()
		{
		parent ::__construct();
		$this->load->model("M_Produk");
		$this->load->library('form_validation');
		if ($this->M_Produk->isRole()!= 'user') {
			redirect("login");
		 } 
	}
		public function index(){
			$data = array(
				'title'		=> 'HOME',
				'navbarLogin'=> 'Web',
				'baju'		=>	$this->M_Produk->sortir_baju(),
				'celana'	=>	$this->M_Produk->sortir_celana(),
				'baju_dalam'=>	$this->M_Produk->sortir_baju_dalam(),
				'celana_dalam'=>$this->M_Produk->sortir_celana_dalam(),
				'aksesoris'	=>	$this->M_Produk->sortir_aksesoris(),
			);
			
			$this->load->view('users/home', $data);
		}

		// public function lihatProduk($id = null){
		// 	$data["title"] = 'View Produk';
		// 	$data["page"] = 'Web';

		// 	$lihat = $this->M_Produk;
		// 	$data["tampil"] = $lihat->getbyid($id);
		// 	if (!$data["tampil"]) show_404();
		// 	$this->load->view('users/view_produk', $data);
		// }

	public function lihatProduk($id){
		$id = $this->uri->segment(4);
		$data = array(
			'title' 	=> 'Lihat Produk',
			'tampil' => $this->M_Produk->editData($id)
		);

		$this->load->view('users/view_produk', $data);
	}

		public function keranjang($id=null){
			$data['title'] = "Keranjang";
			$data['data'] = $this->M_Produk->lihatKeranjang($id);
			$this->load->view('users/keranjang', $data);
		}

		public function addCart(){
			$data = array(
				'Id_user' => $this->input->post("id_user"),
				'nama_user' => $this->input->post("input_user"),
				'Id_item' => $this->input->post("id_item"),
				'nama_item' => $this->input->post("input_item"),
				'harga_item' => $this->input->post("input_harga"),
			);
			
			$this->M_Produk->addCart($data);
			redirect("user/web/keranjang");
		}

		public function checkOut(){
			$data["title"] = 'checkout';

			$this->load->view('users/checkout', $data);
		}

		public function checkOutVer(){
			$data["title"] = 'Verifikasi Data';

			$this->load->view('users/checkout_ver', $data);
		}

		public function kategoriShop(){
			$data["title"] = 'Kategori Produk';
			$data["page"] = 'Web';

			$this->load->view('users/kategori_shop', $data);
		}

	//LOGOUT
		public function logOut(){
			$this->session->sess_destroy();
			redirect("login");
		}




	}

