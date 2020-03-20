/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 50615
 Source Host           : localhost:3306
 Source Schema         : psi

 Target Server Type    : MySQL
 Target Server Version : 50615
 File Encoding         : 65001

 Date: 20/03/2019 00:50:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for directories
-- ----------------------------
DROP TABLE IF EXISTS `directories`;
CREATE TABLE `directories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of directories
-- ----------------------------
INSERT INTO `directories` VALUES (1, 'HARPEGE');
INSERT INTO `directories` VALUES (2, 'APOGEE');
INSERT INTO `directories` VALUES (3, 'FOMASUP');

-- ----------------------------
-- Table structure for group_person_year
-- ----------------------------
DROP TABLE IF EXISTS `group_person_year`;
CREATE TABLE `group_person_year`  (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `person_id` bigint(20) UNSIGNED NOT NULL,
  `year` bigint(20) UNSIGNED NOT NULL,
  INDEX `group_person_year_group_id_foreign`(`group_id`) USING BTREE,
  INDEX `group_person_year_person_id_foreign`(`person_id`) USING BTREE,
  INDEX `group_person_year_year_foreign`(`year`) USING BTREE,
  CONSTRAINT `group_person_year_year_foreign` FOREIGN KEY (`year`) REFERENCES `school_years` (`year`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `group_person_year_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `group_person_year_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of group_person_year
-- ----------------------------
INSERT INTO `group_person_year` VALUES (1, 1, 2019);
INSERT INTO `group_person_year` VALUES (1, 2, 2019);
INSERT INTO `group_person_year` VALUES (1, 3, 2019);
INSERT INTO `group_person_year` VALUES (1, 4, 2019);
INSERT INTO `group_person_year` VALUES (1, 5, 2019);
INSERT INTO `group_person_year` VALUES (1, 6, 2019);
INSERT INTO `group_person_year` VALUES (1, 7, 2019);
INSERT INTO `group_person_year` VALUES (1, 8, 2019);
INSERT INTO `group_person_year` VALUES (1, 9, 2019);
INSERT INTO `group_person_year` VALUES (1, 10, 2019);
INSERT INTO `group_person_year` VALUES (1, 11, 2019);
INSERT INTO `group_person_year` VALUES (1, 12, 2019);
INSERT INTO `group_person_year` VALUES (1, 13, 2019);
INSERT INTO `group_person_year` VALUES (1, 14, 2019);
INSERT INTO `group_person_year` VALUES (1, 15, 2019);
INSERT INTO `group_person_year` VALUES (1, 16, 2019);
INSERT INTO `group_person_year` VALUES (1, 17, 2019);
INSERT INTO `group_person_year` VALUES (1, 18, 2019);
INSERT INTO `group_person_year` VALUES (1, 19, 2019);
INSERT INTO `group_person_year` VALUES (1, 20, 2019);
INSERT INTO `group_person_year` VALUES (1, 21, 2019);
INSERT INTO `group_person_year` VALUES (1, 22, 2019);
INSERT INTO `group_person_year` VALUES (1, 23, 2019);
INSERT INTO `group_person_year` VALUES (1, 24, 2019);
INSERT INTO `group_person_year` VALUES (1, 25, 2019);
INSERT INTO `group_person_year` VALUES (2, 26, 2019);
INSERT INTO `group_person_year` VALUES (2, 27, 2019);
INSERT INTO `group_person_year` VALUES (2, 28, 2019);
INSERT INTO `group_person_year` VALUES (2, 29, 2019);
INSERT INTO `group_person_year` VALUES (2, 30, 2019);
INSERT INTO `group_person_year` VALUES (2, 31, 2019);
INSERT INTO `group_person_year` VALUES (2, 32, 2019);
INSERT INTO `group_person_year` VALUES (2, 33, 2019);
INSERT INTO `group_person_year` VALUES (2, 34, 2019);
INSERT INTO `group_person_year` VALUES (2, 35, 2019);
INSERT INTO `group_person_year` VALUES (2, 36, 2019);
INSERT INTO `group_person_year` VALUES (2, 37, 2019);
INSERT INTO `group_person_year` VALUES (2, 38, 2019);
INSERT INTO `group_person_year` VALUES (2, 39, 2019);
INSERT INTO `group_person_year` VALUES (2, 40, 2019);
INSERT INTO `group_person_year` VALUES (2, 41, 2019);
INSERT INTO `group_person_year` VALUES (2, 42, 2019);
INSERT INTO `group_person_year` VALUES (2, 43, 2019);
INSERT INTO `group_person_year` VALUES (2, 44, 2019);
INSERT INTO `group_person_year` VALUES (2, 45, 2019);
INSERT INTO `group_person_year` VALUES (2, 46, 2019);
INSERT INTO `group_person_year` VALUES (2, 47, 2019);
INSERT INTO `group_person_year` VALUES (2, 48, 2019);
INSERT INTO `group_person_year` VALUES (2, 49, 2019);
INSERT INTO `group_person_year` VALUES (2, 50, 2019);
INSERT INTO `group_person_year` VALUES (2, 51, 2019);
INSERT INTO `group_person_year` VALUES (2, 52, 2019);
INSERT INTO `group_person_year` VALUES (2, 53, 2019);
INSERT INTO `group_person_year` VALUES (2, 54, 2019);
INSERT INTO `group_person_year` VALUES (2, 55, 2019);
INSERT INTO `group_person_year` VALUES (2, 56, 2019);
INSERT INTO `group_person_year` VALUES (2, 57, 2019);
INSERT INTO `group_person_year` VALUES (2, 58, 2019);
INSERT INTO `group_person_year` VALUES (2, 59, 2019);
INSERT INTO `group_person_year` VALUES (2, 60, 2019);
INSERT INTO `group_person_year` VALUES (2, 61, 2019);
INSERT INTO `group_person_year` VALUES (2, 62, 2019);
INSERT INTO `group_person_year` VALUES (2, 63, 2019);
INSERT INTO `group_person_year` VALUES (2, 64, 2019);
INSERT INTO `group_person_year` VALUES (2, 65, 2019);
INSERT INTO `group_person_year` VALUES (2, 66, 2019);
INSERT INTO `group_person_year` VALUES (2, 67, 2019);
INSERT INTO `group_person_year` VALUES (2, 68, 2019);
INSERT INTO `group_person_year` VALUES (2, 69, 2019);
INSERT INTO `group_person_year` VALUES (2, 70, 2019);
INSERT INTO `group_person_year` VALUES (2, 71, 2019);
INSERT INTO `group_person_year` VALUES (2, 72, 2019);
INSERT INTO `group_person_year` VALUES (2, 73, 2019);
INSERT INTO `group_person_year` VALUES (2, 74, 2019);
INSERT INTO `group_person_year` VALUES (2, 75, 2019);
INSERT INTO `group_person_year` VALUES (2, 76, 2019);
INSERT INTO `group_person_year` VALUES (2, 77, 2019);
INSERT INTO `group_person_year` VALUES (2, 78, 2019);
INSERT INTO `group_person_year` VALUES (2, 79, 2019);
INSERT INTO `group_person_year` VALUES (2, 80, 2019);
INSERT INTO `group_person_year` VALUES (2, 81, 2019);
INSERT INTO `group_person_year` VALUES (2, 82, 2019);
INSERT INTO `group_person_year` VALUES (2, 83, 2019);
INSERT INTO `group_person_year` VALUES (2, 84, 2019);
INSERT INTO `group_person_year` VALUES (2, 85, 2019);
INSERT INTO `group_person_year` VALUES (2, 86, 2019);
INSERT INTO `group_person_year` VALUES (2, 87, 2019);
INSERT INTO `group_person_year` VALUES (2, 88, 2019);
INSERT INTO `group_person_year` VALUES (2, 89, 2019);
INSERT INTO `group_person_year` VALUES (2, 90, 2019);
INSERT INTO `group_person_year` VALUES (2, 91, 2019);
INSERT INTO `group_person_year` VALUES (2, 92, 2019);
INSERT INTO `group_person_year` VALUES (2, 93, 2019);
INSERT INTO `group_person_year` VALUES (2, 94, 2019);
INSERT INTO `group_person_year` VALUES (2, 95, 2019);
INSERT INTO `group_person_year` VALUES (2, 96, 2019);
INSERT INTO `group_person_year` VALUES (2, 97, 2019);
INSERT INTO `group_person_year` VALUES (2, 98, 2019);
INSERT INTO `group_person_year` VALUES (2, 99, 2019);
INSERT INTO `group_person_year` VALUES (2, 100, 2019);
INSERT INTO `group_person_year` VALUES (2, 101, 2019);
INSERT INTO `group_person_year` VALUES (2, 102, 2019);
INSERT INTO `group_person_year` VALUES (2, 103, 2019);
INSERT INTO `group_person_year` VALUES (2, 104, 2019);
INSERT INTO `group_person_year` VALUES (2, 105, 2019);
INSERT INTO `group_person_year` VALUES (2, 106, 2019);
INSERT INTO `group_person_year` VALUES (2, 107, 2019);
INSERT INTO `group_person_year` VALUES (2, 108, 2019);
INSERT INTO `group_person_year` VALUES (2, 109, 2019);
INSERT INTO `group_person_year` VALUES (2, 110, 2019);
INSERT INTO `group_person_year` VALUES (2, 111, 2019);
INSERT INTO `group_person_year` VALUES (2, 112, 2019);
INSERT INTO `group_person_year` VALUES (2, 113, 2019);
INSERT INTO `group_person_year` VALUES (2, 114, 2019);
INSERT INTO `group_person_year` VALUES (2, 115, 2019);
INSERT INTO `group_person_year` VALUES (2, 116, 2019);
INSERT INTO `group_person_year` VALUES (2, 117, 2019);
INSERT INTO `group_person_year` VALUES (2, 118, 2019);
INSERT INTO `group_person_year` VALUES (2, 119, 2019);
INSERT INTO `group_person_year` VALUES (2, 120, 2019);
INSERT INTO `group_person_year` VALUES (2, 121, 2019);
INSERT INTO `group_person_year` VALUES (2, 122, 2019);
INSERT INTO `group_person_year` VALUES (2, 123, 2019);
INSERT INTO `group_person_year` VALUES (2, 124, 2019);
INSERT INTO `group_person_year` VALUES (2, 125, 2019);
INSERT INTO `group_person_year` VALUES (2, 126, 2019);
INSERT INTO `group_person_year` VALUES (2, 127, 2019);
INSERT INTO `group_person_year` VALUES (2, 128, 2019);
INSERT INTO `group_person_year` VALUES (2, 129, 2019);
INSERT INTO `group_person_year` VALUES (2, 130, 2019);
INSERT INTO `group_person_year` VALUES (2, 131, 2019);
INSERT INTO `group_person_year` VALUES (2, 132, 2019);

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `groups_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (2, 'L2 MIASHS');
INSERT INTO `groups` VALUES (1, 'L3 MIAGE_APP');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_03_19_181653_statuses', 1);
INSERT INTO `migrations` VALUES (2, '2019_03_19_181706_directories', 1);
INSERT INTO `migrations` VALUES (3, '2019_03_19_182117_people', 1);
INSERT INTO `migrations` VALUES (4, '2019_03_19_182452_groups', 1);
INSERT INTO `migrations` VALUES (5, '2019_03_19_183740_school_years', 1);
INSERT INTO `migrations` VALUES (6, '2019_03_19_184128_group_person_year', 1);

