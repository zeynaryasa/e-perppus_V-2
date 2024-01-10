<?php
include '../db.php';
$buku = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id= '" . $_GET['id'] . "' ");
if (mysqli_num_rows($buku) == 0) {
    echo '<script>alert("Data yang anda cari tidak ada")</script>';
    echo '<script>window.location="form-pinjam.php"</script>';
}
$b = mysqli_fetch_object($buku);
include 'sesi-user.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Buku | Bali Library</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <header>
                <?php echo $dlogin->nama ?>
            </header>
            <ul>
                <li><a href="index.php" id="beranda">Beranda</a></li>
                <li><a href="profil.php" id="profil">Profil</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </div>
        <div class="section">
            <div class="container">
                <div class="box">
                    <form action="" method="POST">
                        <div class="box-tbhdt">
                            <h2>Form Peminjaman Buku</h2>
                            <label for="judul_p">Judul Buku</label>
                            <input type="text" name="judul_p" id="judul_p" class="tbh-content" autocomplete="on"
                                required value="<?php echo $b->judul ?>" readonly>
                            <div class="signup-border"></div>
                            <label for="nama_p">Nama Peminjam</label>
                            <input type="text" name="nama_p" id="nama_p" class="tbh-content" autocomplete="on" required
                                value="<?php echo $dlogin->nama ?>" readonly>
                            <div class="signup-border"></div>
                            <label for="no_wa_p">No. WA</label>
                            <input type="text" name="no_wa_p" id="no_wa_p" class="tbh-content" autocomplete="on"
                                required value="<?php echo $dlogin->no_wa ?>" readonly>
                            <div class="signup-border"></div>
                            <label for="tgl_p">Tanggal Pinjam</label>
                            <?php
                            $tgl_pj = date("d-m-y");
                            $bwp = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
                            $tgl_km = date("d-m-y", $bwp);
                            ?>
                            <input type="text" name="tgl_p" id="tgl_p" class="tbh-content" autocomplete="on" required
                                value="<?php echo $tgl_pj ?>" readonly>
                            <div class="signup-border"></div>
                            <label for="tgl_k">Tanggal Kembali</label>
                            <input type="text" name="tgl_k" id="tgl_k" class="tbh-content" autocomplete="on" required
                                value="<?php echo $tgl_km ?>" readonly>
                            <p>Note : Wajib mengembalikan buku pada <?php echo $tgl_km ?>.</p>
                            <div class="signup-border"></div>
                            <select name="status" class="tbh-content" hidden>
                                <option value="0">Peminjaman</option>
                            </select>
                            <button name="submit" id="submit" class="btn-all">SUBMIT</button>
                            <p class="p-profil"><a href="index.php">
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

            $judul_p = $_POST['judul_p'];
            $nama_p = $_POST['nama_p'];
            $no_wa_p = $_POST['no_wa_p'];
            $tgl_p = $_POST['tgl_p'];
            $tgl_k = $_POST['tgl_k'];
            $status = $_POST['status'];

            $insert = mysqli_query($conn, "INSERT INTO tb_pinjam VALUES (
            null,
        '" . $judul_p . "',
        '" . $nama_p . "',
        '" . $no_wa_p . "',
        '" . $tgl_p . "',
        '" . $tgl_k . "',
        '" . $status . "'
        )");

            if ($insert) {
                echo '<script>alert("Peminjaman Buku Berhasil, silakan datang ke Bali Library untuk mengambil Buku")</script>';
                echo '<script>window.location="index.php"</script>';
            } else {
                echo '<script>alert("Peminjaman Buku Gagal")</script>';
            }
        }
        ?>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>