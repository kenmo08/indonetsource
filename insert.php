<?php
 
        include "koneksi.php";
        //if ($_SERVER["REQUEST_METHOD"] == "post"){<form action="<?php echo $_SERVER["PHP_SELF"];" method="post">
        if (isset($_POST['submit'])) {                  
                $device_code=$_POST["device_code"];
                $date=$_POST["date"];
                $lokasi=$_POST["lokasi"];
                $device_name=$_POST["device_name"];
                $maintenance_description=$_POST["maintenance_description"];
                $time_maintenance=$_POST["time_maintenance"];
                $status=$_POST["status"];
                $sql="INSERT INTO list VALUES ('','$device_code','$date','$lokasi','$device_name','$maintenance_description','$time_maintenance','$status')";


                $hasil=mysqli_query($kon,$sql);

                if ($hasil) {
                        header("location:index.php?page=view");
                }
                else{
                        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
                }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="view_data.php">home</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Input data device</li>
    	</ol>
    </nav>
    <form action="index.php?page=input" method="post">
    <input type="hidden" name="---" class="form-control" placeholder="Masukan ID Barang">

<div class="form-group">
        <label>device_code:</label>
        <input type="text" name="device_code" class="form-control">
</div>
<div class="form-group">
        <label>date:</label>
        <input type="text" name="date" class="form-control">
</div>
<div class="form-group">
        <label>lokasi</label>
        <input type="text" name="lokasi" class="form-control">
</div>
<div class="form-group">
        <label>device_name</label>
        <input type="text" name="device_name" class="form-control">
</div>
<div class="form-group">
        <label>maintenance_description</label>
        <input type="text" name="maintenance_description" class="form-control">
</div>
<div class="form-group">
        <label>time_maintenance</label>
        <input type="text" name="time_maintenance" class="form-control">
</div>
<div class="form-group">
        <label>status</label>
        <input type="text" name="status" class="form-control">
</div>
<button type="submit" name="submit" class="btn btn-primary">submit</button>
        </form>

              
</body>
</html>