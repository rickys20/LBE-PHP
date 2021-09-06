<?php
    include('config.php');

    if(!isset($_GET['id'])){
        header('location: list-siswa.php');
    }

    $id = $_GET['id'];
    $sql = 'delete from calon_mahasiswa where id='.$id;
    $query = mysqli_query($db_connection, $sql);

    if($query){
        header ('Location: index.php?status=sukses');
    }else{
        echo mysqli_error($db_connection);
    }
?>