-- MySQL dump 10.13  Distrib 5.7.37, for Linux (x86_64)
--
-- Host: localhost    Database: answerkiller
-- ------------------------------------------------------
-- Server version	5.7.37-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `bookid` text NOT NULL COMMENT '书id',
  `bookname` text NOT NULL COMMENT '书名字',
  `answerids` text NOT NULL COMMENT '书答案id表',
  `bookmode` text NOT NULL COMMENT '书学科',
  `numberid` int(11) NOT NULL COMMENT '(目前无用)',
  PRIMARY KEY (`numberid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='答案索引们a';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES ('npaper82','时代英语报2022八下','39,40,41,42,43,44,45,46,47,48,49,50,','3',1),('keshi82','课时精炼8下','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,','3',2),('mathadd82','数学补充习题8下','all,','2',3),('kelelian82','英语课课练八下','1,2,3,4,5,6,7,8,9,','3',4),('EXAM_BG','江苏地生中考指导书2022','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,','8',5),('TA','临时','2022年6月17日英语,','0',6),('npaper91','时代英语报九上','1,2,3,4,5,6,7,8,9,10,11,12,阅读1,阅读2,13,14,15,16,17暂无,18,19,20,21,阅读3,22,23,24,25','3',7),('WULI91','课时提优计划物理九上','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,','4',8),('BBT_9','名著帮帮团九年级','1,2,3,4,5,6,7,8,','1',9),('BBT_A','名著帮帮团中考','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,','1',10),('keshi91','课时精练自主学习全九年级','trial,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,','3',11),('KSZY_H_92','历史九下课时作业本','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,','6',100),('KKL_91','课课练九上','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,','3',101),('KS_HX_92','课时作业本化学九下','all,','5',102),('kszk','自主复习指南7年级','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,','3',111),('ywfl','语文分类详解2023','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,','1',112);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `bookid` text NOT NULL COMMENT '书id',
  `reviewids` text NOT NULL COMMENT '评论id们'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论们aa';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES ('keshi82','912627,'),('mathadd82',''),('npaper82',''),('kelelian82',''),('THE_WEBSITE','5421466,9977621,1367723,6201975,9956981,7045822,'),('TA','1053189,'),('npaper91','4607180,2766371,9897095,'),('WULI91',''),('BBT_A',''),('BBT_9',''),('keshi91','9064721,9663313,7274875,7403265,1532989,'),('keshi91trial',''),('KKL_91',''),('KS_HX_92','3125967,'),('KSZY_H_92',''),('KSZY_H_92',''),('npaper91','4607180,2766371,9897095,');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system`
--

DROP TABLE IF EXISTS `system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system` (
  `nofree` text NOT NULL COMMENT '不免费学科',
  `showanswer` text NOT NULL COMMENT '展示的答案(书id)',
  `test` int(11) NOT NULL COMMENT '测试,没啥用',
  PRIMARY KEY (`test`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system`
--

LOCK TABLES `system` WRITE;
/*!40000 ALTER TABLE `system` DISABLE KEYS */;
INSERT INTO `system` VALUES ('3,','npaper91,keshi91,kszk,ywfl,KKL_91,WULI91,KS_HX_92,KSZY_H_92,BBT_A,BBT_9,',0);
/*!40000 ALTER TABLE `system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '用户学号',
  `name` text NOT NULL COMMENT '用户名字',
  `realname` text NOT NULL COMMENT '用户真实名字',
  `passwordmd5` text NOT NULL COMMENT '密码md5',
  `vip` text NOT NULL COMMENT 'vip过期时间',
  `isadmin` text NOT NULL COMMENT '是不是管理员',
  `reviews` text NOT NULL COMMENT '评论们',
  `istrue` text NOT NULL COMMENT '本人认证',
  `orangejuice` text NOT NULL COMMENT '给密码加的橙汁',
  `nowonid` text NOT NULL COMMENT '现在设备随机id',
  `egg1` text NOT NULL COMMENT '彩蛋1解锁',
  `egg2` text NOT NULL COMMENT '彩蛋2解锁',
  `egg3` text NOT NULL COMMENT '彩蛋3解锁',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户数据表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (24,'cde','*[脱敏]','bc034a20eaa9827552d5275c5150624d','1657010862608','false','','true','23f75c2057','9ecfb4776c','','',''),(28,'哈哈哈哈','*[脱敏]','e1f987d5af4aa6085527af7c07ca4dd7','1672502400000','false','','true','9b1138a1a1','9ecfb4776c','','',''),(30,'孙进','*[脱敏]','40abe9a76a1374335664b6666137290d','1674200869397','false','','false','78515b745c','b79182c9ec','','',''),(33,'LZQ','*[脱敏]','cbcabd57c4714f2228717cfa0fdf1707','1660377694571','false','','true','7becd4b96b','9ecfb4776c','','',''),(46,'ORDYLAN','*[脱敏]','35fb85c6fb1a9ab28f850c3efec41b6d','1767196800000','true','4607180,3125967,2766371,5421466,9897095,7274875,7403265,1532989,6201975,9956981,7045822,912627,','true','AKNB!!!','6bf85f1833','true','true','true'),(888,'游客账号','Guest_Mode','5ad109d8ca82a4389e938b71729a309d','0','false','9663313,9977621,1367723,1053189,','true','4042a93635','','','',''),(24999,'cde','*[脱敏]','800d3880dd1e92f60218bdafb88b51de','1654950306245','false','','true','778122bd50','9ecfb4776c','','',''),(33999,'lzq','*[脱敏]','7f9690cedd95a6c6cec9a7b207547432','1654166117425','false','','true','35fb85c6fb','9ecfb4776c','','',''),(999999,'SQL注入用户','SQL注入用户','35fb85c6fb1a9ab28f850c3efec41b6d','0','0','','false','AKNB!!!','9ecfb4776c','','','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-29  0:00:02
