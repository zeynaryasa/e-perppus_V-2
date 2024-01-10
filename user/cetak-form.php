<?php
include('sesi-user.php');
include '../db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Form</title>
</head>

<body>
    <h2>Form Peminjaman</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td></td>
            <td>:</td>
            <td>
                <?php echo $dlogin->nama ?>
            </td>
        </tr>
        <tr>
            <td>Judul</td>
            <td></td>
            <td>:</td>
            <td><?php  ?></td>
        </tr>
        <tr>
            <td>N0_wa</td>
            <td></td>
            <td>:</td>
            <td><?php echo $dlogin->no_wa ?></td>
        </tr>
        <tr>
            <td>Tgl Pinjam</td>
            <td></td>
            <td>:</td>
            <td><?php ?></td>
        </tr>
        <tr>
            <td>Tgl Kembali</td>
            <td></td>
            <td>:</td>
            <td><?php ?></td>
        </tr>
    </table>
</body>

</html>