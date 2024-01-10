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
    <title>Data Peminjaman | Bali Library</title>
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
                    <h1>Data Peminjaman Buku Bali Library</h1>
                    <div class="box-table">
                        <div class="font-pinjam">
                            <table border="1px" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="1%" align="center">No</th>
                                        <th width="20%" align="center">Nama Peminjam</th>
                                        <th width="20%" align="center">Judul Buku</th>
                                        <th width="10%" align="center">No. WA</th>
                                        <th width="10%" align="center">Tgl Pinjam</th>
                                        <th width="10%" align="center">Tgl Kembali</th>
                                        <th width="10%" align="center">Status</th>
                                        <th width="10%" align="center">Validasi Peminjaman Buku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../db.php';
                                    $no = 1;
                                    $dataP = mysqli_query($conn, "SELECT * FROM tb_pinjam ORDER BY id");
                                    while ($row = mysqli_fetch_array($dataP)) {

                                    ?>
                                    <tr>
                                        <td align="center"><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama_p'] ?></td>
                                        <td><?php echo $row['judul_p'] ?></td>
                                        <td><?php echo $row['no_wa_p'] ?></td>
                                        <td><?php echo $row['tgl_p'] ?></td>
                                        <td><?php echo $row['tgl_k'] ?></td>
                                        <td>
                                            <?php
                                                include '../db.php';
                                                if ($row['status'] == 0) {
                                                    echo '<button class="btn-status-belum">Belum Kembali</button>';
                                                } else {
                                                    echo '<button class="btn-status-kembali">Kembali</button>';
                                                }
                                                ?>
                                        </td>
                                        <td align="center">
                                            <!-- Clear ID-->
                                            <!-- <a href="clear.php?id=<?php echo $row['id'] ?>">Clear data</a> -->
                                            <a href="validasi.php?id=<?php echo $row['id'] ?>"><button name="validasi"
                                                    class="btn-kbl">Validasi
                                                </button></a>

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>