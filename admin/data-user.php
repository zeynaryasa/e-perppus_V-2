<?php
include('sesi-admin.php');
include '../db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User | Bali Library</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <header>SI-Perpus</header>
            <ul>
                <li><a href="index.php" id="dashboard">Dashboard</a></li>
                <li><a href="../buku/data-buku.php" id="dbuku">Data Buku</a></li>
                <li><a href="data-user.php" id="duser">Data User</a></li>
                <li><a href="data-pinjam.php" id="pinjam">Peminjaman</a></li>
                <li><a href="../logout.php">LogOut</a></li>
            </ul>
        </div>
        <div class="top">
            <button><?php echo $dlogin->nama ?></button>
        </div>
        <div class="section">
            <div class="container">
                <div class="box">
                    <h1>Data User Bali Library</h1>
                    <a href="tbh-user.php"><button class="btn-tbh" id="">Tambah User</button></a>
                    <div class="box-table">
                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="30%">Nama</th>
                                    <th width="20%">Username</th>
                                    <th width="15%">WA</th>
                                    <th width="10%" align="center">Level Akses</th>
                                    <th width="30%" align="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../db.php';
                                $no = 1;
                                $user = mysqli_query($conn, "SELECT * FROM tb_user ORDER BY id");
                                while ($row = mysqli_fetch_array($user)) {
                                ?>
                                <tr>
                                    <td><?php echo  $no++ ?></td>
                                    <td class="nama"><?php echo $row['nama'] ?></td>
                                    <td class="username"><?php echo $row['username'] ?></td>
                                    <td class="no_wa"><?php echo $row['no_wa'] ?></td>
                                    <td class="level" align="center"><?php echo $row['level'] ?></td>
                                    <td align="center">
                                        <a href="edit-user.php?id=<?php echo $row['id'] ?>">Edit</a> ||
                                        <a href="hapus-user.php?id=<?php echo $row['id'] ?>"
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