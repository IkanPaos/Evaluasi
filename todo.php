<?php
include 'config.php';

$result = mysqli_query($mysqli,"SELECT * FROM todo order by id desc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Todo</title>
</head>
<body>
    <center>
        <h1>Daftar Pekerjaan</h1>
        <table width='80%' border=1>
            <tr>
                <th>No.</th>
                <th>Nama Pekerjaan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td align='center'>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['todo'] . "</td>";
                    echo "<td>" . $user_data['status'] . "</td>";
                    echo "<td align='center'><a href='update.php?id=$user_data[id]'>Update Status</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br><a href="logout.php"><button type="submit">Keluar</button></a> <a href="tambah.php"><button type="submit">Tambah</button></a>
    </center>
</body>
</html>