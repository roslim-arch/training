<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data dari Database dengan laravel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Tabel Buah-Buahan</h2>
		<a href="/buahan/tambahh"> + Tambah Buah Baru</a>
		<br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Warna</th>
					<th>Bentuk</th>
					<th>Rasa</th>
					<th>Action</th>
				</tr>
			</thead>
			@foreach($buahan as $b)
			<tbody>
				<tr>
					<td>{{ $b->nama }}</td>
					<td>{{ $b->warna }}</td>
					<td>{{ $b->bentuk }}</td>
					<td>{{ $b->rasa }}</td>
					<td><a href="/buahan/editt/{{ $b->id }}">Edit</a> | <a href="/buahan/hapus/{{ $b->id }}">Hapus</a></td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
</body>
</html>