<!-- Modal TAMBAH-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tambah Produk
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;
          </span>
        </button>
      </div>
      <div class="modal-body">
        <!-- START -->
        <?php echo form_open_multipart('admin/ds/tabel/tambah') ?>
        <div class="form-row">
          <div class="col-12 col-md-5 mb-3">
            <label for="validationServer01">Nama Produk<font color="red">*</font>
            </label>
            <input type="text" class="form-control form-control-appended" placeholder="Nama produk Fashion" name="input_nama" required>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <label for="validationServer02">Kategori Produk<font color="red">*</font>
            </label>
            <select class="form-control" data-toggle="select" name="input_kategori" required>
              <option value="Baju">Baju
              </option>
              <option value="Celana">Celana
              </option>
              <option value="Baju Dalam">Baju Dalam
              </option>
              <option value="Celana Dalam">Celana Dalam
              </option>
            </select>
          </div>
          <div class="col-12 col-md-2 mb-3">
            <label for="validationServer02">Stok Produk<font color="red">*</font>
            </label>
            <input type="number" class="form-control form-control-appended" name="input_stok" required>
          </div>
          <div class="col-12 col-md-2 mb-3">
            <label for="validationServer02">Harga Produk<font color="red">*</font>
            </label>
            <input type="number" class="form-control form-control-appended" name="input_harga" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 col-md-4 mb-3">
            <label for="validationServer01">Produk Untuk<font color="red">*</font>
            </label>
            <div class="btn-group-toggle" data-toggle="buttons" required>
              <label class="btn btn-white active">
                <input type="radio" name="input_gender" value="Pria" > 
                <i class="fe fe-check-circle">
                </i> PRIA
              </label>
              <label class="btn btn-white active">
                <input type="radio" name="input_gender" value="Wanita" > 
                <i class="fe fe-check-circle">
                </i> WANITA
              </label>
            </div>
          </div>
          <div class="col-12 col-md-5 mb-3">
            <label for="validationServer02">Warna<font color="red">*</font>
            </label>
            <select class="form-control <?php echo form_error('input_warna[]') ? 'is-invalid':'' ?>" data-toggle="select" name="input_warna[]" multiple required>
              <option value="white">White
              </option>
              <option value="brown">Brown
              </option>
              <option value="black">Black
              </option>
              <option value="cream">Cream
              </option>
              <option value="red">Red
              </option>
              <option value="darkgrey">Darkgrey
              </option>
              <option value="litebrown">Litebrown
              </option>
              <option value="liteblue">Liteblue
              </option>
            </select>
            <div class="invalid-feedback">
              <?php echo form_error('input_warna[]'); ?>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <label for="validationServer02">Ukuran<font color="red">*</font>
            </label>
            <select class="form-control <?php echo form_error('input_ukuran[]') ? 'is-invalid':'' ?>" data-toggle="select" multiple name="input_ukuran[]" required>
              <option value="XXS">XXS
              </option>
              <option value="XS">XS
              </option>
              <option value="S">S
              </option>
              <option value="M">M
              </option>
              <option value="L">L
              </option>
              <option value="XL">XL
              </option>
              <option value="XXL">XXL
              </option>
            </select>
            <div class="invalid-feedback">
              <?php echo form_error('input_ukuran[]'); ?>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 col-md-12 mb-12">
            <label>Keterangan<font color="red">*</font>
            </label>
            <textarea class="form-control" name="input_keterangan" data-toggle="autosize" rows="4" placeholder="Masukan Keterangan produk Fashion disini..." required></textarea>
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
              <p>Tanda ( <font color="red">*</font> ) Wajid isi data untuk memenuhi informasi Produk.
              </p>
              <!-- Button -->
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 col-md-3 mb-3">
            <label for="validationServer01">Gambar Sampul<font color="red">*</font>
            </label>
            <input type="file" class="form-control form-control-appended" name="input_gambar" required>
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
        <!-- END -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup
        </button>
        <button type="submit" class="btn btn-primary">Simpan
        </button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>


