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
    <h2>PHP MySQL Query Update</h2>
    <form action="proses_update.php" method="post">
        <?php
        $id_device = $_GET['id_device'];
        include "koneksi.php";        
        $query = mysqli_query($kon, "SELECT * FROM list where id_device = $id_device");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <table>
                <input type="hidden" name="id_device" value="<?php echo $data['id_device']; ?>">
                <tr>
                    <td>device code</td>
                    <td><input type=" text" name="device_code" value="<?php echo $data['device_code']; ?>"></td>
                </tr>
                <tr>
                    <td>date</td>
                    <td><input type=" text" name="date" value="<?php echo $data['date']; ?>"></td>
                </tr>
                <tr>
                    <td>device name</td>
                    <td><input type=" text" name="device_name" value="<?php echo $data['device_name']; ?>"></td>
                </tr>
                <tr>
                    <td>lokasi</td>
                    <td><input type=" text" name="lokasi" value="<?php echo $data['lokasi']; ?>"></td>
                </tr>
                <tr>
                    <td>maintenance description</td>
                    <td><input type=" text" name="maintenance_description" value="<?php echo $data['maintenance_description']; ?>"></td>
                </tr>
                <tr>
                    <td>time maintenance</td>
                    <td><input type=" text" name="time_maintenance" value="<?php echo $data['time_maintenance']; ?>"></td>
                </tr>
                <tr>
                    <td>status</td>
                    <td><input type=" text" name="status" value="<?php echo $data['status']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Simpan">
                    <button onclick="history.back()">Go Back</button></td>
                </tr>
            </table>
        <?php } ?>
    </form