

<?php
include 'koneksi.php';
$id_device    = $_GET['id_device']; //get id yang dikirim melalui url
mysqli_query($kon, "DELETE FROM list WHERE id_device = $id_device");
header("location:index.php?page=view");
?>