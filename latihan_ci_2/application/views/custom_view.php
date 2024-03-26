<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Input Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="card p-5">
				<h2>Form Data Mahasiswa</h2>
				<form action="<?php echo site_url('Custom/simpan')?>" method="post">
					<div class="row px-2">
						<label class="form-label fw-bold" for="nim">Nim</label>
						<input class="form-control" type="text" name="nim" id="nim" maxLength="8">
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="nama">Nama</label>
						<input class="form-control" type="text" name="nama" id="nama">
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="prodi">Prodi</label>
						<select class="form-select" type="text" name="prodi" id="prodi">
							<option selected value="Teknologi Informasi">Teknologi Informasi</option>
							<option value="Sistem Informasi">Sistem Informasi</option>
							<option value="RPL">RPL</option>
							<option value="Teknik Industri">Teknik Industri</option>
						</select>
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="smt">Semester</label>
						<input class="form-control" type="text" name="smt" id="smt">
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="kelas">Kelas</label>
						<input class="form-control" type="text" name="kelas" id="kelas">
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="email">Email</label>
						<input class="form-control" type="text" name="email" id="email">
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="phone">Telepon</label>
						<input class="form-control" type="text" name="phone" id="phone">
					</div>
					<div class="row px-2">
						<label class="form-label fw-bold" for="minat">Minat</label>
						<input class="form-control" type="text" name="minat" id="minat">
					</div>
					<br>
					<button class="btn btn-primary" type="submit">Submit</button>
					<a class="btn btn-success ms-2" href="<?php echo site_url("Custom/tampil")?>">Cetak Data</a>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
