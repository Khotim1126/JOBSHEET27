<?php
require_once('../koneksi.php');

$result = array();
$query = mysqli_query($con, "SELECT * FROM kategori ORDER BY id ASC");

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

echo json_encode(array('result'=>$result));
?>