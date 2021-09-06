<?php include ('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> List Data Pendaftar </title>
</head>

<body>
	<header>
		<h3> List Pendaftar </h3>
	</header>
	
	<table border ="1">
		<thead>
			<th> NO.ID </th>
			<th> Nama </th>
			<th> Alamat </th>
			<th> Jenis Kelamin </th>
			<th> Agama </th>
			<th> Sekolah </th>
			<th> Nilai UTBK </th>
			<th> Edit </th>
			<th> Hapus </th>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM calon_mahasiswa";
				$query = mysqli_query ($db_connection, $sql);
				
				while($mahasiswa = mysqli_fetch_array($query)){
					echo "<tr>";
					
					echo "<td>".$mahasiswa['id']."</td>";
					echo "<td>".$mahasiswa['nama']."</td>";
					echo "<td>".$mahasiswa['alamat']."</td>";
					echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
					echo "<td>".$mahasiswa['agama']."</td>";
					echo "<td>".$mahasiswa['sekolah_asal']."</td>";
					echo "<td>".$mahasiswa['nilai_utbk']."</td>";
					echo "<td>"."<a href='form-edit.php?id=".$mahasiswa['id']."'>Edit</a>"."</td>";
					echo "<td>"."<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>"."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
					