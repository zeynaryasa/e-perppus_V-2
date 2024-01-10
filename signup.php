<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Bali Library</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="box">
                <form action="" method="POST">
                    <div class="box-tbhdt">
                        <h2>SIGN UP</h2>
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="tbh-content" autocomplete="on" required>
                        <div class="signup-border"></div>
                        <label for="username">username</label>
                        <input type="email" name="username" id="username" class="tbh-content" autocomplete="on" required
                            placeholder="example@bali">
                        <div class="signup-border"></div>
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" class="tbh-content" autocomplete="on"
                            required>
                        <div class="signup-border"></div>
                        <label for="no_wa">No. WA</label>
                        <input type="number" name="no_wa" id="no_wa" class="tbh-content" autocomplete="on" required>
                        <div class="signup-border"></div>
                        <label for="level">Level Akses</label>
                        <select name="level" id="level" class="tbh-content">
                            <option value="2">User</option>
                        </select>
                        <div class="signup-border"></div>
                        <button name="submit" id="submit" class="btn-all">SIGN UP</button>
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
        include 'db.php';

        $nama = ucwords($_POST['nama']);
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $no_wa = $_POST['no_wa'];
        $level = $_POST['level'];

        $insert = mysqli_query($conn, "INSERT INTO tb_user VALUES (
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
            echo '<script>window.location="index.php"</script>';
        } else {
            echo '<script>Pendaftaran Gagal</script>';
        }
    }


    ?>

    <footer>
        <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
    </footer>
</body>

</html>