<?php
class Onsite extends CI_Controller{

	public function __construct(){
		parent ::__construct();
		$this->load->model("M_Produk");
		$this->load->library('form_validation');
		if ($this->M_Produk->isRole()!= 'admin') {
			redirect("login");
		}
   } 

//READ	
	public function index(){
		$data['title'] = 'Penjualan ditempat';
		$data["tampil"] = $this->M_Produk->ambilData();
		$this->load->view('admin/onsite', $data);
	}

//UPDATE
   public function penjualanOnsite(){
      $data = array(
         'Id_item'          => $this->input->post("id"),
         'nama_item'        => $this->input->post("input_nama"),
         'kategori_item'    => $this->input->post("input_kategori"),
         'harga_item'       => $this->input->post("input_harga"),

         'jumlah_pesanan'   => $this->input->post("input_jumlahpesan"),
         'total_pembelian'  => $this->input->post("input_totalpembeli"),
         'nama'             => $this->input->post("input_namapembeli"),
         'no_telepon'       => $this->input->post("input_nomorpembeli"),
         'alamat'           => $this->input->post("input_alamatpembeli"),
         'bayar'            => $this->input->post("input_bayarpembeli"),
         'kembalian'        => $this->input->post("input_kembalianpembeli")
      );

      $this->M_Produk->penjualanOnsite($data);
      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Pembelian Berhasil!</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>');

      redirect($_SERVER['HTTP_REFERER']);
   }
} 