<?php
class M_produk extends CI_Model
{
//Get Data
	public function ambilData(){
		$query = $this->db->query('SELECT * FROM shop_item');
		return $query;
	}

//Create Data 'shop_item'
	public function tambahData($data){
		$query = $this->db->insert('shop_item', $data);
		return $query;
	}

//Create Data 'penjualan'
	public function penjualanOnsite($data){
		$query = $this->db->insert('penjualan', $data);
		return $query;
	}

//USER Create addCart
	public function addCart($data)
	{
		$query = $this->db->insert("keranjang", $data);
		return $query;
	}

//Edit Data no modal
	public function editData($id){
		$query = $this->db->where('Id_item', $id)->get('shop_item');
		return $query->row();
	}

//Update Data
	public function updateData($data, $id){
		$query = $this->db->update('shop_item', $data, $id);
		return $query;
	}

//Get Id
	public function getDataByID($id){
        return $this->db->get_where('shop_item', array('Id_item'=>$id));
    }

//Delete Data
	public function hapusData($id){
		$this->db->where('Id_item', $id);
		return $this->db->delete('shop_item');
	}

/// Login
	function is_logged_in(){
		return $this->session->userdata('Id_user');
	}

	function isRole(){
		return $this->session->userdata('role');
	}

	function check_login($table,$field1,$field2){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows()==0) {
			return false;
		}else{
			return $query->result();
		}

	}

/// Get Data Join
	public function sortir_baju()
	{
		$this->db->select("*");
		$this->db->from('shop_item');
		$this->db->join('kategori','kategori.baju_kategori=shop_item.kategori_item');
		$query = $this->db->get();
		return $query;
	}
	public function sortir_celana()
	{
		$this->db->select("*");
		$this->db->from('shop_item');
		$this->db->join('kategori','kategori.celana_kategori=shop_item.kategori_item');
		$query = $this->db->get();
		return $query->result();
	}
	public function sortir_baju_dalam()
	{
		$this->db->select("*");
		$this->db->from('shop_item');
		$this->db->join('kategori','kategori.baju_dalam_kategori=shop_item.kategori_item');
		$query = $this->db->get();
		return $query->result();
	}
	public function sortir_celana_dalam()
	{
		$this->db->select("*");
		$this->db->from('shop_item');
		$this->db->join('kategori','kategori.celana_dalam_kategori=shop_item.kategori_item');
		$query = $this->db->get();
		return $query->result();
	}
	public function sortir_aksesoris()
	{
		$this->db->select("*");
		$this->db->from('shop_item');
		$this->db->join('kategori','kategori.aksesoris_kategori=shop_item.kategori_item');
		$query = $this->db->get();
		return $query->result();
	}

///lihat berdasarkan login
	public function lihatKeranjang($id)
	{
		$id = $this->session->userdata['Id_user'];

		//$this->db->select("*");
		$this->db->select('Id_chart, nama_item, harga_item, Id_item, count(Id_item) as total');
		$this->db->from('keranjang');
		$this->db->join('user','user.Id_user=keranjang.Id_user');
		$this->db->group_by('Id_item');
		$this->db->order_by('total','desc');
		$this->db->where('user.Id_user',$id);
		$query = $this->db->get();
		return $query;
	}




	/////////////////////////
	// private $_table = "shop_item";

	// public $Id_item;
	// public $nama_item;
	// public $kategori_item;
	// public $stok_item;
	// public $harga_item;
	// public $gender_item;
	// public $ukuran_item;
	// public $keterangan_item;
	// public $warna_item;
	// public $gambar  = "default.jpg";
	// public $gambar1 = "default.jpg";
	// public $gambar2 = "default.jpg";
	// public $gambar3 = "default.jpg";
	

/// {VALIDASI}
	// public function rules()
	// {
	// 	return[
		// ['field'	=> 'input_nama',
		// 'label'		=> 'Nama Produk',
		// 'rules'		=> 'required']

		// ['field'	=> 'input_ukuran[]',
		//  'label'	=> 'Ukuran Produk',
		//  'rules'	=> 'required'],

		 // ['field'	=> 'input_warna[]',
		 //  'label'	=> 'Warna Produk',
		 //  'rules'	=> 'required']
	// 	 ];
	// }


