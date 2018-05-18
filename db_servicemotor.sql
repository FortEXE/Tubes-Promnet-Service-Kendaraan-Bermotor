/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : 127.0.0.1:3306
 Source Schema         : db_servismotor

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 19/05/2018 06:19:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `ID_BARANG` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NAMA_BARANG` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KETERANGAN_BARANG` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `HARGA_BARANG` int(11) NOT NULL,
  `STOK_BARANG` int(11) NOT NULL,
  PRIMARY KEY (`ID_BARANG`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Table structure for jasa
-- ----------------------------
DROP TABLE IF EXISTS `jasa`;
CREATE TABLE `jasa`  (
  `ID_JASA` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `XID_MEKANIK` int(11) NOT NULL,
  `NAMA_JASA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KATEGORI_JASA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KETERANGAN_JASA` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `HARGA_JASA` int(11) NOT NULL,
  PRIMARY KEY (`ID_JASA`) USING BTREE,
  INDEX `FK_ID_MEKANIK`(`XID_MEKANIK`) USING BTREE,
  CONSTRAINT `FK_ID_MEKANIK` FOREIGN KEY (`XID_MEKANIK`) REFERENCES `mekanik` (`ID_MEKANIK`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Table structure for mekanik
-- ----------------------------
DROP TABLE IF EXISTS `mekanik`;
CREATE TABLE `mekanik`  (
  `ID_MEKANIK` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_MEKANIK` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `SPESIALIS_MEKANIK` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NO_TELP_MEKANIK` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_MEKANIK`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan`  (
  `ID_PELANGGAN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_PELANGGAN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ALAMAT_PELANGGAN` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NO_TELP_PELANGGAN` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NO_STNK_PELANGGAN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TAHUN_STNK_PELANGGAN` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_PELANGGAN`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Table structure for transaksi_barang
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_barang`;
CREATE TABLE `transaksi_barang`  (
  `ID_TRANSAKSI_BARANG` int(11) NOT NULL AUTO_INCREMENT,
  `XID_PELANGGAN` int(11) NOT NULL,
  `XID_BARANG` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `HARGA_TRANSAKSI_BARANG` int(11) NOT NULL,
  `QTY_TRANSAKSI_BARANG` int(11) NOT NULL,
  `HARGA_TOTAL_TRANSAKSI_BARANG` int(11) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI_BARANG`) USING BTREE,
  INDEX `FK_ID_BARANG`(`XID_BARANG`) USING BTREE,
  INDEX `FK_ID_TRANSAKSI_BARANG`(`XID_PELANGGAN`) USING BTREE,
  CONSTRAINT `FK_ID_BARANG` FOREIGN KEY (`XID_BARANG`) REFERENCES `barang` (`ID_BARANG`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_ID_TRANSAKSI_BARANG` FOREIGN KEY (`XID_PELANGGAN`) REFERENCES `pelanggan` (`ID_PELANGGAN`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Table structure for transaksi_jasa
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_jasa`;
CREATE TABLE `transaksi_jasa`  (
  `ID_TRANSAKSI_JASA` int(11) NOT NULL AUTO_INCREMENT,
  `XID_PELANGGAN` int(11) NOT NULL,
  `XID_JASA` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `HARGA_TRANSAKSI_JASA` int(11) NOT NULL,
  `QTY_TRANSAKSI_JASA` int(11) NOT NULL,
  `HARGA_TOTAL_TRANSAKSI_JASA` int(11) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI_JASA`) USING BTREE,
  INDEX `FK_ID_JASA`(`XID_JASA`) USING BTREE,
  INDEX `FK_ID_TRANSAKSI_JASA`(`XID_PELANGGAN`) USING BTREE,
  CONSTRAINT `FK_ID_JASA` FOREIGN KEY (`XID_JASA`) REFERENCES `jasa` (`ID_JASA`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_ID_TRANSAKSI_JASA` FOREIGN KEY (`XID_PELANGGAN`) REFERENCES `pelanggan` (`ID_PELANGGAN`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NAMA_USER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TIPE_USER` enum('1','2','3','4','5') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '1. administrator, 2. kasir, 3. pegawai',
  `EMAIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `PASSWORD` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_USER`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

SET FOREIGN_KEY_CHECKS = 1;
