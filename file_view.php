<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['view'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./fileToUpload/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "maintenance");
 
    // Get all the submitted data from the form
    $sql = "SELECT * FROM image ";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleimage.css" />
</head>
 
<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="view">view</button>
            </div>
        </form>
    </div>
    <a href="index.php">home</a>
    <div id="display-image">
        <?php
        $query = " select * from image ";
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./fileToUpload/<?php echo $data['filename']; ?>">
 
        <?php
        }
        ?>
    </div>
</body>
 
</html>