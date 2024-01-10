<?php
include '../db.php';
include '../admin/sesi-admin.php';

$query = mysqli_query($conn, "SELECT * FROM tb_pinjam WHERE id='" . $_GET['id'] . "'");
$sql = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
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
                    <form action="" method="POST">
                        <div class="box-tbhdt">
                            <h2>VALIADASI DATA</h2>
                            <select name="status" id="status">
                                <option value="">------Select-------</option>
                                <option value="1">Kembali</option>
                                <option value="0">Belum Kembali</option>
                            </select>
                            <button name="submit" id="submit" class="btn-val">VALIDASI</button>
                            <p class="p-profil"><a href="data-pinjam.php">
                                    < Back</a>
                            </p>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        include '../db.php';
                        $status = $_POST['status'];

                        $query = mysqli_query($conn, "UPDATE tb_pinjam SET
                        status = '" . $status . "'
                        Where id = '" . $sql->id . "'
                        ");

                        if ($query) {
                            echo '<script>alert("Validasi Data BERHASIL")</script>';
                            echo '<script>window.location="data-pinjam.php"</script>';
                        } else {
                            echo '<script>alert("Validasi Data GAGAL")</script>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

</body>

</html>