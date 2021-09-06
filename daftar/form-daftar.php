<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran</h3>
	</header>
	
	<form method="post" action="proses-pendaftaran.php">
		<p>
			<label>ID: </label>
			<input type="text" name="id" placeholder="No.ID">
		<p>
			<label>Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap">
		</p>
		<p>
			<label>Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label>Jenis Kelamin: </label>
			<select name="jenis kelamin">
				<option value="laki-laki">laki-laki</option>
				<option value="perempuan">perempuan</option>
			</select>
		<p>
			<label>Agama: </label>
			<select name="agama">
				<option value="Islam">Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
				<option value="Buddha">Buddha</option>
				<option value="Kong Hu cu">Kong Hu Cu</option>
			</select>	
		</p>
		<p>		
			<label>Asal Sekolah: </label>
			<input type="text" name="sekolah_asal" placeholder="sekolah asal">
		</p>
		<p>
			<label>Nilai UTBK: </label>
			<input type="text" name="nilai_utbk" placeholder="nilai utbk">
		</p>
		<p>
			<button type="submit" >Daftar Sekarang</button>
		</p>
	</form>
</body>
</html>