/// {CREATE}
	// public function save()
	// {
	// 	$post = $this->input->post();
	// 	$this->Id_item = uniqid();
	// 	$this->nama_item = $post["input_nama"];
	// 	$this->kategori_item = $post["input_kategori"];
	// 	$this->stok_item = $post["input_stok"];
	// 	$this->harga_item = $post["input_harga"];
	// 	$this->gender_item = $post["input_gender"];
	// 	$this->keterangan_item = $post["description"];
	// 	$this->ukuran_item = $post = implode(", ", $this->input->post("input_ukuran", true));
	// 	$this->warna_item = $post = implode(", ", $this->input->post("input_warna", true));
	// 	$this->gambar = $this->_uploadImage();
	// 	$this->gambar1 = $this->_uploadImage1();
	// 	$this->gambar2 = $this->_uploadImage2();
	// 	$this->gambar3 = $this->_uploadImage3();

	// 	$this->db->insert($this->_table, $this);
	// }

	

/// {UPLOAD IMAGE}
	// private function _uploadImage()
	// {
	// 	$config['upload_path']		= './uploads/';
	// 	$config['allowed_types']	= 'gif|jpg|png';
	// 	$config['encrypt_name']	= true;
	// 	//$config['file_name']		= $this->Id_item;
	// 	$config['overwrite']		= true;
	// 	$config['max_size']			= 2024; 
	// $this->load->library('upload', $config);

	// if ($this->upload->do_upload('input_gambar')) {
	// 	return $this->upload->data("file_name");
	// 	}
	// 	return "default.jpg";
	// }
	/// {UPLOAD IMAGE 1}
	// private function _uploadImage1()
	// {
	// 	$config['upload_path']		= './uploads/';
	// 	$config['allowed_types']	= 'gif|jpg|png';
	// 	$config['encrypt_name']	= true;
	// 	//$config['file_name']		= $this->Id_item;
	// 	$config['overwrite']		= true;
	// 	$config['max_size']			= 2024; 
	// $this->load->library('upload', $config);

	// if ($this->upload->do_upload('input_gambar1')) {
	// 	return $this->upload->data("file_name");
	// 	}
	// 	return "default.jpg";
	// }
	/// {UPLOAD IMAGE 2}
	// private function _uploadImage2()
	// {
	// 	$config['upload_path']		= './uploads/';
	// 	$config['allowed_types']	= 'gif|jpg|png';
	// 	$config['encrypt_name']		= true;
	// 	//$config['file_name']		= $this->Id_item;
	// 	$config['overwrite']		= true;
	// 	$config['max_size']			= 2024; 
	// $this->load->library('upload', $config);

	// if ($this->upload->do_upload('input_gambar2')) {
	// 	return $this->upload->data("file_name");
	// 	}
	// 	return "default.jpg";
	// }
	/// {UPLOAD IMAGE 3}
	// private function _uploadImage3()
	// {
	// 	$config['upload_path']		= './uploads/';
	// 	$config['allowed_types']	= 'gif|jpg|png';
	// 	$config['encrypt_name']	= true;
	// 	//$config['file_name']		= $this->Id_item;
	// 	$config['overwrite']		= true;
	// 	$config['max_size']			= 2024; 
	// $this->load->library('upload', $config);

	// if ($this->upload->do_upload('input_gambar3')) {
	// 	return $this->upload->data("file_name");
	// 	}
	// 	return "default.jpg";
	// }


/// {READ DATA ALL}
	// public function getAll()
	// {
	// 	return $this->db->get($this->_table)->result();
	// }
	// /// {READ DATA JOIN}
	// public function sortir_baju()
	// {
	// 	$this->db->select("*");
	// 	$this->db->from('shop_item');
	// 	$this->db->join('kategori','kategori.baju_kategori=shop_item.kategori_item');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	// public function sortir_celana()
	// {
	// 	$this->db->select("*");
	// 	$this->db->from('shop_item');
	// 	$this->db->join('kategori','kategori.celana_kategori=shop_item.kategori_item');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	// public function sortir_baju_dalam()
	// {
	// 	$this->db->select("*");
	// 	$this->db->from('shop_item');
	// 	$this->db->join('kategori','kategori.baju_dalam_kategori=shop_item.kategori_item');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	// public function sortir_celana_dalam()
	// {
	// 	$this->db->select("*");
	// 	$this->db->from('shop_item');
	// 	$this->db->join('kategori','kategori.celana_dalam_kategori=shop_item.kategori_item');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	// public function sortir_aksesoris()
	// {
	// 	$this->db->select("*");
	// 	$this->db->from('shop_item');
	// 	$this->db->join('kategori','kategori.aksesoris_kategori=shop_item.kategori_item');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }


