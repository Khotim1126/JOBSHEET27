<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];
    $kategori = $_POST['kategori'];

    require_once['../koneksi.php'];

    $sql = "UPDATE kategori SET id = '$id', kategori = '$kategori'
            WHERE id = '$id';";

    if(mysqli_query($con,$sql)){
        header('Location: tampil.php?status=sukses');
    }else{
        header('Location: tampil.php?status=gagal');
    }
        mysqli_close($con);
    }
?>