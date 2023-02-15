<?php
include 'koneksi.php';
$id_aset                        = $_POST['id_aset'];
$nama_aset                      = $_POST['nama_aset'];
$tag_aset                       = $_POST['tag_aset'];
$model                          = $_POST['model'];
$no_model                       = $_POST['no_model'];
$kategori                       = $_POST['kategori'];
$diberikan_kepada               = $_POST['diberikan_kepada'];
$lokasi                         = $_POST['lokasi'];
echo $id_aset,$nama_aset,$tag_aset,$model,$no_model,$kategori,$diberikan_kepada,$lokasi;
mysqli_query($kon, "UPDATE test SET nama_aset='$nama_aset',tag_aset='$tag_aset',model='$model',
no_model='$no_model',kategori='$kategori',diberikan_kepada='$diberikan_kepada',
lokasi='$lokasi' WHERE id_aset = $id_aset");
header("location:index.php?page=test_view");
?>
