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
                    <h1 class="header-title"> Jual ditempat
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
            <!-- CARD1 -->
            <div class="card" id="lists" data-toggle="lists" data-options='{"valueNames": ["name", "orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method", "orders-aksi"], "page": 20, "pagination": true}'>

              <div class="card-header">
                <h4 class="card-header-title"> Tabel Produk Penjualan
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
                        <a href="#" class="text-muted sort" data-sort="orders-order"> Produk
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
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-method"> Produk Untuk
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-aksi"> Aksi
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
                        $gambar = $data['gambar'];
                         ?>
                    <tr>
                      <td class="orders-order">
                        <div class="d-flex align-items-center">

                          <!-- Image -->
                          <div class="avatar">
                            <img class="avatar-img rounded mr-3" src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $gambar; ?>&w=80&h=60" class="img-responsive" alt="" />
                          </div>

                          <div class="ml-3">

                            <!-- Heading -->
                            <h4 class="font-weight-normal mb-1"><?php echo $nama_item; ?></h4>

                            <!-- Text -->
                            <small class="text-muted"><?php echo $ukuran_item; ?></small>
                          </div>
                        </div>
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
                      <td class="orders-aksi">
                        <a href="#" data-toggle="modal" data-target="#jual<?php echo $Id_item ?>" class="btn btn-primary lift">
                          Jual
                        </a>
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

  <!-- MODAL ADD -->
  <?php $this->load->view("_assets/A_form_modal")?>

  <!-- MODAL JUAL -->
  <?php foreach($tampil->result_array() as $data):
    $Id_item = $data['Id_item'];
    $nama_item = $data['nama_item']; 
    $kategori_item = $data['kategori_item']; 
    $stok_item = $data['stok_item']; 
    $harga_item = $data['harga_item']; 
    $gender_item = $data['gender_item']; 
    $keterangan = $data['keterangan_item'];
    $warna_item = $data['warna_item']; 
    $ukuran_item = $data['ukuran_item'];
    $gambar = $data['gambar']; 
  ?>
  <div class="modal fade" id="jual<?php echo $Id_item ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Keterangan Produk
          </h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 col-lg-6">

              <!-- Card -->
              <?php echo form_open()?>
              <div class="form-row">
                <div class="col-12 col-md-6 mb-3">
                  <label>Nama Produk</label>
                  <input type="text" class="form-control is-valid" value="<?php echo $nama_item ?>" readonly="">
                </div>
                <div class="col-12 col-md-6 mb-3">
                  <label>Kategori</label>
                  <input type="text" class="form-control is-valid" value="<?php echo $kategori_item ?>" readonly>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-md-6 mb-3">
                  <label>Total Stok</label>
                  <input type="text" class="form-control is-valid" value="<?php echo $stok_item ?>" readonly>
                </div>
                <div class="col-12 col-md-6 mb-3">
                  <label for="nama"> Harga Satuan</label>
                  <input type="text" name="" class="form-control is-valid" id="harga" value="<?php echo $harga_item ?>" readonly>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-md-3 mb-3">
                  <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $gambar; ?>&w=120&h=100" class="img-responsive" alt="">
                </div>
              </div>

            </div>
            <div class="col-12 col-lg-6 perhitungan">

              <!-- Card -->
              <label for="jumlah">Jumlah Pesanan</label>
              <input type="number" class="form-control" id="jumlah" placeholder="Masukan jumlah pesanan" required>

              <label>Nama Pembeli</label>
              <input type="text" class="form-control" placeholder="Masukan nama pembeli" required>

              <label>Alamat Pembeli</label>
              <textarea class="form-control" name="input_keterangan" data-toggle="autosize" rows="2" placeholder="Masukan alamat pembeli"></textarea>

              <labelb for="total">Total Harga</label>
                <input type="text" id="total" class="form-control" readonly="" placeholder="Rupiah">

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup
          </button>
          <input type="reset" name="reset" value="Reset" class="btn btn-warning">
          <button type="submit" class="btn btn-success">Verifikasi & cetak
          </button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

  <!-- MODAL Verifikasi -->
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(".perhitungan").keyup(function() {
        var harga = parseInt($("#harga").val())
        var jumlah = parseInt($("#jumlah").val())
        var total = harga * jumlah;
        $("#total").attr("value", total)
      });
    </script>
    <?php $this->load->view('_assets/A_footer'); ?>

</body>

</html>