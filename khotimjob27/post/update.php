<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];
    $id_kategori = $_POST['id_kategori'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    require_once['../koneksi.php'];

    $sql = "UPDATE post SET id = '$id', id_kategori = '$id_kategori', judul = '$judul', isi = '$isi'
            WHERE id = '$id';";

    if(mysqli_query($con,$sql)){
        header('Location: tampil.php?status=sukses');
    }else{
        header('Location: tampil.php?status=gagal');
    }
        mysqli_close($con);
    }
?>