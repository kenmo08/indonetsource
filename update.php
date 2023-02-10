<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<style>
    p {
        width: 350px;
    }
    thead {
        backGround-color: #cccddd;
    }
</style>
<body>
    <form action="proses_update.php" method="post">
        <?php
        $id_aset = $_GET['id_aset'];
        include "koneksi.php";        
        $query = mysqli_query($kon, "SELECT * FROM list where id_aset = $id_aset");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <table>
                <input type="hidden" name="id_aset" value="<?php echo $data['id_aset']; ?>">
                <tr>
                    <td>tag aset</td>
                    <td><input type=" text" name="tag_aset" value="<?php echo $data['tag_aset']; ?>"></td>
                </tr>
                <tr>
                    <td>nama_aset</td>
                    <td><input type=" text" name="nama_aset" value="<?php echo $data['nama_aset']; ?>"></td>
                </tr>
                <tr>
                    <td>model</td>
                    <td><input type=" text" name="model" value="<?php echo $data['model']; ?>"></td>
                </tr>
                <tr>
                    <td>no_model</td>
                    <td><input type=" text" name="no_model" value="<?php echo $data['no_model']; ?>"></td>
                </tr>
                <tr>
                    <td>lokasi</td>
                    <td><input type=" text" name="lokasi" value="<?php echo $data['lokasi']; ?>"></td>
                </tr>
                <tr>
                    <td>diberikan kepada</td>
                    <td><input type=" text" name="diberikan_kepada" value="<?php echo $data['diberikan_kepada']; ?>"></td>
                </tr>
                <tr>
                    <td>kategori</td>
                    <td><input type=" text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Simpan">
                    <button onclick="history.back()">Go Back</button></td>
                </tr>
            </table>
        <?php } ?>
    </form