<?php
include '../db.php';
include 'sesi-user.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil | Bali Library</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body id="bd-dashboard">
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
                            <h2>Edit Profil</h2>
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="tbh-content" autocomplete="on" required
                                value="<?php echo $dlogin->nama ?>">
                            <div class="signup-border"></div>
                            <label for="username">username</label>
                            <input type="text" name="username" id="username" class="tbh-content" autocomplete="on"
                                required value="<?php echo $dlogin->username ?>">
                            <div class="signup-border"></div>
                            <label for="no_wa">No. WA</label>
                            <input type="number" name="no_wa" id="no_wa" class="tbh-content" autocomplete="on" required
                                value="<?php echo $dlogin->no_wa ?>">
                            <div class="signup-border"></div>
                            <label for="level">Level Akses</label>
                            <select name="level" id="level" class="tbh-content">
                                <option value="2">User</option>
                            </select>
                            <div class="signup-border"></div>
                            <button name="submit" id="submit" class="btn-all">SUBMIT</button>
                            <a href="ubah_password.php" id="up">Edit Password</a>
                            <p><a href="index.php">
                                    < Back</a>
                            </p>
                        </div>
                </div>
            </div>
        </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = ucwords($_POST['nama']);
            $username = $_POST['username'];
            $no_wa = $_POST['no_wa'];
            $level = $_POST['level'];

            $update = mysqli_query($conn, "UPDATE tb_user SET
            nama = '" . $nama . "',
            username = '" . $username . "',
            no_wa = '" . $no_wa . "',
            level = '" . $level . "'
            WHERE id= '" . $dlogin->id . "'
        ");

            if ($update) {
                echo '<script>alert("Update data berhasil")</script>';
                session_destroy();
                echo '<script>window.location="../index.php"</script>';
            } else {
                echo '<script>alert("Update data gagal")</script>';
            }
        }

        ?>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>