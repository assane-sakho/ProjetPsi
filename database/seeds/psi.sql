/*
 Navicat Premium Data Transfer

 Source Server         : psi
 Source Server Type    : MySQL
 Source Server Version : 50615
 Source Host           : localhost:3306
 Source Schema         : psi

 Target Server Type    : MySQL
 Target Server Version : 50615
 File Encoding         : 65001

 Date: 18/03/2020 21:32:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for directory
-- ----------------------------
DROP TABLE IF EXISTS `directory`;
CREATE TABLE `directory`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for group_person_year
-- ----------------------------
DROP TABLE IF EXISTS `group_person_year`;
CREATE TABLE `group_person_year`  (
  `groupeId` int(11) NULL DEFAULT NULL,
  `personId` int(11) NULL DEFAULT NULL,
  `year` int(4) NULL DEFAULT NULL,
  INDEX `groupeId`(`groupeId`) USING BTREE,
  INDEX `personId`(`personId`) USING BTREE,
  INDEX `year`(`year`) USING BTREE,
  CONSTRAINT `group_person_year_ibfk_1` FOREIGN KEY (`groupeId`) REFERENCES `group` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `group_person_year_ibfk_2` FOREIGN KEY (`personId`) REFERENCES `person` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `group_person_year_ibfk_3` FOREIGN KEY (`year`) REFERENCES `school_year` (`YEAR`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for person
-- ----------------------------
DROP TABLE IF EXISTS `person`;
CREATE TABLE `person`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `num` int(11) NULL DEFAULT NULL,
  `directoryId` int(11) NULL DEFAULT NULL,
  `statusId` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status`(`statusId`) USING BTREE,
  INDEX `directoryId`(`directoryId`) USING BTREE,
  CONSTRAINT `person_ibfk_1` FOREIGN KEY (`statusId`) REFERENCES `status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `person_ibfk_2` FOREIGN KEY (`directoryId`) REFERENCES `directory` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for school_year
-- ----------------------------
DROP TABLE IF EXISTS `school_year`;
CREATE TABLE `school_year`  (
  `year` int(4) NOT NULL,
  PRIMARY KEY (`year`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
