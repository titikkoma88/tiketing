/*
Navicat MySQL Data Transfer

Source Server         : 10.1.20.11
Source Server Version : 50561
Source Host           : 10.1.20.11:3306
Source Database       : forumappdb

Target Server Type    : MYSQL
Target Server Version : 50561
File Encoding         : 65001

Date: 2019-04-19 11:23:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for thread
-- ----------------------------
DROP TABLE IF EXISTS `thread`;
CREATE TABLE `thread` (
  `id_thread` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_thread`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thread
-- ----------------------------
INSERT INTO `thread` VALUES ('1', 'Ini Judulnya', 'Dan disini Isinya', '1', 'jie.piranha@gmail.com');
INSERT INTO `thread` VALUES ('2', 'Ini Judulnya lagi', 'Dan disini Isinya lagi', '2', 'panjihadjarati@modernland.co.id');
INSERT INTO `thread` VALUES ('3', 'Ini Judulnya lagi nih', 'Dan disini Isinya lagi nih', '1', 'jie.piranha@gmail.com');
INSERT INTO `thread` VALUES ('4', 'Judul Tes', 'Isinya juga tes', '1', 'jie.piranha@gmail.com');
INSERT INTO `thread` VALUES ('5', 'Judul tes 2', 'Isinya juga tes 2', '1', 'jie.piranha@gmail.com');
