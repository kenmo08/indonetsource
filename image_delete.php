<?php
if (isset($_POST['view'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./fileToUpload/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "maintenance");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleimage.css" />
    <title>Delete</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-outline-dark" href="index.php?page=input" role="button">insert</a>
            <a class="btn btn-outline-dark" href="index.php" role="button">home</a>
            </div>
            <tr>
            <table class="table table-dark table-striped">
                <td>no</td>
                <td>image_name</td>
                <td>delete</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM image'); // query select produk di dalam php
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data ['filename']?></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button class="btn btn-outline-light" type="submit" name="view">view</button>
                    <a class="btn btn-outline-light" href="img_delete.php?id_gambar=<?php echo $data['id_gambar']; ?>">Delete</a>
                </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>