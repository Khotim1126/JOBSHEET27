<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];
    $id_post = $_POST['id_post'];
    $kategori = $_POST['kategori'];

    require_once['../koneksi.php'];

    $sql = "UPDATE komentar SET id = '$id', id_post = '$id_post'
            WHERE id = '$id';";

    if(mysqli_query($con,$sql)){
        header('Location: tampil.php?status=sukses');
    }else{
        header('Location: tampil.php?status=gagal');
    }
        mysqli_close($con);
    }
?>