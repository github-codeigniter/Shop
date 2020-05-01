
<?php $this->load->view('_assets/U_header');
      $this->load->view('_assets/U_navbar');
?>
<div class="bcrumbs">
<div class="container">
<ul>
    <li><a href="<?= base_url('user/web') ?>">Home</a></li>
    <li><a href="#">Produk</a></li>
    <li><a href="#"><font color="red"><?= $tampil->kategori_item ?></font></li>
    <li><a href="#"><font color="red"><?= $tampil->nama_item ?></font></li>
</ul>
</div>
</div>

<div class="space10"></div>

<!-- MAIN CONTENT -->
<div class="shop-single">
<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="col-md-5 col-sm-6">                                    
                <div class="owl-carousel prod-slider sync1">
                    <div class="item"> 
                        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar; ?>&w=450&h=460" class="img-responsive" alt="">
                    </div>
                    <div class="item"> 
                        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar1; ?>&w=450&h=460" class="img-responsive" alt="">
                    </div>
                    <div class="item"> 
                        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar2; ?>&w=450&h=460" class="img-responsive" alt="">
                    </div>
                    <div class="item"> 
                        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar3; ?>&w=450&h=460" class="img-responsive" alt="">
                    </div>
                </div>

                <div  class="owl-carousel sync2">
                    <div class="item"> <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar; ?>&w=170&h=215" class="img-responsive" alt=""></div>
                    <div class="item"> <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar1; ?>&w=170&h=215" class="img-responsive" alt=""></div>
                    <div class="item"> <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar2; ?>&w=170&h=215" class="img-responsive" alt=""></div>
                    <div class="item"> <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $tampil->gambar3; ?>&w=170&h=215" class="img-responsive" alt=""></div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                
            <form method="post" action="<?php echo base_url('user/web/addCart')?>" enctype="multipart/form-data" >
                <div class="product-single">
                    <div class="ps-header">
                        <span class="badge offer">-50%</span>
                        <h3><?= $tampil->nama_item; ?></h3>
                        <div class="ratings-wrap">
                            <div class="ratings">
                                <span class="act fa fa-star"></span>
                                <span class="act fa fa-star"></span>
                                <span class="act fa fa-star"></span>
                                <span class="act fa fa-star"></span>
                                <span class="act fa fa-star"></span>
                            </div>
                            <em>(6 reviews)</em>
                        </div>
                        <div class="ps-price">Rp. <?= $tampil->harga_item; ?></div>
                    </div>
                    <p><?= $tampil->keterangan_item; ?></p>
                    <div class="ps-stock">
                        Tersedia: <?= $tampil->stok_item; ?> stok
                    </div>
                    <div class="sep"></div>
                    <div class="ps-color">
                        <p>Warna*
                        <p>  
                        <table>
                            <tr>
                                <?php foreach (explode(', ', $tampil->warna_item) as $pecah) {?>
                                <th><a class="<?php echo $pecah ?>">
                                    </a>
                                </th>
                                 <?php }?>
                            </tr>
                            <tr align="center">
                                <?php foreach (explode(', ', $tampil->warna_item) as $pecah) {?>
                                <td>             
                                <input type="checkbox" name="warna[]" value="<?php echo $pecah ?>">
                                </td>
                                <?php }?>
                            </tr>
                           
                        </table>
                        
                    </div>
                    <div class="space10"></div>
                    <div class="row select-wraps">
                        <div class="col-md-7 col-sm-7">
                            <p>Ukuran <span>*</span></p>
                            <select>
                            <?php foreach (explode(', ', $tampil->ukuran_item) as $pecah) {?>
                        <option name="input_ukuran" value="<?php echo $pecah ?>">
                            <?php echo $pecah ?>
                        </option>
                            <?php }?>
                            </select>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <p>Pesan Berapa<span>*</span></p>
                            <select>
                                <?php $x = 1;
                                while ($x <= $tampil->stok_item) {
                                    echo "<option value='$x' name='input_mesan'>".$x."</option>";
                                 $x++;
                                 } ?>
                            </select>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="share">
                        <span>
                            <a href="#" class="fa fa-heart-o"></a>
                            <a href="#" class="fa fa-signal"></a>
                            <a href="#" class="fa fa-envelope-o"></a>
                        </span>
                        <div class="addthis_native_toolbox"></div>
                    </div>
                    <div class="space20"></div>
                    <div class="sep"></div>
                <input type="hidden" name="id_user" value="<?= $this->session->userdata('Id_user') ?>">
                <input type="hidden" name="input_user" value="<?= $this->session->userdata('nama_user') ?>">
                <input type="hidden" name="id_item" value="<?= $tampil->Id_item ?>">
                <input type="hidden" name="input_item" value="<?= $tampil->nama_item ?>">
                <input type="hidden" name="input_harga" value="<?= $tampil->harga_item ?>">

                <button type="submit" class="addtobag"><span class="act fa fa-cart-plus"></span><small> Tambah Keranjang</small>
                </button>
            </form>
            </div>
            </div>
        </div>
        <div class="clearfix space40"></div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Keterangan Produk</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Komentar</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <b>Produk <?= $tampil->nama_item ?></b>
                    <div class="space10"></div>
                    <p>Keterangan lain...</p>
                    <p>Produk code: <?= $tampil->Id_item ?></p>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="reviews-tab">
                        <p><b>Nama Komentar</b>, Tanggal</p>
                        <p>Komentar...</p>
                        <div class="ratings">
                            <span class="act fa fa-star"></span>
                            <span class="act fa fa-star"></span>
                            <span class="act fa fa-star"></span>
                            <span class="act fa fa-star"></span>
                            <span class="act fa fa-star"></span>
                        </div>
                        <div class="sep"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix space40"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="heading space40"><span>Produk yang lain</span></h5>
                <div class="product-carousel3">
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <span class="badge new">New</span>
                                <img src="<?php echo base_url(); ?>assets/images/products/fashion/5.jpg" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="white"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix space20"></div>
    </div>
</div>
</div>
</div>

<?php
    $this->load->view('_assets/U_footer');
    //$this->load->view('_assets/U_modal');
    $this->load->view('_assets/U_footjs');
?>