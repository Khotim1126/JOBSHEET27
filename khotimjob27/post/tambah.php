<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];
    $id_kategori = $_POST['id_kategori'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO post (id, id_kategori, judul, isi)
            VALUES ('$id', '$id_kategori', '$judul', '$isi')";

    require_once('../koneksi.php');

    if (mysqli_query($con, $sql)) {
        header('Location: tampil.php?status=sukses');
    }
    mysqli_close($con);
}
?>