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
							this.kategori == 200) {
						
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
