<?php
$id = $_GET['barang'];
$hasil = $lihat->barang_edit($id);
?>
<a href="index.php?page=barang" class="btn btn-info mb-3"><i class="fa fa-angle-left"></i> Kembali </a>
<h4 style="font-weight: bold;">Details Barang</h4>
<?php if (isset($_GET['success-stok'])) { ?>
	<div class="alert alert-success">
		<p>Tambah Stok Berhasil !</p>
	</div>
<?php } ?>
<?php if (isset($_GET['success'])) { ?>
	<div class="alert alert-success">
		<p>Tambah Data Berhasil !</p>
	</div>
<?php } ?>
<?php if (isset($_GET['remove'])) { ?>
	<div class="alert alert-danger">
		<p>Hapus Data Berhasil !</p>
	</div>
<?php } ?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td style="color: black;font-weight: bold;">ID Barang</td>
				<td><?php echo $hasil['id_barang']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Kategori</td>
				<td><?php echo $hasil['nama_kategori']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Nama Barang</td>
				<td><?php echo $hasil['nama_barang']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Merk Barang</td>
				<td><?php echo $hasil['merk']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Harga Beli</td>
				<td><?php echo $hasil['harga_beli']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Harga Jual</td>
				<td><?php echo $hasil['harga_jual']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Satuan Barang</td>
				<td><?php echo $hasil['satuan_barang']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Stok</td>
				<td><?php echo $hasil['stok']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Tanggal Input</td>
				<td><?php echo $hasil['tgl_input']; ?></td>
			</tr>
			<tr>
				<td style="color: black;font-weight: bold;">Tanggal Update</td>
				<td><?php echo $hasil['tgl_update']; ?></td>
			</tr>
		</table>
	</div>
</div>