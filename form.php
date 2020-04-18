<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<div class="container">
<h2>Form Pendaftaran Siswa</h2>
	<form action="simpan.php" method="post">
		<div class="form-group">
			<label>Nama:</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<div class="form-group">
			<label>Jenis Kelamin:</label>
			<input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" />
		</div>
		<div class="form-group">
			<label>No HP:</label>
			<input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP" />
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control" placeholder="Masukkan Email" />
		</div>	
		<div class="form-group">
			<label>Alamat:</label>
			<textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat" ></textarea>
		</div>
		<button type="submit" name="Kirim" class="btn btn-primary">Kirim</button>

	</form>
</div>
</body>
</html>
