<?php

	class Tabel extends CI_Controller{

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
		$data['title'] = 'Semua Produk';
		$data["tampil"] = $this->M_Produk->ambilData();
		$this->load->view('admin/tabel', $data);
	}


//ADD
   public function tambah(){
      $data = array(
         'Id_item'          => uniqid(),
         'nama_item'        => $this->input->post("input_nama"),
         'kategori_item'    => $this->input->post("input_kategori"),
         'stok_item'        => $this->input->post("input_stok"),
         'harga_item'       => $this->input->post("input_harga"),
         'gender_item'      => $this->input->post("input_gender"),
         'keterangan_item'  => $this->input->post("input_keterangan"),
         'ukuran_item'      => implode(", ", $this->input->post("input_ukuran")),
         'warna_item'       => implode(", ", $this->input->post("input_warna")),
         'gambar'           => $this->_gambar()
      );

      // if (!empty($_FILES["input_gambar"]['name'])) {
      //    $data['gambar'] = $this->_gambar();
      // }

      $this->M_Produk->tambahData($data);
      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Data disimpan!</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>');

      redirect($_SERVER['HTTP_REFERER']);
   }

   private function _gambar(){
      $config['upload_path']     = './uploads/';
      $config['allowed_types']   = 'png|jpg|jpeg|gif';
      $config['max_size']        = 2048;
      //$config['file_name']     = $this->id_produk;
      $config['overwrite']       = true;
      $this->load->library('upload', $config);

      if ($this->upload->do_upload("input_gambar")) {
         return $this->upload->data('file_name');
      }
      return "default.jpg";
   }

//UPDATE
   public function update(){
      $id['Id_item'] = $this->input->post("id");
      $data = array(
         'nama_item'        => $this->input->post("input_nama"),
         'kategori_item'    => $this->input->post("input_kategori"),
         'stok_item'        => $this->input->post("input_stok"),
         'harga_item'       => $this->input->post("input_harga"),
         'gender_item'      => $this->input->post("input_gender"),
         'keterangan_item'  => $this->input->post("input_keterangan"),
      );

      if(!empty($_POST["input_warna"])) {
          $data['warna_item'] = implode(", ", $this->input->post("input_warna"));  
        }else{
          $data['warna_item'] = $this->input->post("old_warna");
      }

      if(!empty($_POST["input_ukuran"])){
          $data['ukuran_item'] = implode(", ", $this->input->post("input_ukuran"));
        }else{
          $data['ukuran_item'] = $this->input->post("old_ukuran");
      }

      if (!empty($_FILES['input_gambar']['name'])) {
          $data['gambar'] = $this->_gambar();
        }else{
          $data['gambar'] = $this->input->post("old_gambar");
      }

      $this->M_Produk->updateData($data, $id);
      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Data diperbaharui!</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>');

      redirect($_SERVER['HTTP_REFERER']);
   }

//DELETE
   public function hapus($id){
    $data = $this->M_Produk->getDataByID($id)->row();
    $target = './uploads/'.$data->gambar;

    if (is_readable($target) && unlink($target)) {
      $delete = $this->M_Produk->hapusData($id);

      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Data dihapus!</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>');

        redirect('admin/ds/tabel');
    }else{
      $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small>Gagal dihapus!</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>');

        redirect('admin/ds/tabel');

      }
   }
}