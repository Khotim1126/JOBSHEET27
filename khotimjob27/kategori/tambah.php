<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO kategori (id, nama)
            VALUES ('$id', '$kategori')";

    require_once('../koneksi.php');

    if (mysqli_query($con, $sql)) {
        header('Location: tampil.php?status=sukses');
    }
    mysqli_close($con);
}
?>