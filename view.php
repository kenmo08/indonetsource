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
                <td>nama_aset</td>
                <td>tag_aset</td>
                <td>model</td>
                <td>no_model</td>
                <td>kategori</td>
                <td>diberikan_kepada</td>
                <td>lokasi</td>
                <td>update/delete</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM test'); // query select produk di dalam php
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_aset'] ?></td>
                <td><?php echo $data['tag_aset'] ?></td>
                <td><?php echo $data['model'] ?></td>
                <td><?php echo $data['no_model'] ?></td>
                <td><?php echo $data['kategori'] ?></td>
                <td><?php echo $data['diberikan_kepada'] ?></td>
                <td><?php echo $data['lokasi'] ?></td>

                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-outline-light" href="test_update.php?id_aset=<?php echo $data['id_aset']; ?>">Update</a>
                    <a class="btn btn-outline-light" href="test_delete.php?id_aset=<?php echo $data['id_aset']; ?>">Delete</a>
                </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>