<?php

// Get the user id
$id_aset = $_REQUEST['id_aset'];

// Database connection
$kon = mysqli_connect("localhost", "root", "", "maintenance");

if ($id_aset !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($kon, "SELECT nama_aset,
	tag_aset, model, no_model, kategori, diberikan_kepada, lokasi FROM list WHERE id_aset ='$id_aset'");

	$row = mysqli_fetch_array($query);
	$nama_aset = $row["nama_aset"];
	$tag_aset = $row["tag_aset"];
	$model = $row["model"];
	$no_model = $row["no_model"];
	$kategori = $row["kategori"];
	$diberikan_kepada = $row["diberikan_kepada"];
	$lokasi = $row["lokasi"];
}

// Store it in a array
$result = array("$nama_aset", "$tag_aset", "$model", "$no_model", "$kategori", "$diberikan_kepada", "$lokasi" );

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
