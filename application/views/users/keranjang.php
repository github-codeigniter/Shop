<?php $this->load->view('_assets/U_header');
      $this->load->view('_assets/U_navbar');
?>
<!-- BREADCRUMBS -->
<div class="bcrumbs">
  <div class="container">
    <ul>
      <li><a href="<?= base_url("user/web") ?>">Home</a></li>
      <li>Keranjang</li>
    </ul>
  </div>
</div>
<div class="space10"></div>
<!-- MAIN CONTENT -->
<div class="shop-single shopping-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <table class="cart-table"> 
          <?php echo form_open()?> <tr>
            <th>Hapus</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Total Harga</th>
          </tr> <?php foreach ($data->result_array() as $row) {
                    $nama_item = $row['nama_item'];
                    $total = $row['total'];
                    $harga_item = $row['harga_item'];
                    $Id_item = $row['Id_item'];

                    $hasil = $total*$harga_item;
                    ?>
            <tr>

            <input type="hidden" name="id_user" value="<?= $this->session->userdata('Id_user') ?>">
            <input type="hidden" name="input_user" value="<?= $this->session->userdata('nama_user') ?>">
            <input type="hidden" name="id_item" value="<?= $Id_item ?>">
            <input type="hidden" name="input_item" value="<?= $nama_item ?>">
            <input type="hidden" name="input_harga" value="<?= $total ?>">
            <input type="hidden" name="input_harga" value="<?= $hasil ?>">

            <td><i class="fa fa-trash-o"></i></td>
            <td><img src="images/products/fashion/5.jpg" class="img-responsive" alt="" /></td>
            <td><?= htmlentities($nama_item); ?></td>
            <td><?= htmlentities($total); ?></td>
            <td><?= $harga_item ?></td>
            <td><?= $hasil ?></td>
          </tr> 
        <?php }?>
        </table>
        <div class="table-btn">
          <a href="<?= base_url('user/web/checkOutVer');?>" class="btn-black pull-left">Lanjutkan Belanaja</a>
          <!-- <a href="#" class="btn-black pull-right">Update Shopping Cart</a> -->
        </div>
        <?php form_close() ?> 
        <div class="clearfix space20"></div>
        <div class="row shipping-info-wrap">
          <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="totals">
                                        <table id="shopping-cart-totals-table">
                                            <tfoot>
                                                <tr>
                                                    <td style="" class="a-right" colspan="1">
                                                        <strong>Grand Total</strong>
                                                    </td>
                                                    <td style="" class="a-right">
                                                        <strong><span class="price">$1000.00</span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td style="" class="a-right" colspan="1">
                                                        Subtotal    
                                                    </td>
                                                    <td style="" class="a-right">
                                                        <span class="price">$1000.00</span>    
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="checkout-types">
                                            <li class="space10"><button type="button" class="btn-color">Proceed to checkout</button></li>
                                            <li><a href="#">Checkout with Multiple Addresses</a></li>
                                        </ul>
                                    </div>
                                </div> -->
        </div>
        <div class="space40"></div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix space20"></div> 
<?php
    $this->load->view('_assets/U_footer');
    //$this->load->view('_assets/U_modal');
    $this->load->view('_assets/U_footjs');
?>