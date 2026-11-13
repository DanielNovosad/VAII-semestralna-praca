-- Adminer 6.2.0 MariaDB 13.0.2-MariaDB-ubu2604 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `bookings` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `ride_id` int(11) NOT NULL,
                            `passenger_name` varchar(100) NOT NULL,
                            `seats` int(11) NOT NULL DEFAULT 1,
                            `status` varchar(20) NOT NULL DEFAULT 'pending',
                            `created_at` datetime NOT NULL DEFAULT current_timestamp(),
                            PRIMARY KEY (`id`),
                            KEY `1` (`ride_id`),
                            CONSTRAINT `1` FOREIGN KEY (`ride_id`) REFERENCES `rides` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

INSERT INTO `bookings` (`id`, `ride_id`, `passenger_name`, `seats`, `status`, `created_at`) VALUES
                                                                                                (1, 1, 'Peter Novák', 1, 'pending', '2026-11-13 12:10:49'),
                                                                                                (2, 1, 'Martin Kováč', 2, 'confirmed', '2026-11-13 12:11:34'),
                                                                                                (3, 2, 'Tomáš Horváth', 1, 'cancelled', '2026-11-13 12:11:53');