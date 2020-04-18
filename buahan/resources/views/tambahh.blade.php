<!DOCTYPE html>
<html>
<head>
	<title>Tambah Jenis Buah Baru</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Input Jenis Buah Baru</h2>
		<a href="/buahan">Kembali</a>
		<br>
		<form action="/buahan/store" method="post">
			<div class="form-group">
				{{ csrf_field() }}
				<label>Name:</label>
				<input type="text" name="Nama" required="required" class="form-control"> <br>
				<label>Warna</label>
				<input type="text" name="Warna" required="required" class="form-control"> <br>
				<label>Bentuk</label>
				<input type="text" name="Bentuk" required="required" class="form-control"> <br>
				<label>Rasa</label>
				<input type="text" name="Rasa" required="required" class="form-control"> <br>
				<input type="submit" value="Simpan Data">
			</div>
		</form>
	</div>	
</body>
</html>