<?php

// Get the user id
$id_device = $_REQUEST['id_device'];

// Database connection
$kon = mysqli_connect("localhost", "root", "", "maintenance");

if ($id_device !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($kon, "SELECT device_code,
	date, device_name, lokasi, maintenance_description, time_maintenance, status FROM list WHERE id_device='$id_device'");

	$row = mysqli_fetch_array($query);

	$device_code = $row["device_code"];
	$date = $row["date"];
	$device_name = $row["device_name"];
	$lokasi = $row["lokasi"];
	$maintenance_description = $row["maintenance_description"];
	$time_maintenance = $row["time_maintenance"];
	$status = $row["status"];
}

// Store it in a array
$result = array("$device_code", "$date", "$device_name", "$lokasi", "$maintenance_description", "$time_maintenance", "$status" );

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
