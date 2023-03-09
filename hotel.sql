-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for hotel
CREATE DATABASE IF NOT EXISTS `hotel` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `hotel`;

-- Dumping structure for table hotel.checkouts
CREATE TABLE IF NOT EXISTS `checkouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `zip` text NOT NULL,
  `payment_method` text NOT NULL,
  `payment_number` text NOT NULL,
  `charge` text NOT NULL,
  `discount` text NOT NULL,
  `payed_amount` text NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `hotel_id` int(11) NOT NULL DEFAULT '0',
  `room_id` int(11) NOT NULL DEFAULT '0',
  `reservation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.checkouts: ~2 rows (approximately)
DELETE FROM `checkouts`;
/*!40000 ALTER TABLE `checkouts` DISABLE KEYS */;
INSERT INTO `checkouts` (`id`, `fname`, `lname`, `phone`, `email`, `address`, `country`, `city`, `zip`, `payment_method`, `payment_number`, `charge`, `discount`, `payed_amount`, `customer_id`, `hotel_id`, `room_id`, `reservation_id`) VALUES
	(1, 'MIENDJEM', 'Thierry Idris', '+237658528672', 'miendjemthierry01@gmail.com', 'Awae Escalier', 'Cameroon', 'Yaounde', '237', 'OM', '+237658528672', '16000', '6.4', '14976', 2, 6, 1, 1),
	(2, 'MIENDJEM', 'Thierry Idris', '+237658528672', 'miendjemthierry01@gmail.com', 'Awae Escalier', 'Cameroon', 'Yaounde', '237', 'OM', '+237658528672', '16000', '6.4', '14976', 2, 6, 1, 1);
/*!40000 ALTER TABLE `checkouts` ENABLE KEYS */;

-- Dumping structure for table hotel.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.customers: ~1 rows (approximately)
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `password`, `status`, `image`) VALUES
	(2, 'Thierry Idris', 'Miendjem', 'MIT', 'miendjemthierry01@gmail.com', '+237658528672', 'dd4b21e9ef71e1291183a46b913ae6f2', 'active', '1678149183banner.jpg');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table hotel.reservations
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `room_id` int(11) NOT NULL DEFAULT '0',
  `check_in` text NOT NULL,
  `num_night` text NOT NULL,
  `num_room` text NOT NULL,
  `num_people` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `motive` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.reservations: ~3 rows (approximately)
DELETE FROM `reservations`;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` (`id`, `hotel_id`, `customer_id`, `room_id`, `check_in`, `num_night`, `num_room`, `num_people`, `status`, `created_at`, `motive`) VALUES
	(1, 6, 2, 1, '2023-03-08', '4', '4', '4', 'completed', '2023-03-07 02:58:35', 'fasdfasdfasd asd asd sad '),
	(2, 6, 2, 1, '2023-03-25', '3', '32', '32', 'cancelled', '2023-03-07 03:03:10', '32edfasd asd '),
	(3, 6, 2, 1, '2023-03-31', '2', '33', '3', 'pending', '2023-03-07 04:39:49', 'good fsdkf fsdjfj');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;

-- Dumping structure for table hotel.rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `price` text NOT NULL,
  `num_beds` text NOT NULL,
  `num_persons` text NOT NULL,
  `about` text NOT NULL,
  `parking` int(11) NOT NULL DEFAULT '0',
  `wifi` int(11) NOT NULL DEFAULT '0',
  `breakfast` int(11) NOT NULL DEFAULT '0',
  `room_service` int(11) NOT NULL DEFAULT '0',
  `pool` int(11) NOT NULL DEFAULT '0',
  `reception` int(11) NOT NULL DEFAULT '0',
  `gym` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0',
  `review` int(11) NOT NULL DEFAULT '0',
  `status` text,
  `image1` text,
  `image2` text,
  `image3` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.rooms: ~1 rows (approximately)
DELETE FROM `rooms`;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `hotel_id`, `name`, `location`, `price`, `num_beds`, `num_persons`, `about`, `parking`, `wifi`, `breakfast`, `room_service`, `pool`, `reception`, `gym`, `rating`, `review`, `status`, `image1`, `image2`, `image3`) VALUES
	(1, 6, 'MIT', 'yaounde', '1000', '1', '3', 'ng\r\nWifi\r\nBreakfast\r\nRoom Service\r\nPool\r\nReception\r\nGym\r\nRating *:', 1, 0, 1, 1, 1, 1, 0, 5, 200, 'active', '16781165221677724407backgroundimage.jpg', '16781273661677724407backgroundimage.jpg', '16781272201677724407backgroundimage.jpg');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Dumping structure for table hotel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `type` text,
  `image` text,
  `status` text,
  `city` text,
  `star` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `contact`, `password`, `type`, `image`, `status`, `city`, `star`) VALUES
	(1, 'Admin', 'admin@gmail.com', '23768592356', '33d87fd364516f6604124fcc76fdd279', NULL, NULL, NULL, NULL, NULL),
	(6, 'Hilton ', 'miendjemthierry01@gmail.com', '6585286721', 'dd4b21e9ef71e1291183a46b913ae6f2', 'hotel', '1678067931logo2.png', 'active', 'Douala', 2),
	(7, 'MIT', 'thierry@gmail.com', '2376585286', 'ac37f9cb7fdb80ccf10f3c15e36bf4ff', 'hotel', '1678073492banner.jpg', 'inactive', 'Yaounde', 3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
