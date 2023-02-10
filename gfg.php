<?php

// Get the user id
$id_aset = $_REQUEST['id_aset'];

// Database connection
$kon = mysqli_connect("localhost", "root", "", "maintenance");

if ($id_aset !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($kon, "SELECT tag_aset,
	nama_aset, model, no_model, lokasi, diberikan_kepada FROM list WHERE id_aset='$id_aset'");

	$row = mysqli_fetch_array($query);

	$tag_aset = $row["tag_aset"];
	$nama_aset = $row["nama_aset"];
	$model = $row["model"];
	$no_model = $row["no_model"];
	$lokasi = $row["lokasi"];
	$diberikan_kepada = $row["diberikan_kepada"];
	$kategori = $row["kategori"];
}

// Store it in a array
$result = array("$tag_aset", "$nama_aset", "$model", "$no_model", "$lokasi", "$diberikan_kepada", "kategori" );

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
