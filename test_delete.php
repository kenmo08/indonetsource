

<?php
include 'koneksi.php';
$id_aset    = $_GET['id_aset']; //get id yang dikirim melalui url
mysqli_query($kon, "DELETE FROM test WHERE id_aset = $id_aset");
header("location:index.php?page=test_view");
?>