<?php
    include('config.php');

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat =$_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal=$_POST['sekolah_asal'];
    $nilai_utbk=$_POST['nilai_utbk'];

    $sql = "update calon_mahasiswa set    
            nama = '".$nama."', 
            alamat ='".$alamat."',
            jenis_kelamin ='".$jenis_kelamin."', 
            agama ='".$agama."', 
            sekolah_asal='".$sekolah_asal."', 
            nilai_utbk='".$nilai_utbk."'
            where id= ".$id.";";

    $query = mysqli_query($db_connection, $sql);

    if($query){
        header ('Location: index.php?status=sukses');
    }else{
        echo mysqli_error($db_connection);
    }
?>