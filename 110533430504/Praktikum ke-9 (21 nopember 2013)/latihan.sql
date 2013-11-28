-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 03:37 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` double NOT NULL,
  `kd_prodi` int(3) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kd_prodi`, `nama`, `alamat`) VALUES
(110533430503, 334, 'Novi Icam', 'Batu'),
(110533430504, 334, 'Rizka Rahmania Ameilia', 'Soekarno Hatta, Malang'),
(110533430505, 334, 'Ika Budi', 'Kediri'),
(110533430507, 334, 'Ifanatun Nadhiroh', 'Wajak'),
(110533430978, 334, 'Elsa Rochmah', 'Situbondo'),
(110534430586, 344, 'Indri Widy', 'Lumajang'),
(110534430588, 344, 'Sigma Akhiria', 'Ponorogo');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa2`
--

CREATE TABLE IF NOT EXISTS `mahasiswa2` (
  `nim` double NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa2`
--

INSERT INTO `mahasiswa2` (`nim`, `nama`, `alamat`, `nama_prodi`) VALUES
(110533430503, 'Novi Icam', 'Batu', 'Pendidikan Teknik Informatika'),
(110533430504, 'Rizka Rahmania Ameilia', 'Soekarno Hatta, Malang', 'Pendidikan Teknik Informatika'),
(110533430505, 'Ika Budi', 'Kediri', 'Pendidikan Teknik Informatika'),
(110533430507, 'Ifanatun Nadhiroh', 'Wajak', 'Pendidikan Teknik Informatika'),
(110533430978, 'Elsa Rochmah', 'Situbondo', 'Pendidikan Teknik Informatika'),
(110534430586, 'Indri Widy', 'Lumajang', 'Pendidikan Teknik Elektro'),
(110534430588, 'Sigma Akhiria', 'Ponorogo', 'Pendidikan Teknik Elektro');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `kd_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
(334, 'Pendidikan Teknik Informatika'),
(344, 'Pendidikan Teknik Elektro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
