<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('_assets/A_head'); ?>
  <body> 
    <?php $this->load->view('_assets/A_modal'); ?> 
    <?php $this->load->view('_assets/A_nav_vertikal'); ?> 
    <?php $this->load->view('_assets/A_nav_top'); ?>
    <div class="main-content"> 
      <?php $this->load->view('_assets/A_top_bar'); ?>
      <div class="header">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="header mt-md-2">
                <div class="header-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="header-pretitle"> 
                        <font color="Blue"> 
                          <a href="<?php echo base_url('admin/web') ?>"> HOME 
                          </a> 
                        </font> / Produk
                      </h6>
                      <h1 class="header-title"> Semua Produk
                      </h1>
                    </div>
                    <div class="row">
                      <div class="col-auto"> 
                        <?php echo $this->session->flashdata('notif') ?>
                      </div>
                      <div class="col-auto"> 
                        <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary lift"> Tambah Produk 
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col">
                      <ul class="nav nav-tabs nav-overflow header-tabs">
                        <li class="nav-item"> 
                          <a href="#!" class="nav-link active"> Semua 
                            <span class="badge badge-pill badge-soft-secondary">823 
                            </span> 
                          </a>
                        </li>
                        <li class="nav-item"> 
                          <a href="<?= base_url('admin/web/products_baju')?>" class="nav-link"> Baju 
                            <span class="badge badge-pill badge-soft-secondary">24 
                            </span> 
                          </a>
                        </li>
                        <li class="nav-item"> 
                          <a href="<?= base_url('admin/web/products_celana')?>" class="nav-link"> Celana 
                            <span class="badge badge-pill badge-soft-secondary">3 
                            </span> 
                          </a>
                        </li>
                        <li class="nav-item"> 
                          <a href="#!" class="nav-link"> Baju dan Celan Dalam 
                            <span class="badge badge-pill badge-soft-secondary">71 
                            </span> 
                          </a>
                        </li>
                        <li class="nav-item"> 
                          <a href="#!" class="nav-link"> Aksesoris 
                            <span class="badge badge-pill badge-soft-secondary">71 
                            </span> 
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card" id="lists" data-toggle="lists" data-options='{"valueNames": ["name", "orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"], "page": 20, "pagination": true}'>
                <div class="card-header">
                  <h4 class="card-header-title"> Tabel Produk
                  </h4>
                </div>
                <div class="card-header">
                  <form>
                    <div class="input-group input-group-flush">
                      <div class="input-group-prepend"> 
                        <span class="input-group-text"> 
                          <i class="fe fe-search"> 
                          </i> 
                        </span>
                      </div> 
                      <input class="form-control search" type="search" placeholder="Search">
                    </div>
                  </form>
                  <div class="dropdown"> 
                    <button class="btn btn-sm btn-white dropdown-toggle" type="button" id="bulkActionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Bulk action 
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bulkActionDropdown"> 
                      <a class="dropdown-item" href="#!">Action 
                      </a> 
                      <a class="dropdown-item" href="#!">Another action 
                      </a> 
                      <a class="dropdown-item" href="#!">Something else here 
                      </a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-sm table-nowrap card-table">
                    <thead>
                      <tr>
                        <th>
                          Gambar
                        </th>
                        <th> 
                          <a href="#" class="text-muted sort" data-sort="orders-order"> Id Order 
                          </a>
                        </th>
                        <th> 
                          <a href="#" class="text-muted sort" data-sort="orders-date"> Kategori 
                          </a>
                        </th>
                        <th> 
                          <a href="#" class="text-muted sort" data-sort="orders-total"> Stok 
                          </a>
                        </th>
                        <th> 
                          <a href="#" class="text-muted sort" data-sort="orders-status"> Harga 
                          </a>
                        </th>
                        <th colspan="2"> 
                          <a href="#" class="text-muted sort" data-sort="orders-method"> Produk Untuk 
                          </a>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="list"> 
                      <?php foreach($tampil->result_array() as $data): 
                        $Id_item = $data['Id_item']; 
                        $nama_item = $data['nama_item']; 
                        $kategori_item = $data['kategori_item']; 
                        $stok_item = $data['stok_item']; 
                        $harga_item = $data['harga_item']; 
                        $gender_item = $data['gender_item'];
                        $ukuran_item = $data['ukuran_item']; 
                        $gambar = $data['gambar']; ?>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                          <div class="avatar">
                            <img class="avatar-img rounded mr-3" src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $gambar; ?>&w=80&h=60" class="img-responsive" alt="" />
                          </div>
                          <div class="ml-3">
                            <h4 class="font-weight-normal mb-1"><?php echo $nama_item; ?></h4>
                            <small class="text-muted"><?php echo $ukuran_item; ?></small>
                          </div>
                        </div>
                        </td>
                        <td class="orders-order"> 
                          <?php echo $Id_item;?>
                        </td>
                        <td class="orders-date"> 
                          <time datetime="2018-07-30"> 
                            <?php echo $kategori_item;?> 
                          </time>
                        </td>
                        <td class="orders-total"> 
                          <?php echo $stok_item?>
                        </td>
                        <td class="orders-status"> 
                          <?php echo $harga_item; ?>
                        </td>
                        <td class="orders-method"> 
                          <?php echo $gender_item ?>
                        </td>
                        <td class="text-right">
                          <div class="dropdown"> 
                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                              <i class="fe fe-more-vertical"> 
                              </i> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"> 
                              <a href="#!" class="dropdown-item"> Lihat 
                              </a> 
                              <a href="#!" data-toggle="modal" data-target="#edit<?php echo $Id_item ?>" class="dropdown-item"> Edit 
                              </a> 
                              <a href="#!" data-toggle="modal" data-target="#Hapus<?php echo $Id_item ?>" class="dropdown-item"> Hapus 
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr> 
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <ul class="pagination mb-0">
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <?php $this->load->view("_assets/A_form_modal")?> 
    <?php foreach($tampil->result_array() as $data): $Id_item = $data['Id_item']; $nama_item = $data['nama_item']; $kategori_item = $data['kategori_item']; $stok_item = $data['stok_item']; $harga_item = $data['harga_item']; $gender_item = $data['gender_item']; $keterangan = $data['keterangan_item'];$warna_item = $data['warna_item']; $ukuran_item = $data['ukuran_item'];$gambar = $data['gambar']; ?>
    <div class="modal fade" id="edit<?php echo $Id_item ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Edit Produk
            </h3> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
              <span aria-hidden="true">&times; 
              </span> 
            </button>
          </div>
          <div class="modal-body"> 
            <?php echo form_open_multipart('admin/ds/tabel/update') ?>
            <input type="hidden" value="<?php echo $Id_item ?>" name="id"> 
            <input type="hidden" name="old_gambar" value="<?php echo $gambar ?>"> 
            <input type="hidden" name="old_warna" value="<?php echo $warna_item ?>"> 
            <input type="hidden" name="old_ukuran" value="<?php echo $ukuran_item ?>">
            <div class="form-row">
              <div class="col-12 col-md-5 mb-3"> 
                <label for="validationServer01">Nama Produk : 
                </label> 
                <input type="text" class="form-control form-control-appended" placeholder="Nama produk Fashion" name="input_nama" value="<?php echo $nama_item ?>">
              </div>
              <div class="col-12 col-md-3 mb-3"> 
                <label for="validationServer02">Kategori Produk : 
                </label> 
                <select class="form-control" data-toggle="select" name="input_kategori">
                  <option value="Baju" 
                          <?php if($kategori_item == 'Baju') echo 'selected' ?>>Baju
                  </option>
                <option value="Celana" 
                        <?php if($kategori_item =='Celana') echo 'selected' ?>>Celana
                </option>
              <option value="Baju Dalam" 
                      <?php if($kategori_item == 'Baju Dalam') echo 'selected' ?>>Baju Dalam
              </option>
            <option value="Celana Dalam" 
                    <?php if($kategori_item == 'Celana Dalam') echo 'selected' ?>>Celana Dalam
            </option> 
          </select>
      </div>
      <div class="col-12 col-md-2 mb-3"> 
        <label for="validationServer02">Stok Produk : 
        </label> 
        <input type="number" class="form-control form-control-appended" name="input_stok" value="<?php echo $stok_item ?>">
      </div>
      <div class="col-12 col-md-2 mb-3"> 
        <label for="validationServer02">Harga Produk : 
        </label> 
        <input type="number" class="form-control form-control-appended" name="input_harga" value="<?php echo $harga_item ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="col-12 col-md-4 mb-3"> 
        <label for="validationServer01">Produk Untuk : 
        </label>
        <div class="btn-group-toggle" data-toggle="buttons"> 
          <label class="btn btn-white active"> 
            <input type="radio" name="input_gender" value="Pria" 
                   <?php if($gender_item =='Pria') echo 'checked' ?>> 
            <i class="fe fe-check-circle"> 
            </i> PRIA 
          </label> 
          <label class="btn btn-white active"> 
            <input type="radio" name="input_gender" value="Wanita" 
                   <?php if($gender_item =='Wanita') echo 'checked' ?>> 
            <i class="fe fe-check-circle"> 
            </i> WANITA 
          </label>
        </div>
      </div>
      <div class="col-12 col-md-5 mb-3"> 
        <label for="validationServer02">Warna : 
        </label> 
        <select class="form-control" data-toggle="select" name="input_warna[]" multiple> 
          <?php $all_warna = array('white','brown','black','cream','red','darkgrey','litebrown','liteblue'); $get_warna = $warna_item; $pecah = explode(", ",$get_warna); foreach ($all_warna as $get_warna){ $checkedStatus = ""; if(in_array($get_warna, $pecah)) { $checkedStatus ="selected"; } echo "<option ".$checkedStatus." value='".$get_warna."'>".$get_warna."</option>"; } ?> 
        </select>
      </div>
      <div class="col-12 col-md-3 mb-3"> 
        <label for="validationServer02">Ukuran : 
        </label> 
        <select class="form-control" data-toggle="select" multiple name="input_ukuran[]"> 
          <?php $all_ukuran = array('XXS','XS','S','M','L','XL','XXL'); $get_ukuran = $ukuran_item; $pecah = explode(", ",$get_ukuran); foreach ($all_ukuran as $get_ukuran){ $checkedStatus = ""; if(in_array($get_ukuran, $pecah)) { $checkedStatus ="selected"; } echo "<option ".$checkedStatus." value='".$get_ukuran."'>".$get_ukuran."</option>"; } ?> 
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12 col-md-12 mb-12"> 
        <label for="validationServer02">Keterangan : 
        </label>
        <textarea class="form-control" name="input_keterangan" data-toggle="autosize" rows="4" placeholder="Masukan Keterangan produk Fashion disini..."><?= $keterangan ?></textarea>
      </div>
    </div> 
    <br>
    <div class="form-row">
      <div class="col-12 col-md-12 mb-12">
        <div class="alert alert-light alert-dismissible fade show" role="alert"> 
          <strong>Perhatian 
            <span class="fe fe-alert-triangle"> 
            </span> 
          </strong>
          <p>Wajid isi semua data untuk memenuhi informasi Produk dan termasuk Gambar, 
            <font color="orange">Gambar sampul 
            </font> wajid ditambah.
          </p> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">× 
            </span> 
          </button>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12 col-md-3 mb-3"> 
        <label for="validationServer01">Gambar Sampul 
        </label> 
        <input type="file" class="form-control form-control-appended" name="input_gambar">
      </div>
      <div class="col-12 col-md-3 mb-3"> 
        <label for="validationServer02">Gambar SS 1 
        </label> 
        <input type="file" class="form-control form-control-appended" name="input_gambar1">
      </div>
      <div class="col-12 col-md-3 mb-3"> 
        <label for="validationServer02">Gambar SS 2 
        </label> 
        <input type="file" class="form-control form-control-appended" name="input_gambar2">
      </div>
      <div class="col-12 col-md-3 mb-3"> 
        <label for="validationServer02">Gambar SS 3 
        </label> 
        <input type="file" class="form-control form-control-appended" name="input_gambar3">
      </div>
    </div>
    <div class="form-row">
      <div class="col-12 col-md-3 mb-3"> 
        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $gambar; ?>&w=180&h=160" class="img-responsive" alt="">
      </div>
    </div>
    </div>
  <div class="modal-footer"> 
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup 
    </button> 
    <button type="submit" class="btn btn-primary">Update 
    </button>
  </div> 
  <?php echo form_close() ?>
  </div>
</div>
</div> 
<?php endforeach; ?> 
<?php foreach($tampil->result_array() as $data): $Id_item = $data['Id_item']; $nama_item = $data['nama_item']; $gambar = $data['gambar']; ?>
<div class="modal-danger mr-1 mb-1 d-inline-block">
  <div class="modal fade text-left" id="Hapus<?php echo $Id_item ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h3 class="modal-title white" id="myModalLabel120">Hapus data
          </h3> 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <i class="bx bx-x"> 
            </i> 
          </button>
        </div>
        <div class="modal-body"> Apakah anda yakin ingin menghapus data 
          <?= strtoupper($nama_item) ?> ?
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup 
          </button> 
          <a href="<?= base_url('admin/ds/tabel/hapus/'.$Id_item) ?>"> 
            <button type="submit" name="submit" class="btn btn-danger"> Hapus 
            </button> 
          </a>
        </div>
      </div>
    </div>
  </div> 
  <?php endforeach;?>
  <?php $this->load->view('_assets/A_footer'); ?>
  </body>
</html>
