<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?> || PijarCamp</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<h2 class="text-center mt-2">PRODUK BAJU PIJARCAMP</h2>
		<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#add">
			Tambah Data
		</button>

		<?php
		if ($this->session->flashdata('pesan')) {
			echo '<div class="alert alert-success alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check"></i>';
			echo $this->session->flashdata('pesan');
			echo '</h5></div>';
		} else if ($this->session->flashdata('pesan1')) {
			echo '<div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check"></i>';
			echo $this->session->flashdata('pesan1');
			echo '</h5></div>';
		} else if ($this->session->flashdata('pesan2')) {
			echo '<div class="alert alert-danger alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <h5><i class="icon fa fa-check"></i>';
			echo $this->session->flashdata('pesan2');
			echo '</h5></div>';
		}
		?>

		<table class="table table-striped mt-2">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Produk</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Harga</th>
					<th scope="col">Jumlah</th>

				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($produk as $key => $value) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $value->nama_produk ?></td>
						<td><?= $value->keterangan ?></td>
						<td>Rp. <?= number_format($value->harga, 2) ?></td>
						<td><?= $value->jumlah ?></td>

					</tr>
				<?php } ?>


			</tbody>
		</table>
	</div>

	<!-- Modal Tambah Data -->
	<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('produk/add');
					?>
					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
					</div>

					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" name="keterangan" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="number" name="harga" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" name="jumlah" class="form-control" required>
					</div>


				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>

		</div>
	</div>
	<!-- End Modal Tambah Data -->


	<!-- Untuk Aksi Bagian Ubah Data dan Hapus Data Belum Dikerjakan karna keterbatasan waktu, terimakasih -->

	<script>
		window.setTimeout(function() {
			$('.alert').fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 3000);
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
