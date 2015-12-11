/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : db_yii2project

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-12-11 20:00:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_task`
-- ----------------------------
DROP TABLE IF EXISTS `tb_task`;
CREATE TABLE `tb_task` (
  `id` int(10) NOT NULL,
  `slot` int(2) DEFAULT NULL,
  `status` enum('ON','OFF') DEFAULT 'OFF',
  `current` double(10,2) DEFAULT NULL,
  `limit` double(10,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `stop_time` time DEFAULT NULL,
  `task` enum('none','active') DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_task
-- ----------------------------
INSERT INTO `tb_task` VALUES ('1', '1', 'OFF', '10.20', '10.70', null, null, null, null, 'none');
INSERT INTO `tb_task` VALUES ('2', '2', 'ON', '10.50', null, null, null, null, null, 'none');

-- ----------------------------
-- Table structure for `tb_users`
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `usr` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_users
-- ----------------------------
INSERT INTO `tb_users` VALUES ('1', 'ampamp', 'ampamp');
