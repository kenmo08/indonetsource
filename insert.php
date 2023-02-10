<?php
 
        include "koneksi.php";
        //if ($_SERVER["REQUEST_METHOD"] == "post"){<form action="<?php echo $_SERVER["PHP_SELF"];" method="post">
        if (isset($_POST['submit'])) {               
                $nama_aset=$_POST["nama_aset"];   
                $tag_aset=$_POST["tag_aset"];
                $model=$_POST["model"];
                $no_model=$_POST["no_model"];
                $kategori=$_POST["kategori"];
                $diberikan_kepada=$_POST["diberikan_kepada"];
                $lokasi=$_POST["lokasi"];
                $sql="INSERT INTO list VALUES ('','$nama_aset','$tag_aset','$model','$no_model','$kategori','$diberikan_kepada','$lokasi')";


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
        <label>nama_aset:</label>
        <input type="text" name="nama_aset" class="form-control">
</div>
<div class="form-group">
        <label>tag_aset:</label>
        <input type="text" name="tag_aset" class="form-control">
</div>
<div class="form-group">
        <label>model</label>
        <input type="text" name="model" class="form-control">
</div>
<div class="form-group">
        <label>no_model</label>
        <input type="text" name="no_model" class="form-control">
</div>
<div class="form-group">
        <label>kategori</label>
        <input type="text" name="kategori" class="form-control">
</div>
<div class="form-group">
        <label>diberikan_kepada</label>
        <input type="text" name="diberikan_kepada" class="form-control">
</div>
<div class="form-group">
        <label>lokasi</label>
        <input type="text" name="lokasi" class="form-control">
</div>
<button type="submit" name="submit" class="btn btn-primary">submit</button>
        </form>

              
</body>
</html>