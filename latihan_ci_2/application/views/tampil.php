<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="mt-4">
			<h2>Tampil Data Mahasiswa</h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nim</th>
						<th>Nama</th>
						<th>Prodi</th>
						<th>Semester</th>
						<th>Kelas</th>
						<th>Email</th>
						<th>Telepon</th>
						<th>Minat</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data->result_array() as $data) { ?>
					<tr>
						<td><?php echo $data['nim'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['prodi'] ?></td>
						<td><?php echo $data['smt'] ?></td>
						<td><?php echo $data['kelas'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['phone'] ?></td>
						<td><?php echo $data['minat'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