-- ----------------------------
-- Table structure for people
-- ----------------------------
DROP TABLE IF EXISTS `people`;
CREATE TABLE `people`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `num` int(11) NOT NULL,
  `directory_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `people_directory_id_foreign`(`directory_id`) USING BTREE,
  INDEX `people_status_id_foreign`(`status_id`) USING BTREE,
  CONSTRAINT `people_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `people_directory_id_foreign` FOREIGN KEY (`directory_id`) REFERENCES `directories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 198 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of people
-- ----------------------------
INSERT INTO `people` VALUES (1, 'Ahmed', 'Noufeine', NULL, 340001, 2, 1);
INSERT INTO `people` VALUES (2, 'Ait akli', 'Litissia', NULL, 340002, 2, 1);
INSERT INTO `people` VALUES (3, 'Ba', 'Adja', NULL, 340003, 2, 1);
INSERT INTO `people` VALUES (4, 'Binous', 'Wassim', NULL, 340004, 2, 1);
INSERT INTO `people` VALUES (5, 'Bocoum', 'Idy', NULL, 340005, 2, 1);
INSERT INTO `people` VALUES (6, 'Brochado', 'Alexandre', NULL, 340006, 2, 1);
INSERT INTO `people` VALUES (7, 'Clebien', 'Nangninta', NULL, 340007, 2, 1);
INSERT INTO `people` VALUES (8, 'Das', 'Rahul', NULL, 340008, 2, 1);
INSERT INTO `people` VALUES (9, 'Elarj', 'Aniss', NULL, 340009, 2, 1);
INSERT INTO `people` VALUES (10, 'Fall', 'Seynabou', NULL, 340010, 2, 1);
INSERT INTO `people` VALUES (11, 'Jestin', 'Gabriel', NULL, 340011, 2, 1);
INSERT INTO `people` VALUES (12, 'Keloute ndamukong', 'Ubald', NULL, 340012, 2, 1);
INSERT INTO `people` VALUES (13, 'Khalfi', 'Sofian', NULL, 340013, 2, 1);
INSERT INTO `people` VALUES (14, 'Le men', 'Yann', NULL, 340014, 2, 1);
INSERT INTO `people` VALUES (15, 'Mboup', 'Gaye', NULL, 340015, 2, 1);
INSERT INTO `people` VALUES (16, 'Mouzouri', 'Ilhame', NULL, 340016, 2, 1);
INSERT INTO `people` VALUES (17, 'Ndiaye', 'Moussa', NULL, 340017, 2, 1);
INSERT INTO `people` VALUES (18, 'Quellec', 'Nathan', NULL, 340018, 2, 1);
INSERT INTO `people` VALUES (19, 'Rajaratnam', 'Sarujan', NULL, 340019, 2, 1);
INSERT INTO `people` VALUES (20, 'Raypoulet', 'Hemanath', NULL, 340020, 2, 1);
INSERT INTO `people` VALUES (21, 'Sakho', 'Assane', NULL, 340021, 2, 1);
INSERT INTO `people` VALUES (22, 'Schauffler', 'Ophelie', NULL, 340022, 2, 1);
INSERT INTO `people` VALUES (23, 'Si-mohammed', 'Samy', NULL, 340023, 2, 1);
INSERT INTO `people` VALUES (24, 'Sidate', 'Alexis', NULL, 340024, 2, 1);
INSERT INTO `people` VALUES (25, 'Zemali', 'Lynda', NULL, 340025, 2, 1);
INSERT INTO `people` VALUES (26, 'Abalil', 'Rizlane', NULL, 340026, 2, 1);
INSERT INTO `people` VALUES (27, 'Achou', 'Sara', NULL, 340027, 2, 1);
INSERT INTO `people` VALUES (28, 'Akkoura', 'Aniesse', NULL, 340028, 2, 1);
INSERT INTO `people` VALUES (29, 'Ali', 'Ikram-masjid', NULL, 340029, 2, 1);
INSERT INTO `people` VALUES (30, 'Ali', 'Faiz', NULL, 340030, 2, 1);
INSERT INTO `people` VALUES (31, 'Ali', 'Ikram-masjid', NULL, 340031, 2, 1);
INSERT INTO `people` VALUES (32, 'Alouda', 'Lidao', NULL, 340032, 2, 1);
INSERT INTO `people` VALUES (33, 'Alouda', 'Lidao', NULL, 340033, 2, 1);
INSERT INTO `people` VALUES (34, 'Askar', 'Mohammad', NULL, 340034, 2, 1);
INSERT INTO `people` VALUES (35, 'Auger', 'Antoine', NULL, 340035, 2, 1);
INSERT INTO `people` VALUES (36, 'Auger', 'Antoine', NULL, 340036, 2, 1);
INSERT INTO `people` VALUES (37, 'Balde', 'Mamadou saliou', NULL, 340037, 2, 1);
INSERT INTO `people` VALUES (38, 'Baro', 'Mohamed', NULL, 340038, 2, 1);
INSERT INTO `people` VALUES (39, 'Barolle', 'Romain', NULL, 340039, 2, 1);
INSERT INTO `people` VALUES (40, 'Barolle', 'Romain', NULL, 340040, 2, 1);
INSERT INTO `people` VALUES (41, 'Barry', 'Aissatou', NULL, 340041, 2, 1);
INSERT INTO `people` VALUES (42, 'Belhaimeur', 'Mohamed', NULL, 340042, 2, 1);
INSERT INTO `people` VALUES (43, 'Benaissa', 'Adam', NULL, 340043, 2, 1);
INSERT INTO `people` VALUES (44, 'Benali', 'Ahmed', NULL, 340044, 2, 1);
INSERT INTO `people` VALUES (45, 'Berte', 'Ulrich', NULL, 340045, 2, 1);
INSERT INTO `people` VALUES (46, 'Berte', 'Ulrich', NULL, 340046, 2, 1);
INSERT INTO `people` VALUES (47, 'Beyaz', 'Sefkan', NULL, 340047, 2, 1);
INSERT INTO `people` VALUES (48, 'Bodart', 'Valentin', NULL, 340048, 2, 1);
INSERT INTO `people` VALUES (49, 'Boucamus', 'Cassandra', NULL, 340049, 2, 1);
INSERT INTO `people` VALUES (50, 'Boumaza', 'Karim', NULL, 340050, 2, 1);
INSERT INTO `people` VALUES (51, 'Bouzekri', 'Ryan', NULL, 340051, 2, 1);
INSERT INTO `people` VALUES (52, 'Bouzekri', 'Ryan', NULL, 340052, 2, 1);
INSERT INTO `people` VALUES (53, 'Callet', 'Theo', NULL, 340053, 2, 1);
INSERT INTO `people` VALUES (54, 'Callet', 'Theo', NULL, 340054, 2, 1);
INSERT INTO `people` VALUES (55, 'Cazenave', 'Louis', NULL, 340055, 2, 1);
INSERT INTO `people` VALUES (56, 'Chatillon', 'Julien', NULL, 340056, 2, 1);
INSERT INTO `people` VALUES (57, 'Chatillon', 'Julien', NULL, 340057, 2, 1);
INSERT INTO `people` VALUES (58, 'Chen', 'Juline', NULL, 340058, 2, 1);
INSERT INTO `people` VALUES (59, 'Chen', 'Juline', NULL, 340059, 2, 1);
INSERT INTO `people` VALUES (60, 'Crentsil', 'Robert', NULL, 340060, 2, 1);
INSERT INTO `people` VALUES (61, 'Crentsil', 'Robert', NULL, 340061, 2, 1);
INSERT INTO `people` VALUES (62, 'Dandeu', 'Tom', NULL, 340062, 2, 1);
INSERT INTO `people` VALUES (63, 'Dandeu', 'Tom', NULL, 340063, 2, 1);
INSERT INTO `people` VALUES (64, 'Delaporte', 'Lucie', NULL, 340064, 2, 1);
INSERT INTO `people` VALUES (65, 'Delaporte', 'Lucie', NULL, 340065, 2, 1);
INSERT INTO `people` VALUES (66, 'Diop', 'Maguette', NULL, 340066, 2, 1);
INSERT INTO `people` VALUES (67, 'Djamaldine ben', 'Hadji', NULL, 340067, 2, 1);
INSERT INTO `people` VALUES (68, 'Dubois', 'Dorian', NULL, 340068, 2, 1);
INSERT INTO `people` VALUES (69, 'El amrani', 'Amine', NULL, 340069, 2, 1);
INSERT INTO `people` VALUES (70, 'Esmel', 'Nome', NULL, 340070, 2, 1);
INSERT INTO `people` VALUES (71, 'Fahim', 'Aymane', NULL, 340071, 2, 1);
INSERT INTO `people` VALUES (72, 'Fekih', 'Kevin', NULL, 340072, 2, 1);
INSERT INTO `people` VALUES (73, 'Feugier', 'Augustin', NULL, 340073, 2, 1);
INSERT INTO `people` VALUES (74, 'Gac', 'Kevin', NULL, 340074, 2, 1);
INSERT INTO `people` VALUES (75, 'Ganeshn', 'Haresh', NULL, 340075, 2, 1);
INSERT INTO `people` VALUES (76, 'Gavalda', 'Clement', NULL, 340076, 2, 1);
INSERT INTO `people` VALUES (77, 'Gilbert', 'Cyprien', NULL, 340077, 2, 1);
INSERT INTO `people` VALUES (78, 'Gilbert', 'Cyprien', NULL, 340078, 2, 1);
INSERT INTO `people` VALUES (79, 'Gorlicki', 'Paul', NULL, 340079, 2, 1);
INSERT INTO `people` VALUES (80, 'Goyet', 'Camille', NULL, 340080, 2, 1);
INSERT INTO `people` VALUES (81, 'Goyet', 'Camille', NULL, 340081, 2, 1);
INSERT INTO `people` VALUES (82, 'Grandelaude', 'Mathias', NULL, 340082, 2, 1);
INSERT INTO `people` VALUES (83, 'Hadjara', 'Celina', NULL, 340083, 2, 1);
INSERT INTO `people` VALUES (84, 'Houhou', 'Sara', NULL, 340084, 2, 1);
INSERT INTO `people` VALUES (85, 'Igoudjilene', 'Kenza', NULL, 340085, 2, 1);
INSERT INTO `people` VALUES (86, 'Jalloh', 'Yusuf', NULL, 340086, 2, 1);
INSERT INTO `people` VALUES (87, 'Jardin', 'Samy', NULL, 340087, 2, 1);
INSERT INTO `people` VALUES (88, 'Jardin', 'Samy', NULL, 340088, 2, 1);
INSERT INTO `people` VALUES (89, 'Jules', 'Julissa', NULL, 340089, 2, 1);
INSERT INTO `people` VALUES (90, 'Kadi', 'Imane', NULL, 340090, 2, 1);
INSERT INTO `people` VALUES (91, 'Kadri', 'Nassim', NULL, 340091, 2, 1);
INSERT INTO `people` VALUES (92, 'Kende', 'Emmanuela', NULL, 340092, 2, 1);
INSERT INTO `people` VALUES (93, 'Kouhafa', 'Latifa', NULL, 340093, 2, 1);
INSERT INTO `people` VALUES (94, 'Lacom', 'Marveen', NULL, 340094, 2, 1);
INSERT INTO `people` VALUES (95, 'Le', 'Phong sac', NULL, 340095, 2, 1);
INSERT INTO `people` VALUES (96, 'Le lorier', 'Lucas', NULL, 340096, 2, 1);
INSERT INTO `people` VALUES (97, 'Legendre', 'Angele', NULL, 340097, 2, 1);
INSERT INTO `people` VALUES (98, 'Lemaza kunday ndjuka', 'Revelle', NULL, 340098, 2, 1);
INSERT INTO `people` VALUES (99, 'Limbasse', 'Noemie', NULL, 340099, 2, 1);
INSERT INTO `people` VALUES (100, 'Limbasse', 'Noemie', NULL, 340100, 2, 1);
INSERT INTO `people` VALUES (101, 'Lin', 'Xinlei', NULL, 340101, 2, 1);
INSERT INTO `people` VALUES (102, 'Louveau', 'Christophe', NULL, 340102, 2, 1);
INSERT INTO `people` VALUES (103, 'Malinvaud', 'Paul', NULL, 340103, 2, 1);
INSERT INTO `people` VALUES (104, 'Martin', 'Vanessa', NULL, 340104, 2, 1);
INSERT INTO `people` VALUES (105, 'Medaoud', 'Salim', NULL, 340105, 2, 1);
INSERT INTO `people` VALUES (106, 'Mousset', 'Pierre', NULL, 340106, 2, 1);
INSERT INTO `people` VALUES (107, 'Mousset', 'Pierre', NULL, 340107, 2, 1);
INSERT INTO `people` VALUES (108, 'Nanquette', 'Olivier', NULL, 340108, 2, 1);
INSERT INTO `people` VALUES (109, 'Nanquette', 'Olivier', NULL, 340109, 2, 1);
INSERT INTO `people` VALUES (110, 'Nass', 'Julien', NULL, 340110, 2, 1);
INSERT INTO `people` VALUES (111, 'Nass', 'Julien', NULL, 340111, 2, 1);
INSERT INTO `people` VALUES (112, 'Noursaid', 'Lahcen', NULL, 340112, 2, 1);
INSERT INTO `people` VALUES (113, 'Oumbe oumbe', 'David', NULL, 340113, 2, 1);
INSERT INTO `people` VALUES (114, 'Pires', 'Dany', NULL, 340114, 2, 1);
INSERT INTO `people` VALUES (115, 'Pires', 'Dany', NULL, 340115, 2, 1);
INSERT INTO `people` VALUES (116, 'Quenum', 'Heloise', NULL, 340116, 2, 1);
INSERT INTO `people` VALUES (117, 'Quenum', 'Heloise', NULL, 340117, 2, 1);
INSERT INTO `people` VALUES (118, 'Rageh', 'Nydel', NULL, 340118, 2, 1);
INSERT INTO `people` VALUES (119, 'Rageh', 'Nydel', NULL, 340119, 2, 1);
INSERT INTO `people` VALUES (120, 'Ripert', 'Alexandre', NULL, 340120, 2, 1);
INSERT INTO `people` VALUES (121, 'Sadat', 'Halima', NULL, 340121, 2, 1);
INSERT INTO `people` VALUES (122, 'Sardaoui', 'Amine', NULL, 340122, 2, 1);
INSERT INTO `people` VALUES (123, 'Sereir', 'Zohra', NULL, 340123, 2, 1);
INSERT INTO `people` VALUES (124, 'Sharma', 'Aurelien', NULL, 340124, 2, 1);
INSERT INTO `people` VALUES (125, 'Sintes', 'Manon', NULL, 340125, 2, 1);
INSERT INTO `people` VALUES (126, 'Smahi', 'Lydia', NULL, 340126, 2, 1);
INSERT INTO `people` VALUES (127, 'Soleil', 'Emilie', NULL, 340127, 2, 1);
INSERT INTO `people` VALUES (128, 'Soumare', 'Fatimata', NULL, 340128, 2, 1);
INSERT INTO `people` VALUES (129, 'Sun', 'Jialei', NULL, 340129, 2, 1);
INSERT INTO `people` VALUES (130, 'Tahir', 'Mohamed - imrane', NULL, 340130, 2, 1);
INSERT INTO `people` VALUES (131, 'Tissot', 'Guilhem', NULL, 340131, 2, 1);
INSERT INTO `people` VALUES (132, 'Tliba', 'Ahmed', NULL, 340132, 2, 1);
INSERT INTO `people` VALUES (133, 'LE ROUX', 'Annaig', NULL, 34100, 1, 5);
INSERT INTO `people` VALUES (134, 'Bouchakhchoukha', 'Adel', NULL, 34101, 1, 5);
INSERT INTO `people` VALUES (135, 'BELLINI', 'Béatrice', NULL, 34102, 1, 5);
INSERT INTO `people` VALUES (136, 'Hardouin Ceccantini', 'Cécile', NULL, 34103, 1, 5);
INSERT INTO `people` VALUES (137, 'Mesnager', 'Laurent', NULL, 34104, 1, 5);
INSERT INTO `people` VALUES (138, 'Le Cun', 'Bertrand', NULL, 34105, 1, 5);
INSERT INTO `people` VALUES (139, 'Hanen', 'Claire', NULL, 34106, 1, 5);
INSERT INTO `people` VALUES (140, 'Guyon', 'Thomas', NULL, 34107, 1, 5);
INSERT INTO `people` VALUES (141, 'Ben Hamida Mrabet', 'Sana', NULL, 34108, 1, 5);
INSERT INTO `people` VALUES (142, 'Ikken', 'Sonia', NULL, 34109, 1, 5);
INSERT INTO `people` VALUES (143, 'Gervais', 'Marie-Pierre', NULL, 34110, 1, 5);
INSERT INTO `people` VALUES (144, 'Duvernet', 'Laurent', NULL, 34111, 1, 5);
INSERT INTO `people` VALUES (145, 'Castillo_', 'Alberto', NULL, 34112, 1, 5);
INSERT INTO `people` VALUES (146, 'Baarir', 'Souheib', NULL, 34113, 1, 5);
INSERT INTO `people` VALUES (147, 'Delbot', 'François', NULL, 34114, 1, 5);
INSERT INTO `people` VALUES (148, 'Azhar-Arnal', 'Juliette', NULL, 34115, 1, 5);
INSERT INTO `people` VALUES (149, 'Rukoz-Castillo', 'Marta', NULL, 34116, 1, 5);
INSERT INTO `people` VALUES (150, 'Legond-Aubry', 'Fabrice', NULL, 34117, 1, 5);
INSERT INTO `people` VALUES (151, 'Quinio', 'Bernard', NULL, 34118, 1, 5);
INSERT INTO `people` VALUES (152, 'Pradat-Peyre', 'Jean-François', NULL, 34119, 1, 5);
INSERT INTO `people` VALUES (153, 'Ameur', 'Yannick', NULL, 34120, 1, 5);
INSERT INTO `people` VALUES (154, 'Décallonne', 'Marc', NULL, 34121, 1, 5);
INSERT INTO `people` VALUES (155, 'Dubois', 'Aloîs', NULL, 34122, 1, 5);
INSERT INTO `people` VALUES (156, 'Duriez', 'Nathalie', NULL, 34123, 1, 5);
INSERT INTO `people` VALUES (157, 'Florea', 'Paul', NULL, 34124, 1, 5);
INSERT INTO `people` VALUES (158, 'Isoard', 'Thierry Michel', NULL, 34125, 1, 5);
INSERT INTO `people` VALUES (159, 'Latif', 'Youssef', NULL, 34126, 1, 5);
INSERT INTO `people` VALUES (160, 'Leloir', 'Nicole', NULL, 34127, 1, 5);
INSERT INTO `people` VALUES (161, 'Novelli', 'Emmanuelle', NULL, 34128, 1, 5);
INSERT INTO `people` VALUES (162, 'Pujol', 'Nicolas', NULL, 34129, 1, 5);
INSERT INTO `people` VALUES (163, 'Renaud', 'Francis', NULL, 34130, 1, 5);
INSERT INTO `people` VALUES (164, 'Serdoun', 'Samy', NULL, 34131, 1, 5);
INSERT INTO `people` VALUES (165, 'Starck', 'Monia', NULL, 34132, 1, 5);
INSERT INTO `people` VALUES (166, 'Thomas', 'Aurélie', NULL, 34133, 1, 5);
INSERT INTO `people` VALUES (167, 'Tourvieille', 'Marc', NULL, 34134, 1, 5);
INSERT INTO `people` VALUES (168, 'Zamfirou', 'Michel', NULL, 34135, 1, 5);
INSERT INTO `people` VALUES (169, 'Zilova', 'Jana', NULL, 34136, 1, 5);
INSERT INTO `people` VALUES (170, 'Menouer', 'Tarek', NULL, 34137, 1, 5);
INSERT INTO `people` VALUES (171, 'Rodier', 'Lise', NULL, 34138, 1, 5);
INSERT INTO `people` VALUES (172, 'Angarita Arocha', 'Rafael Enrique', NULL, 34139, 1, 5);
INSERT INTO `people` VALUES (173, 'Ait Salaht', 'Farah', NULL, 34140, 1, 5);
INSERT INTO `people` VALUES (174, 'Rousseau', 'Pierre', NULL, 34141, 1, 5);
INSERT INTO `people` VALUES (175, 'Medjek', 'Sarah', NULL, 34142, 1, 5);
INSERT INTO `people` VALUES (176, 'Guézou', 'Xavier', NULL, 34143, 1, 5);
INSERT INTO `people` VALUES (177, 'D_Alfonso', 'Giovanna', NULL, 34144, 1, 5);
INSERT INTO `people` VALUES (178, 'KELLOU-MENOUER', 'Kenza', NULL, 34145, 1, 5);
INSERT INTO `people` VALUES (179, 'Oulhaci', 'Faiza', NULL, 34146, 1, 5);
INSERT INTO `people` VALUES (180, 'Poizat', 'Pascal', NULL, 34147, 1, 5);
INSERT INTO `people` VALUES (181, 'SADDEM', 'Rim ', NULL, 34148, 1, 5);
INSERT INTO `people` VALUES (182, 'BENAMMAR', 'Nassima ', NULL, 34149, 1, 5);
INSERT INTO `people` VALUES (183, 'ARFAOUI', 'Khadija', NULL, 34150, 1, 5);
INSERT INTO `people` VALUES (184, 'Walter', 'Jean-Marc', NULL, 34151, 1, 5);
INSERT INTO `people` VALUES (185, 'Bendraou', 'Reda', NULL, 34152, 1, 5);
INSERT INTO `people` VALUES (186, 'Cojean', 'Bruno', NULL, 34153, 1, 5);
INSERT INTO `people` VALUES (187, 'Abrantes', 'Pedro', NULL, 34154, 1, 5);
INSERT INTO `people` VALUES (188, 'Zouari', 'Belhassen', NULL, 34155, 1, 5);
INSERT INTO `people` VALUES (189, 'HOUHOU', 'Sara ', NULL, 34156, 1, 5);
INSERT INTO `people` VALUES (190, 'GUEHIS-SAADAOUI', 'Sonia', NULL, 34157, 1, 5);
INSERT INTO `people` VALUES (191, 'Hillah', 'Lom Messan', NULL, 34158, 1, 5);
INSERT INTO `people` VALUES (192, 'Hmedeh', 'Zeinab', NULL, 34159, 1, 5);
INSERT INTO `people` VALUES (193, 'Gherbi', 'Tahar', NULL, 34160, 1, 5);
INSERT INTO `people` VALUES (194, 'Alaoui', 'Malek', NULL, 34161, 1, 5);
INSERT INTO `people` VALUES (195, 'Non defini', 'Non defini', NULL, 404, 1, 5);
INSERT INTO `people` VALUES (196, 'Pierre', 'Laurent', NULL, 34163, 1, 5);
INSERT INTO `people` VALUES (197, 'Hyon', 'Emmanuel', NULL, 34164, 1, 5);

-- ----------------------------
-- Table structure for school_years
-- ----------------------------
DROP TABLE IF EXISTS `school_years`;
CREATE TABLE `school_years`  (
  `year` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`year`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2021 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of school_years
-- ----------------------------
INSERT INTO `school_years` VALUES (2019);

-- ----------------------------
-- Table structure for statuses
-- ----------------------------
DROP TABLE IF EXISTS `statuses`;
CREATE TABLE `statuses`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of statuses
-- ----------------------------
INSERT INTO `statuses` VALUES (1, 'ETU');
INSERT INTO `statuses` VALUES (2, 'PR');
INSERT INTO `statuses` VALUES (3, 'MCF');
INSERT INTO `statuses` VALUES (4, 'VAC_EXT');
INSERT INTO `statuses` VALUES (5, 'VAC_INT');

SET FOREIGN_KEY_CHECKS = 1;
