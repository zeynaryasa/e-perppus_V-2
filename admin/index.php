<?php
include '../db.php';
include 'sesi-admin.php';
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
            <header>SI-Perpus</header>
            <nav>
                <ul>
                    <li><a href="index.php" id="dashboard">Dashboard</a></li>
                    <li><a href="../buku/data-buku.php" id="dbuku">Data Buku</a></li>
                    <li><a href="data-user.php" id="duser">Data User</a></li>
                    <li><a href="data-pinjam.php" id="pinjam">Peminjaman</a></li>
                    <li><a href="../logout.php">LogOut</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="top">
        <button><?php echo $dlogin->nama ?></button>
    </div>
    <div class="section">
        <div class="container">
            <div class="box">
                <div class="box-tbhdt">
                    <img src="../img/logo.png" alt="" id="img-logo">
                </div>
                <h2>Welcome To SI-Perpus Bali Library</h2>
                <p>SI-Perpus Bali Library adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quos
                    enim quae, nulla voluptatibus
                    modi velit corporis ipsum nesciunt dignissimos quaerat nobis magnam fugiat nostrum ea tenetur vitae
                    saepe, molestias sed officiis ducimus? Ipsam impedit, totam modi perspiciatis commodi alias possimus
                    quod eius rem asperiores in voluptatem harum saepe sit voluptas quaerat tempore quae, quam
                    perferendis nam! Saepe, magni eveniet officiis non voluptas quos voluptatibus unde quia natus,
                    accusamus similique. Voluptates numquam eaque hic minus dolorum rerum error exercitationem enim
                    doloremque magni soluta saepe assumenda omnis quaerat similique, temporibus quos odit explicabo odio
                    perspiciatis nisi voluptatibus modi nemo? Iste, tempore!</p>
            </div>
            <ul>
                <li>Dashboard</li>
                <ul>
                    <li>Menu Dashboard adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit earum
                        dicta
                        obcaecati ut vero neque veritatis sequi delectus in dolores.</li>
                </ul>
                <li>Data Buku</li>
                <ul>
                    <li> Menu Data Buku adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit earum
                        dicta
                        obcaecati ut vero neque veritatis sequi delectus in dolores.</li>
                </ul>
                <li>Data User</li>
                <ul>
                    <li> Menu Data User adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit earum
                        dicta
                        obcaecati ut vero neque veritatis sequi delectus in dolores.</li>
                </ul>
                <li>Peminjaman</li>
                <ul>
                    <li>Menu Peminjaman adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit earum
                        dicta
                        obcaecati ut vero neque veritatis sequi delectus in dolores.</li>
                </ul>
                <a href=""><button class="btn-read">Readmore...</button></a>
            </ul>
        </div>
    </div>

</body>
<footer>
    <div class="Copyright">Copyright &copy;2022 - Bali Library</div>
</footer>

</html>