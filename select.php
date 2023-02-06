<!DOCTYPE html>
<html>
<head>
    <title>Update dan Delete</title>
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
                <td>No</td>
                <td>device code</td>
                <td>date</td>
                <td>device name</td>
                <td>lokasi</td>
                <td>maintenance description</td>
                <td>time maintenance</td>
                <td>status</td>
                <td>update/delete</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM list'); // query select produk di dalam php
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['device_code'] ?></td>
                <td><?php echo $data['date'] ?></td>
                <td><?php echo $data['device_name'] ?></td>
                <td><?php echo $data['lokasi'] ?></td>
                <td><?php echo $data['maintenance_description'] ?></td>
                <td><?php echo $data['time_maintenance'] ?></td>
                <td><?php echo $data['status'] ?></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-outline-light" href="update.php?id_device=<?php echo $data['id_device']; ?>">Update</a>
                    <a class="btn btn-outline-light" href="delete.php?id_device=<?php echo $data['id_device']; ?>">Delete</a>
                </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>