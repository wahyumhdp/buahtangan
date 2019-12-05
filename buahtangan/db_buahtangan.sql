-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 09:24 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_buahtangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `nama`) VALUES
(123, 'admin', 'admin', 'wahyu');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `id_makanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(50) NOT NULL,
  `gambar_makanan` varchar(255) NOT NULL,
  `deskripsi_makanan` text NOT NULL,
  `asal_makanan` varchar(50) NOT NULL,
  `bahan_makanan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `gambar_makanan`, `deskripsi_makanan`, `asal_makanan`, `bahan_makanan`) VALUES
(4, 'Karak Kaliang', '5de484f192ad3.jpg', 'Salah satu jajanan tradisional khas Payakumbuh . Cemilan ini dibuat menggunakan singkong yang telah dihaluskan kemudian diaduk menjadi adonan dan terakhir digoreng menggunakan minyak. Rasanya gurih  namun akan sangat renyah saat diggit dan bisa membuat siapa saja ingin memakannya lagi dan lagi.', 'Payakumbuh', 'Singkong/Ubi'),
(5, 'Roti Randang', '5de508a3c2f13.jpg', 'Menjadi makanan terlezat di dunia menurut survei yang dilakukan oleh CNNgo membuat nama rendang mencuat di pasaran, salah satunya Padang. Di sana terdapat produsen oleh-oleh khas Padang Sumatera Barat dengan merek â€˜Roti Randang Ninurâ€™ yang beralamatkan di Jalan Proklamasi dengan berbagai olahan roti namun dicampur dengan lezatnya rendang.', 'Padang', 'Roti dan Randang'),
(6, 'Batiah', '5de5090193a3f.jpg', 'Salah satu jajanan tradisional khas Payakumbuh yang jarang diketahui oleh orang adalah Batiah. Cemilan ini dibuat menggunakan ketan yang telah dikeringkan kemudian ditanak dan terakhir digoreng menggunakan minyak. Rasanya adalah manis namun akan sangat renyah saat diggit dan bisa membuat siapa saja ingin memakannya lagi dan lagi.', 'Payakumbuh', 'Beras Ketan'),
(7, 'Arai Pinang', '5de50fe1e7ab6.jpg', 'Arai pinang adalah cemilan yang berasal dari Sumatera Barat, khusunya daerah Pariaman. Cara pembuatan jenis keripik ini adalah dengan menggunakan tepung beras dengan diberi rempah-rempah sehingga menghasilkan rasa renyah dan gurih. Tepung beras yang menjadi bahan utama pembuatannya harus terlebih dahulu disangrai. Bahkan salah satu rempah yang digunakan adalah kapur sirih untuk membuat rasanya semakin renyah. Bentuk dari cemilan ini adalah bulat dengan bentuk pipih karena dipipihkan dengan arai pinang.', 'Pariaman', 'Tepung Beras'),
(8, 'Bolu Batik', '5de7eed703c68.jpg', 'Sesuai namanya, bolu batik memang merupakan kue bolu gulung yang bagian atasnya dihias menggunakan motif batik. Dibutuhkan keterampilan dan ketelitian yang cukup tinggi untuk bisa â€œmenggambarâ€ motif batik di atas bolu. Tak heran, jika akhirnya satu porsi bolu batik dijual dengan harga cukup mahal, yakni sekitar Rp60.000.', 'Bukittinggi', 'Tepung terigu'),
(9, 'Keripik Balado Shirley', '5de8792981f57.jpg', 'Makanan ringan lain yang bisa kamu jadikan oleh-oleh dari padang adalah keripik balado. Dari sekian banyak penjual keripik balado yang ada di Padang, salah satu yang cukup terkenal adalah Keripik Balado Shirley di Jalan Gereja No 36, Padang Bar. Tak hanya keripik balado, kamu juga bisa menemukan makanan ringan khas Padang lain seperti opak lado dan keripik sanjai.', 'Padang', 'Keripik');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `asal_produk` varchar(50) NOT NULL,
  `bahan_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar_produk`, `deskripsi_produk`, `asal_produk`, `bahan_produk`) VALUES
(4, 'Kain Songket', 'songket.jpg', 'Salah satu souvenier khas Kota Padang adalah kain songket.Bagi kamu penyuka Kebaya pasti sudah tidak asing lagi dengan kain ini ya.Jika berada di kota Padang Tidak Ada salah nya kamu memebeli baju cantik khas Minangkabau ini', 'Padang', 'Kain'),
(5, 'Serunai', 'serunai.jpg', 'Serunai merupakan alat musik yang sering di jumpai di Minangkabau,serunai juga di gunakan sebagai souvenier bagi wisatawan asing                                                                                                                                                                                                           ', 'Minangkabau', 'Kayu'),
(6, 'Kerajinan Perak', '5de4dd56213e4.jpg', 'Saat ini kerajinan perak Koto Gadang Agam ini sering dijadikan Souvenier bahkan sampai di jual di luar negeri.Hasil kerajinan perak ini memeliki berbagai macam jenis dari patung,miniatur rumah gadang', 'Agam', 'Perak'),
(7, 'Gantungan Kunci Jam Gadang', '5de776de1f5b0.jpg', 'Pernak-pernik khas Padang juga tak kalah menarik untuk dijadikan oleh-oleh. Bentuknya yang menarik dan lucu sangat pas menjadi hadiah bagi saudara dan kerabat di tempat tinggal Anda.', 'Bukittinggi', 'Besi'),
(8, 'Mukena Kerancang', '5de7e930362b4.jpg', 'Ciri Khas dari mukena ini adalah adanya lubang kecil hasil sulaman kainnya.Motif mukena kerancang bervariasi dari tumbuhan,hewan,hingga kaligrafi .Harganya terbilang cukup lumayan yaitu cuman 400ribu hingga 2jutaan untuk satunya,tapi kamu gak bakalan kecewa apabila membelinya', 'Padang', 'Kain'),
(9, 'Saluang', '5de7ead3cfb45.jpg', 'Souvenier khas padang yang kerap diincar oleh para wisatawan ialah alat musik tradisional ,salah satunya Saluang ini.Saluang adalah Suling khas Minangkabau.Uniknya jika pada umumnya suling di buat dengan bahan dari pipa bambu lain halnya dengan saluang yang terbuat dari Talang bekas Jemuran', 'Minangkabau', 'Talang Bekas Jemuran'),
(11, 'Kerajinan Ukiran Kayu', '5de87b83a3f4a.jpg', 'Padang Merupakan salah satu kota yang memiliki beragam kerajinan tangan,salah satunya Ukiran kayu.Kerajinan Ukiran Kayu ini sering dijadikan cinderamata oleh para wisatawan ketika berkunjung ke Padang Desa Pandai Sikek merupakan tempat para pengrajin Kerajinan Ukiran Kayu ini,selalu untuk membeli Souvenier ini.', 'Padang', 'Kayu'),
(12, 'Pakaian Muslim Khas Minang', '5de87cba17a4c.jpg', 'Padang merupakan pusatnya Ajaran Agama Islam terutama di Bukittinggi dan Batusangka.Sehingga Jika sedang berkunjung ke kawasan minang.Pakaian Muslim menjadi salah satu oleh oleh yang wajib dibeki jika berkunjung ke Sumatera Barat\r\nDi Pasar aua kuniang Bukitinggi kamu bisa menemukan berbagai macam pakaian muslim disana,tentunya dengan harga yang murah', 'Bukittinggi dan Batusangka', 'Kain');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
