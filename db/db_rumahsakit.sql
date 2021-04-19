CREATE database db_rs;

USE db_rs;

CREATE TABLE IF NOT EXISTS `pasien`(
    `kd_pasien` int(11) NOT NULL auto_increment,
    `no_pasien` varchar(20),
    `nama_pasien` varchar (20),
    `jk` varchar (100), 
    `usia` varchar (15),
    `goldar` varchar(50),
    `no_poli` varchar(20),
    `no_jkn` varchar(20),
    `tgl` date,
    `alamat` text,
    `telp` varchar (20),
    PRIMARY KEY (`kd_pasien`)
);

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kd_poli` int(11) NOT NULL AUTO_INCREMENT,
  `no_poli` varchar(20),
  `nama_poli` varchar(300),
  `lokasi` varchar(300),
  `ruang` varchar(300),
  `lantai` int(11),
  PRIMARY KEY (`kd_poli`)
);


CREATE TABLE IF NOT EXISTS `jaminan` (
  `kd_jaminan` int(11) NOT NULL AUTO_INCREMENT,
  `no_jkn` varchar(20),
  `asuransi` varchar(300),
  `call_center` varchar(300),
  PRIMARY KEY (`kd_jaminan`)
);
