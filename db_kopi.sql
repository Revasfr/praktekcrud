/*
Navicat MySQL Data Transfer

Source Server         : koneksi-reva
Source Server Version : 80030
Source Host           : localhost:3306
Source Database       : db_kopi

Target Server Type    : MYSQL
Target Server Version : 80030
File Encoding         : 65001

Date: 2023-01-10 13:05:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_kopi
-- ----------------------------
DROP TABLE IF EXISTS `tb_kopi`;
CREATE TABLE `tb_kopi` (
  `id_kopi` int NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_kopi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of tb_kopi
-- ----------------------------
INSERT INTO `tb_kopi` VALUES ('2', 'Spanish Omellete', '100k');
INSERT INTO `tb_kopi` VALUES ('4', 'Chiken Cobb Salads', '50k');
INSERT INTO `tb_kopi` VALUES ('5', 'Eggs Bendict', '75k');
INSERT INTO `tb_kopi` VALUES ('6', 'Caramel Machiato', '50k');
INSERT INTO `tb_kopi` VALUES ('7', 'Matcha Latte', '20k');
INSERT INTO `tb_kopi` VALUES ('8', 'Golden Milk Latte', '76k');
SET FOREIGN_KEY_CHECKS=1;
