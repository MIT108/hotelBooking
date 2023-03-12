-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for hotel
CREATE DATABASE IF NOT EXISTS `hotel` /*!40100 DEFAULT CHARACTER SET utf16 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `hotel`;

-- Dumping structure for table hotel.checkouts
CREATE TABLE IF NOT EXISTS `checkouts` (
  `id` int NOT NULL AUTO_INCREMENT,
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
  `customer_id` int NOT NULL DEFAULT '0',
  `hotel_id` int NOT NULL DEFAULT '0',
  `room_id` int NOT NULL DEFAULT '0',
  `reservation_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_checkouts_customers` (`customer_id`),
  KEY `FK_checkouts_users` (`hotel_id`),
  KEY `FK_checkouts_rooms` (`room_id`),
  KEY `FK_checkouts_reservations` (`reservation_id`),
  CONSTRAINT `FK_checkouts_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_checkouts_reservations` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_checkouts_rooms` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_checkouts_users` FOREIGN KEY (`hotel_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.checkouts: ~0 rows (approximately)
DELETE FROM `checkouts`;

-- Dumping structure for table hotel.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `email` text,
  `phone` text,
  `question` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.contacts: ~0 rows (approximately)
DELETE FROM `contacts`;

-- Dumping structure for table hotel.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.customers: ~0 rows (approximately)
DELETE FROM `customers`;

-- Dumping structure for table hotel.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.faqs: ~0 rows (approximately)
DELETE FROM `faqs`;

-- Dumping structure for table hotel.reservations
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_id` int DEFAULT NULL,
  `customer_id` int NOT NULL DEFAULT '0',
  `room_id` int NOT NULL DEFAULT '0',
  `check_in` text NOT NULL,
  `num_night` text NOT NULL,
  `num_room` text NOT NULL,
  `num_people` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `motive` text,
  `freeRoom` int DEFAULT '0',
  `check_out` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_reservations_users` (`hotel_id`),
  KEY `FK_reservations_customers` (`customer_id`),
  KEY `FK_reservations_rooms` (`room_id`),
  CONSTRAINT `FK_reservations_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reservations_rooms` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reservations_users` FOREIGN KEY (`hotel_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.reservations: ~0 rows (approximately)
DELETE FROM `reservations`;

-- Dumping structure for table hotel.rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_id` int NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `price` text NOT NULL,
  `num_beds` text NOT NULL,
  `num_persons` text NOT NULL,
  `about` text NOT NULL,
  `parking` int NOT NULL DEFAULT '0',
  `wifi` int NOT NULL DEFAULT '0',
  `breakfast` int NOT NULL DEFAULT '0',
  `room_service` int NOT NULL DEFAULT '0',
  `pool` int NOT NULL DEFAULT '0',
  `reception` int NOT NULL DEFAULT '0',
  `gym` int NOT NULL DEFAULT '0',
  `rating` int NOT NULL DEFAULT '0',
  `review` int NOT NULL DEFAULT '0',
  `status` text,
  `image1` text,
  `image2` text,
  `image3` text,
  PRIMARY KEY (`id`),
  KEY `FK_rooms_users` (`hotel_id`),
  CONSTRAINT `FK_rooms_users` FOREIGN KEY (`hotel_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.rooms: ~0 rows (approximately)
DELETE FROM `rooms`;

-- Dumping structure for table hotel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `type` text,
  `image` text,
  `status` text,
  `city` text,
  `star` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf16;

-- Dumping data for table hotel.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `contact`, `password`, `type`, `image`, `status`, `city`, `star`) VALUES
	(1, 'Admin', 'admin@gmail.com', '23768592356', '33d87fd364516f6604124fcc76fdd279', NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
