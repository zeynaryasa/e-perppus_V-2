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
    <title>Ubah Password | Bali Library</title>
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
                            <h2>UBAH PASSWORD</h2>
                            <label for="nama">New Password</label>
                            <input type="text" name="password" id="password" class="tbh-content" autocomplete="on"
                                required>
                            <div class="signup-border"></div>
                            <label for="nama">Confrim Password</label>
                            <input type="text" name="password" id="password" class="tbh-content" autocomplete="on"
                                required>
                            <div class="signup-border"></div>
                            <button name="submit" id="submit" class="btn-all">SUBMIT</button>
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
            $password = sha1($_POST['password']);

            $update = mysqli_query($conn, "UPDATE tb_user SET
          password='" . $password . "'
            WHERE id= '" . $dlogin->id . "'
        ");

            if ($update) {
                echo '<script>alert("Update Password berhasil")</script>';
                session_destroy();
                echo '<script>window.location="../index.php"</script>';
            } else {
                echo '<script>alert("Update Password gagal")</script>';
            }
        }

        ?>

        <footer>
            <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
        </footer>
</body>

</html>