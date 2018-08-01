-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 01:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sphdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `serialnumber` text NOT NULL,
  `username` text NOT NULL,
  `hostname` text NOT NULL,
  `manufacturer` text NOT NULL,
  `model` text NOT NULL,
  `cpumodel` text NOT NULL,
  `memory` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `serialnumber`, `username`, `hostname`, `manufacturer`, `model`, `cpumodel`, `memory`, `updated_at`, `created_at`) VALUES
(2, 'CNF1020L8V    ', 'SANDTONPLANT\\peter.hening', 'SPHWKS008    ', 'HP', 'ProBook 4320s', 'Intel(R) Core(TM) i3 CPU M 370', '3GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '3K2ZVQ1       ', 'SANDTONPLANT\\candice.porteous', 'SPHSPARE01   ', 'Dell Inc.', 'OptiPlex 790', 'Intel(R) Core(TM) i3-2100 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '16VP7R1       ', 'SANDTONPLANT\\maureen.ntsume', 'SPHSPARE03   ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2100 CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '150G8R1       ', 'SANDTONPLANT\\teresa.scharnick', 'CREDITORS06  ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2100 CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '16X5ZR1       ', 'SANDTONPLANT\\emeldan', 'SPHSPARE05   ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2100 CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '3JKKWQ1       ', 'SANDTONPLANT\\CharlesE', 'PAYROLL01    ', 'Dell Inc.', 'OptiPlex 790', 'Intel(R) Core(TM) i3-2100 CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '14J1ZR1       ', 'SANDTONPLANT\\SuzanneN', 'CREDITORS07  ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2100 CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '16SR7R1       ', 'SANDTONPLANT\\tessad', 'SPHSPARE04   ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2100 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '52PHVS1       ', 'SANDTONPLANT\\aliseod', 'Aliseo-PC', 'Dell Inc.', 'Vostro 260', 'Intel(R) Core(TM) i3-2120 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '3RKR7X1       ', 'SANDTONPLANT\\Tshepo.Macheke', 'Dispatch02   ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i3-3220 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '6QKR7X1', 'SANDTONPLANT\\Themba.Dlhomo', 'SPHWKS001', 'Dell', 'Optiplex 3010', 'Intel(R) Core(TM) i3-3220 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'G7FQR12       ', 'SANDTONPLANT\\bongani.kani', 'DESKTOP-RHR3SDK', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i3-4130 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'GSLMR12       ', 'SANDTONPLANT\\Seant', 'SeanTromp    ', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i3-4130 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '7S11WQ1       ', 'SANDTONPLANT\\jeanette.mankwani ', 'Creditors11  ', 'Dell Inc.', 'OptiPlex 790', 'Intel(R) Core(TM) i5-2400 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '9BH2WQ1       ', 'SANDTONPLANT\\KaraboT', 'Creditors10  ', 'Dell Inc.', 'OptiPlex 790', 'Intel(R) Core(TM) i5-2400 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'HR1ZVQ1       ', 'SANDTONPLANT\\davidw', 'SPHPARTS01   ', 'Dell Inc.', 'OptiPlex 790', 'Intel(R) Core(TM) i5-2400 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'HBZM7X1       ', 'SANDTONPLANT\\suzette.mcmaster', 'RBotha       ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '5MGMJZ1       ', 'SANDTONPLANT\\Ingrid.Schonfeldt', 'SEdwards     ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'JMGMJZ1       ', 'SANDTONPLANT\\KoosM', 'KoosMeyer    ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'D4WR7X1       ', 'SANDTONPLANT\\lawrence.kani', 'LawrenceKani  ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'FRGMJZ1       ', 'SANDTONPLANT\\Anita.Ronge', 'ARonge       ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'DQGQ9X1       ', 'SANDTONPLANT\\meggan.preuss', 'SPHYARD01    ', 'Dell Inc.', 'Vostro 270', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'H7P0YX1       ', 'SANDTONPLANT\\shaun.geel', 'SPHDESKTOP01  ', 'Dell', 'Vostro 270', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'HN72D5J       ', 'SANDTONPLANT\\johnnyg', 'Operations09  ', 'Dell Inc.', 'OptiPlex 7010', 'Intel(R) Core(TM) i5-3550 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '4XSZ502       ', 'SANDTONPLANT\\andre.vdwalt', 'Riaan-PC', 'Dell Inc.', 'Latitude 3540', 'Intel(R) Core(TM) i5-4210U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'CLL5CB2       ', 'SANDTONPLANT\\annahc  ', 'AnnahMkwena  ', 'Dell Inc.     ', 'Vostro 3900  ', 'Intel(R) Core(TM) i5-4460  CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'BZL1ZC2       ', 'SANDTONPLANT\\JULEYN', 'Debtors002   ', 'Dell Inc.', 'Vostro 3900', 'Intel(R) Core(TM) i5-4460  CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'C010ZC2       ', 'SANDTONPLANT\\elmau', 'SPHWKS010', 'Dell Inc.', 'Vostro 3900', 'Intel(R) Core(TM) i5-4460  CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'CKD1CB2       ', 'SANDTONPLANT\\Terrid', 'TerriDixon   ', 'Dell Inc.', 'Vostro 3900', 'Intel(R) Core(TM) i5-4460  CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '38JL532       ', 'SANDTONPLANT\\bianca.steenkamp', 'VeronicaLast-PC', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'B5L8432       ', 'SANDTONPLANT\\Lerato', 'LeratoRatsiu-PC', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'GWK8432       ', 'SANDTONPLANT\\carl.tonkie', 'James-PC', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '3ZHL532       ', 'SANDTONPLANT\\moses.chabalala', 'mosesc       ', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'J0L8432       ', 'SANDTONPLANT\\Intern6', 'SuzanneM-PC', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'JYHL532       ', 'SANDTONPLANT\\linda.patrick', 'LindaP-PC', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '3VK8432       ', 'SANDTONPLANT\\Saskia.dutoit', 'CazandraN-PC', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'D8QWH72       ', 'SANDTONPLANT\\jackr', 'JackReabow   ', 'Dell Inc.', 'Vostro 3558', 'Intel(R) Core(TM) i5-5200U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'G3GJY52       ', 'SANDTONPLANT\\lionel.geer', 'SPHWKS020', 'Dell Inc.', 'Vostro 3558', 'Intel(R) Core(TM) i5-5200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '4T90VF2       ', 'SANDTONPLANT\\Jackie.Engelbrecht', 'JackieEngelbrec  ', 'Dell Inc.', 'Latitude E5570', 'Intel(R) Core(TM) i5-6200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '8D80BG2       ', 'SANDTONPLANT\\matilda.nel', 'DESKTOP-043CILG', 'Dell', 'Vostro 3559', 'Intel(R) Core(TM) i5-6200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'JDL0FC2       ', 'SANDTONPLANT\\Richard.Arnell', 'RichardArnell  ', 'Dell Inc.', 'Latitude E5570', 'Intel(R) Core(TM) i5-6300U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'CKSBXD2       ', 'SANDTONPLANT\\AlexioM', 'DESKTOP-GC0UM81', 'Dell Inc.', 'Vostro 3650', 'Intel(R) Core(TM) i5-6400 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '2GQ3ZG2       ', 'SANDTONPLANT\\Samantha.Arnell', 'Samantha-Arnell', 'Dell Inc.', 'Vostro 3650', 'Intel(R) Core(TM) i5-6400 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '27TZZG2       ', 'SANDTONPLANT\\Josephine.nyuswa', 'JosephineNyuswa  ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'FBYYYB2       ', 'SANDTONPLANT\\lee.hamman', 'LeeHamman    ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '6RXYYB2       ', 'SANDTONPLANT\\petenzia.zwarts', 'DESKTOP-5TV38F1', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '3CZYYB2       ', 'SANDTONPLANT\\collien.bronn', 'CollienBronn  ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '8VWYYB2       ', 'SANDTONPLANT\\janine.bester', 'DESKTOP-6Q1LA6Q', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'CSXYYB2       ', 'SANDTONPLANT\\joseph.tsaagane', 'DESKTOP-SNB3RTH', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '30YYYB2       ', 'SANDTONPLANT\\Ciska.Dixon', 'CiskaDixon   ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '48XYYB2       ', 'SANDTONPLANT\\Deon.Horn', 'DESKTOP-KDKUDNI', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '3XWYYB2       ', 'SANDTONPLANT\\zane.debeer', 'DESKTOP-CEI5HM1', 'Dell', 'Optiplex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'QT22DV70600363  ', 'SANDTONPLANT\\craig.mottram', 'DESKTOP-ETTAPUI', 'Lenovo', '80WQ   ', 'Intel(R) Core(TM) i5-7200U CPU', '12GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'F4C43F2       ', 'SANDTONPLANT\\chandre.vdmescht', 'DESKTOP-U9MPFDI', 'Dell', 'Vostro 15-3568', 'Intel(R) Core(TM) i5-7200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '17C43F2       ', 'SANDTONPLANT\\Kyle.Stirk ', 'KStirk       ', 'Dell', 'Vostro 15-3568', 'Intel(R) Core(TM) i5-7200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'DLBP7F2       ', 'SANDTONPLANT\\vernon.forster', 'SPHWKS011    ', 'Dell', 'Vostro 15-3568', 'Intel(R) Core(TM) i5-7200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '2YSV0X1       ', 'SPHIFM01\\Shane.MacRae  ', 'SPHIFM01     ', 'Dell ', 'Vostro 3560', 'Intel(R) Core(TM) i7-3632QM CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '6TSHZY1       ', 'SANDTONPLANT\\Stephen.Mazibuko', 'Kenneth-Moeti', 'Dell Inc.', 'Vostro 470', 'Intel(R) Core(TM) i7-3770 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '4ZKQRZ1       ', 'SANDTONPLANT\\Kenneth', 'KENNETH-LPT', 'Dell Inc.', 'Inspiron 5537', 'Intel(R) Core(TM) i7-4500U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'CZC6099R7Z    ', 'SANDTONPLANT\\tarynp', 'TarynPatten  ', 'HP', 'EliteDesk 800 G1', 'Intel(R) Core(TM) i7-4790 CPU', '12GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '565GQ52       ', 'SANDTONPLANT\\Peter.Fourie', 'PeterFourie  ', 'Dell Inc.', 'OptiPlex 9020', 'Intel(R) Core(TM) i7-4790 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'J40QL32       ', 'SANDTONPLANT\\eduard.botha', 'EdwardBotha-PC', 'Dell Inc.', 'Latitude E6540', 'Intel(R) Core(TM) i7-4810MQ CPU', '16GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'F8B3D32       ', 'SANDTONPLANT\\Petrus.Roets', 'PetrusRoets  ', 'Dell Inc.', 'Inspiron 17 7746', 'Intel(R) Core(TM) i7-5500U CPU', '16GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '5CD6035Q9F    ', 'SANDTONPLANT\\jeandre.greyling', 'JeandreGreyling  ', 'HP', 'ProBook 470 G3', 'Intel(R) Core(TM) i7-6500U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'HV4BRC2       ', 'SANDTONPLANT\\Fritz.Francis', 'FRITZE5570   ', 'Dell Inc.', 'Latitude E5570', 'Intel(R) Core(TM) i7-6820HQ CPU', '16GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '911CPV1       ', 'SANDTONPLANT\\emma.molokomme', 'JMatjici     ', 'Dell Inc.', 'Vostro 270', 'Intel(R) Pentium(R) CPU G2020', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'C10CPV1       ', 'SANDTONPLANT\\farai.muperi', 'FMuperi      ', 'Dell Inc.', 'Vostro 270', 'Intel(R) Pentium(R) CPU G2020', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '920CPV1       ', 'SANDTONPLANT\\Joseph.matjiu', 'LJordaan     ', 'Dell', 'Vostro 270', 'Intel(R) Pentium(R) CPU G2020', '2GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '42HKVS1       ', 'SANDTONPLANT\\lodym', 'Creditors12  ', 'Dell Inc.', 'Vostro 260', 'Intel(R) Pentium(R) CPU G630', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'G8ZDVS1       ', 'SANDTONPLANT\\Karin.Blyth', 'karinb       ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Pentium(R) CPU G630', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'HR2NVS1', 'SANDTONPLANT\\alerts', 'alert', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Pentium(R) CPU G630', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'ES09159463    ', 'SANDTONPLANT\\joan.williams', 'SPKWKS05     ', 'Lenovo ', 'H420', 'Intel(R) Pentium(R) CPU G630', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '5SFS4P1       ', 'SANDTONPLANT\\promise.mokoena', 'DEBTORS02    ', 'Dell Inc.', 'OptiPlex 380', 'Pentium(R) Dual-Core  CPU E5700', '2GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '9N72D5J       ', 'SANDTONPLANT\\maggiek', 'sphbkpr02    ', 'Dell Inc.', 'OptiPlex 7010', 'Intel(R) Core(TM) i5-3550 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'C0GHBG2       ', 'SANDTONPLANT\\jp.joubert ', 'SPHWKS017', 'Dell Inc.', 'Vostro 3559', 'Intel(R) Core(TM) i5-6200U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '4N1NJK2       ', 'SANDTONPLANT\\Aaron ', 'ANkoana-PC', 'Dell Inc.', 'Vostro 3668', 'Intel(R) Core(TM) i5-7400 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '5FZM7X1       ', 'SANDTONPLANT\\ansofie.forrester', 'SPHWKS019    ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i5-3470 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '4N3SJK2       ', 'SANDTONPLANT\\MICHELL.MASONDO', 'MMasondo-PC', 'Dell Inc.', 'Vostro 3668', 'Intel(R) Core(TM) i5-7400 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '4MYKJK2       ', 'SANDTONPLANT\\Armand.Pienaar ', 'APienaar-PC', 'Dell Inc.', 'Vostro 3668', 'Intel(R) Core(TM) i5-7400 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'D6XQJK2       ', 'SANDTONPLANT\\lodym', 'SPHWKS005    ', 'Dell Inc.', 'Vostro 3668', 'Intel(R) Core(TM) i5-7400 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '4LKV7X1', 'SANDTONPLANT\\david.leppen', 'SPHWKS018    ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i3-3220 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '6C269818R', 'Paul Johnson @ Batteries', 'SPHSPARE002', 'Toshiba', 'Satellite Pro C850', 'Intel(R) Core(TM) i3-3110M CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '171K8R1       ', 'SANDTONPLANT\\marco.vdmerwe', 'SPHWKS021    ', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2100 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '20DXY4J       ', 'SANDTONPLANT\\mandla.zwane', 'DARRYL       ', 'Dell Inc.', 'OptiPlex 980', 'Intel(R) Core(TM) i5 CPU 650', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '1PXGVS1       ', 'SANDTONPLANT\\sandra.pelati', 'SPHWKS023', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Pentium(R) CPU G630', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'G3GJY52       ', 'SANDTONPLANT\\wynand', 'SPHWKS020    ', 'Dell Inc.', 'Vostro 3558', 'Intel(R) Core(TM) i5-5200U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'H0JL532       ', 'SANDTONPLANT\\caroline.moyana', 'SPHWKS003    ', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '27CXZG2       ', 'SANDTONPLANT\\felicia.khethiwa', 'SPHWKS024    ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i5-6500 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'ES09159491', 'SANDTONPLANT\\pretty.masombuka', 'SPHWKS009', 'Lenovo', 'Lenovo H420', 'Intel(R) Pentium(R) CPU G630', '6GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '9TGN982       ', 'SANDTONPLANT\\amanda.combrinck', 'SPHWKS029    ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i3-6100 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '66XJ6X1', 'SANDTONPLANT\\matshepo.diphofa', 'SPHWKS030', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i3-3220 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '1H9V502       ', 'SANDTONPLANT\\hugo.conradie', 'SPHWKS031', 'Dell Inc.', 'Latitude 3540 ', 'Intel(R) Core(TM) i5-4210U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'G8XHH72       ', 'SANDTONPLANT\\petrus.roets', 'SPHWKS028    ', 'Dell Inc.', 'Latitude E7250', 'Intel(R) Core(TM) i7-5600U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '5GW9KF2       ', 'SANDTONPLANT\\attie.vdberg', 'SPHWKS025    ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i3-6100 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '4Q4DDD2       ', 'SANDTONPLANT\\werner.barnard', 'SPHWKS033', 'Dell Inc.', 'OptiPlex 3240 AIO', 'Intel(R) Core(TM) i5-6500 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '4QTS4P1       ', 'SANDTONPLANT\\nonhlanhla.zungu', 'SPHWKS036    ', 'Dell Inc.', 'OptiPlex 380', 'Pentium(R) Dual-Core  CPU E5700', '2GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'F9X1P72       ', 'SANDTONPLANT\\jaco.steyn', 'SPHWKS034    ', 'Dell Inc.', 'Latitude E5450', 'Intel(R) Core(TM) i5-5200U', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'DP9SG72       ', 'SANDTONPLANT\\andre.patrick', 'SPHWKS035    ', 'Dell Inc.', 'Latitude E5450', 'Intel(R) Core(TM) i5-5200U', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '6VTYP72       ', 'SANDTONPLANT\\Rob', 'SPHWKS037', 'Dell Inc.', 'Latitude E5570', 'Intel(R) Core(TM) i5-6300U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, '4H1XWZ1       ', 'SANDTONPLANT\\corrie.victor', 'SPHWKS038    ', 'Dell Inc.', 'Latitude E5540', 'Intel(R) Core(TM) i3-4010U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'DQMS2S1       ', 'SANDTONPLANT\\rede', 'SPHWKS039    ', 'Dell Inc.', 'Vostro 3750', 'Intel(R) Core(TM) i7-2670QM CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, '3JJSVQ1       ', 'SANDTONPLANT\\thabiso.peete', 'SPHWKS014', 'Dell Inc.', 'OptiPlex 790', 'Intel(R) Core(TM) i3-2100 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '1XH3WS1', 'Hernic Stores', 'DESKTOP', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i3-2120 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'BP45QC2', 'SANDTONPLANT\\PieterW', 'SPHWKS040    ', 'Dell Inc.', 'Latitude E5570', 'Intel(R) Core(TM) i5-6300U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '722S4Z1       ', 'SANDTONPLANT\\michael.styles', 'SPHWKS043    ', 'Dell Inc.', 'Inspiron 3542', 'Intel(R) Core(TM) i3-4030U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'JZW2SX1       ', 'SANDTONPLANT\\wilhelm.badenhorst', 'SPHWKS044    ', 'Dell Inc.', 'Vostro 2521 ', 'Intel(R) Core(TM) i5-3337U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, '9QLMR12', 'SANDTONPLANT\\bhekimusa.xulu', 'SPHWKS045', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i3-4130 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'C7HN982       ', 'SANDTONPLANT\\danell.dejager', 'SPHWKS049    ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i3-6100 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, '5DRGKF2       ', 'SANDTONPLANT\\ansofie.forrester', 'SPHWKS050    ', 'Dell Inc.', 'OptiPlex 3040', 'Intel(R) Core(TM) i3-6100 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, '58SW0F2       ', 'SANDTONPLANT\\brendon.miller', 'SPHWKS052    ', 'Dell Inc.', 'Latitude 3570', 'Intel(R) Core(TM) i5-6200U CPU', '12GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, '93J8V32       ', 'SANDTONPLANT\\christo.buys', 'SPHWS048     ', 'Dell Inc.', 'Vostro 3558', 'Intel(R) Core(TM) i5-5200U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'H4KV7X1       ', 'SANDTONPLANT\\zuzile.ntombela', 'SPHWKS046    ', 'Dell Inc.', 'OptiPlex 3010', 'Intel(R) Core(TM) i3-3220 CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'DKQNVZ1       ', 'SANDTONPLANT\\henk.delange ', 'SPHWKS055    ', 'Dell Inc.', 'Latitude E6540', 'Intel(R) Core(TM) i5-4300M CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, '7J6HPV1       ', 'SANDTONPLANT\\cecilia.marageni', 'SPHWKS022', 'Dell Inc.', 'Vostro 270', 'Intel(R) Pentium(R) CPU G2020', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, '1TDVG72       ', 'SANDTONPLANT\\daren.kilian  ', 'SPHWKS057    ', 'Dell Inc.', 'Latitude E5450', 'Intel(R) Core(TM) i5-5200U CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'FYQ0TM2       ', 'SANDTONPLANT\\REde', 'SPHWKS058    ', 'Dell Inc.', 'Vostro 3668', 'Intel(R) Core(TM) i7-7700 CPU', '16GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, '7JRG4S1', 'SANDTONPLANT\\mandla.zulu', 'SPHWKS060', 'Dell Inc.', 'Latitude E5520', 'Intel(R) Core(TM) i5-2430M CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, '5PVJD5J       ', 'SANDTONPLANT\\hendrik.vanstaaden', 'SPHWKS061', 'Dell Inc.', 'OptiPlex 390', 'Intel(R) Core(TM) i3-2120 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, '56JL532       ', 'SANDTONPLANT\\lufuno.ramantswana', 'SPHWKS062    ', 'Dell Inc.', 'OptiPlex 3020', 'Intel(R) Core(TM) i5-4590 CPU', '4GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'BR9YP72', 'SANDTONPLANT\\amanda.norman', 'SPHWKS053    ', 'Dell Inc.', 'Latitude E5570', 'Intel(R) Core(TM) i5-6300U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'C2XPRZ1       ', 'Spare', 'RichardEde-LPT', 'Dell Inc.', 'Inspiron 5537', 'Intel(R) Core(TM) i7-4500U CPU', '8GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'G3GJY52', 'SANDTONPLANT\\ivan.sibanyoni', 'SPHWKS020', 'Dell Inc.', 'Vostro 3558', 'Intel(R) Core(TM) i5-5200U CPU', '8GB', '2018-08-01 10:01:16', '2018-08-01 10:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Werner Barnard', 'wbarnard81@gmail.com', '$2y$10$M/8F1jmPriTyNBjTjRCOzO14CAM5VkWFRzEhY4P1Zn7pmb5YzksN6', 'iRXmCFIVnDNKdeUEvAShMVwDq3pIwW9xXpeyg4M1Re47E9PvdQBSw4fHhFZ8', '2018-07-31 06:16:57', '2018-07-31 06:16:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
