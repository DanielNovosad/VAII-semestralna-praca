-- Adminer 6.2.0 MariaDB 13.0.2-MariaDB-ubu2604 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `rides` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `departure` varchar(100) NOT NULL,
                         `destination` varchar(100) NOT NULL,
                         `departure_time` datetime NOT NULL,
                         `price` decimal(8,2) NOT NULL,
                         `available_seats` int(11) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

INSERT INTO `rides` (`id`, `departure`, `destination`, `departure_time`, `price`, `available_seats`) VALUES
                                                                                                         (1,	'Žilina',	'Bratislava',	'2026-11-10 08:30:00',	8.50,	3),
                                                                                                         (2,	'Martin',	'Žilina',	'2026-11-11 13:15:00',	5.00,	2),
                                                                                                         (3,	'Žilina',	'Trenčín',	'2026-11-12 17:00:00',	6.00,	1);

-- 2026-11-06 15:54:47 UTC
