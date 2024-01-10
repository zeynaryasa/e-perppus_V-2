<?php
include('sesi-admin.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User | Bali Library</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <header>SI-Perpus</header>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="../buku/data-buku.php">Data Buku</a></li>
                <li><a href="data-user.php">Data User</a></li>
                <li><a href="data-pinjam.php">Peminjaman</a></li>
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
                            <h2>Tambahkan Data User</h2>
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="tbh-content" autocomplete="on" required>
                            <div class="signup-border"></div>
                            <label for="username">Username</label>
                            <input type="email" name="username" id="username" class="tbh-content"
                                placeholder="example@bali" autocomplete="on" required>
                            <div class="signup-border"></div>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="tbh-content" autocomplete="on"
                                required>
                            <div class="signup-border"></div>
                            <label for="no_wa">No. WA</label>
                            <input type="number" name="no_wa" id="no_wa" class="tbh-content" autocomplete="on" required>
                            <div class="signup-border"></div>
                            <label for="level">Level Akses</label>
                            <select name="level" id="level" class="tbh-content">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            <div class="signup-border"></div>
                            <button name="submit" id="submit" class="btn-all">SUBMIT</button>
                            <p class="p-signup"><a href="data-user.php">
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

            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            $no_wa = $_POST['no_wa'];
            $level = $_POST['level'];

            $insert = mysqli_query($conn, "INSERT INTO tb_user VALUES(
            null,
            '" . $nama . "',
            '" . $username . "',
            '" . $password . "',
            '" . $no_wa . "',
            '" . $level . "'
            )
        ");
            if ($insert) {
                echo '<script>alert("Pendaftaran Berhasil")</script>';
                echo '<script>window.location="data-user.php"</script>';
            } else {
                echo '<script>alert("Pendaftaran Gagal")</script>';
            }
        }
        ?>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>