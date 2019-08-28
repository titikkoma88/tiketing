/*
Navicat MySQL Data Transfer

Source Server         : 10.1.20.11
Source Server Version : 50561
Source Host           : 10.1.20.11:3306
Source Database       : forumappdb

Target Server Type    : MYSQL
Target Server Version : 50561
File Encoding         : 65001

Date: 2019-04-19 11:24:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Panji Ramadhan', 'jie.piranha@gmail.com', '9c7cc2cde1939666d314378b18857721', '0852123789', '31Mar2019181957.jpg');
INSERT INTO `user` VALUES ('2', 'Panji Hadjarati', 'panjihadjarati@modernland.co.id', '9c7cc2cde1939666d314378b18857721', '0852123987', '31Mar2019182104.jpg');
