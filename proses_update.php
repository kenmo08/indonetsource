<?php
include 'koneksi.php';
$id_device                    = $_POST['id_device'];
$device_code                  = $_POST['device_code'];
$date                         = $_POST['date'];
$device_name                  = $_POST['device_name'];
$lokasi                       = $_POST['lokasi'];
$maintenance_description      = $_POST['maintenance_description'];
$time_maintenance             = $_POST['time_maintenance'];
$status                       = $_POST['status'];
echo $id_device,$device_code,$date,$device_name,$lokasi,$maintenance_description,$time_maintenance,$status;
mysqli_query($kon, "UPDATE list SET device_code='$device_code',date='$date',device_name='$device_name',
lokasi='$lokasi',maintenance_description='$maintenance_description',time_maintenance='$time_maintenance',
status='$status' WHERE id_device = $id_device");
header("location:index.php?page=view");
?>
