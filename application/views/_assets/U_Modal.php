<!-- <div class="subscribe-me">
<a href="#close" class="sb-close-btn">x</a>
<div id="popup-newsletter">
    <div class="block-content">
        <div class="form-subscribe-header">
            <label>Join Our Email Letter</label>
        </div>
        <div class="clearfix space30"></div>
        <span class="promo-panel-sale">TAKE 25% OFF YOUR NEXT PURCHASE !</span>
        <div class="clearfix space30"></div>
        <span class="promo-panel-text"></span>
        <div class="clearfix space30"></div>
        <div class="input-box">
            <input name="email" id="pnewsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" type="text">
        </div>
        <div class="actions">
            <button type="submit" title="JOIN NOW !" class="button"><span><span>JOIN NOW !</span></span></button>
        </div>
        <span class="promo-panel-text1">No Thank ! I'm not interested in this promotion </span><br>
        <span class="promo-panel-text2">Entering your email also subscribe you to the latest Sunshine furniture news and offers *</span>
        <label class="subscribe-bottom"><input type="checkbox"><span>Don't show this popup again</span></label>
    </div>
</div>
</div>
 -->
<?php
    foreach ($baju->result_array() as $baju):
    $Id_item = $baju['Id_item'];
    $nama_item = $baju['nama_item'];        
    $harga_item = $baju['harga_item'];        
    $warna_item = $baju['warna_item'];        
    $ukuran_item = $baju['ukuran_item'];        
    $stok_item = $baju['stok_item'];        
    $gambar = $baju['gambar'];        
?>
<!-- Modal view Baju -->
<div class="modal fade" id="baju<?= $Id_item ?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="owl-carousel sync1">
                    <div class="item"> 
                        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $gambar; ?>&w=450&h=460" class="img-responsive" alt="">
                    </div>
                </div>

                <div class="owl-carousel sync2">
                    <div class="item"> <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url()?>uploads/<?php echo $gambar; ?>&w=170&h=215" class="img-responsive" alt=""></div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="product-single">
                    <div class="ps-header">
                        <span class="badge offer">-50%</span>
                        <h3><?php echo $nama_item?></h3>
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
                        <div class="ps-price">Rp. <?php echo $harga_item ?></div>
                    </div>

                    <div class="ps-stock">
                        Tersedia: <strong><a href="#"><?php echo $stok_item ?></a></strong> Stok
                    </div>
                    <div class="sep"></div>
                    <div class="ps-color">
                        <p>Warna*
                        <p>  
                        <table>
                            <tr>
                                <?php foreach (explode(', ', $warna_item) as $pecah) {?>
                                <th><a class="<?php echo $pecah ?>">
                                    </a>
                                </th>
                                 <?php }?>
                            </tr>
                            <tr align="center">
                                <?php foreach (explode(', ', $warna_item) as $pecah) {?>
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
                            <?php foreach (explode(', ', $ukuran_item) as $pecah) {?>
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
                                while ($x <= $stok_item) {
                                    echo "<option value='$x' name='input_mesan'>".$x."</option>";
                                 $x++;
                                 } ?>
                            </select>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="share">
                        <span>
                            <a href="#" class="fa fa-heart-o" onclick="return false;"></a>
                            <a href="#" class="fa fa-signal" onclick="return false;"></a>
                            <a href="#" class="fa fa-envelope-o" onclick="return false;"></a>
                        </span>
                        <div class="addthis_native_toolbox"></div>
                    </div>
                    <div class="space20"></div>
                    <div class="sep"></div>
                    <a class="btn-color" href="#">Tambah Keranjang</a>
                    <a class="btn-black" href="<?php echo base_url('user/web/lihatProduk/'.$Id_item)?>">Lihat Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php endforeach; ?>