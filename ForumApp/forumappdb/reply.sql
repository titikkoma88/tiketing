/*
Navicat MySQL Data Transfer

Source Server         : 10.1.20.11
Source Server Version : 50561
Source Host           : 10.1.20.11:3306
Source Database       : forumappdb

Target Server Type    : MYSQL
Target Server Version : 50561
File Encoding         : 65001

Date: 2019-04-19 11:23:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `id_reply` int(11) NOT NULL AUTO_INCREMENT,
  `balasan` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL,
  PRIMARY KEY (`id_reply`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of reply
-- ----------------------------
INSERT INTO `reply` VALUES ('3', 'cuma komen aja dulu', '2019-04-18 17:26:58', '1', '1');
