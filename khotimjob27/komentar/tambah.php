<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];
    $id_post = $_POST['id_post'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO komentar (id, id_post, komentar)
            VALUES ('$id', '$id_post', '$komentar')";

    require_once('../koneksi.php');

    if (mysqli_query($con, $sql)) {
        header('Location: tampil.php?status=sukses');
    }
    mysqli_close($con);
}
?>