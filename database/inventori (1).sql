-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 12:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `merk`, `tipe`, `warna`, `harga`, `stok`) VALUES
('AKIGS', 'Aki GS', 'GS', '', '', 180000, 12),
('AKIMOTOBAT', 'Aki Motobatt', 'Motobatt', '', '', 155000, 12),
('AMB10CMS', 'Anting Motor Belakang 10CM', '', '', 'Silver', 100000, 12),
('BCKPSTSNCS', 'Bancik Postep', 'Sonic', '-', 'Silver', 70000, 6),
('BD10080IRC', 'Ban Dalam 100/80', 'IRC', '', '', 45000, 24),
('BD7080IRC', 'Ban Dalam 70/80', 'IRC', '', '', 30000, 24),
('BD8080IRC', 'Ban Dalam 80/80', 'IRC', '', '', 40000, 24),
('BD9080IRC', 'Ban Dalam 90/80', 'IRC', '', '', 40000, 24),
('BJIGWJLB', 'Baut Jalu', 'Igawa', 'Jalu', 'Biru', 28000, 10),
('BJIGWJLM', 'Baut Jalu', 'Igawa', 'Jalu', 'Merah', 28000, 10),
('BJIGWJLS', 'Baut Jalu', 'Igawa', 'Jalu', 'Merah', 28000, 10),
('BL10080CRSBS', 'Ban Luar 100/80', 'Corsa', 'Biasa', '', 200000, 12),
('BL10080CRSTBL', 'Ban Luar 100/80', 'Corsa', 'Tubless', '', 320000, 12),
('BL10080IRCBS', 'Ban Luar 100/80', 'IRC', 'Biasa', '', 185000, 12),
('BL10080IRCTBL', 'Ban Luar 100/80', 'IRC', 'Tubless', '', 287000, 12),
('BL11080CRSTBL', 'Ban Luar 110/80', 'Corsa', 'Tubless', '', 340000, 12),
('BL11080IRCTBL', 'Ban Luar 110/80', 'IRC', 'Tubless', '', 300000, 12),
('BL12080CRSTBL', 'Ban Luar 120/80', 'Corsa', 'Tubless', '', 370000, 12),
('BL12080IRCTBL', 'Ban Luar 120/80', 'IRC', 'Tubless', '', 330000, 12),
('BL7080CRSBS', 'Ban Luar 70/80', 'Corsa', 'Biasa', '', 110000, 12),
('BL7080CRSTBL', 'Ban Luar 70/80', 'Corsa', 'Tubless', '', 166000, 12),
('BL7080IRCBS', 'Ban Luar 70/80', 'IRC', 'Biasa', '', 90000, 12),
('BL7080IRCTBL', 'Ban Luar 70/80', 'IRC', 'Tubless', '', 140000, 12),
('BL8080CRSBS', 'Ban Luar 80/80', 'Corsa', 'Biasa', '', 140000, 12),
('BL8080CRSTBL', 'Ban Luar 80/80', 'Corsa', 'Tubless', '', 212000, 12),
('BL8080IRCBS', 'Ban Luar 80/80', 'IRC', 'Biasa', '', 120000, 12),
('BL8080IRCTBL', 'Ban Luar 80/80', 'IRC', 'Tubless', '', 194000, 12),
('BL9080CRSBS', 'Ban Luar 90/80', 'Corsa', 'Biasa', '', 171000, 12),
('BL9080CRSTBL', 'Ban Luar 90/80', 'Corsa', 'Tubless', '', 265000, 12),
('BL9080IRCBS', 'Ban Luar 90/80', 'IRC', 'Biasa', '', 155000, 12),
('BL9080IRCTBL', 'Ban Luar 90/80', 'IRC', 'Tubless', '', 240000, 12),
('BPCVSCNCB', 'Baut Plat', 'CVS', 'CNC', 'Biru', 2000, 80),
('BPCVSCNCK', 'Baut Plat', 'CVS', 'CNC', 'Kuning', 2000, 80),
('BPCVSCNCM', 'BAUT PLAT CVS MERAH', 'CVS', 'CNC', 'Merah', 2000, 80),
('BPCVSCNCS', 'Baut Plat', 'CVS', 'CNC', 'Silver', 2000, 80),
('BREAKEDH', 'Breaked (Dudukan Box)', '-', '-', 'Hitam', 15000, 2),
('BREAKEDSB2000H', 'Breaked SB', '-', 'SB2000', 'Hitam', 250000, 2),
('BUSIRCGDTN', 'Busi Racing', 'Daytona', '', '', 15000, 48),
('CBUSIRCGSFH', 'Cup Busi Racing', 'Splitfire', '', 'Hitam', 40000, 24),
('CORCGM', 'Coil Racing', 'Kawahara', '', 'Merah', 285000, 5),
('CRGKNALPL', 'Corong Knalpot', 'Thaita', 'Thailook', 'Pelangi', 65000, 6),
('CVRKNALPL', 'Cover Knalpot', '', 'Thailook', 'Pelangi', 90000, 6),
('FLASHCR7', 'Flasher Hazard', 'CR7', '', '', 35000, 30),
('GGLRCKWKPEL', 'Google RaceCraft', 'RaceCraft', 'KW Super', 'Kuning Pelangi', 350000, 4),
('GGLVSLH', 'Google', 'VSL', '', 'Hitam', 85000, 6),
('GGLVSLK', 'Google', 'VSL', '', 'Kuning', 85000, 6),
('GGLVSLM', 'Google', 'VSL', '', 'Merah', 85000, 6),
('GS38SSSK', 'Gear Set 38', 'SSS', '', 'Kuning', 300000, 4),
('GS38TDRS', 'Gear Set 38', 'TDR', '', 'Silver', 380000, 4),
('GS39SSSK', 'Gear Set 39', 'SSS', '', 'Kuning', 310000, 4),
('GS39TDRS', 'Gear Set 39', 'TDR', '', 'Silver', 390000, 4),
('GS40SSSK', 'Gear Set 40', 'SSS', '', 'Kuning', 320000, 4),
('GS40TDRS', 'Gear Set 40', 'TDR', '', 'Silver', 400000, 4),
('GS41SSSK', 'Gear Set 41', 'SSS', '', 'Kuning', 330000, 4),
('GS41TDRS', 'Gear Set 41', 'TDR', '', 'Silver', 410000, 4),
('GSWWCHROM', 'Gearset', 'WillWood', '', 'Chrome', 135000, 8),
('HANDGR549B', 'Hand Grip', 'Kitaco', '549', 'Biru', 25000, 12),
('HANDGR549M', 'Hand Grip', 'Kitaco', '549', 'Merah', 25000, 12),
('HANDGR549OR', 'Hand Grip', 'Kitaco', '549', 'Orange', 25000, 12),
('HDLREMTMNK', 'Handle Rem Setelan', 'Termignoni', '', 'Kuning', 35000, 24),
('HGCNCRZMH', 'HAND GRIP CNC RIZOMA HITAM', 'Rizoma', '-', 'Hitam', 50000, 6),
('HGCNCRZMM', 'Hand Grip CNC', 'Rizoma', '-', 'Merah', 50000, 6),
('HGCNCRZMP', 'Hand Grip CNC', 'Rizoma', '-', 'Putih', 50000, 6),
('HJMMPV100NS', 'Hidrolik Jok Motor', 'MPV', '100N', 'Silver', 13000, 12),
('KAMKOPLRCG', 'Kampas Kopling Racing', 'Daytona', '', '', 135000, 12),
('KARBUPE28', 'Karburator PE 28', 'Takegawa', 'CH 29', '', 275000, 4),
('KARBUPWKAH', 'Karburator PWK', 'Abou Hawa', '', '', 275000, 3),
('KARBUPWKKH', 'Karburator PWK Keihin', 'Keihin', 'Sudco', '', 550000, 2),
('KLKTR8TCH', 'Klakson Terompet 8 tombol', 'Control Horn set', '', '', 350000, 6),
('KLPRCGCHAB', 'Knalpot Racing ', 'CHA', '', 'Biru', 130000, 2),
('KLPRCGCHAH', 'Knalpot Racing', 'CHA', '', 'Hitam', 130000, 2),
('KLPRCGCHAM', 'Knalpot Racing ', 'CHA', '', 'Merah', 130000, 2),
('KLPRCGNB1H', 'Knalpot Racing', 'Nob 1', '-', 'Hitam', 450000, 3),
('KLPRCGNB1S', 'Knalpot Racing', 'Nob 1', '-', 'Silver', 450000, 3),
('KLPRCGPOVICH', 'Knalpot Racing', 'Akrapovic', '-', 'Hitam', 400000, 2),
('KRTPSTPB', 'Karet Postep', '-', '-', 'Biru', 15000, 6),
('KRTPSTPH', 'Karet Postep', '-', '-', 'Hitam', 15000, 6),
('KRTPSTPM', 'Karet Postep', '-', '-', 'Merah', 15000, 6),
('KWTREMUNIVMK', 'Kawat Rem Universal', '', '', 'Merah Kuning', 45000, 24),
('LED2SRTDH6K', 'Lampu LED 2 Sisi', 'RTD', 'H6', 'Kuning', 55000, 12),
('LED2SRTDH6P', 'Lampu LED 2 Sisi', 'RTD', 'H6', 'Putih', 55000, 12),
('LED3SMT3ACK', 'Lampu LED 3 Sisi', 'Motoled', '3AC', 'Kuning', 130000, 5),
('LED3SMT3ACP', 'Lampu LED 3 Sisi', 'Motoled', '3AC', 'Putih', 130000, 5),
('LED6SRTDMEK', 'Lampu LED 6 Sisi', 'RTD', 'M02E', 'Kuning', 120000, 5),
('LED6SRTDMEP', 'Lampu LED 6 Sisi', 'RTD', 'M02E', 'Putih', 120000, 5),
('LLEDREMCR7B', 'Lampu LED Rem', 'CR7', '-', 'Biru', 15000, 20),
('LLEDREMCR7M', 'Lampu LED Rem', 'CR7', '-', 'Merah', 15000, 20),
('LLEDREMCR7P', 'Lampu LED Rem', 'CR7', '-', 'Putih', 15000, 20),
('LLEDREMSTRB20B', 'Lampu LED Rem Strobo T20', 'Spectrum', '-', 'Biru', 55000, 12),
('LLEDREMSTRB20M', 'Lampu LED Rem Strobo T20', 'Spectrum', '-', 'Merah', 55000, 12),
('LLEDREMSTRB20P', 'Lampu LED Rem Strobo T20', 'Spectrum', '-', 'Putih', 55000, 12),
('LLEDS2ST10PLASB', 'Lampu LED Senja 2 Sisi T10', 'Plasma', 'HPL', 'Biru', 8000, 20),
('LLEDS2ST10PLASK', 'Lampu LED Senja 2 Sisi T10', 'Plasma', 'HPL', 'Kuning', 8000, 20),
('LLEDS2ST10PLASM', 'Lampu LED Senja 2 Sisi T10', 'Plasma', 'HPL', 'Merah', 8000, 20),
('LLEDS2ST10PLASP', 'Lampu LED Senja 2 Sisi T10', 'Plasma', 'HPL', 'Putih', 8000, 20),
('LLEDS6ST10SPCB', 'Lampu LED Senja 6 Sisi T10', 'Spectrum', '-', 'Biru', 14000, 12),
('LLEDS6ST10SPCK', 'Lampu LED Senja 6 Sisi T1', 'Spectrum', '-', 'Kuning', 14000, 12),
('LLEDS6ST10SPCM', 'Lampu LED Senja 6 Sisi T10', 'Spectrum', '-', 'Merah', 14000, 12),
('LLEDS6ST10SPCP', 'Lampu LED Senja 6 Sisi T10', 'Spectrum', '-', 'Putih', 14000, 12),
('LPHIDCR7BP', 'Lampu Proji HID', 'CR7', '-', 'Biru Putih', 350000, 3),
('LPHIDCR7MB', 'Lampu Proji HID', 'CR7', '-', 'Merah Biru', 350000, 3),
('LPHIDCR7PM', 'Lampu Proji HID', 'CR7', '-', 'Putih Merah', 350000, 3),
('LPLEDCR7BP', 'Lampu Proji LED', 'CR7', '-', 'Biru Putih', 170000, 5),
('LPLEDCR7MB', 'Lampu Proji LED', 'CR7', '-', 'Merah Biru', 170000, 5),
('LPLEDCR7PM', 'Lampu Proji LED', 'CR7', '-', 'Putih Merah', 170000, 5),
('LSENUNIVKB', 'Lampu Sen Universal Led 2 sisi', 'MBK', '', 'Kuning Biru', 45000, 30),
('LTLED3ME03K', 'Lampu Tembak LED 3 Mata', 'RTD', 'E03', 'Kuning', 45000, 12),
('LTLED3ME03P', 'Lampu Tembak LED 3 Mata', 'RTD', 'E03', 'Putih', 45000, 12),
('LTLED6MCRE25K', 'Lampu Tembak LED 6 Mata', 'RTD', 'CREE XB D 2525', 'Kuning', 90000, 6),
('LTLED6MCRE25P', 'Lampu Tembak LED 6 Mata', 'RTD', 'CREE XB D 2525', 'Putih', 90000, 6),
('LTLED6MCRE618K', 'Lampu Tembak LED 6 Mata', 'RTD', 'CREE 618', 'Kuning', 50000, 6),
('LTLED6MCRE618P', 'Lampu Tembak LED 6 Mata', 'RTD', 'CREE 618', 'Putih', 50000, 6),
('LTTFCR7U7B', 'Lampu Tembak Transformer', 'CR7', 'U7', 'Biru', 80000, 5),
('LTTFCR7U7H', 'Lampu Tembak Transformer', 'CR7', 'U7', 'Hijau', 80000, 5),
('LTTFCR7U7K', 'Lampu Tembak Transformer', 'CR7', 'U7', 'Kuning', 80000, 5),
('LTTFCR7U7M', 'Lampu Tembak Transformer', 'CR7', 'U7', 'Merah', 80000, 5),
('LTTFCR7U7P', 'Lampu Tembak Transformer', 'CR7', 'U7', 'Putih', 80000, 5),
('MDIGDCVMH', 'Mini Digital DC (Volt Meter)', '-', '-', 'Hitam', 20000, 24),
('MONOSHTDBSKH', 'Monoshock Tabung', 'DBS', '', 'Kuning Hitam', 185000, 6),
('MONOSYSSH', 'Monoshock', 'YSS', '', 'Hitam', 600000, 4),
('MONOSYSSM', 'Monoshock', 'YSS', '', 'Merah', 600000, 4),
('MREMBLKK', 'Master Rem Belakang', 'Brembo', '', 'Kuning', 250000, 6),
('OLI2TEVALUBE', 'Oli 2 T', 'Evalube', '', '', 23000, 24),
('OLI4TAHM', 'Oli 4 T', 'AHM', '', '', 37500, 24),
('OLI4TCASTROL', 'Oli 4 T', 'Castrol', '', '', 41000, 24),
('OLI4TDELTALUBE', 'Oli 4 T', 'Deltalube', '', '', 50000, 24),
('OLI4TENDURORCG', 'Oli 4 T', 'Enduro Racing', '', '', 40000, 24),
('OLI4TESTER', 'Oli 4 T', 'Ester', '', '', 85000, 24),
('OLI4TFEDERAL', 'Oli 4 T', 'Federal', '', '', 39000, 24),
('OLI4TMESRAN', 'Oli 4 T', 'Mesran', '', '', 35000, 24),
('OLI4TREPSOL', 'Oli 4 T', 'Repsol Oil', '', '', 25000, 24),
('OLI4TTOP1', 'Oli 4 T', 'Top 1', '', '', 38000, 24),
('OLI4TULTRATEC', 'Oli 4 T', 'UltraTec', '', '', 45000, 24),
('OLI4TYAMALUBE', 'Oli 4 T', 'Yamalube', '', '', 29000, 24),
('OLIMAHM', 'Oli Matic', 'AHM', '', '', 37000, 24),
('OLIMCASTROL', 'Oli Matic', 'Castrol', '', '', 40000, 24),
('OLIMDELTALUBE', 'Oli Matic', 'Deltalube', '', '', 50000, 24),
('OLIMENDURORCG', 'Oli Matic', 'Enduro Racing', '', '', 41000, 24),
('OLIMFEDERAL', 'Oli Matic', 'Federal', '', '', 33000, 24),
('OLIMTOP1', 'Oli Matic', 'Top 1', '', '', 38000, 24),
('OLIMYAMALUBE', 'Oli Matic', 'Yamalube', '', '', 27000, 24),
('PERKLPRCGUNIV', 'Per Klep Racing Universal', '', '', '', 120000, 20),
('PREMCKUNIVS', 'Piringan Rem Cakram Universal', '', '', 'Silver', 60000, 10),
('PREMCKUNIVTDRK', 'Piringan Rem Cakram Universal', 'TDR', '', 'Kuning', 100000, 6),
('PREMCKUNIVTDRS', 'Piringan Rem Cakram Universal', 'TDR', '', 'Silver', 100000, 6),
('PRGQSERISK', 'Proguard', 'Qseries', '', 'Kuning', 175000, 12),
('PRGQSERISM', 'Proguard', 'Qseries', '', 'Merah', 175000, 12),
('PRKBROK', 'Porok/Arm', 'B Pro', '', 'Kuning', 900000, 4),
('PSB5CMPOSHS', 'PENINGGI SHOCK BELAKANG 5CM POSH SILVER', 'Posh', '', 'Silver', 30000, 12),
('PSB8CMPOSHS', 'Peninggi Shock Belakang 8CM', 'Posh', '', 'Silver', 50000, 12),
('PSD5CMPOSHS', 'Peninggi Shock Depan 5CM', 'Posh', '', 'Silver', 30000, 12),
('PSD8CMPOSHS', 'Peninggi Shock Depan 8CM', 'Posh', '', 'Silver', 50000, 12),
('PSTBLUNIVH', 'Postep Belakang Universal', '-', '-', 'Hitam', 35000, 6),
('PSTBLUNIVK', 'Postep Belakang Universal', '-', '-', 'Kuning', 35000, 6),
('PSTBLUNIVM', 'Postep Belakang Universal', '-', '-', 'Merah', 35000, 6),
('REFLECR25H', 'Reflector', 'Assy', 'R25 Mini', 'Hitam', 250000, 2),
('REFLECR25M', 'Reflector', 'Assy', 'R25 Mini', 'Merah', 250000, 2),
('REFLECR25P', 'Reflector', 'Assy', 'R25 Mini', 'Putih', 250000, 2),
('RJHITAM', 'Ruji', '', '', 'Hitam', 30000, 30),
('RJPELANGI', 'Ruji Pelangi', '', '', 'Pelangi', 50000, 24),
('RJSILVER', 'Ruji', '', '', 'Silver', 30000, 30),
('RLAYGEMAWW', 'Relay Gema', 'WillWood', '', '', 20000, 48),
('RMPOSHTPB', 'Ring Monel', 'Posh', 'Terompet', 'Biru', 1000, 40),
('RMPOSHTPK', 'Ring Monel', 'Posh', 'Terompet', 'Kuning', 1000, 40),
('RMPOSHTPM', 'Ring Monel', 'Posh', 'Terompet', 'Merah', 1000, 40),
('RMPOSHTPS', 'Ring Monel', 'Posh', 'Terompet', 'Silver', 1000, 40),
('SAKLARBSH', 'Saklar Biasa', '-', '-', 'Hitam', 5000, 30),
('SBM30DBSH', 'Shock Breaker Matic 30', 'DBS', '', 'Hitam', 150000, 5),
('SBM30DBSM', 'Shock Breaker Matic 30', 'DBS', '', 'Merah', 150000, 5),
('SBM30KYBH', 'Shock Breaker Matic 30', 'Kayaba', '', 'Hitam', 380000, 5),
('SBM30KYBM', 'Shock Breaker Matic 30', 'Kayaba', '', 'Merah', 380000, 5),
('SBM30YSSH', 'Shock Breaker Matic 30', 'YSS', '', 'Hitam', 320000, 6),
('SBM30YSSM', 'Shock Breaker Matic 30', 'YSS', '', 'Merah', 320000, 6),
('SBUNIV36DBSH', 'Shock Breaker Universal 32, 34, 36', 'DBS', '', 'Hitam', 170000, 6),
('SBUNIV36DBSM', 'Shock Breaker Universal 32, 34, 36', 'DBS', '', 'Merah', 170000, 6),
('SBUNIV36KYBH', 'Shock Breaker Universal 32, 34, 36', 'Kayaba', '', 'Hitam', 400000, 4),
('SBUNIV36KYBM', 'Shock Breaker Universal 32, 34, 36', 'Kayaba', '', 'Merah', 400000, 4),
('SBUNIV36YSSH', 'Shock Breaker Universal 32, 34, 36', 'YSS', '', 'Hitam', 370000, 6),
('SBUNIV36YSSM', 'SHOCK BREAKER UNIVERSAL 36 YSS MERAH', 'YSS', '', 'Merah', 370, 6),
('SDKAPK25H', 'Side Box', 'Kappa', 'K25', 'Hitam', 1350000, 2),
('SDUNIVUDH', 'Shock Depan Universal', 'Upside Down', '', 'Hitam', 1150000, 2),
('SDUNIVUDK', 'Shock Depan Universal', 'Upside Down', '', 'Kuning', 1150000, 2),
('SHSK05H', 'Saklar Hazard', '-', 'SK 05', 'Hitam', 7000, 24),
('SLEBDPNKLXH', 'Slebor Depan KLX', 'Aprilia', '', 'Hitam', 195000, 4),
('SLEBDPNKLXP', 'Slebor Depan KLX', 'Aprilia', '', 'Putih', 195000, 4),
('SLGDISBRAKE', 'Selang Diskbrake', '', '', 'Pelangi', 135000, 20),
('SLSMPVSK01H', 'Saklar Lampu Stang', 'MPV', 'SK 01', 'Hitam', 10000, 24),
('SPBLTRZMC', 'Spion Bulat', 'Rizoma', '-', 'Coklat', 20000, 12),
('SPBLTRZMK', 'Spion Bulat', 'Rizoma', '-', 'Kuning', 20000, 12),
('SPBLTRZMP', 'Spion Bulat', 'Rizoma', '-', 'Putih', 20000, 12),
('SPEDOBLCR7H', 'Speedometer Bulat', 'CR7', '', 'Hitam', 70000, 5),
('SPEDOBLCR7M', 'Speedometer Bulat', 'CR7', '', 'Merah', 70000, 5),
('SPEDOBLCR7S', 'Speedometer Bulat', 'CR7', '', 'Silver', 70000, 5),
('SPIONUNIV', 'Spion Universal', '', '', '', 40000, 24),
('SPTMKRZMB', 'Spion Tomok', 'Rizoma', '-', 'Biru', 25000, 12),
('SPTMKRZMH', 'SPION TOMOK RIZOMA HITAM', 'Rizoma', '-', 'Hitam', 25000, 12),
('SPTMKRZMHJ', 'Spion Tomok', 'Rizoma', '-', 'Hijau', 25000, 12),
('SPTMKRZMK', 'Spion Tomok', 'Rizoma', '-', 'Kuning', 25000, 12),
('SPTMKRZMP', 'Spion Tomok', 'Rizoma', '-', 'Putih', 25000, 12),
('STBRANTAIDRIVH', 'Stabilizer Rantai', 'Drive', '', 'Hitam', 100000, 7),
('STBRANTAIDRIVM', 'Stabilizer Rantai', 'Drive', '', 'Merah', 100000, 7),
('STBRANTAIDRIVS', 'Stabilizer Rantai', 'Drive', '', 'Silver', 100000, 7),
('STBRANTAIWW', 'Stabilizer Rantai WillWood', '', '', '', 25000, 12),
('STDVARPOSHS', 'Standart Variasi', 'Posh', '', 'Silver', 42000, 6),
('STGFBPROH', 'Setang Fat Bar', 'Protapper', '', 'Hitam', 250000, 4),
('STGFBPROK', 'Setang Fat Bar', 'Protapper', '', 'Kuning', 250000, 4),
('STGFBPROM', 'Setang Fat Bar', 'Protapper', '', 'Merah', 250000, 4),
('STGSETIRACH', 'Setang Setir', 'Acerbis', '', 'Hitam', 300000, 5),
('STGSETIRACM', 'Setang Setir', 'Acerbis', '', 'Merah', 300000, 5),
('STGSETIRACS', 'Setang Setir', 'Acerbis', '', 'Silver', 300000, 5),
('SYPVXNB', 'Sayap Vixion', '', '', 'Biru', 350000, 3),
('SYPVXNM', 'Sayap Vixion', '', '', 'Merah', 350000, 3),
('SYPVXNP', 'Sayap Vixion', '', '', 'Putih', 350000, 3),
('TBKAPK39H', 'Top Box', 'Kappa', 'K39', 'Hitam', 600000, 2),
('TRMLBCKS', 'Tromol Becak', '', '', 'Silver', 600000, 2),
('TRMLCHROME', 'Tromol', '', '', 'Chrome', 260000, 6),
('TRMLNINJAS', 'Tromol Ninja', '', '', 'Silver', 350000, 4),
('TTPGRDVXNK', 'Tutup Gear Depan Variasi', 'Fastbikes', 'Vixion', 'Kuning', 110000, 2),
('TTPOLIVARIB', 'Tutup Oli Variasi', '-', '-', 'Biru', 11000, 10),
('TTPOLIVARIH', 'Tutup Oli Variasi', '-', '-', 'Hitam', 11000, 10),
('TTPOLIVARIK', 'Tutup Oli Variasi', '-', '-', 'Kuning', 11000, 10),
('TTPOLIVARIM', 'Tutup Oli Variasi', '-', '-', 'Merah', 11000, 10),
('TTPOLIVARIP', 'Tutup Oli Variasi', '-', '-', 'Putih', 11000, 10),
('TTPVARIRBK', 'Tutup Variasi As Roda Belakang', '', '', 'Kuning', 60000, 8),
('TTPVARIRBM', 'Tutup Variasi As Roda Belakang', '', 'Thailook', 'Merah', 60000, 8),
('VELG14RSSLH', 'Velg 14', 'Rossi', 'Setengah Lingkar', 'Hitam', 130000, 10),
('VELG14RSSLS', 'Velg 14', 'Rossi', 'Setengah Lingkar', 'Silver', 130000, 10),
('VELG14RSTLH', 'Velg 14', 'Rossi', 'Tapak Lebar', 'Hitam', 140000, 10),
('VELG14RSTLS', 'Velg 14', 'Rossi', 'Tapak Lebar', 'Silver', 140000, 10),
('VELG17RSSLH', 'Velg 17', 'Rossi', 'Setengah Lingkar', 'Silver', 140000, 10),
('VELG17RSSLS', 'Velg 17', 'Rossi', 'Setengah Lingkar', 'Silver', 160000, 10),
('VELG17RSTLH', 'Velg 17', 'Rossi', 'Tapak Lebar', 'Hitam', 170000, 10),
('VELG17RSTLS', 'Velg 17', 'Rossi', 'Tapak Lebar', 'Silver', 170000, 10),
('VELG17WWSLH', 'Velg 17', 'WillWood', 'Setengah Lingkar', 'Hitam', 100000, 12),
('VELG17WWSLK', 'Velg 17', 'WillWood', 'Setengah Lingkar', 'Kuning', 100000, 12),
('VELG17WWSLM', 'Velg 17', 'WillWood', 'Setengah Lingkar', 'Merah', 100000, 12),
('VELGRC14TLH', 'Velg Racing 14', '', 'Tapak Lebar', 'Hitam', 400000, 3),
('VELGRC17TLH', 'Velg Racing 17', '', 'Tapak Lebar', 'Hitam', 500000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE IF NOT EXISTS `prediksi` (
  `no` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `prediksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `kode_rule` varchar(10) NOT NULL,
  `jika` varchar(50) NOT NULL,
  `maka` varchar(50) NOT NULL,
  `confidence` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`kode_rule`, `jika`, `maka`, `confidence`) VALUES
('1', 'PENINGGI SHOCK BELAKANG 5CM POSH SILVER', 'SHOCK BREAKER UNIVERSAL 36 YSS MERAH', 1),
('2', 'SHOCK BREAKER UNIVERSAL 36 YSS MERAH', 'PENINGGI SHOCK BELAKANG 5CM POSH SILVER', 1),
('3', 'HAND GRIP CNC RIZOMA HITAM', 'SPION TOMOK RIZOMA HITAM', 1),
('4', 'HAND GRIP CNC RIZOMA HITAM', 'BAUT PLAT CVS MERAH', 1),
('5', 'SPION TOMOK RIZOMA HITAM', 'HAND GRIP CNC RIZOMA HITAM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stok_keluar`
--

CREATE TABLE IF NOT EXISTS `stok_keluar` (
`Kode_Keluar` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kode_Barang` varchar(11) DEFAULT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Prediksi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_keluar`
--

INSERT INTO `stok_keluar` (`Kode_Keluar`, `Tanggal`, `Kode_Barang`, `Nama_Barang`, `Jumlah`, `Prediksi`) VALUES
(1, '2018-07-12', '	PSB5CMPOSH', 'PENINGGI SHOCK BELAKANG 5CM POSH SILVER', 2, ' SHOCK BREAKER UNIVERSAL 36 YSS MERAH'),
(4, '2018-07-21', 'HGCNCRZMH', 'HAND GRIP CNC RIZOMA HITAM', 1, 'SPION TOMOK RIZOMA HITAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
 ADD PRIMARY KEY (`kode_rule`);

--
-- Indexes for table `stok_keluar`
--
ALTER TABLE `stok_keluar`
 ADD PRIMARY KEY (`Kode_Keluar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stok_keluar`
--
ALTER TABLE `stok_keluar`
MODIFY `Kode_Keluar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
