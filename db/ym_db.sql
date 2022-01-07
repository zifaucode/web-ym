-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 02:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_akun`
--

CREATE TABLE `admin_akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_akun`
--

INSERT INTO `admin_akun` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Admin Yayasan', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `nama`, `gambar`, `keterangan`) VALUES
(4, ' FAUZI AGUSTIAN GAMBAR', 'galery_ym-1639495900.jpg', 'okeey sip'),
(5, 'masjid', 'galery_ym-1638888370.jpg', 'Masjid medan'),
(6, 'GAMBAR SIAP', 'galery_ym-1639495470.JPG', 'GAMBAR SAYA');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `isi_info` text DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul`, `gambar`, `isi_info`, `tanggal`) VALUES
(2, '  pembangunan kota tua', 'informasi_ym-1639886986.jpg', '<p>Semangat untuk melakukan akselarasi kesejahteraan masyarakat desa dalam UU Desa tak bisa dimungkiri. Hal ini sebagaimana tertuang dalam pasal 4 mengenai Pembangunan Desa UU No. 6 Tahun 2014: a) memberikan pengakuan dan penghormatan atas desa yang sudah ada dengan keberagamannya sebelum dan sesudah terbentuknya Negara Kesatuan Republik Indonesia; b) memberikan kejelasan status dan kepastian hukum atas desa dalam sistem ketatanegaraan Republik Indonesia demi mewujudkan keadilan bagi seluruh rakyat Indonesia; c) melestarikan dan memajukan adat, tradisi, dan budaya masyarakat desa; d) mendorong prakarsa, gerakan, dan partisipasi masyarakat desa untuk pengembangan potensi dan aset desa guna kesejahteraan bersama; e) membentuk pemerintahan desa yang profesional, efisien dan efektif, terbuka, serta bertanggung jawab; f) meningkatkan pelayanan publik bagi warga masyarakat desa guna mempercepat perwujudan kesejahteraan umum; g) meningkatkan ketahanan sosial budaya masyarakat desa guna mewujudkan masyarakat desa yang mampu memelihara kesatuan sosial sebagai bagian dari ketahanan nasional; h) memajukan perekonomian masyarakat desa serta mengatasi kesenjangan pembangunan nasional; dan i) memperkuat masyarakat desa sebagai subjek pembangunan.</p>\r\n\r\n<p>Oleh karena itu perlu diapresiasi bahwa semangat UU ini merupakan terobosan baru agar stigma terhadap masyarakat desa bahwa desa menjadi hunian dimana masyarakatnya memiliki SDM rendah, ketinggalan akses informasi, terbelakang dan kemiskinan, jadi hilang. Itu semua menjadi potret kelam yang seringkali disematkan kepada masyarakat desa. Tentu penilaian ini di satu sisi memiliki keabsahan yang tidak bisa dibantah.</p>\r\n\r\n<p>Munculnyna gerakan arus urbanisasi mengenai masyarakat desa mengadu nasib ke kota menjadi contoh yang paling&nbsp;<em>sohih</em>. Bahwa desa tidak mampu memberikan jaminan hidup dan kesejahteraan hidup bagi sebagian besar yang dialami oleh masyarakat desa. Maka wajar manakala desa dipandang sebelah mata dan dinilai terbelakang oleh kebanyakan orang yang dinilai tidak prospek dalam memberikan jaminan kesejahteraan untuk masa depannya.</p>\r\n\r\n<p>Menjadi keniscayaan bahwa mendorong desa menjadi sejahtera dan mandiri adalah tanggung jawab semua pihak. Tidak hanya menjadi tanggung jawab pemerintah, baik desa maupun pemerintah daerah saja, melainkan keterlibatan semua pihak menjadi mutlak adanya. Kesejahteraan masyarakat desa, kemajuan desa, dan kemandirian desa tidak akan terwujud manakala seluruh elemen masyarakat dari berbagai kalangan berpartisipasi dalam membangun desa. Jika aspek legalitas yang menjadi ukuran, maka kesejahteraan masyarakat desa akan berhenti pada tataran normatif dan&nbsp;<em>lip service</em>. Jauh panggang dari api. Oleh karena itu semua&nbsp;<em>stakeholder</em>&nbsp;harus bersatu padu agar kesejahteraan desa benar terwujud.</p>\r\n\r\n<p>Perlu kiranya merinci secara detail apa itu yang dimasud dengan mandiri dan kesejahteraan. Hal ini penting sehingga tidak melahirkan multitafsir, kriteria dan ukuran kesejahteraan dan kemandirian itu bersifat abstrak, yang sulit untuk dideskripsikan. Dengan demikian cita-cita UU Desa itu mengenai kesejahteraan masyarakat dan kemandirian itu tidak sekadar ilusi dan mimpi yang sulit dicapai.</p>\r\n\r\n<p>Meminjam istilah Midgley (1997:5) dalam Isband Rukminto bahwa kesejahteraan sosial keadaan atau kondisi hidup manusia yang tercipta ketika berbagai permasalahan sosial dapat dikelola dengan baik ketika kebutuhan manusia terpenuhi dan ketika kesempatan sosial dapat dimaksimalisasi. Hal ini juga dipertegas dalam UU No. 11 Tahun 2009 Pasal I ayat (a) Kesejahteraan Sosial adalah kondisi terpenuhinya kebutuhan material, spiritual, dan sosial warga negara agar dapat hidup layak dan mampu mengembangkan diri, sehingga dapat melaksanakan fungsi sosialnya.</p>\r\n\r\n<p>Begitu juga dengan makna dan pengertian mandiri. Menurut Basri (1995) kemandirian itu berasal dari kata mandiri. Kata itu berasal dari bahasa Jawa, dimana dalam bahasa sehari-hari berarti berdiri sendiri. Lebih detail Basri mengatakan bahwa dalam perspektif psikologis bahwa kemandirian sebagai keadaan seseorang dalam kehidupannya yang mampu memutuskan atau mengerjakan sesuatu tanpa bantuan orang lain.</p>\r\n\r\n<p>Merunut dari berbagai definisi ahli bahwa pembangunan desa adalah sebagai upaya serius pemerintah untuk meningkakan kualitas hidup dan kehidupan untuk sebesar-besarnya kesejahteraan masyarakat desa. Tidak ada alasan apapun yang dibenarkan bahwa kesejahteraan dan kemandirian desa hanya menjadi komoditas politik yang berimplikasi terhadap stagnasi dan degradasi tujuan kesejahteraan masyarakat desa.</p>\r\n\r\n<p><strong>Kawasan Perdesaan dan Tantangan</strong></p>\r\n\r\n<p>Spirit UU Desa dalam melahirkan desa maju dan mandiri tentu tak bisa dilakukan secara parsial. Jalan terjal membangun desa tentu akan menjadi bagian dari dinamika masyarakat dalam mengawal perubahan di mana jika sebelumnya desa hanya memikirkan mengenai desanya sendiri tanpa banyak memikirkan dan melakukan sinergi-koordinasi dan komunikasi dengan desa-desa lain atau desa tetangga yang secara geografis berdekatan. Pembangunan desa kawasan adalah ikhtiar baru pemerintah untuk menuju kemandirian desa.</p>\r\n\r\n<p>Adalah Mohammad Solekhan dalam bukunya Penyelenggaraan Pemerintahan Desa Berbasis Partisipasi Masyarakat (2014: 70-71) bahwa pembangunan kawasan perdesaan merupakan perpaduan pembangunan antardesa dalam satu kabupaten yang meliputi.&nbsp;<em>Pertama</em>,<em>&nbsp;</em>penggunaan dan pemanfaatan wilayah desa dalam rangka penetapan kawasan pembangunan sesuai dengan tata ruang kabupaten/kota.&nbsp;<em>Kedua</em>, pelayanan yang dilakukan untuk meningkatkan kesejahteraan masyarakat perdesaan.&nbsp;<em>Ketiga</em>, pembangunan infrastruktur, peningkatan ekonomi perdesaan dan pengembagan teknologi tepat guna.&nbsp;<em>Keempat</em>, pemberdayaan masyarakat desa untuk meningkatkan akses terhadap pelayanan dan kegiatan ekonomi.</p>\r\n\r\n<p>Orientasi pembangunan kawasan perdesaan tersebut adalah mempercepat dan meningkatkan kualitas pelayanan pembangunan dan pemberdayaan masyarakat desa di kawasan perdesaan melalui pendekatan pembangunan partisipatif. Mandat UU Desa mengenai desa kawasan sebagai langkah progresif, dimana selama ini pembangunan yang sektoral dan egosentris bisa dieleminir secara perlahan-lahan. Impian kemandirian desa melalui sinergi dan kolaborasi antardesa dalam rangka mempercepat kesejahteraan masyarakat desa menjadi kebutuhan yang mendesak dan mutlak.</p>\r\n\r\n<p>Pembangunan pelaksanaan kawasan perdesaan itu dilakukan oleh pemerintah, pemerintah daerah provinsi, pemerintah kabupaten/kota melalui satuan kerja perangkat daerah, pemerintah desa dan/atau BUMD dengan mengikutsertakan masyarakat desa tentu dalam pelaksanaan teknis di lapangan bahwa pembangunan kawasan perdesaan wajib mengoptimalkan sumber daya alam setempat, sumber daya manusia setempat.</p>\r\n\r\n<p>Dengan adanya mandat UU bahwa desa kawasan merupakan jangkar ekonomi desa bisa tumbuh secara kokoh. Pembangunan manusia dari sisi keterampilan dan kemampuan SDM harus bersenyawa dengan pertumbuhan dan kemandirian ekonomi. Maka dari itu, kegiatan dan pengembangan ekonomi desa bisa bekerjasaa secara elegan yang bisa dilakukan oleh beberapa desa. Ketentuan mengenai jumlah desa kawasan memang tidak diatur secara mendetail, akan tetapi menjadi kebutuhan bersama bagi desa untuk&nbsp;<em>sharing</em>&nbsp;potensi antardesa, baik potensi manusia maupun sumberdaya alam. Bahkan pemasaran pun bisa melakukan&nbsp;<em>sharing</em>&nbsp;dan sinergi.</p>\r\n\r\n<p>Maka jawaban mengenai desa kawasan seperti yang diamanahkan dalam UU Desa mengenai kerja sama antardesa atau dengan pihak ketiga. Bentuk kerjasama meliputi: 1) pengembangan usaha bersama yang dimiliki oleh desa untuk mencapai nilai ekonomi yang berdaya saing; 2) kegiatan kemasyarakatan, pelayanan pembangunan dan pemberdayaan masyarakat antar desa dan/atau; 3) bidang keamanan dan ketertiban. Sementara terkait kerja sama pihak ketiga dimaksutkan untuk mempercepat dan meningkatkan penyelenggaraan pemerintah desa, pelaksanaan pembangunan desa, pembinaan kemasyarakatan desa dan pemberdayaan masyarakat desa.</p>\r\n\r\n<p>Dalam hal ini yang lebih memungkinkan dilakukan adalah bahwa pihak ketiga yang dimaksud adalah bisa saja mengandeng perguruan tinggi yang ahli dan memiliki kualifikasi disiplin keilmuan mengenai permasalahan sosial, pengembangan masyarakat dan teknis pendampingan baik mikro, mezzo dan makro. Begitu juga bekerja sama dengan para aktivis LSM yang memiliki konsen dalam pemberdayaan masyarakat dan pemetaan sosial. Sehingga sinergi pembangunan desa tidak hanya menjadi domain pemerintah saja tetapi ada pihak luar yang lebih obyektif dalam melakukan pengembangan pembangunan desa. Semoga mimpi membangun kawasan perdesaan sebagai ikhtiar progresif dan profetik dalam membangun kesejahteraan masyarakat desa yang sebenar-benarnya. [<strong>Jatim</strong>]</p>\r\n\r\n<p><em>Editor: Nina Firstavina</em></p>\r\n', '12/16/2021'),
(3, '   apa itu covid-19 ?', 'informasi_ym-1639887919.jpg', '<p><strong>Pengertian Virus Corona (COVID-19) edit</strong></p>\r\n\r\n<p>Infeksi coronavirus merupakan penyakit yang disebabkan oleh virus corona dan menimbulkan gejala utama berupa gangguan pernapasan. Penyakit ini menjadi sorotan karena kemunculannya di akhir tahun 2019 pertama kali di Wuhan, China. Lokasi kemunculannya pertama kali ini, membuat coronavirus juga dikenal dengan sebutan Wuhan virus. &nbsp;</p>\r\n\r\n<p>Selain China, coronavirus juga menyebar secara cepat ke berbagai negara lain, termasuk Jepang, Thailand, Jepang, Korea Selatan, bahkan hingga ke Amerika Serikat.</p>\r\n\r\n<p><strong>Penyebab Virus Corona (COVID-19)</strong></p>\r\n\r\n<p>Penyebab Corona virus merupakan virus single stranded RNA yang berasal dari kelompok Coronaviridae. Dinamakan coronavirus karena permukaannya yang berbentuk seperti mahkota (<em>crown</em>/corona).</p>\r\n\r\n<p>Virus lain yang termasuk dalam kelompok yang serupa adalah virus yang menyebabkan&nbsp;<em>Middle East Respiratory Syndrome&nbsp;</em>(MERS-CoV) dan&nbsp;<em>Severe Acute Respiratory Syndrome&nbsp;</em>(SARS-CoV) beberapa tahun silam.</p>\r\n\r\n<p>Namun, virus corona dari Wuhan ini merupakan virus baru yang belum pernah teridentifikasi pada manusia sebelumnya. Karena itu, virus ini juga disebut sebagai 2019 Novel Coronavirus atau 2019-nCoV.</p>\r\n\r\n<p>Virus corona umumnya ditemukan pada hewan &ndash;seperti unta, ular, hewan ternak, kucing, dan kelelawar. Manusia dapat tertular virus apabila terdapat riwayat kontak dengan hewan tersebut, misalnya pada peternak atau pedagang di pasar hewan.</p>\r\n\r\n<p>Namun, adanya ledakan jumlah kasus di Wuhan, China menunjukkan bahwa corona virus dapat ditularkan dari manusia ke manusia. Virus bisa ditularkan lewat droplet, yaitu partikel air yang berukuran sangat kecil dan biasanya keluar saat batuk atau bersin. Apabila droplet tersebut terhirup atau mengenai lapisan kornea mata, seseorang berisiko untuk tertular penyakit ini.</p>\r\n\r\n<p>Meski semua orang dapat terinfeksi virus corona, mereka yang lanjut usia, memiliki penyakit kronis, dan memiliki daya tahan tubuh rendah lebih rentan mengalami infeksi ini serta komplikasinya.</p>\r\n\r\n<p><strong>Gejala Virus Corona (COVID-19)</strong></p>\r\n\r\n<p>Gejala Coronavirus bervariasi, mulai dari flu biasa hingga gangguan pernapasan berat menyerupai pneumonia. Gejala Corona yang umum dialami mereka yang mengalami infeksi coronavirus adalah:</p>\r\n\r\n<ul>\r\n	<li>Demam tinggi disertai menggigil</li>\r\n	<li>Batuk kering</li>\r\n	<li>Pilek</li>\r\n	<li>Hidung berair dan bersin-bersin</li>\r\n	<li>Nyeri tenggorokan</li>\r\n	<li>Sesak napas</li>\r\n</ul>\r\n\r\n<p>Gejala&nbsp;virus corona tersebut dapat bertambah parah secara cepat dan menyebabkan gagal napas hingga kematian.&nbsp;<em>Centers for Disease Control and Prevention&nbsp;</em>(CDC) gejala infeksi virus 2019-nCoV dapat muncul mulai dua hari hingga 14 hari setelah terpapar virus tersebut.</p>\r\n\r\n<p><strong>Diagnosis Virus Corona (COVID-19)</strong></p>\r\n\r\n<p>Infeksi coronavirus umumnya diketahui melalui gejala dan pemeriksaan fisik yang dikeluhkan pasien. Setelah itu, dokter akan melakukan sejumlah pemeriksaan penunjang untuk membantu menegakkan diagnosis.</p>\r\n\r\n<p>Pemeriksaan penunjang tersebut antara lain adalah pemeriksaan darah lengkap, pemeriksaan pembekuan darah, fungsi ginjal dan hati serta pemeriksaan virologi. Selain itu, spesimen dari hidung dan faring (tenggorokan) pasien pun akan diambil dengan teknik swab. Demikian pula, sediaan dahak dan, bila diperlukan, cairan bronkus (saluran pernapasan yang lebih kecil).</p>\r\n\r\n<p>Melalui pemeriksaan tersebut dapat diketahui apakah penyakit pasien disebabkan oleh virus atau sebab yang lain. Sementara itu, plasma darah pasien pun akan diperiksa untuk menemukan RNA virus corona.</p>\r\n\r\n<p>Untuk pemeriksaan radiologi, dapat dilakukan pemeriksaan rontgen (<em>x-ray</em>) dada dan&nbsp;<em>CT-scan</em>&nbsp;dada. Sebagian besar pasien akan menunjukkan gambaran kekeruhan di kedua paru.</p>\r\n\r\n<p><strong>Komplikasi Virus Corona (COVID-19)</strong></p>\r\n\r\n<p>Pasien yang terinfeksi coronavirus dapat mengalami gejala gangguan pernapasan seperti pneumonia berat, seperti demam tinggi dan sesak napas.</p>\r\n\r\n<p>Komplikasi seperti gagal napas, gagal jantung akut, dan infeksi sekunder akibat kuman lainnya dapat terjadi bila kondisi tersebut tidak segera diatasi atau bila penyakit mengalami perburukan dengan sangat cepat.</p>\r\n\r\n<p><strong>Pengobatan Virus Corona (COVID-19)</strong></p>\r\n\r\n<p>Hingga saat ini, belum ada terapi anti-virus yang terbukti efektif untuk mengatasi infeksi 2019-novel coronavirus. Beberapa anti-virus yang telah berhasil menangani infeksi MERS-CoV dan SARS-CoV sebelumnya, belum menunjukkan hasil memuaskan untuk mengatasi infeksi coronavirus yang baru ini.</p>\r\n\r\n<p>Penderita yang terinfeksi&nbsp;virus corona akan menerima terapi yang bersifat suportif untuk mengurangi gejala. Misalnya anti-piretik untuk menurunkan suhu tubuh dan cairan untuk mencegah dehidrasi, serta terapi oksigen pada pasien yang mengalami sesak napas.</p>\r\n\r\n<p>Pada kondisi yang berat, bantuan napas melalui mesin ventilator dapat diberikan pada pasien untuk menyokong fungsi organ vital lainnya.</p>\r\n\r\n<p><strong>Pencegahan Virus Corona (COVID-19)</strong></p>\r\n\r\n<p>Meski gejala penyakit coronavirus menyerupai penyakit pernapasan lain seperti pneumonia atau influenza, sejauh ini belum ada vaksin yang dapat mencegah penularan penyakit coronavirus. Pemberian vaksin pneumonia maupun vaksin influenza tidak dapat memberikan proteksi terhadap penyebaran infeksi virus corona.</p>\r\n\r\n<p>Cara terbaik untuk menghindari penyakit infeksi coronavirus adalah melakukan tindakan pencegahan secara aktif. CDC menyarankan setiap orang melakukan tindakan seperti:</p>\r\n\r\n<ul>\r\n	<li>Rutin mencuci tangan menggunakan sabun dan air mengalir selama setidaknya 20 detik</li>\r\n	<li>Apabila tidak memungkinkan atau tidak tersedia air dan sabun, bersihkan tangan menggunakan pembersih tangan berbahan alkohol</li>\r\n	<li>Hindari menyentuh hidung, mata, atau mulut terutama bila tangan masih kotor</li>\r\n	<li>Hindari kontak dengan orang yang sedang sakit</li>\r\n	<li>Tetaplah di rumah bila sedang sakit</li>\r\n	<li>Tutup mulut dengan tisu atau dengan menekuk siku saat Anda batuk atau bersin</li>\r\n	<li>Hindari kontak dengan hewan ternak secara langsung</li>\r\n	<li>Hindari bepergian, terutama ke daerah dengan kasus infeksi coronavirus</li>\r\n	<li>Hindari mengonsumsi daging yang belum matang sempurna.</li>\r\n</ul>\r\n\r\n<p>Menjaga nutrisi dengan mengonsumsi makanan yang bergizi seimbang, minum air putih dalam jumlah cukup, dan istirahat cukup juga dapat membantu menjaga kondisi tubuh agar tetap bugar dan terhindar dari infeksi virus corona.</p>\r\n\r\n<p>Setiap orang yang mengalami gejala menyerupai infeksi corona, jangan ragu untuk segera berkonsultasi dengan tenaga kesehatan untuk memastikan penyebabnya.</p>\r\n', ' 12/18/2021');

