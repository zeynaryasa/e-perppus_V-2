<?php
include('../admin/sesi-admin.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Bali Library</title>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="box-tbhdt">
                            <h2>Tambah Data Buku</h2>
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" id="judul" class="tbh-content" autocomplete="on" required>
                            <div class="tbuku-border"></div>
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" class="tbh-content" autocomplete="on"
                                required>
                            <div class="tbuku-border"></div>
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="tbh-content" autocomplete="on"
                                required>
                            <div class="tbuku-border"></div>
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="tbh-img">
                            <button name="submit" id="submit" class="btn-all">SUBMIT</button>
                            <p><a href="data-buku.php">
                                    < Back </a>
                            </p>
                        </div>
                </div>
            </div>
        </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            include '../db.php';

            $judul = $_POST['judul'];
            $penerbit = $_POST['penerbit'];
            $pengarang = $_POST['pengarang'];

            $filename = $_FILES['gambar']['name'];
            $tmp_name = $_FILES['gambar']['tmp_name'];

            $type1 = explode('.', $filename);
            $type2 = $type1[1];
            $newname = 'Buku ' . '-' . $judul . '.' . $type2;

            $tipe_izin = array('jpg', 'jpeg', 'png', 'PNG');

            if (!in_array($type2, $tipe_izin)) {
                echo '<script>alert("Tipe file tidak di dukung")</script>';
            } else {

                $insert = mysqli_query($conn, "INSERT INTO tb_buku VALUES(
                null,
                '" . $judul . "',
                '" . $penerbit . "',
                '" . $pengarang . "',
                '" . $newname . "'
            )
            ");
                move_uploaded_file($tmp_name, 'img/' . $newname);
                if ($insert) {
                    echo '<script>alert("Buku berhasil ditambahkan")</script>';
                    echo '<script>window.location="data-buku.php"</script>';
                } else {
                    echo 'gagal' . mysqli_error($conn);
                }
            }
        }
        ?>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>