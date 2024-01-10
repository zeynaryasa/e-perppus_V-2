<?php
include '../db.php';
include '../admin/sesi-admin.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku | Bali Library</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <header>SI-Perpus</header>
            <ul>
                <li><a href="../admin/index.php" id="dashboard">Dashboard</a></li>
                <li><a href="data-buku.php" id="dbuku">Data Buku</a></li>
                <li><a href="../admin/data-user.php" id="duser">Data User</a></li>
                <li><a href="../admin/data-pinjam.php" id="pinjam">Peminjaman</a></li>
                <li><a href="../logout.php">LogOut</a></li>
            </ul>
        </div>
        <div class="top">
            <button><?php echo $dlogin->nama ?></button>
        </div>
        <div class="section">
            <div class="container">
                <div class="box">
                    <h1>Data Buku Bali Library</h1>
                    <a href="tbh-dtbuku.php"><button class="btn-tbh">Tambah Data</button></a>
                    <div class="box-table">
                        <table cellspacing="0" border="1px">
                            <thead>
                                <tr>
                                    <th width="3%" align="center">No</th>
                                    <th width="30%" align="center">Judul</th>
                                    <th width="20%">Penerbit</th>
                                    <th width="13%">Pengarang</th>
                                    <th width="10%" align="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $buku = mysqli_query($conn, "SELECT * FROM tb_buku ORDER BY id");
                                while ($row = mysqli_fetch_array($buku)) {

                                ?>
                                <tr>
                                    <td align="center"><?php echo $no++ ?></td>
                                    <td class="judul"><?php echo $row['judul'] ?></td>
                                    <td class="penerbit"><?php echo $row['penerbit'] ?></td>
                                    <td class="pengarang"><?php echo $row['pengarang'] ?></td>
                                    <td align="center">
                                        <a href="edit-buku.php?id=<?php echo $row['id'] ?>">Edit</a> || <a
                                            href="hapus-buku.php?id=<?php echo $row['id'] ?>"
                                            onclick="return confirm('Yakin untuk mengahapus data ?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>