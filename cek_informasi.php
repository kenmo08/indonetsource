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
					<label>User Id</label>
					<input type='text' name="id_device"
						id='id_device' class='form-control'
						placeholder='Enter user id'
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>device_code:</label>
					<input type="text" name="device_code"
						id="device_code" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>date:</label>
					<input type="text" name="date"
						id="date" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>device_name:</label>
					<input type="text" name="device_name"
						id="device_name" class="form-control"
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
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>maintenance_description:</label>
					<input type="text" name="maintenance_description"
						id="maintenance_description" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>time_maintenance:</label>
					<input type="text" name="time_maintenance"
						id="time_maintenance" class="form-control"
						placeholder=''
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>status:</label>
					<input type="text" name="status"
						id="status" class="form-control"
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
				document.getElementById("device_code").value = "";
				document.getElementById("date").value = "";
				document.getElementById("device_name").value = "";
				document.getElementById("lokasi").value = "";
				document.getElementById("maintenance_description").value = "";
				document.getElementById("time_maintenance").value = "";
				document.getElementById("status").value = "";
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
                        ("device_code").value = myObj[0];
						document.getElementById
                        ("date").value = myObj[1];
						document.getElementById
                        ("device_name").value = myObj[2];
						document.getElementById
                        ("lokasi").value = myObj[3];
						document.getElementById
                        ("maintenance_description").value = myObj[4];
						document.getElementById
                        ("time_maintenance").value = myObj[5];
						document.getElementById
                        ("status").value = myObj[6];
					}
					
				};
				
				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "gfg.php?id_device=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		}
	</script>
</body>

</html>
