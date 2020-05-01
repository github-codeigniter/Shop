<?php foreach ($index as $lihat) {
	?>
<table border="2">
	<tr>
		<td>Nama Produk</td>
		<td>Kategori</td>
		<td>Harga</td>
		<td>Keterangan</td>
		<td>Warna</td>
		<td>Ukuran</td>
		<td>Gambar</td>
	</tr>
	<tr>
		<td><?php echo $lihat->nama_item; ?></td>
		<td><?php echo $lihat->kategori_item; ?></td>
		<td><?php echo $lihat->harga_item; ?></td>
		<td><?php echo $lihat->ket_item; ?> </td>
		<td><?php echo $lihat->warna_item; ?> </td>
		<td><?php echo $lihat->size_item; ?></td>
		<td><img width ="50%" src="<?php echo base_url(); ?>uploads/<?php echo $lihat->gambar; ?>"/></td>
                        
	</tr>
</table>
	<?php foreach (explode(', ', $lihat->warna_item) as $key) {	?>
	<ul>
		<li><?php echo $key; ?></li>
	</ul>
<?php 
	}
	foreach (explode(', ', $lihat->size_item) as $key2) { ?>
	<ul>
		<li>
			<?php echo $key2;?>
		</li>
	</ul>

<?php
	}
}
?>
