/*
 Navicat Premium Data Transfer

 Source Server         : Test
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:8111
 Source Schema         : flowerworld

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 13/05/2021 20:11:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blog_categories
-- ----------------------------
DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE `blog_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of blog_categories
-- ----------------------------
INSERT INTO `blog_categories` VALUES (1, 'Romantic', 'this is romantic category', 1, '2021-03-31 13:43:33', '2021-03-31 13:43:33');
INSERT INTO `blog_categories` VALUES (2, 'Happy Flower', 'this is Happy  category', 1, '2021-03-31 13:44:34', '2021-03-31 13:44:34');
INSERT INTO `blog_categories` VALUES (3, 'Sad Story1', 'This is sad category', 1, '2021-04-02 14:11:35', '2021-04-02 14:24:36');

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_id` int UNSIGNED NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, 'Day la title 1111 heheheheheeeee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,', '4615_only-one.jpg', '<p>this is content this is content this is content this is content this is content1</p>', 1, 0, '2021-04-03 22:07:15', '2021-04-11 09:44:39');
INSERT INTO `blogs` VALUES (2, 'Day la title 2222  heheheheheeeee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,', 'hoang-anh.jpg', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -15px; top: 38.6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 2, 1, '2021-04-03 15:57:31', '2021-04-11 09:45:04');
INSERT INTO `blogs` VALUES (3, 'Day la title 3333 heheheheheeeee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,', '6020_tinh-yeu-vinh-cuu-2.jpg', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -60px; top: 38.6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 2, 1, '2021-04-03 16:02:01', '2021-04-11 09:45:20');
INSERT INTO `blogs` VALUES (4, 'Day la title 4444 heheheheheeeee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,', '8023_cheer-up.png', '<p>adsasasd</p>', 1, 1, '2021-04-03 16:02:17', '2021-04-11 09:15:59');
INSERT INTO `blogs` VALUES (5, 'Day la title 5555 heheheheheeeee', 'Study on the effect of different drying methods on Korean mint flower', 'hinh-anh-hoa-huong-duong-o-Da-Lat.jpg', '<h1>Study on the effect of different drying methods on Korean mint flower</h1>\r\n\r\n<p>Edible flowers have been used in the food and beverage industries because of their high nutritional value, flavor, and scent. For the storage of edible flowers used in these industries, drying is a necessity to store the materials more easily and prevent the damage of metabolites in the flowers. However, drying may affect metabolite retention because drying conditions can differ according to the various methods.</p>\r\n\r\n<p>In this study, Agastache rugosa flowers were dried using four different methods (oven drying at 25 &plusmn; 1 &deg;C, 50 &plusmn; 1 &deg;C, 80 &plusmn; 1 &deg;C, and freeze drying) and primary and secondary metabolites were analyzed using high-performance liquid chromatography (HPLC) and gas chromatography time-of-flight mass spectrometry (GC-TOF/MS). Freeze-dried flower samples contained higher levels of carotenoids (lutein, 13Z-&beta;-carotene, &beta;-carotene, and 9Z-&beta;-carotene) and phenolics (rosmarinic acid, ferulic acid, and sinapic acid).</p>\r\n\r\n<p>Contrarily, the 80 &deg;C oven-dried flower samples contained higher levels of most amino acids and flavonoids (including acacetin and tilianin) and at 25 &deg;C and 50 &deg;C contained higher levels of carbohydrates. Therefore, freeze-drying is a suitable method for retaining carotenoids and phenolics. In contrast, oven drying at 50 &deg;C was highly recommended to retain amino acids and flavonoids.</p>\r\n\r\n<p>Read the complete article at&nbsp;<a href=\"https://www.mdpi.com/2073-4395/11/4/698\" target=\"_blank\">www.mdpi.com.</a></p>\r\n\r\n<p><em>Park, C.H.; Yeo, H.J.; Park, C.; Chung, Y.S.; Park, S.U. The Effect of Different Drying Methods on Primary and Secondary Metabolites in Korean Mint Flower.&nbsp;Agronomy&nbsp;2021,&nbsp;11, 698. https://doi.org/10.3390/agronomy11040698&nbsp;</em></p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 5px; top: -7.2px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1, 1, '2021-04-03 16:02:35', '2021-04-11 09:42:53');
INSERT INTO `blogs` VALUES (8, 'Day la title 6666 heheheheheeeee', 'Pansy a perfect April flower Pansy a perfect April flower', 'hoang-anh.jpg', '<p>The cool weather of April is perfect for pansies.</p>\r\n\r\n<p>Pansies are surprisingly hearty in cold weather. They&rsquo;ll survive a frost, bouncing back from even single digit temperatures, according to The Old Farmer&rsquo;s Alamanc.</p>\r\n\r\n<p>If the blooms wither in the cold, the plants will often stay alive to bloom again, which makes them a great flowering plant for fall and early winter color.</p>\r\n\r\n<p>Pansies have heart-shaped, overlapping petals and one of the widest ranges of bright, pretty colors and patterns, according to The Almanac.</p>\r\n\r\n<p>Pansies are good for containers, borders, and as ground cover, they are a go-to flower for reliable color almost year-round, the almanac said.</p>\r\n\r\n<p>Brighten your front door with pots of transplanted pansies or place them in outdoor beds as soon as the soil can be worked.</p>\r\n\r\n<p>Purchase large plants that will give a good show before hot weather arrives.</p>\r\n\r\n<p>Remember to water pansies regularly. One of the most common reasons pansies fail is because they are not watered enough, so if your pansies are not doing well, try watering them more.</p>\r\n\r\n<p>Remove faded/dead flowers to encourage the plants to produce more blooms and to prolong the blooming season.</p>\r\n\r\n<p>Find more advice on growing pansies from The Old Farmer&rsquo;s Almanac online at&nbsp;<a href=\"https://www.almanac.com/plant/pansies\">https://www.almanac.com/plant/pansies</a></p>\r\n\r\n<p>As an Amazon Associate I earn from qualifying purchases.</p>', 3, 1, '2021-04-03 16:40:53', '2021-04-11 09:41:52');
INSERT INTO `blogs` VALUES (10, 'Day la title 7777 heheheheheeeee', 'Dutch grower Dennis van Leeuwen on new variety Topspin', 'topspin.jpg', '<p>Topspin is the new white chrysanthemum from Dekker Chrysanten and growers have high hopes for this variety. Three Dutch growers, Dekker Chrysanten, Arcadia Chrysanten and Van Leeuwen Flowers, added it to their assortment and Dennis van Leeuwen, owner of the latter nursery, shares his experiences so far with Topspin.</p>\r\n\r\n<p><img alt=\"\" src=\"https://agfstorage.blob.core.windows.net/misc/BP_nl/2021/04/09/topspin.jpg\" /></p>\r\n\r\n<p>&quot;We have been growing Zembla for nearly 20 years&quot;, he says. &quot;An excellent variety. We will therefore not stop growing this variety, but at the same time, we are looking for improvements and innovations. After trialing Topspin, we were immediately fond of this variety; uniform, sturdy stems, nice thick leaves, good vase life and a bright green center. In short, it&#39;s a gem. So, we started trialing this variety and now we are growing it for about half a year.&quot;</p>\r\n\r\n<p>Special about Topspin is that it can be supplied as spray and disbud chrysanthemum. In the past, this combination occurred more often, explains Dennis, but nowadays, it is special. Usually, a variety is being tested for the production as spray or disbud, so as this variety is both, makes it very special. Together with Arcadia, Van Leeuwen will supply it as a disbud and Dekker as a spray. Another quality is suitability for dyeing, which is another reason why it is eagerly picked up by the trade.</p>\r\n\r\n<p><strong>Improvements in quality</strong><br />\r\nBesides the white Topspin and the white and yellow Zembla, Van Leeuwen also grows the pink disbud Ksenia. This variety has been planted three years ago and he also expanded in acreage with this variety. &quot;We&#39;ve made some new improvements in quality and it is paying off.&quot;</p>\r\n\r\n<p>For more information:<br />\r\n<strong><img alt=\"\" src=\"https://agfstorage.blob.core.windows.net/misc/BP_nl/2021/04/09/leeuwenlogo.jpg\" />Chrysanten kwekerij Peet van Leeuwen</strong><br />\r\nScherpenhoeklaan 5<br />\r\n2685 AE Poeldijk<br />\r\nThe Netherlands<br />\r\nDennis van Leeuwen<br />\r\n<a href=\"mailto:dvl@vannova.nl?subject=Reactie%20op%20BPnieuws.nl%20artikel\" target=\"_blank\">dvl@vannova.nl</a><br />\r\n<a href=\"http://www.peetvanleeuwenflowers.nl/\" target=\"_blank\">www.peetvanleeuwenflowers.nl&nbsp;</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dekker Chrysanten BV</strong><strong><img alt=\"\" src=\"https://cdn.bpnieuws.nl/nieuws/2016/1705/dekkerlogo.jpg\" style=\"height:100px; width:135px\" /></strong><br />\r\nJulianaweg 6a<br />\r\n1711 RP Hensbroek<br />\r\nThe Netherlands<br />\r\n<a href=\"mailto:LisanneBorst@dekkerchrysanten.com?subject=Reactie%20op%20BPnieuws.nl%20artikel\" target=\"_blank\">LisanneBorst@dekkerchrysanten.com</a><br />\r\n<a href=\"http://www.dekkerchrysanten.com/\" target=\"_blank\">www.dekkerchrysanten.com</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Publication date:&nbsp;Fri 9 Apr 2021</p>', 3, 1, '2021-04-04 15:42:52', '2021-05-09 16:43:51');

-- ----------------------------
-- Table structure for colors
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of colors
-- ----------------------------
INSERT INTO `colors` VALUES (1, 'Red', 1, '2021-02-17 21:23:55', '2021-02-24 14:33:30');
INSERT INTO `colors` VALUES (2, 'Yellow', 1, NULL, NULL);
INSERT INTO `colors` VALUES (3, 'Pink', 1, NULL, NULL);
INSERT INTO `colors` VALUES (4, 'Orange', 1, NULL, NULL);
INSERT INTO `colors` VALUES (5, 'White', 1, NULL, NULL);
INSERT INTO `colors` VALUES (6, 'Blue', 1, NULL, NULL);
INSERT INTO `colors` VALUES (7, 'Purple', 1, NULL, NULL);
INSERT INTO `colors` VALUES (8, 'Lavender', 1, NULL, NULL);
INSERT INTO `colors` VALUES (9, 'Green', 1, NULL, NULL);
INSERT INTO `colors` VALUES (10, 'Black', 1, NULL, NULL);
INSERT INTO `colors` VALUES (17, 'test123', 1, '2021-05-06 06:09:19', '2021-05-06 06:11:31');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int UNSIGNED NULL DEFAULT NULL,
  `blog_id` int NULL DEFAULT NULL,
  `customer_id` int UNSIGNED NULL DEFAULT NULL,
  `content_comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `star_rate` int NULL DEFAULT NULL,
  `status` int UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 58, NULL, 1, 'Hoa Rat Dep hehe', 3, 1, '2021-04-30 18:31:52', '2021-04-30 18:31:52');
INSERT INTO `comments` VALUES (2, 56, NULL, 122, 'abc abcadasdasdasd', 2, 1, '2021-04-30 18:34:30', '2021-04-30 18:34:30');
INSERT INTO `comments` VALUES (3, 58, NULL, 2, 'Hoa Dep Vua Vua', 4, 1, '2021-05-01 17:19:31', '2021-05-07 17:19:34');
INSERT INTO `comments` VALUES (4, 58, NULL, 122, 'Hoa qua dattttttt', NULL, 1, '2021-05-01 10:25:17', '2021-05-01 10:25:17');
INSERT INTO `comments` VALUES (5, 55, NULL, 122, 'Hoa OKIELA', NULL, 1, '2021-05-01 10:27:47', '2021-05-01 10:27:47');
INSERT INTO `comments` VALUES (6, 55, NULL, 122, 'fsdf', 4, 1, '2021-05-01 10:42:08', '2021-05-01 10:42:08');
INSERT INTO `comments` VALUES (7, 58, NULL, 122, 'san pham qua tee', 1, 1, '2021-05-01 10:53:40', '2021-05-01 10:53:40');
INSERT INTO `comments` VALUES (8, 71, NULL, 1, 'tuyệt vời', 5, 1, '2021-05-04 17:20:51', '2021-05-04 17:20:51');
INSERT INTO `comments` VALUES (9, 71, NULL, 1, 'tuyệt vời', 5, 1, '2021-05-04 17:22:20', '2021-05-04 17:22:20');
INSERT INTO `comments` VALUES (10, 62, NULL, 1, 'Khá là OKE', 4, 1, '2021-05-04 17:22:53', '2021-05-04 17:22:53');
INSERT INTO `comments` VALUES (11, 60, NULL, NULL, 'This product is okiee', 4, 1, '2021-05-09 02:04:32', '2021-05-09 02:04:32');
INSERT INTO `comments` VALUES (12, 55, NULL, 123, 'hello hello hehee', 4, 1, '2021-05-09 02:10:11', '2021-05-09 02:10:11');
INSERT INTO `comments` VALUES (13, NULL, 10, 123, '2 starrrrrrr', 2, 1, '2021-05-09 02:10:33', '2021-05-09 02:10:33');
INSERT INTO `comments` VALUES (14, NULL, 10, 123, 'comment 3 sao cho blog id =10 nay nhe hehe', 3, 1, '2021-05-09 17:49:51', '2021-05-09 17:49:51');
INSERT INTO `comments` VALUES (15, NULL, 1, 123, 'comment 3 sao cho blog id =10 nay nhe hehe', 3, 1, '2021-05-09 17:50:14', '2021-05-09 17:50:14');
INSERT INTO `comments` VALUES (16, NULL, 1, 123, 'comment 3 sao cho blog id =10 nay nhe hehe', 3, 1, '2021-05-09 17:50:52', '2021-05-09 17:50:52');
INSERT INTO `comments` VALUES (17, 62, NULL, 123, 'So bad flower ! one star!', 1, 1, '2021-05-09 17:52:23', '2021-05-09 17:52:23');
INSERT INTO `comments` VALUES (18, 58, NULL, 123, '5 star! awesome!', 5, 1, '2021-05-09 17:56:19', '2021-05-09 17:56:19');
INSERT INTO `comments` VALUES (19, NULL, 4, 123, '5 sao khong noi nhieu hehe', 5, 1, '2021-05-09 18:56:08', '2021-05-09 18:56:08');

-- ----------------------------
-- Table structure for coupons
-- ----------------------------
DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` int NOT NULL COMMENT '1: Percent, 2: Money',
  `coupon_value` int NOT NULL,
  `times_limit` int NULL DEFAULT NULL,
  `expired_date` datetime(0) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` int NOT NULL DEFAULT 1,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of coupons
-- ----------------------------
INSERT INTO `coupons` VALUES (1, 'TESTCODE1', 1, 10, 5, '2021-10-02 23:16:37', ' first test coupon hehe', 1, NULL, '2021-05-02 23:16:37', '2021-05-02 23:17:21');
INSERT INTO `coupons` VALUES (2, 'TESTCODE2edit', 1, 33, 5, '2021-05-29 00:00:00', '<p>second test coupon123</p>', 1, NULL, '2021-05-02 23:18:00', '2021-05-02 18:02:29');
INSERT INTO `coupons` VALUES (3, 'CODETEST1', 2, 40, 4, '2021-05-29 00:00:00', '<p>Third coupon test heheeeee</p>', 1, NULL, '2021-05-02 16:51:18', '2021-05-02 16:51:18');
INSERT INTO `coupons` VALUES (4, 'đâsdasd', 2, 200, 2, '1970-01-01 00:00:00', '<p>2eawd</p>', 1, NULL, '2021-05-02 17:33:09', '2021-05-02 18:06:07');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for image_product
-- ----------------------------
DROP TABLE IF EXISTS `image_product`;
CREATE TABLE `image_product`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `status` int UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of image_product
-- ----------------------------

-- ----------------------------
-- Table structure for job_categories
-- ----------------------------
DROP TABLE IF EXISTS `job_categories`;
CREATE TABLE `job_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `job_categories_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of job_categories
-- ----------------------------

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int UNSIGNED NOT NULL,
  `customer_id` int UNSIGNED NOT NULL,
  `like_number` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of likes
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (3, '2020_11_20_020339_create_addresses_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_11_20_020433_create_job_categories_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_11_20_020542_create_company_information_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_11_20_035001_create_company_job_category_table', 1);
INSERT INTO `migrations` VALUES (37, '2014_10_12_000000_create_users_table', 2);
INSERT INTO `migrations` VALUES (38, '2014_10_12_100000_create_password_resets_table', 2);
INSERT INTO `migrations` VALUES (39, '2019_08_19_000000_create_failed_jobs_table', 2);
INSERT INTO `migrations` VALUES (40, '2021_01_23_032434_create_products_table', 2);
INSERT INTO `migrations` VALUES (41, '2021_01_23_032503_create_topics_table', 2);
INSERT INTO `migrations` VALUES (42, '2021_01_23_032504_create_product_sizes_table', 2);
INSERT INTO `migrations` VALUES (43, '2021_01_23_032509_create_product_colors_table', 2);
INSERT INTO `migrations` VALUES (44, '2021_01_23_032515_create_image_product_table', 2);
INSERT INTO `migrations` VALUES (45, '2021_01_23_032949_create_orders_table', 2);
INSERT INTO `migrations` VALUES (46, '2021_01_23_032955_create_transactions_table', 2);
INSERT INTO `migrations` VALUES (47, '2021_01_23_033209_create_order_products_table', 2);
INSERT INTO `migrations` VALUES (48, '2021_01_23_033237_create_blogs_table', 2);
INSERT INTO `migrations` VALUES (49, '2021_01_23_033249_create_blog_categories_table', 2);
INSERT INTO `migrations` VALUES (50, '2021_01_23_033323_create_comments_table', 2);
INSERT INTO `migrations` VALUES (51, '2021_01_23_033336_create_reply_comments_table', 2);
INSERT INTO `migrations` VALUES (52, '2021_01_23_033425_create_likes_table', 2);
INSERT INTO `migrations` VALUES (53, '2021_02_24_153600_create_product_size_table', 3);
INSERT INTO `migrations` VALUES (54, '2021_02_24_154232_create_product_color_table', 4);
INSERT INTO `migrations` VALUES (55, '2021_03_07_134700_add_featured_to_products_table', 5);
INSERT INTO `migrations` VALUES (56, '2021_04_11_152425_create_selected_equipment_table', 6);
INSERT INTO `migrations` VALUES (57, '2021_05_01_184913_create_coupons_table', 7);

-- ----------------------------
-- Table structure for order_products
-- ----------------------------
DROP TABLE IF EXISTS `order_products`;
CREATE TABLE `order_products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_products
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Add them product_name (chua migrate)',
  `qty` int NOT NULL,
  `amount` double(8, 2) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, 1, 4, 'Bettie Wolf', 2, 176.00, NULL, 1, '2021-03-18 08:31:15', '2021-03-18 08:31:15');
INSERT INTO `orders` VALUES (2, 1, 10, 'Ernest Keeling I', 2, 176.00, NULL, 1, '2021-03-18 08:31:15', '2021-03-18 08:31:15');
INSERT INTO `orders` VALUES (3, 2, 4, 'Bettie Wolf', 2, 176.00, NULL, 1, '2021-03-18 08:32:19', '2021-03-18 08:32:19');
INSERT INTO `orders` VALUES (4, 2, 10, 'Ernest Keeling I', 2, 176.00, NULL, 1, '2021-03-18 08:32:19', '2021-03-18 08:32:19');
INSERT INTO `orders` VALUES (5, 3, 26, 'Mr. Tristin Von', 2, 244.00, NULL, 1, '2021-03-18 08:36:41', '2021-03-18 08:36:41');
INSERT INTO `orders` VALUES (6, 3, 50, 'test add', 3, 3636.00, NULL, 1, '2021-03-18 08:36:41', '2021-03-18 08:36:41');
INSERT INTO `orders` VALUES (7, 4, 53, 'test adddd', 2, 2424.00, NULL, 1, '2021-03-18 08:39:10', '2021-03-18 08:39:10');
INSERT INTO `orders` VALUES (8, 4, 49, 'test add', 3, 3636.00, NULL, 1, '2021-03-18 08:39:10', '2021-03-18 08:39:10');
INSERT INTO `orders` VALUES (9, 5, 2, 'Mr. Wayne Carroll', 1, 116.00, NULL, 1, '2021-03-20 16:19:49', '2021-03-20 16:19:49');
INSERT INTO `orders` VALUES (10, 6, 1, 'Althea Batz', 2, 200.00, NULL, 1, '2021-03-21 03:47:33', '2021-03-21 03:47:33');
INSERT INTO `orders` VALUES (11, 7, 1, 'Althea Batz', 2, 200.00, NULL, 1, '2021-03-21 03:51:36', '2021-03-21 03:51:36');
INSERT INTO `orders` VALUES (12, 8, 55, 'Aphrodite', 5, 745.00, NULL, 1, '2021-03-23 16:20:25', '2021-03-23 16:20:25');
INSERT INTO `orders` VALUES (13, 8, 63, 'Combo Love Me', 5, 1050.00, NULL, 1, '2021-03-23 16:20:25', '2021-03-23 16:20:25');
INSERT INTO `orders` VALUES (14, 9, 57, 'Combo Love Me', 3, 507.00, NULL, 1, '2021-03-24 16:11:14', '2021-03-24 16:11:14');
INSERT INTO `orders` VALUES (15, 9, 61, 'Combo Tune In For Love', 1, 198.00, NULL, 1, '2021-03-24 16:11:14', '2021-03-24 16:11:14');
INSERT INTO `orders` VALUES (16, 10, 57, 'Combo Love Me', 3, 507.00, NULL, 1, '2021-03-24 16:17:41', '2021-03-24 16:17:41');
INSERT INTO `orders` VALUES (17, 10, 61, 'Combo Tune In For Love', 1, 198.00, NULL, 1, '2021-03-24 16:17:41', '2021-03-24 16:17:41');
INSERT INTO `orders` VALUES (18, 11, 56, 'Crystal Pearl', 2, 222.00, NULL, 1, '2021-04-18 03:34:39', '2021-04-18 03:34:39');
INSERT INTO `orders` VALUES (19, 12, 60, 'Combo Reply Me', 1, 110.00, NULL, 1, '2021-05-02 18:29:49', '2021-05-02 18:29:49');
INSERT INTO `orders` VALUES (20, 12, 62, 'Combo Fly With Me', 2, 400.00, NULL, 1, '2021-05-02 18:29:49', '2021-05-02 18:29:49');
INSERT INTO `orders` VALUES (21, 13, 64, 'Combo Beautiful Darling', 1, 320.00, NULL, 1, '2021-05-03 08:40:14', '2021-05-03 08:40:14');
INSERT INTO `orders` VALUES (22, 13, 58, 'For The Beautiful', 1, 150.00, NULL, 1, '2021-05-03 08:40:14', '2021-05-03 08:40:14');
INSERT INTO `orders` VALUES (23, 14, 71, 'Peace', 2, 700.00, NULL, 1, '2021-05-03 09:19:10', '2021-05-03 09:19:10');
INSERT INTO `orders` VALUES (24, 14, 73, 'Autumn', 1, 300.00, NULL, 1, '2021-05-03 09:19:10', '2021-05-03 09:19:10');
INSERT INTO `orders` VALUES (25, 15, 73, 'Autumn', 2, 600.00, NULL, 1, '2021-05-08 18:24:52', '2021-05-08 18:24:52');
INSERT INTO `orders` VALUES (26, 15, 65, 'Combo Dream Land', 2, 400.00, NULL, 1, '2021-05-08 18:24:52', '2021-05-08 18:24:52');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for product_color
-- ----------------------------
DROP TABLE IF EXISTS `product_color`;
CREATE TABLE `product_color`  (
  `product_id` bigint UNSIGNED NOT NULL,
  `color_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `product_color_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `product_color_color_id_foreign`(`color_id`) USING BTREE,
  CONSTRAINT `product_color_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `product_color_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product_color
-- ----------------------------
INSERT INTO `product_color` VALUES (55, 1, NULL, NULL);
INSERT INTO `product_color` VALUES (55, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (56, 2, NULL, NULL);
INSERT INTO `product_color` VALUES (56, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (57, 1, NULL, NULL);
INSERT INTO `product_color` VALUES (58, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (58, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (59, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (60, 2, NULL, NULL);
INSERT INTO `product_color` VALUES (61, 2, NULL, NULL);
INSERT INTO `product_color` VALUES (61, 4, NULL, NULL);
INSERT INTO `product_color` VALUES (62, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (62, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (63, 1, NULL, NULL);
INSERT INTO `product_color` VALUES (64, 1, NULL, NULL);
INSERT INTO `product_color` VALUES (65, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (65, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (66, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (66, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (67, 7, NULL, NULL);
INSERT INTO `product_color` VALUES (68, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (69, 3, NULL, NULL);
INSERT INTO `product_color` VALUES (70, 7, NULL, NULL);
INSERT INTO `product_color` VALUES (71, 7, NULL, NULL);
INSERT INTO `product_color` VALUES (73, 2, NULL, NULL);
INSERT INTO `product_color` VALUES (75, 5, NULL, NULL);
INSERT INTO `product_color` VALUES (76, 10, NULL, NULL);
INSERT INTO `product_color` VALUES (55, 2, NULL, NULL);

-- ----------------------------
-- Table structure for product_size
-- ----------------------------
DROP TABLE IF EXISTS `product_size`;
CREATE TABLE `product_size`  (
  `product_id` bigint UNSIGNED NOT NULL,
  `size_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `product_size_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `product_size_size_id_foreign`(`size_id`) USING BTREE,
  CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product_size
-- ----------------------------
INSERT INTO `product_size` VALUES (55, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (55, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (56, 1, NULL, NULL);
INSERT INTO `product_size` VALUES (56, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (57, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (57, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (58, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (58, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (58, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (59, 1, NULL, NULL);
INSERT INTO `product_size` VALUES (59, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (59, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (60, 1, NULL, NULL);
INSERT INTO `product_size` VALUES (60, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (60, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (61, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (61, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (62, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (62, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (62, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (63, 1, NULL, NULL);
INSERT INTO `product_size` VALUES (63, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (64, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (64, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (65, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (65, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (66, 1, NULL, NULL);
INSERT INTO `product_size` VALUES (66, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (66, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (67, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (67, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (67, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (68, 1, NULL, NULL);
INSERT INTO `product_size` VALUES (68, 2, NULL, NULL);
INSERT INTO `product_size` VALUES (68, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (69, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (69, 7, NULL, NULL);
INSERT INTO `product_size` VALUES (70, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (70, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (73, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (73, 5, NULL, NULL);
INSERT INTO `product_size` VALUES (75, 3, NULL, NULL);
INSERT INTO `product_size` VALUES (75, 4, NULL, NULL);
INSERT INTO `product_size` VALUES (76, 1, NULL, NULL);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `sale_price` int NULL DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int UNSIGNED NOT NULL,
  `accessories` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` int NULL DEFAULT NULL,
  `qty` int NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (55, 'Aphrodite', 'aphrodite', 149, NULL, 'love1.jpeg', 1, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 45, 1, '2021-03-23 12:50:50', '2021-05-06 06:28:00');
INSERT INTO `products` VALUES (56, 'Crystal Pearl', 'crystal-pearl', 129, 111, 'love2.jpeg', 1, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 48, 1, '2021-03-23 13:03:24', '2021-04-18 03:34:39');
INSERT INTO `products` VALUES (57, 'Combo Love Me', 'combo-love-me', 169, 169, 'love3.jpeg', 1, 'Cake', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 44, 1, '2021-03-23 13:08:07', '2021-03-24 16:17:41');
INSERT INTO `products` VALUES (58, 'For The Beautiful', 'for-the-beautiful', 150, NULL, 'love4.jpeg', 1, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 39, 1, '2021-03-23 13:10:17', '2021-05-03 08:40:14');
INSERT INTO `products` VALUES (59, 'Combo Starlight', 'combo-starlight', 169, 159, 'love5.jpeg', 1, 'Pretty Beer', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 55, 1, '2021-03-23 13:13:08', '2021-03-23 13:13:08');
INSERT INTO `products` VALUES (60, 'Combo Reply Me', 'combo-reply-me', 119, 110, 'birthday1.jpeg', 2, 'Birthday cake', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 39, 1, '2021-03-23 13:18:39', '2021-05-02 18:29:49');
INSERT INTO `products` VALUES (61, 'Combo Tune In For Love', 'combo-tune-in-for-love', 200, NULL, 'birthday2.jpeg', 2, 'Cake + Paper', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 68, 1, '2021-03-23 13:20:15', '2021-03-24 16:17:41');
INSERT INTO `products` VALUES (62, 'Combo Fly With Me', 'combo-fly-with-me', 210, 200, 'birthday3.jpeg', 2, 'Cake', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 38, 1, '2021-03-23 13:21:42', '2021-05-02 18:29:49');
INSERT INTO `products` VALUES (63, 'Combo Love Me', 'combo-love-me', 220, 200, 'love3.jpeg', 2, 'Chocolate', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 45, 1, '2021-03-23 13:23:15', '2021-03-23 16:20:25');
INSERT INTO `products` VALUES (64, 'Combo Beautiful Darling', 'combo-beautiful-darling', 333, NULL, 'love6.jpeg', 1, 'Beer + Water', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', 1, 43, 1, '2021-03-23 13:26:32', '2021-05-09 01:41:03');
INSERT INTO `products` VALUES (65, 'Combo Dream Land', 'combo-dream-land', 233, 200, 'birthday6.jpeg', 1, 'Chocolate', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 25, 1, '2021-03-23 13:28:43', '2021-05-08 18:24:52');
INSERT INTO `products` VALUES (66, 'Cinderella Bridal', 'cinderella-bridal', 234, NULL, 'wedding1.jpeg', 3, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 60, 1, '2021-03-23 13:30:37', '2021-03-23 13:30:37');
INSERT INTO `products` VALUES (67, 'Cherish Bridal', 'cherish-bridal', 400, 399, 'wedding2.jpeg', 3, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 60, 1, '2021-03-23 13:31:49', '2021-03-23 13:31:49');
INSERT INTO `products` VALUES (68, 'Wholeheartedly Bridal', 'wholeheartedly-bridal', 400, NULL, 'wedding3.webp', 3, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 50, 1, '2021-03-23 13:32:55', '2021-03-23 13:32:55');
INSERT INTO `products` VALUES (69, 'Jubilant', 'jubilant', 600, 559, 'wedding4.jpeg', 3, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 50, 1, '2021-03-23 13:37:36', '2021-03-23 13:37:36');
INSERT INTO `products` VALUES (70, 'Eternity', 'eternity', 300, 298, 'sad1.jpeg', 10, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 60, 1, '2021-03-23 13:40:09', '2021-03-23 13:43:15');
INSERT INTO `products` VALUES (71, 'Peace', 'peace', 400, NULL, 'sad2.jpeg', 10, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 48, 1, '2021-03-23 13:41:29', '2021-05-03 09:19:10');
INSERT INTO `products` VALUES (73, 'Autumn', 'autumn', 400, 300, 'yellow.png', 1, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 19, 1, '2021-03-23 13:42:36', '2021-05-08 18:24:52');
INSERT INTO `products` VALUES (75, 'Beauty and Best', 'beauty-and-best', 444, 0, '4615_only-one.jpg', 7, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 60, 1, '2021-03-24 16:47:15', '2021-03-24 16:47:15');
INSERT INTO `products` VALUES (76, 'Hoa Huong Duong', 'hoa-huong-duong', 123, 222, '4615_only-one.jpg', 4, 'No', NULL, 'Only a flower with true roots, nurtured by a loving mother earth may bloom, for only then can they drink from the rain. To admire the bloom and ignore the need for roots is to accept the death of all flowers, to walk into a world where flowers are only pa', '<h2><strong>Free Shipping for bills over $ 199 in HCMC &amp; Hanoi.&nbsp;</strong></h2>\r\n\r\n<p>Same day delivery in Ho Chi Minh City &amp; Hanoi when pre-order 5pm every day; and delivery from 2-3 days to other provinces / cities nationwide.</p>\r\n\r\n<p>&nbsp;---------</p>\r\n\r\n<p><strong>Bouquet of delicate pastel colors, elegant with a few red roses, attracts all eyes. This will be the perfect surprise gift for your loved one, family or friends.</strong></p>\r\n\r\n<p>The Aphrodite Roses include:</p>\r\n\r\n<ul>\r\n	<li><em>B&oacute; Hoa Hồng Aphrodite&nbsp;</em>bao gồm:</li>\r\n</ul>\r\n\r\n<p>- 20 Roses</p>\r\n\r\n<p>- Other Flowers and Leaves</p>\r\n\r\n<p>* Since each product is handmade, it will be slightly different from the image available on the website.</p>', NULL, 33, 1, '2021-04-03 16:45:45', '2021-04-22 16:12:42');

-- ----------------------------
-- Table structure for reply_comments
-- ----------------------------
DROP TABLE IF EXISTS `reply_comments`;
CREATE TABLE `reply_comments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int UNSIGNED NOT NULL,
  `admin_id` int UNSIGNED NOT NULL,
  `comment_id` int UNSIGNED NOT NULL,
  `content_reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reply_comments
-- ----------------------------

-- ----------------------------
-- Table structure for sizes
-- ----------------------------
DROP TABLE IF EXISTS `sizes`;
CREATE TABLE `sizes`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `size_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sizes
-- ----------------------------
INSERT INTO `sizes` VALUES (1, 'S', 'Small', 0, NULL, NULL);
INSERT INTO `sizes` VALUES (2, 'M', 'Medium', 1, NULL, NULL);
INSERT INTO `sizes` VALUES (3, 'L', 'Large', 1, NULL, NULL);
INSERT INTO `sizes` VALUES (4, 'XL', 'Too Large', 1, NULL, NULL);
INSERT INTO `sizes` VALUES (5, 'XXL', 'Super Large', 1, NULL, NULL);
INSERT INTO `sizes` VALUES (7, 'XS MAXxx', 'khong biet mo ta giiii', 0, '2021-02-24 14:56:51', '2021-02-24 14:57:16');

-- ----------------------------
-- Table structure for topics
-- ----------------------------
DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 128 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES (1, 'Valentine', 'Includes love theme flowers, for those in love', '1', '2021-02-17 08:56:08', '2021-05-06 05:38:25');
INSERT INTO `topics` VALUES (2, 'Birthday', 'Includes birthday-themed flowers, indispensable for birthday parties.', '1', '2021-02-17 08:56:08', '2021-05-06 05:43:31');
INSERT INTO `topics` VALUES (3, 'Wedding', 'Include all kinds of wedding-themed flowers, which are indispensable for wedding parties.', '1', '2021-02-17 08:56:08', '2021-05-06 05:44:18');
INSERT INTO `topics` VALUES (4, 'Romantic', 'Including flowers with romantic themes, which are indispensable for weddings, proposals, and anniversary parties.', '1', '2021-02-17 08:56:08', '2021-05-06 05:45:29');
INSERT INTO `topics` VALUES (5, 'Tet Vietnam', 'New year theme flowers in Vietnam, flowers welcome spring', '1', '2021-02-17 08:56:08', '2021-05-06 05:46:48');
INSERT INTO `topics` VALUES (6, 'Good Health', 'Health day theme flowers, mild scent flowers make your spirit feel comfortable.', '1', '2021-02-17 08:56:08', '2021-05-06 05:48:50');
INSERT INTO `topics` VALUES (7, 'Apologize', 'Flower subject to apology, mild scent flowers to comfort.', '1', '2021-02-17 08:56:08', '2021-05-06 05:49:28');
INSERT INTO `topics` VALUES (8, 'International Women\'s Day', 'Flowers welcome International Women\'s Day, dedicated to the beautiful half of the world', '1', '2021-02-17 08:56:08', '2021-05-06 05:50:29');
INSERT INTO `topics` VALUES (9, 'Teacher\'s Day', 'Welcomes Vietnamese Teachers\' Day, honoring teachers in the field of education.', '1', '2021-02-17 08:56:08', '2021-05-06 05:51:50');
INSERT INTO `topics` VALUES (10, 'Condolatory', 'Condolences, for funerals.', '1', '2021-02-17 08:56:08', '2021-05-06 05:52:39');
INSERT INTO `topics` VALUES (11, 'Men\'s Day', 'Flowers for men, half of the world\'s men.', '1', '2021-02-17 08:56:08', '2021-05-06 05:53:29');
INSERT INTO `topics` VALUES (12, 'Children\'s Day', 'Flowers for children, celebrate world children\'s day', '1', '2021-02-17 08:56:08', '2021-05-06 05:54:14');

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint UNSIGNED NULL DEFAULT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `payment_method` int NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT 'change message to address',
  `status` int NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES (1, 44, 'Ronaldo', 'ronaldo@gmail.com', '0123456789', '111', 1, 'Portugal - Rome', 1, '2021-03-02 08:31:15', '2021-03-02 08:31:15');
INSERT INTO `transactions` VALUES (2, 55, 'cong lam tuan', 'lamtuancong@gmail.com', '0123456789', '2222', 1, 'HaNoi - HaDong', 1, '2021-03-18 08:32:19', '2021-03-09 08:32:19');
INSERT INTO `transactions` VALUES (3, 66, 'Lam Tang Jim', 'lamtangjim@gmail.com', '0123123123', '3333', 1, 'HaNoi - Hanoi', 1, '2021-03-18 08:36:41', '2021-03-24 08:36:41');
INSERT INTO `transactions` VALUES (4, 77, 'Lam Tang Khoi', 'lam.khoi@gmail.com', '0363636363', '6', 1, 'Kim Thu - ThanhOAI', 11, '2021-03-29 08:39:10', '2021-03-18 08:39:10');
INSERT INTO `transactions` VALUES (5, 88, 'abc abc abc', 'lamtuancong2807@gmail.com', '1234563434', '116', 1, 'donthu - kimthu', 1, '2021-03-20 16:19:49', '2021-03-20 16:19:49');
INSERT INTO `transactions` VALUES (6, 99, 'cong lam tuan', 'lamtuancong2807@gmail.com', '1234567899', '200', 1, 'hanoi - vietnam', 1, '2021-03-21 03:47:32', '2021-03-21 03:47:32');
INSERT INTO `transactions` VALUES (7, 99, 'cong lam tuan', 'lamtuancong2807@gmail.com', '1234567899', '200', 1, 'hanoi - vietnam', 1, '2021-03-21 03:51:36', '2021-03-21 03:51:36');
INSERT INTO `transactions` VALUES (8, 100, 'Cong Lam Tuan', 'cong.lam1@ntq-solution.com.vn', '0123456789', '1', 1, 'HaDong - HaNoi', 1, '2021-03-23 16:20:25', '2021-03-23 16:20:25');
INSERT INTO `transactions` VALUES (9, 110, 'Leo Messi Lionel', 'leomessi@gmail.com', '1231231232', '705', 1, 'Argentina - Barcelona', 1, '2021-03-24 16:11:14', '2021-03-24 16:11:14');
INSERT INTO `transactions` VALUES (10, 110, 'Leo Messi Lionel', 'leomessi@gmail.com', '1231231232', '705', 1, 'Argentina - Barcelona', 1, '2021-03-24 16:17:41', '2021-03-24 16:17:41');
INSERT INTO `transactions` VALUES (11, 55, 'cong lam tuan', 'lamtuancong2807@gmail.com', '0123456789', '222', 1, 'hanoi - hadong', 1, '2021-04-18 03:34:39', '2021-04-18 03:34:39');
INSERT INTO `transactions` VALUES (12, 99, 'Cong Cong Cong', 'lamtuancong2807@gmail.com', '1234561111', '510', NULL, 'Hanoi Vietnam - Barcelona', NULL, '2021-05-03 15:53:03', '2021-05-03 15:53:08');
INSERT INTO `transactions` VALUES (13, 123, 'Nguyen QuangMinh Nguyen QuangMinh Nguyen QuangMinh', 'quangminh123@gmail.com', '1234567890', '470', NULL, 'Ha Dong - HaNoi', NULL, '2021-05-03 15:53:11', '2021-05-03 15:53:14');
INSERT INTO `transactions` VALUES (14, 121, 'Nguyen Phuong Nguyen Phuong Nguyen Phuong', 'phuongnguyen@gmail.com', '1231231231', '1000', 1, 'Thanh Oai - Ha Noi', NULL, '2021-05-03 09:19:10', '2021-05-03 09:19:10');
INSERT INTO `transactions` VALUES (15, 124, 'Lucas Jean Lucas Jean Lucas Jean', 'lucas@gmail.com', '1231231231', '1,000.00', 1, 'Liverpool, England - Liverpool', NULL, '2021-05-08 18:24:52', '2021-05-08 18:24:52');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `birthday` datetime(0) NULL DEFAULT NULL,
  `role_id` int NOT NULL,
  `status` tinyint NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 125 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Cong', 123456, 'cong@gmail.com', NULL, '$2y$10$V73w.eQ08O6OCRYUHZpu6eWvUtTJ3eU17Sa9EpWjCIR7/WrqReKP6', 1, 'Hanoi Vietnam', '8740_im-yours.png', '1998-07-28 21:23:46', 0, 1, NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'Jim', 123456, 'jimlam11gmail.com', NULL, '$2y$10$BYjTYKR35V/Fj.n8Dgvh6.qp9AqC/uKEFm0dFrdSCiKGQgWXMmXIW', 1, 'Hanoi Vietnam', NULL, NULL, 1, 1, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Cecelia Turcotte', 123456789, 'waldo.walker@example.org', '2021-02-17 08:58:01', '$2y$10$FsjO9/TUYsiVUxfzbeR8ue8ek5II8mp1PWLtBc4q00bmsOpGEJmCy', 2, 'Hanoi Vietnam', NULL, NULL, 1, 1, '8u4Yj2eC3j', '2021-02-17 08:58:02', '2021-02-17 08:58:02');
INSERT INTO `users` VALUES (4, 'Gerald Bins', 123456789, 'mills.dedrick@example.net', '2021-02-17 08:58:01', '$2y$10$pT9zSAR2OT5CgAzAy6O8C.Gmun0f7fPPlcN540CtTA9x9tn9N8Zbu', 2, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'ko3VSqszA1', '2021-02-17 08:58:02', '2021-02-17 08:58:02');
INSERT INTO `users` VALUES (5, 'Mr. Colt Kuhn', 123456789, 'shane@example.com', '2021-02-17 08:58:01', '$2y$10$E4PcyPgrNm7VA8T1NmAlbO4dH0680l/pxvUlT06A8H81ncBCS1eAC', 1, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'B5GfUxRSUe', '2021-02-17 08:58:02', '2021-02-17 08:58:02');
INSERT INTO `users` VALUES (8, 'Dr. Candelario Bayer Sr.', 123456789, 'schroeder.wade@example.com', '2021-02-17 08:58:01', '$2y$10$RUjsODzkeDO6hYJBNNVUbObCY4UpQ42gKsHXIOqPdL/UuozqEPdMu', 1, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'b6qxSTnwSi', '2021-02-17 08:58:02', '2021-02-17 08:58:02');
INSERT INTO `users` VALUES (9, 'Anastasia Pfannerstill', 123456789, 'itzel62@example.net', '2021-02-17 08:58:01', '$2y$10$wDohuMphW80Zv44S6nphmu.t7aJtnTiB0mw.tAzX1zM.XhSqXupBO', 1, 'Hanoi Vietnam', NULL, '2021-04-23 00:00:00', 1, 1, '2EmdSS6Kiq', '2021-02-17 08:58:02', '2021-02-17 08:58:02');
INSERT INTO `users` VALUES (109, 'Cong Lam', 123123, 'conglam1@gmail.com', NULL, '$2y$10$ukYli0nqX9XUKRgvtPZfC.86VWpftDn2yoQvvyHCT8LskSxG64dQG', 1, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'bb2K1KSBlj', '2021-03-18 12:39:36', '2021-03-18 12:39:36');
INSERT INTO `users` VALUES (114, 'Cong', 1212, 'conglam2@gmail.com', NULL, '$2y$10$WSLRQ3VMTiGmVHzib40CFuSN/cXn3J/tAsfJ0mfiCMo92458za87u', 2, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'Z9EvW0UaI0519OeftkUyWNjoKIoiNVClVV51R3309Y8tA3y7VX1L6KIJ9qkW', '2021-03-18 12:42:06', '2021-03-18 12:42:06');
INSERT INTO `users` VALUES (115, 'aa sss', NULL, 'leoleo@gmail.com', NULL, '$2y$10$qeRYLWq1sZ4g25JW3vv54OPPrGQkwJkqduC06yL3WhSP2H0oNt4VW', 2, 'Hanoi Vietnam', NULL, NULL, 1, 1, '7LqRIkJdLEhHMjl9YTtkKVQ7Kg5zpKxADJfcUFE2GXpUevSKco19kzOIPnVm', '2021-03-18 12:52:39', '2021-03-18 12:52:39');
INSERT INTO `users` VALUES (116, 'cong lt', NULL, 'conglt@gmail.com', NULL, '$2y$10$2qR87ucFf7dhb7IdiD6uLuKXiCu8s40YcyurzgAMffXHD85mBXX22', 2, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'Cgoa5Abzwa', '2021-03-18 13:04:11', '2021-03-18 13:04:11');
INSERT INTO `users` VALUES (117, 'leo leo', NULL, 'leo98@gmail.com', NULL, '$2y$10$TPf0XVMz3w1.hHjbLoiWOO1H00XDY4SCOiG0cA6WvK0xw1Hs2Y9RS', 2, 'Hanoi Vietnam', NULL, NULL, 1, 1, 'cB8RFyBMq2', '2021-03-18 13:08:15', '2021-03-18 13:08:15');
INSERT INTO `users` VALUES (118, 'Lionel Messi 123', 1231231231, 'conglam@gmail.com', NULL, '$2y$10$fz5GUBUoyHKGkS2vxJRgb.F/z9VkI5U0tah7oIFBkXaaaFuHdfvli', 2, 'Hanoi Vietnam', '5354_am-ap-yeu-thuong.jpg', NULL, 1, 1, 'jbwm901jsukadzhbWjl04fSuj6NhJVr7NYt6W4UbexeKxijhsqunqc4jms60', '2021-03-24 13:16:01', '2021-03-24 13:16:01');
INSERT INTO `users` VALUES (119, 'Lionel Messi 111', 1112222233, 'leoleo2807@gmail.com', NULL, '$2y$10$V73w.eQ08O6OCRYUHZpu6eWvUtTJ3eU17Sa9EpWjCIR7/WrqReKP6', 1, 'Hanoi Ha Dong', 'hinh-anh-hoa-huong-duong-o-Da-Lat.jpg', '1999-01-01 00:00:00', 0, 1, 'tIkz5iaTNAnLwj0sQsgw2dBlSUeGpb3SGOqWauU4wTuMZDd6KQ0RaAwVKnih', '2021-03-24 13:28:35', '2021-03-24 13:28:35');
INSERT INTO `users` VALUES (120, 'Nguyen Minh Anh Khoa', 1234567891, 'minhanh@gmail.com', NULL, '$2y$10$h7i1K.mcsHT6/hQBkIToXeAZ/0q/KEYWP3jIUtUt/WUi/gmb8RbR2', 1, 'Ha Noi Viet Nam The Gioi', '8740_im-yours.png', '2021-04-01 00:00:00', 1, 1, 'd3Om5AtTfqzfSzJOSGBKNqaAwHN8O1oyGgTsYrbjpiSGB7JgSXZ9Cm9qu2v2', '2021-04-21 02:35:57', '2021-04-21 02:35:57');
INSERT INTO `users` VALUES (121, 'Nguyen Phuong', 1231231231, 'phuongnguyen@gmail.com', NULL, '$2y$10$J03TjSYYWNBPNCTTs5l5oOuCpkWTR/ZNrbT9ut.6NKF/CB2ObkETq', 1, 'Thanh Oai', NULL, '2021-02-17 00:00:00', 2, 1, 'XCV9hcymJp', '2021-04-25 16:24:03', '2021-04-25 16:24:03');
INSERT INTO `users` VALUES (122, 'Nguyen Van An', 1231231231, 'nguyenvanan@gmail.com', NULL, '$2y$10$tt7rW/HhAMkoChGl9bjyeeiQwSGB0F3fnGKBg0nuSAM.9nNvv4W2O', 1, 'Ha Tey', NULL, '2020-03-11 00:00:00', 2, 1, 'NFewh1Uu4MRbCEZb4mqSWR1SkT6xpEOnrtNDNiyEIewM0n7v0lZI0K6uVJwe', '2021-04-26 16:47:53', '2021-04-26 16:47:53');
INSERT INTO `users` VALUES (123, 'Nguyen QuangMinh', 1231231231, 'quangminh123@gmail.com', NULL, '$2y$10$ItnOWDHAwrysGusrwDHwGevFrfBKcMYClVzcoGu/6wD/jMq8/NlFq', 1, 'Atletico Madrid', NULL, '2009-06-09 00:00:00', 2, 1, 'reYqUDmB4v', '2021-05-03 08:33:28', '2021-05-03 08:33:28');
INSERT INTO `users` VALUES (124, 'Lucas Jean', NULL, 'lucas@gmail.com', NULL, '$2y$10$kh77xlqQQF1pYphIQzR3vO9y9UEqE8EVV0YlkrHEMvXY031p4tnc2', NULL, NULL, NULL, NULL, 2, 1, 'bXpxWy4oub', '2021-05-08 18:04:05', '2021-05-08 18:04:05');

SET FOREIGN_KEY_CHECKS = 1;
