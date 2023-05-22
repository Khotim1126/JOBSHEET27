<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;

require_once('../koneksi.php');

$sql = "DELETE FROM post WHERE id='$id';";

if(mysqli_query($con,$sql)){
    header('Location: tampil.php?status=sukses');
}else{
    header('Location: tampil.php?status=gagal');
}
mysqli_close($con);
?>