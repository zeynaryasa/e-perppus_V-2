<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Bali Library</title>
    <link rel="stylesheet" href="sIndex.css">
</head>
<h2>Welcome To Bali Library Website</h2>
<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form action="" method="POST">
            <h1>Sign in</h1>
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button id="sigin" name="sigin" class="btn-login">Sign In</button>

        </form>
        <?php
        if (isset($_POST['sigin'])) {
            include 'db.php';
            session_start();
            $username = $_POST['username'];
            $password = sha1($_POST['password']);

            $login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$username' and password ='$password'");
            if (mysqli_num_rows($login) == 0) {
                echo '<script>alert("Username atau password Salah!")</script>';
            } else {
                $row = mysqli_fetch_assoc($login);
                if ($row['level'] == 1) {
                    $_SESSION['admin'] = $username;
                    $_SESSION['id'] = $row['id'];
                    echo '<script>window.location="admin/index.php"</script>';
                } else {
                    if ($row['level'] == 2) {
                        $_SESSION['user'] = $username;
                        $_SESSION['id'] = $row['id'];
                        echo '<script>window.location="user/index.php"</script>';
                    }
                }
            }
        }
        ?>


    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Hallo Sahabat !</h1>
                <p>Ayo daftar sekarang untuk mendapatkan akses ke wesite kami !</p>
                <a href="signup.php"><button class="ghost" id="signUp" name="signup">Sign Up</button></a>
            </div>
        </div>
    </div>
</div>

</html>