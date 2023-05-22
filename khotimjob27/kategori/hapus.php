<?php
include("../koneksi.php");
$id = isset($_GET['id']) ? $_GET['id'] : null;

$sql = "DELETE FROM kategori WHERE id='$id';";

if(mysqli_query($con,$sql)){
    header('Location: tampil.php?status=sukses');
}else{
    header('Location: tampil.php?status=gagal');
}
mysqli_close($con);
?>