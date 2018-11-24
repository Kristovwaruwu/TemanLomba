/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : temanlomba

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2018-11-24 19:19:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Tbl_Kategori
-- ----------------------------
DROP TABLE IF EXISTS `Tbl_Kategori`;
CREATE TABLE `Tbl_Kategori` (
  `Id_Kategori` int(11) NOT NULL,
  `Judul_Kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tbl_Kategori
-- ----------------------------

-- ----------------------------
-- Table structure for Tbl_Lomba
-- ----------------------------
DROP TABLE IF EXISTS `Tbl_Lomba`;
CREATE TABLE `Tbl_Lomba` (
  `Id_Lomba` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(50) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Waktu` varchar(50) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Kategori` int(11) NOT NULL,
  PRIMARY KEY (`Id_Lomba`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tbl_Lomba
-- ----------------------------
INSERT INTO `Tbl_Lomba` VALUES ('1', 'Lomba Makan Krupuk', 'Lomba ini untuk memakan krupuk', '17-05-2018', '1', '0');

-- ----------------------------
-- Table structure for Tbl_User
-- ----------------------------
DROP TABLE IF EXISTS `Tbl_User`;
CREATE TABLE `Tbl_User` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tbl_User
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
