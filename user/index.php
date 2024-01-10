<?php
include('sesi-user.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bali Library</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <header>
                SI-Perpus
            </header>
            <ul>
                <li><a href="index.php" id="beranda">Beranda</a></li>
                <li><a href="profil.php" id="profil">Profil</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </div>
        <div class="top">
            <button><?php echo $dlogin->nama ?></button>
        </div>
        <div class="section">
            <div class="container">
                <div class="box">
                    <h2>BERANDA</h2>
                    <?php
                    $dbuku = mysqli_query($conn, "SELECT * FROM tb_buku ORDER BY id DESC");
                    if (mysqli_num_rows($dbuku) > 0) {
                        while ($d = mysqli_fetch_array($dbuku)) {
                    ?>
                    <div class="col-4">
                        <a href="form-pinjam.php?id=<?php echo $d['id'] ?>">
                            <img src="../buku/img/<?php echo $d['gambar'] ?>" alt="" width="100%">
                            <h5><?php echo $d['judul'] ?></h5>
                            <h5><?php echo $d['pengarang'] ?></h5>
                            <h5><?php echo $d['penerbit'] ?></h5>
                        </a>
                    </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>