/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `bali_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bali_db`;

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `tb_buku` DISABLE KEYS */;
INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `gambar`) VALUES
	(1, 'Pelatihan Dasar CSS', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS.PNG'),
	(2, 'Pelatihan Dasar CSS 1', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 1.PNG'),
	(3, 'Pelatihan Dasar CSS 2', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 2.PNG'),
	(4, 'Pelatihan Dasar CSS 3', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 3.PNG'),
	(5, 'Pelatihan Dasar CSS 4', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 4.PNG'),
	(6, 'Pelatihan Dasar CSS 5', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 5.PNG'),
	(7, 'Pelatihan Dasar CSS 6', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 6.PNG'),
	(8, 'Pelatihan Dasar CSS 7', 'W3school', 'W3school', 'Buku -Pelatihan Dasar CSS 7.PNG');
/*!40000 ALTER TABLE `tb_buku` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tb_pinjam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_p` varchar(50) DEFAULT NULL,
  `nama_p` varchar(50) DEFAULT NULL,
  `no_wa_p` varchar(50) DEFAULT NULL,
  `tgl_p` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_k` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `tb_pinjam` DISABLE KEYS */;
INSERT INTO `tb_pinjam` (`id`, `judul_p`, `nama_p`, `no_wa_p`, `tgl_p`, `tgl_k`, `status`) VALUES
	(1, 'Contoh Judul Buku2', 'U1111', '087865354344', '2022-06-29 00:00:00', '2022-07-09 00:00:00', 1),
	(2, 'Contoh Judul Buku5', 'User Bali Library', '087865354344', '2022-07-06 00:00:00', '2022-08-06 00:00:00', 1),
	(3, 'Contoh Judul Buku4', 'User Bali Library', '087865354344', '2022-07-10 00:00:00', '2022-07-17 00:00:00', 0),
	(4, 'Contoh Judul Buku5', 'User Bali Library', '087865354344', '2010-07-22 00:00:00', '2017-07-22 00:00:00', 0);
/*!40000 ALTER TABLE `tb_pinjam` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_wa` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `no_wa`, `level`) VALUES
	(1, 'Admin Bali Library', 'admin@bali', '7e957d9933fff5a06e8b37d6e57a682bc121da9a', '087865354344', '1'),
	(2, 'User Bali Library', 'user@bali', '10a5b952f2d57c22c3ab505bdf8b89962256f07c', '087864354365', '2');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