-- --------------------------------------------------------

--
-- Table structure for table `info_pendaftaran`
--

CREATE TABLE `info_pendaftaran` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pendaftaran`
--

INSERT INTO `info_pendaftaran` (`id`, `judul`, `info`, `gambar`) VALUES
(1, '  info pendaftaran santri ok', '<p>BELUM ADA INFO PENDAFTARAN</p>\r\n', 'pendaftaran_ym-1639494775.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_santri`
--

CREATE TABLE `kegiatan_santri` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_santri`
--

INSERT INTO `kegiatan_santri` (`id_kegiatan`, `nama_kegiatan`, `gambar`, `keterangan`) VALUES
(1, 'Study tour', 'kegiatan_ym-1639225283.jpg', 'Siswa Sedang Study tour'),
(3, '   Berkunjung ziarah ok', 'kegiatan_ym-1639562438.jpg', 'berkunjung okeeeeeeeeeeeeeee berkunjung okeeeeeeeeeeeeeeeberkunjung okeeeeeeeeeeeeeeeberkunjung okeeeeeeeeeeeeeeeberkunjung okeeeeeeeeeeeeeeeberkunjung okeeeeeeeeeeeeeeeberkunjung okeeeeeeeeeeeeeeeberkunjung okeeeeeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_hafalan`
--

