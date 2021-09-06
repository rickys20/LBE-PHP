<?php
	include('config.php');
	
	//Ambil data dari url
	$id = $_GET['id'];
	
	$sql = 'select * from calon_mahasiswa where id = '.$id;
	$query = mysqli_query($db_connection, $sql);
	$mahasiswa = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) <1){
		header('Location: list-siswa.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit</title>
</head>

<body>
	<header>
		<h3>Formulir Edit</h3>
	</header>
	
	<form method="post" action="proses-edit.php">
		<p>
			<label>ID: </label>
			<input type="text" name="id" value="<?php echo $mahasiswa['id']?>">
		<p>
			<label>Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $mahasiswa['nama'] ?> ">
		</p>
		<p>
			<label>Alamat: </label>
			<textarea name="alamat"><?php echo $mahasiswa['alamat'] ?></textarea>
		</p>
		<p>
			<label>Jenis Kelamin: </label>
			<select name="jenis kelamin">
				<option value="laki-laki" <?php echo ($mahasiswa['jenis_kelamin']== 'laki-laki') ? 'selected': '' ?> > laki-laki</option>
			 	<option value="perempuan" <?php echo ($mahasiswa['jenis_kelamin']== 'perempuan') ? 'selected': '' ?> > perempuan</option>
			</select>
		<p>
			<label>Agama: </label>
			<select name="agama">
				<option <?php echo ($mahasiswa['agama'] == 'Islam') ? 'selected' : '' ?> value="Islam">Islam</option>
				<option <?php echo ($mahasiswa['agama'] == 'Kristen') ? 'selected' : '' ?> value="Kristen">Kristen</option>
				<option <?php echo ($mahasiswa['agama'] == 'Katolik') ? 'selected' : '' ?> value="Katolik">Katolik</option>
				<option <?php echo ($mahasiswa['agama'] == 'Hindu') ? 'selected' : '' ?> value="Hindu">Hindu</option>
				<option <?php echo ($mahasiswa['agama'] == 'Buddha') ? 'selected' : '' ?> value="Buddha">Buddha</option>
				<option <?php echo ($mahasiswa['agama'] == 'Kong Hu cu') ? 'selected' : '' ?> value="Kong Hu cu">Kong Hu Cu</option>
			</select>	
		</p>
		<p>		
			<label>Asal Sekolah: </label>
			<input type="text" name="sekolah_asal" placeholder="sekolah asal" value="<?php echo $mahasiswa['sekolah_asal'] ?>">
		</p>
		<p>
			<label>Nilai UTBK: </label>
			<input type="text" name="nilai_utbk" value="<?php echo $mahasiswa['nilai_utbk']?>">
		</p>
		<p>
			<button type="submit" >Perbarui</button>
		</p>
	</form>
</body>
</html>