/// {UPDATE}
	// public function getbyid($id)
	// {
	// 	return $this->db->get_where($this->_table, ["Id_item" => $id])->row();
	// }

	// public function update()
	// {		
	// 	$post = $this->input->post();
	// 	$this->Id_item = $post["id"];
	// 	$this->nama_item = $post["input_nama"];
	// 	$this->kategori_item = $post["input_kategori"];
	// 	$this->harga_item = $post["input_harga"];
	// 	$this->stok_item = $post["input_stok"];
	// 	$this->keterangan_item = $post["description"];

	// 	if(!empty($_POST["input_warna"])) {
	// 		$this->warna_item = implode(", ", $post["input_warna"]);	
	// 			}else{
	// 				$this->warna_item = $post["old_warna"];
	// 				}

	// 	if(!empty($_POST["input_ukuran"])){
	// 		$this->ukuran_item = implode(", ", $post["input_ukuran"]);
	// 			}else{
	// 				$this->ukuran_item = $post["old_ukuran"];
	// 			}

	// 		if (!empty($_FILES["input_gambar"]["name"])) {
	// 					$this->gambar = $this->_uploadImage();
	// 				}else{
	// 						$this->gambar = $post["old_gambar"];
	// 					}
	// 				if (!empty($_FILES["input_gambar1"]["name"])) {
	// 					$this->gambar1 = $this->_uploadImage1();
	// 						}else{
	// 								$this->gambar1 = $post["old_gambar1"];
	// 							}
	// 						if (!empty($_FILES["input_gambar2"]["name"])) {
	// 								$this->gambar2 = $this->_uploadImage2();
	// 								}else{
	// 									$this->gambar2 = $post["old_gambar2"];
	// 									}
	// 									if (!empty($_FILES["input_gambar3"]["name"])) {
	// 											$this->gambar3 = $this->_uploadImage3();
	// 										}else{
	// 											$this->gambar3 = $post["old_gambar3"];
	// 											}	

	// 		$this->db->update($this->_table, $this, array('Id_item' => $post['id']));
	// }


/// {DELETE}
	// public function delete($id)
	// {
	// 	$this->_deleteImage($id);
	// 	$this->_deleteImage1($id);
	// 	$this->_deleteImage2($id);
	// 	$this->_deleteImage3($id);
	// 	return $this->db->delete($this->_table, array("Id_item" => $id));
	// }
	/// {DELETE GAMBAR}
	// private function _deleteImage($id)
	// {
	// 	$produk = $this->getbyid($id);
	// 	if ($produk->gambar != "default.jpg") {
	// 		$filename = explode(".", $produk->gambar)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }
	/// {DELETE GAMBAR 1}
	// private function _deleteImage1($id)
	// {
	// 	$produk = $this->getbyid($id);
	// 	if ($produk->gambar1 != "default.jpg") {
	// 		$filename = explode(".", $produk->gambar1)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }
	/// {DELETE GAMBAR 2}
	// private function _deleteImage2($id)
	// {
	// 	$produk = $this->getbyid($id);
	// 	if ($produk->gambar2 != "default.jpg") {
	// 		$filename = explode(".", $produk->gambar2)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }
	/// {DELETE GAMBAR 3}
	// private function _deleteImage3($id)
	// {
	// 	$produk = $this->getbyid($id);
	// 	if ($produk->gambar3 != "default.jpg") {
	// 		$filename = explode(".", $produk->gambar3)[0];
	// 		return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
	// 	}
	// }

	// public function tes(){
	// 	$this->db->select('id, kota, provinsi, count(provinsi) as total');
	// 	$this->db->group_by('provinsi');
	// 	$this->db->order_by('total','desc');
	// 	$hasil = $this->db->get('coba');
	// 	return $hasil;
	// }

}