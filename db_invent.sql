/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_invent

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-01 01:42:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tab_barang`
-- ----------------------------
DROP TABLE IF EXISTS `tab_barang`;
CREATE TABLE `tab_barang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_barang` varchar(25) DEFAULT NULL,
  `part_number` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_barang` varchar(20) DEFAULT NULL,
  `id_gudang` int(10) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_barang
-- ----------------------------
INSERT INTO `tab_barang` VALUES ('15', 'KDBRG001', 'BG342432', 'Minyak Zaitun', 'cair', '3', '4', 'okki', '2017-01-31 23:54:27', null, null);
INSERT INTO `tab_barang` VALUES ('16', 'KDBRG002', 'JU0898', 'Minyak Kapak', 'cair', '3', '15', 'administrator', '2017-02-01 00:37:37', null, null);
INSERT INTO `tab_barang` VALUES ('17', 'KDBRG003', 'TTP0988', 'Pop Ice', 'cair', '3', '5', 'administrator', '2017-02-01 01:05:10', 'administrator', '2017-02-01 01:05:28');

-- ----------------------------
-- Table structure for `tab_gudang`
-- ----------------------------
DROP TABLE IF EXISTS `tab_gudang`;
CREATE TABLE `tab_gudang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_gudang
-- ----------------------------
INSERT INTO `tab_gudang` VALUES ('4', 'Buaran 3', 'okki', '2016-08-15 23:05:44', 'okki', '2016-08-17 17:46:59');
INSERT INTO `tab_gudang` VALUES ('5', 'Pisangan Baru Utara', 'okki', '2016-08-17 17:46:47', null, null);

-- ----------------------------
-- Table structure for `tab_pelanggan`
-- ----------------------------
DROP TABLE IF EXISTS `tab_pelanggan`;
CREATE TABLE `tab_pelanggan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_telp` text,
  `email` varchar(50) DEFAULT NULL,
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_pelanggan
-- ----------------------------
INSERT INTO `tab_pelanggan` VALUES ('1', 'Maemunah', ' Jl.Nangka', '98962374', 'marc@mae.com', 'okki', '2017-01-31 23:49:04', null, null);

-- ----------------------------
-- Table structure for `tab_user`
-- ----------------------------
DROP TABLE IF EXISTS `tab_user`;
CREATE TABLE `tab_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `level` int(3) DEFAULT NULL COMMENT '1 itu admin gudang 2 itu kepala toko',
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_user
-- ----------------------------
INSERT INTO `tab_user` VALUES ('30', 'admin_gudang', '0cc175b9c0f1b6a831c399e269772661', '2', null, null, 'okki', '2017-01-31 23:55:37');
INSERT INTO `tab_user` VALUES ('31', 'administrator', '0cc175b9c0f1b6a831c399e269772661', '1', null, null, 'okki', '2017-01-31 23:55:48');
INSERT INTO `tab_user` VALUES ('32', 'produksi', '0cc175b9c0f1b6a831c399e269772661', '3', 'okki', '2016-08-15 23:29:32', 'okki', '2017-01-31 23:56:04');

-- ----------------------------
-- Table structure for `trans_barang_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `trans_barang_keluar`;
CREATE TABLE `trans_barang_keluar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_barang` int(10) DEFAULT NULL,
  `qty` int(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trans_barang_keluar
-- ----------------------------
INSERT INTO `trans_barang_keluar` VALUES ('6', '15', '5', '2017-02-01', 'administrator', '2017-02-01 00:43:40', null, null);
INSERT INTO `trans_barang_keluar` VALUES ('7', '16', '5', '2017-03-01', 'administrator', '2017-02-01 00:43:50', null, null);

-- ----------------------------
-- Table structure for `trans_barang_masuk`
-- ----------------------------
DROP TABLE IF EXISTS `trans_barang_masuk`;
CREATE TABLE `trans_barang_masuk` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_barang` int(10) DEFAULT NULL,
  `qty` int(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trans_barang_masuk
-- ----------------------------
INSERT INTO `trans_barang_masuk` VALUES ('12', '15', '10', '2017-02-01', 'admin_gudang', '2017-02-01 00:36:09', null, null);
INSERT INTO `trans_barang_masuk` VALUES ('13', '16', '10', '2017-03-01', 'administrator', '2017-02-01 00:37:51', null, null);
INSERT INTO `trans_barang_masuk` VALUES ('14', '16', '10', '2017-02-01', 'administrator', '2017-02-01 01:26:47', null, null);

-- ----------------------------
-- Table structure for `trans_pembelian`
-- ----------------------------
DROP TABLE IF EXISTS `trans_pembelian`;
CREATE TABLE `trans_pembelian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_invoice` varchar(25) DEFAULT NULL,
  `id_pelanggan` int(10) DEFAULT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `user_insert` varchar(25) DEFAULT NULL,
  `date_insert` varchar(25) DEFAULT NULL,
  `user_update` varchar(25) DEFAULT NULL,
  `date_update` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trans_pembelian
-- ----------------------------
