<?php
include '../admin/sesi-admin.php';
include '../db.php';
$buku = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id= '" . $_GET['id'] . "' ");
if (mysqli_num_rows($buku) == 0) {
    echo '<script>alert("Data yang anda cari tidak ada")</script>';
    echo '<script>window.location="data-buku.php"</script>';
}
$b = mysqli_fetch_object($buku);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data | Bali Library</title>
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
                    <form action="" method="POST">
                        <div class="box-tbhdt">
                            <h2>Edit Data Buku</h2>
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" id="judul" class="tbh-content" autocomplete="on" required
                                value="<?php echo $b->judul ?>">
                            <div class="signup-border"></div>
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" class="tbh-content" autocomplete="on"
                                required value="<?php echo $b->penerbit ?>">
                            <div class="signup-border"></div>
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="tbh-content" autocomplete="on"
                                required value="<?php echo $b->pengarang ?>">
                            <div class="signup-border"></div>
                            <button name="submit" id="submit" class="btn-all">SUBMIT</button>
                            <p class="p-profil"><a href="data-buku.php">
                                    < Back</a>
                            </p>
                        </div>
                </div>
            </div>
        </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            include '../db.php';

            $judul = ucwords($_POST['judul']);
            $penerbit = ucwords($_POST['penerbit']);
            $pengarang = ucwords($_POST['pengarang']);

            $update = mysqli_query($conn, "UPDATE tb_buku SET
        judul = '" . $judul . "',
        penerbit = '" . $penerbit . "',
        pengarang = '" . $pengarang . "'
        WHERE id = '" . $b->id . "'
        
        ");

            if ($update) {
                echo '<script>alert("Data berhasil diubah")</script>';
                echo '<script>window.location="data-buku.php"</script>';
            }
        }
        ?>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>