CREATE TABLE `nilai_hafalan` (
  `id_hafalan` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `surat_hafalan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `raport` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pend` int(11) NOT NULL,
  `nama_pend` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pend`, `nama_pend`) VALUES
(1, 'SD/MI'),
(2, 'SMP/MTS'),
(3, 'SMA/SMK/MA');

-- --------------------------------------------------------

--
-- Table structure for table `profile_ym`
--

CREATE TABLE `profile_ym` (
  `id_ym` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `muqaddimah` text DEFAULT NULL,
  `program_kerja` text DEFAULT NULL,
  `tlp_yayasan` varchar(50) DEFAULT NULL,
  `kegiatan` text DEFAULT NULL,
  `slide1` text DEFAULT NULL,
  `slide2` text DEFAULT NULL,
  `slide3` text DEFAULT NULL,
  `gambar_slide1` varchar(50) DEFAULT NULL,
  `gambar_slide2` varchar(50) DEFAULT NULL,
  `gambar_slide3` varchar(50) DEFAULT NULL,
  `nama_pimpinan` varchar(255) DEFAULT NULL,
  `foto_pimpinan` varchar(50) DEFAULT NULL,
  `sambutan_pimpinan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_ym`
--

INSERT INTO `profile_ym` (`id_ym`, `visi`, `misi`, `muqaddimah`, `program_kerja`, `tlp_yayasan`, `kegiatan`, `slide1`, `slide2`, `slide3`, `gambar_slide1`, `gambar_slide2`, `gambar_slide3`, `nama_pimpinan`, `foto_pimpinan`, `sambutan_pimpinan`) VALUES
(1, '<p>Menjadikan Yayasan Mushlihun (YM) sebagai wadah ibadah, perjuangan membangun generasi islami, cerdas, terampil dan mandiri.</p>\r\n', '<p>1.&nbsp;&nbsp; &nbsp;Meningkatkan kualitas keimanan, ketaqwaan dan akhlak mulia.</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;Menumbuh kembangkan potensi umat melalui pendidikan.</p>\r\n\r\n<p>3.&nbsp;&nbsp; &nbsp;Mengelola amanah dengan jujur, kreatif dan transparan.</p>\r\n\r\n<p>4.&nbsp;&nbsp; &nbsp;Berkumpulnya orang-orang soleh dan solehah untuk mengembangkan yayasan sesuai dengan profesinya.</p>\r\n\r\n<p>5.&nbsp;&nbsp; &nbsp;Mewujudkan yayasan berpola pikir maju, berwawasan, peduli terhadap lingkungan dengan meningkatkan 6K yaitu :</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;(Keimanan, Ketertiban, Kebersihan, Keindahan, Keramahan dan Kekeluargaan ).</p>\r\n', '<p>Perkembangan zaman dan budaya saat ini serta yang akan datang ingin menjadikan Yayasan Mushlihun menjadi lembaga pendidikan yang sangat diperlukan keberadaannya bagi pendidikan masyarakat islam.<br />\r\n&ldquo;Yayasan Mushlihun adalah lembaga pendidikan Islam ber-asrama yang mengajarkan ilmu keislaman, pengetahuan umum, dan teknologi secara terpadu, serta mengedepankan Akhlak Hal ini bertujuan untuk menyiapkan generasi mukmin yang cerdas, kuat, mandiri, modern, berwawasan global dan berakhlak&rdquo;</p>\r\n', '                    <p>Adapun program kerja yang ada pada Yayasan Mushlihun sebagai berikut :<br />\r\n<strong>A.    Program Kerja ( Pendek )</strong><br />\r\n1.    Membangun rumah anak yatim, piatu dan dhuafa.<br />\r\n2.    Membangun kantor yayasan dan tempat pembina.<br />\r\n3.    Pembebasan tanah untuk perluasan yayasan.<br />\r\n4.    Santunan, pengajian, dan kegiatan sosial.</p>\r\n\r\n<p><br />\r\n<strong>B.    Program Jangka Panjang</strong><br />\r\n1.    Membangun gedung sekolah<br />\r\n2.    Membangun masjid<br />\r\n3.    Membangun klinik dan tempat usaha<br />\r\n4.    Pembebasan tanah untuk perluasan yayasan<br />\r\n5.    Mendirikan cabang</p>\r\n                    ', NULL, '<p>aktifitas dan kegiatan di yayasan yaitu :<br />\r\n1.&nbsp;&nbsp; &nbsp;Tadarus, Tahsin, Tahfidz Al-Qur&rsquo;an<br />\r\n2.&nbsp;&nbsp; &nbsp;Kajian Al-Qur&rsquo;an dan Hadist<br />\r\n3.&nbsp;&nbsp; &nbsp;Santunan &amp; Qurban<br />\r\n4.&nbsp;&nbsp; &nbsp;Sholat Wajib 5 waktu &amp; Sholat sunnah ( Tahajud dan dhuha )<br />\r\n5.&nbsp;&nbsp; &nbsp;Keagamaan ( Pengajian ) Majelis Ta&rsquo;lim<br />\r\n6.&nbsp;&nbsp; &nbsp;Sekolah formal Pendidikan SD, SMP/Mts ( Masih diluar&nbsp;<strong>)</strong></p>\r\n', 'memfasilitasi anak Yatim, Piatu, Dhuafa dan Lansia dalam mencari, memilih dan menentukan arah hidup yang bermanfaat bagi diri sendiri, keluarga dan masyarakat,\r\nini edit', 'Di dalam organisasi ini terdapat proses yang menujukan jalinan hubungan kerja maupun pembagian kerja antar personilnya untuk mencapai tujuan yang telah ditetapkan,INI EDIT', 'menjadi penerus cita-cita perjuangan bangsa dan pembangunan umat. Anak-anak adalah anugrah terindah dan sekaligus amanat Allah SWT yang wajib dijaga, dididik, dilindungi, diayomi, dicintai dan diberikan kasih sayang, INI EDIT hanif', 'slide_ym-1639222910.jpg', 'slide_ym-1639321046.jpg', 'slide_ym-1639222941.jpg', ' Drs. H. Sarbodin Sohir', 'pimpinan_ym-1639477088.jpeg', '<p>okeee</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id_pend` int(11) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `keterangan`, `gambar`) VALUES
(4, 'SMA TADIKA MESRA', 'Terdapat 4 Santri yang bersekolah disini', 'sekolah_ym-1639890005.jpg'),
(5, 'SMP NEGERI 1 KOTA', 'Terdapat 6 santri  disini', 'sekolah_ym-1639890060.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_akun`
--

CREATE TABLE `user_akun` (
  `id_ortu` int(11) NOT NULL,
  `nama_ortu` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_akun`
--
ALTER TABLE `admin_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `info_pendaftaran`
--
ALTER TABLE `info_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_santri`
--
ALTER TABLE `kegiatan_santri`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `nilai_hafalan`
--
ALTER TABLE `nilai_hafalan`
  ADD PRIMARY KEY (`id_hafalan`);

--
-- Indexes for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `profile_ym`
--
ALTER TABLE `profile_ym`
  ADD PRIMARY KEY (`id_ym`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `user_akun`
--
ALTER TABLE `user_akun`
  ADD PRIMARY KEY (`id_ortu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_akun`
--
ALTER TABLE `admin_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `info_pendaftaran`
--
ALTER TABLE `info_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kegiatan_santri`
--
ALTER TABLE `kegiatan_santri`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_hafalan`
--
ALTER TABLE `nilai_hafalan`
  MODIFY `id_hafalan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile_ym`
--
ALTER TABLE `profile_ym`
  MODIFY `id_ym` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_akun`
--
ALTER TABLE `user_akun`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
