-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2023 pada 03.01
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintenance`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list`
--

CREATE TABLE `list` (
  `id_aset` int(11) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `tag_aset` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `no_model` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `diberikan_kepada` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list`
--

INSERT INTO `list` (`id_aset`, `nama_aset`, `tag_aset`, `model`, `no_model`, `kategori`, `diberikan_kepada`, `lokasi`) VALUES
(1, 'Laptop', 'AST-BP00001 ', 'Laptop Lenovo ', 'Ideapad 320 ', 'Komputer ', 'Rara Manajer HCD ', 'Ruang Agathis'),
(2, 'CPU ', 'AST-BP00002 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Nurul Staff PPIC MRP', 'Ruang Kenari'),
(3, 'CPU ', 'AST-BP00003 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Ani Staff HCD', 'Ruang Agathis'),
(4, 'CPU ', 'AST-BP00005 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Ardy Staff IT ', 'Ruang Cendana'),
(5, 'CPU ', 'AST-BP00006 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Ardy Staff IT', ' Ruang Cendana'),
(6, 'CPU \r\n', 'AST-BP00007 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Ardy Staff IT ', 'Ruang Cendana'),
(7, 'CPU ', 'AST-BP00008 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Cahya Staff Admin T/', ' Ruang Kabag Joinery'),
(8, 'Laptop ', 'AST-BP00009 ', 'Laptop Asus ', 'X453 ', 'Komputer ', '---', 'Ruang Cendana'),
(9, 'Laptop ', 'AST-BP00012 ', 'Laptop Lenovo ', 'Ideapad 110 ', 'Komputer ', 'Kawabe Manajer Jish ', 'Ruang Cendana'),
(10, 'Laptop ', 'AST-BP00016 ', 'Laptop Lenovo ', 'Ideapad 300 ', 'Komputer ', 'Dewi Manager Accou ', 'Ruang Eboni\r\n'),
(11, 'CPU ', 'AST-BP00017 ', 'CPU Rakit ', 'Rakit ', 'Komputer', ' Jumeri Manajer Tiang ', 'Ruang Kabag Joinery'),
(12, 'CPU ', 'AST-BP00018 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Vahmi Drafter Project ', 'Ruang Cendana'),
(13, 'CPU ', 'AST-BP00019 ', 'CPU Rakit ', 'Rakit', ' Komputer ', 'Herlan Drafter Sales ', 'Ruang Cendana'),
(14, 'Laptop ', 'AST-BP00020', ' Laptop Lenovo ', 'G470 ', 'Komputer ', '---', 'Ruang Cendana'),
(15, 'Laptop ', 'AST-BP00022', 'Laptop Lenovo', ' Ideapad 110 ', 'Komputer ', 'Annang Staff EXIM ', 'Ruang Cendana'),
(16, 'Laptop ', 'AST-BP00023 ', 'Laptop Lenovo ', 'G40', ' Komputer', '---', ' Ruang Cendana'),
(17, 'Laptop', ' AST-BP00024 ', 'Laptop', ' Asus X455LAB', ' Komputer', '---', ' Ruang Cendana'),
(18, 'Laptop', ' AST-BP00025', ' Laptop Acer ', 'Aspire ES 11 ', 'Komputer ', '---', 'Ruang Matoa'),
(19, 'Laptop ', 'AST-BP00027 ', 'Laptop Lenovo ', 'Ideapad 300 ', 'Komputer', '---', ' Ruang Cendana'),
(20, 'CPU ', 'AST-BP00028 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', '---', 'Ruang PPIC Bawah'),
(21, 'Laptop', ' AST-BP00031 ', 'Laptop Lenovo ', 'G480 ', 'Komputer ', 'Mustawa SPV PPIC', ' Ruang Kenari'),
(22, 'CPU ', 'AST-BP00032 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Lilik Leader PPIC Reg', 'Ruang PPIC Bawah'),
(23, 'CPU', ' AST-BP00033 ', 'CPU Rakit', ' Rakit ', 'Komputer ', 'Safik Leader PPIC Co', 'Ruang Kenari'),
(24, 'Laptop ', 'AST-BP00034 ', 'Laptop Lenovo ', 'Ideapad 110 ', 'Komputer ', 'Dany Manajer Flushd ', 'Ruang Cendana'),
(25, 'CPU ', 'AST-BP00035 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Tutik Leader PPIC Co', 'Ruang Kenari'),
(26, 'CPU ', 'AST-BP00036 ', 'CPU Rakit ', 'Rakit ', 'Komputer', ' Elin Staff Admin Pene', 'Gudang Logyard'),
(27, 'CPU ', 'AST-BP00037 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', '---', 'Ruang Server'),
(28, 'Laptop ', 'AST-BP00041', ' Laptop Lenovo', ' Ideapad 100 ', 'Komputer ', 'Henky Sales Regular ', 'Ruang Eboni'),
(29, 'CPU ', 'AST-BP00042 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Aulia Staff Accounting', 'Ruang Eboni'),
(30, 'CPU ', 'AST-BP00043 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', '---', 'Ruang Eboni'),
(31, 'CPU ', 'AST-BP00044 ', 'CPU Rakit', ' Rakit ', 'Komputer ', '---', 'Ruang Eboni'),
(32, 'Laptop ', 'AST-BP00045', ' Laptop Lenovo', ' Ideapad 300 ', 'Komputer ', 'Dita Staff Admin Fina ', 'Ruang Eboni'),
(33, 'CPU ', 'AST-BP00046 ', 'CPU Rakit ', 'Rakit ', 'Komputer', ' Akhmad KABAG Fina ', 'Ruang Eboni'),
(34, ' Laptop ', 'AST-BP00047', ' Laptop Dell ', 'E5420 ', 'Komputer ', '---', 'Ruang Cendana'),
(35, 'CPU ', 'AST-BP00048 ', ' CPU Rakit ', 'Rakit', ' Komputer ', 'Malrani Staff Procure ', 'Ruang Cendana '),
(36, 'CPU ', 'AST-BP00049', ' CPU Rakit ', 'Rakit', ' Komputer', ' Azizul Staff Purchasing', 'Ruang Cendana'),
(37, 'CPU ', 'AST-BP00050 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Shidiq Staff Procurem', 'Ruang Cendana '),
(38, 'CPU ', 'AST-BP00051', ' CPU Rakit ', 'Rakit ', 'Komputer', ' Yani Supervisor QC ', 'Ruang Cendana'),
(39, 'Laptop ', 'AST-BP00053 ', 'Laptop Lenovo', ' G485 ', 'Komputer ', 'Mukhlas SPV PPIC R ', 'Ruang Kenari '),
(40, 'CPU ', 'AST-BP00055 ', 'CPU Rakit', ' Rakit ', 'Komputer ', 'Riza Admin Gudang ', 'Gudang Logyard'),
(41, 'CPU ', 'AST-BP00058 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Gudang Logyard ', 'Gudang Logyard'),
(42, ' CPU ', 'AST-BP00060 ', 'CPU Rakit', ' Rakit ', 'Komputer ', 'Nurrohman Staff Proc ', 'Ruang Logistik'),
(43, 'Laptop', ' AST-BP00061 ', 'Laptop Acer ', 'Aspire ES 11 ', 'Komputer', ' Arifin KABAG Engine ', 'Ruang Cendana '),
(44, 'Laptop ', 'AST-BP00062 ', 'Laptop Asus ', 'X540NA ', 'Komputer ', 'Kustanto SPV Techni ', 'Ruang Cendana'),
(45, 'Laptop ', 'AST-BP00063', ' Laptop Lenovo ', 'V110 ', 'Komputer ', 'Candra Manajer Com ', 'Ruang Kabag Pembah '),
(46, 'Laptop ', 'AST-BP00064', ' Laptop Lenovo', ' V130 ', 'Komputer', ' Heru KABAG QMS ', 'Ruang Cendana'),
(47, 'Monitor ', 'AST-BP00065 ', 'Monitor Acer ', 'P166HQL ', 'Monitor ', 'CPU (AST-BP00042) ', 'Ruang Eboni'),
(48, ' Monitor ', 'AST-BP00066 ', 'Monitor LG ', '16EN33SA ', 'Monitor ', 'CPU (AST-BP00104) ', 'Ruang Cendana'),
(49, 'Monitor ', 'AST-BP00067', ' Monitor BenQ ', 'G615HDPL ', 'Monitor', ' CPU (AST-BP00055)', ' Gudang Logyard '),
(50, 'Monitor ', 'AST-BP00068 ', 'Monitor Acer ', 'EB192Q ', 'Monitor ', 'CPU (AST-BP00051) ', 'Ruang Cendana'),
(51, 'Monitor ', 'AST-BP00069 ', 'Monitor Acer', ' P166HQL ', 'Monitor', ' CPU (AST-BP00036) ', 'Gudang Logyard '),
(52, 'Monitor ', 'AST-BP00070 ', 'Monitor Samsung', ' 740N X ', 'Monitor ', 'CPU (AST-BP00018) ', 'Ruang Cendana'),
(53, 'Monitor ', 'AST-BP00072 ', 'Monitor Acer ', 'EB192Q ', 'Monitor', ' CPU (AST-BP00093)', ' Ruang Maintenance '),
(54, 'Printer ', 'AST-BP00073', ' Printer Epson', ' L310', ' Printer ', 'CPU (AST-BP00035) ', 'Ruang Kenari'),
(55, 'Monitor ', 'AST-BP00074 ', 'Monitor Acer ', 'P166HQL ', 'Monitor ', 'CPU (AST-BP00049)', ' Ruang Cendana '),
(56, 'Laptop ', 'AST-BP00076 ', 'Laptop Lenovo ', 'Ideapad 130 ', 'Komputer ', 'Are Manajer Procure ', 'Ruang Cendana'),
(57, 'Laptop ', 'AST-BP00077 ', 'Laptop Lenovo ', 'Ideapad 130 ', 'Komputer', ' Dhanu Manajer PPIC ', 'Ruang Matoa '),
(58, 'Laptop ', 'AST-BP00078 ', 'Laptop Lenovo ', 'T410 ', 'Komputer ', 'Yusuf Admin NPMD ', 'Ruang PPIC Bawah'),
(59, 'CPU ', 'AST-BP00079 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Sulistiani Staff Admin ', 'Ruang Kabag Pembah '),
(60, 'CPU ', 'AST-BP00080 ', 'CPU Rakit', ' Rakit ', 'Komputer ', 'Wulin Staff Sales Reg', 'Ruang Cendana'),
(61, 'CPU', ' AST-BP00083 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Ardy Staff IT ', 'Ruang Cendana '),
(62, 'Monitor ', 'AST-BP00084 ', 'Monitor Lenovo ', 'S22E-19 ', 'Monitor ', 'CPU (AST-BP00083) ', 'Ruang Cendana'),
(63, 'Monitor ', 'AST-BP00085 ', 'Monitor LG ', '20MT48AF ', 'Monitor ', 'POS MAKO 2 ', 'POS MAKO 2 '),
(64, 'Monitor ', 'AST-BP00086 ', 'Monitor TCL', ' L20D1700', ' Monitor ', 'Nurul Staff PPIC MRP', 'Ruang Kenari'),
(65, 'Laptop ', 'AST-BP00087', ' Laptop Lenovo', ' Ideapad 330', ' Komputer', ' Ani Staff HCD ', 'Ruang Agathis '),
(66, 'Printer ', 'AST-BP00088', ' Printer Zebra', ' GK888t ', 'Printer', ' Ullik KABAG System ', 'Ruang Cendana'),
(67, 'Repeater ', 'AST-BP00089 ', 'Repeater TP-Link ', 'TL-WA850RE ', 'Network Tool ', 'Area Produksi ', 'Area Produksi'),
(68, ' UPS ', 'AST-BP00090 ', 'UPS Prolink ', 'PRO700SFC ', 'UPS ', 'Ruang Server ', 'Ruang Server'),
(69, 'CPU', ' AST-BP00091', ' CPU HP', ' Elite 8200 ', 'Komputer', ' Luqman Staff Mainten', 'Ruang Logistik '),
(70, 'OHP ', 'AST-BP00092 ', 'OHP Epson ', 'EB-WO5', ' Proyektor ', 'Ruang Meeting Intern ', 'Ruang Meeting Intern'),
(71, 'CPU ', 'AST-BP00093', ' CPU Rakit', ' Rakit', ' Komputer ', 'Hadianto SPV Mainte ', 'Ruang Maintenance'),
(72, ' Monitor', ' AST-BP00094 ', 'Monitor Dell', ' E1911C ', 'Monitor ', 'CPU (AST-BP00035) ', 'Ruang Kenari'),
(73, 'Printer', ' AST-BP00095 ', 'Printer Epson ', 'L1110', ' Printer ', 'CPU (AST-BP00080) ', 'Ruang Cendana '),
(74, 'CPU ', 'AST-BP00096 ', 'CPU Rakit ', 'Rakit ', 'Komputer', ' Eny Staff Admin Gud ', 'Ruang Kabag Pembah'),
(75, 'Laptop ', 'AST-BP00097 ', 'Laptop Lenovo', ' Ideapad 3 Athlon ', 'Komputer ', 'Pretty Staff Sales Reg', 'Ruang Cendana '),
(76, 'CPU ', 'AST-BP00098 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', 'Ardy Staff IT', ' Ruang Cendana'),
(77, 'Laptop ', 'AST-BP00099 ', 'Laptop HP Elitebook ', '820 G3 ', 'Komputer', ' Ullik KABAG System ', 'Ruang Cendana '),
(78, 'Monitor ', 'AST-BP00100 ', 'Monitor Acer ', 'EB192Q ', 'Monitor ', 'CPU (AST-BP00017)', ' Ruang Kabag Joinery'),
(79, 'Monitor ', 'AST-BP00101 ', 'Monitor BenQ ', 'G615HDPL ', 'Monitor ', 'CPU (AST-BP00108) ', 'Gudang Logyard '),
(80, 'CPU ', 'AST-BP00104', ' CPU Rakit ', 'Rakit', ' Komputer ', 'Edi Leksono KABAG ', 'Ruang Cendana'),
(81, 'Switch ', 'AST-BP00105 ', 'Switch HUB TP-Link S', 'TL-SG1008D ', 'Network Tool ', 'POS MAKO 2', ' POS MAKO 2'),
(82, ' Laptop ', 'AST-BP00106', ' Laptop ASUS ', 'X550DPX550DP', ' Komputer', ' Rifai pembahanan ', 'Ruang Kabag Pembah'),
(83, 'CPU ', 'AST-BP00107 ', 'Mini PC Intel NUC J40', 'NUC7JY', ' Komputer', '---', ' Ruang Agathis '),
(84, 'CPU ', 'AST-BP00108 ', 'CPU Rakit', ' Rakit ', 'Komputer ', 'Khoir admin gudang', ' Gudang Logyard'),
(85, 'Laptop ', 'AST-BP00109 ', 'Laptop Lenovo V14-IIL', 'V14 ', 'Komputer ', 'Lina Kristianti Manajer', 'Ruang Eboni '),
(86, 'CPU ', 'AST-BP00110', ' CPU Rakit ', 'Rakit', ' Komputer ', 'Agus Admin WIP ', 'Ruang Kabag Pembah'),
(87, 'Laptop ', 'AST-BP00111 ', 'Laptop Dell Latitude E', ' E6410', ' Komputer', '---', ' Ruang Cendana '),
(88, 'CPU ', 'AST-BP00112 ', 'CPU Rakit ', 'Rakit ', 'Komputer ', '---', 'Ruang Kabag Joinery'),
(89, 'Laptop ', 'AST-BP00113 ', 'Laptop HP Compaq C ', 'CQ40 ', 'Komputer', ' Angga Staff Jishuken ', 'Ruang PPIC Bawah '),
(90, 'Laptop ', 'AST-BP00114 ', 'Lenovo V14 G2', ' V14 G2 ', 'Komputer ', 'Caprice PR ', 'Ruang Cendana '),
(91, 'Monitor ', 'AST-BP00115 ', 'Monitor BenQ ', 'G615HDPL ', 'Monitor ', 'CPU (AST-BP00058) ', 'Gudang Logyard');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id_aset`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list`
--
ALTER TABLE `list`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
