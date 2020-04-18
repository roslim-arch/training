<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Edit data Buah</h2>
		<a href="/buahan">Kembali</a>
		<br>
		@foreach($buahan as $b)
		<form action="/buahan/update" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="hidden" name="id" value="{{ $b->id}}"> <br>
				<label>Nama:</label>
				Nama <input type="text" required="required" name="Nama" value="{{ $b->nama }}" class="form-control"> <br>
				<label>Warna:</label>
				<input type="text" required="required" name="Warna" value="{{ $b->warna }}" class="form-control"> <br>
				<label>Bentuk:</label>
				<input type="text" required="required" name="Bentuk" value="{{ $b->bentuk }}" class="form-control"> <br>
				<label>Rasa:</label>
				<input type="text" required="required" name="Rasa" value="{{ $b->rasa }}" class="form-control"> <br>
				<input type="submit" value="simpan data">
			</div>
		</form>
		@endforeach
	</div>
</body>
</html>