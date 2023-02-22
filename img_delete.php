

<?php
include 'koneksi.php';
$id_gambar    = $_GET['id_gambar']; //get id yang dikirim melalui url
mysqli_query($kon, "DELETE FROM image WHERE id_gambar = $id_gambar");
header("location:image_delete.php");
?>