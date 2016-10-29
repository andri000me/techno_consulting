-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.5-10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for techno_db
CREATE DATABASE IF NOT EXISTS `techno_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `techno_db`;


-- Dumping structure for table techno_db.tb_kas
CREATE TABLE IF NOT EXISTS `tb_kas` (
  `id_kas` varchar(8) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `jenis_transaksi` varchar(2) DEFAULT NULL,
  `keterangan_transaksi` varchar(30) DEFAULT NULL,
  `nominal_transaksi` float DEFAULT NULL,
  PRIMARY KEY (`id_kas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_kas: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_kas` DISABLE KEYS */;
INSERT INTO `tb_kas` (`id_kas`, `tanggal_transaksi`, `jenis_transaksi`, `keterangan_transaksi`, `nominal_transaksi`) VALUES
	('001', '2016-10-29', 'DB', 'Beli Aqua Galon', 5000),
	('TCSTR002', '2016-10-29', 'CR', 'Order 1', 10000000),
	('TCSTR003', '2016-10-29', 'DB', 'Beli Spidol', 1000);
/*!40000 ALTER TABLE `tb_kas` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_konsumen
CREATE TABLE IF NOT EXISTS `tb_konsumen` (
  `id_konsumen` varchar(8) NOT NULL,
  `tanggal_konsumen` date NOT NULL,
  `nama` varchar(20) NOT NULL,
  `perusahaan` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_konsumen: ~4 rows (approximately)
/*!40000 ALTER TABLE `tb_konsumen` DISABLE KEYS */;
INSERT INTO `tb_konsumen` (`id_konsumen`, `tanggal_konsumen`, `nama`, `perusahaan`, `no_hp`, `alamat`) VALUES
	('TCSKN001', '2016-10-27', 'Wildan Nugraha', 'Techno Consulting', '081563333307', 'KP. Selaawi III'),
	('TCSKN002', '2016-10-27', 'Banu', 'PT. Sukses Selalu 2', '082213134440', 'Alamat Lengkap Disini !'),
	('TCSKN003', '2016-10-13', 'asdfdsfs', 'sdfsf', 'sdfsds', 'asdfafa');
/*!40000 ALTER TABLE `tb_konsumen` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_log_proyek
CREATE TABLE IF NOT EXISTS `tb_log_proyek` (
  `id_log` varchar(10) NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `id_proyek` varchar(7) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_log_proyek: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_log_proyek` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_log_proyek` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_master_kategori_proyek
CREATE TABLE IF NOT EXISTS `tb_master_kategori_proyek` (
  `id_kategori_proyek` varchar(8) NOT NULL,
  `kategori_proyek` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_master_kategori_proyek: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_master_kategori_proyek` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_master_kategori_proyek` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_master_kategori_servis
CREATE TABLE IF NOT EXISTS `tb_master_kategori_servis` (
  `id_kategori_servis` varchar(8) NOT NULL,
  `kategori_servis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori_servis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_master_kategori_servis: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_master_kategori_servis` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_master_kategori_servis` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_master_servis
CREATE TABLE IF NOT EXISTS `tb_master_servis` (
  `id_servis` varchar(8) NOT NULL,
  `id_kategori_servis` varchar(8) NOT NULL,
  `keterangan_servis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_servis`),
  KEY `FK_tb_master_servis_tb_master_kategori_servis` (`id_kategori_servis`),
  CONSTRAINT `FK_tb_master_servis_tb_master_kategori_servis` FOREIGN KEY (`id_kategori_servis`) REFERENCES `tb_master_kategori_servis` (`id_kategori_servis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_master_servis: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_master_servis` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_master_servis` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_pembayaran
CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `no_faktur_masuk` varchar(8) NOT NULL,
  `id_proyek` varchar(8) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `uang_muka` float DEFAULT NULL,
  `pelunasan` float DEFAULT NULL,
  `tunai` float DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `id_kas` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`no_faktur_masuk`),
  KEY `FK_tb_pembayaran_tb_kas` (`id_kas`),
  KEY `FK_tb_pembayaran_tb_proyek` (`id_proyek`),
  CONSTRAINT `FK_tb_pembayaran_tb_kas` FOREIGN KEY (`id_kas`) REFERENCES `tb_kas` (`id_kas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_pembayaran_tb_proyek` FOREIGN KEY (`id_proyek`) REFERENCES `tb_proyek` (`id_proyek`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_pembayaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pembayaran` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_pengeluaran
CREATE TABLE IF NOT EXISTS `tb_pengeluaran` (
  `no_faktur_keluar` varchar(8) NOT NULL,
  `tanggal_pengeluaran` double DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `nominal` float DEFAULT NULL,
  `id_kas` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`no_faktur_keluar`),
  KEY `FK_tb_pengeluaran_tb_kas` (`id_kas`),
  CONSTRAINT `FK_tb_pengeluaran_tb_kas` FOREIGN KEY (`id_kas`) REFERENCES `tb_kas` (`id_kas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_pengeluaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_pengeluaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pengeluaran` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_proyek
CREATE TABLE IF NOT EXISTS `tb_proyek` (
  `id_proyek` varchar(7) NOT NULL,
  `tanggal_proyek` date NOT NULL,
  `tanggal_jatuh_tempo` date DEFAULT NULL,
  `id_konsumen` varchar(8) NOT NULL,
  `id_kategori_proyek` varchar(8) NOT NULL,
  `id_servis` varchar(8) NOT NULL,
  `status_proyek` varchar(10) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `note_konsumen` varchar(30) DEFAULT NULL,
  `note_deveoper` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_proyek`),
  KEY `id_kategori_proyek` (`id_kategori_proyek`),
  KEY `id_konsumen_2` (`id_konsumen`),
  KEY `id_servis` (`id_servis`),
  CONSTRAINT `FK_tb_proyek_tb_master_kategori_proyek` FOREIGN KEY (`id_kategori_proyek`) REFERENCES `tb_master_kategori_proyek` (`id_kategori_proyek`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_proyek_tb_master_konsumen` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_proyek_tb_master_servis` FOREIGN KEY (`id_servis`) REFERENCES `tb_master_servis` (`id_servis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_proyek: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_proyek` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_proyek` ENABLE KEYS */;


-- Dumping structure for table techno_db.tb_proyek_kontrak
CREATE TABLE IF NOT EXISTS `tb_proyek_kontrak` (
  `id_proyek` varchar(7) NOT NULL,
  `status_kontrak` varchar(8) NOT NULL,
  `lama_kontrak` bit(64) NOT NULL,
  `berakhir_tanggal` date NOT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table techno_db.tb_proyek_kontrak: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_proyek_kontrak` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_proyek_kontrak` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
