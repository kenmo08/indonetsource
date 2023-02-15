<?php
include 'koneksi.php';
if (isset($_POST['update'])){
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
$sql="UPDATE INTO test SET VALUES (nama_aset='$nama_aset',tag_aset='$tag_aset',model='$model',
no_model='$no_model',kategori='$kategori',diberikan_kepada='$diberikan_kepada',
lokasi='$lokasi' WHERE id_aset = $id_aset)";


                $hasil=mysqli_query($kon,$sql);

                if ($hasil) {
                        header("location:index.php?page=test_view");
                }
                else{
                        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
						
                }
}
?>
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
                $sql="INSERT INTO test VALUES ('','$nama_aset','$tag_aset','$model','$no_model','$kategori','$diberikan_kepada','$lokasi')";


                $hasil=mysqli_query($kon,$sql);

                if ($hasil) {
                        header("location:index.php?page=test_view");
                }
                else{
                        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
						
                }
        }

?>
<html>

<head>
	<script src=
		"https://code.jquery.com/jquery-3.2.1.min.js">
	</script>

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		type="text/javascript">
	</script>
	
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
</head>

<body>

	<div class="container">

	<form action="index.php?page=informasi" method="post">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>id_aset</label>
					<input type='text' name="id_aset"
						id='id_aset' class='form-control'
						placeholder=''
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>nama_aset:</label>
					<input type="text" name="nama_aset"
						id="nama_aset" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>tag_aset:</label>
					<input type="text" name="tag_aset"
						id="tag_aset" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>model:</label>
					<input type="text" name="model"
						id="model" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>no_model:</label>
					<input type="text" name="no_model"
						id="no_model" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>kategori:</label>
					<input type="text" name="kategori"
						id="kategori" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>diberikan_kepada:</label>
					<input type="text" name="diberikan_kepada"
						id="diberikan_kepada" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>lokasi:</label>
					<input type="text" name="lokasi"
						id="lokasi" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">submit</button>
		<button type="update" name="update" class="btn btn-primary">update</button>
		
	</form>
	</div>
	<script>

		// onkeyup event will occur when the user
		// release the key and calls the function
		// assigned to this event
		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("nama_aset").value = "";
				document.getElementById("tag_aset").value = "";
				document.getElementById("model").value = "";
				document.getElementById("no_model").value = "";
				document.getElementById("kategori").value = "";
				document.getElementById("diberikan_kepada").value = "";
				document.getElementById("lokasi").value = "";
				return;
			}
			else {

				// Creates a new XMLHttpRequest object
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {

					// Defines a function to be called when
					// the readyState property changes
					if (this.readyState == 4 &&
							this.status == 200) {
						
						// Typical action to be performed
						// when the document is ready
						var myObj = JSON.parse(this.responseText);

						// Returns the response data as a
						// string and store this array in
						// a variable assign the value
						// received to first name input field
						document.getElementById
                        ("nama_aset").value = myObj[0];
						document.getElementById
                        ("tag_aset").value = myObj[1];
						document.getElementById
                        ("model").value = myObj[2];
						document.getElementById
                        ("no_model").value = myObj[3];
						document.getElementById
                        ("kategori").value = myObj[4];
						document.getElementById
                        ("diberikan_kepada").value = myObj[5];
						document.getElementById
                        ("lokasi").value = myObj[6];


					}
					
				};
				
				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "gfg.php?id_aset=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		}
	</script>
</body>

</html>
