-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 10:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamgtstrat`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultantfees`
--

CREATE TABLE `consultantfees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_faci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_lead` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_lead_f2f` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_faci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_consultant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consulting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moderator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marshal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mod_opt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultantfees`
--

INSERT INTO `consultantfees` (`id`, `first_name`, `last_name`, `lead_faci`, `co_lead`, `co_lead_f2f`, `co_faci`, `lead_consultant`, `consulting`, `designer`, `moderator`, `producer`, `created_at`, `updated_at`) VALUES
(1, 'Addison', 'Falcon', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(2, 'Adrian', 'Veloso', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(3, 'Albertine', 'Jimenez', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(4, 'Alex', 'Salud', '3,800.00', '2,575.00', '3,040.00', '2,280.00', '3,230.00', '2,850.00', '2,850.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(5, 'Allan', 'Cabizares', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(6, 'Amit', 'Gupta', '3,400.00', '2,375.00', '2,720.00', '2,040.00', '2,890.00', '2,550.00', '2,550.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(7, 'Anda', 'Goseco', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(8, 'Anna', 'Angeles', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(9, 'Aryn', 'Cristobal', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(10, 'Audrey', 'Arayata', '2,100.00', '1,600.00', '1,680.00', '1,260.00', '1,785.00', '1,575.00', '1,575.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(11, 'Ayen', 'dela Torre', '1,800.00', '1,450.00', '1,440.00', '1,080.00', '1,530.00', '1,350.00', '1,350.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(12, 'Baste', 'Quiniones', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(13, 'Bea', 'TabuÃ±ar', '2,300.00', '1,700.00', '1,840.00', '1,380.00', '1,955.00', '1,725.00', '1,725.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(14, 'Bel', 'Pacheco', '2,500.00', '1,800.00', '2,000.00', '1,500.00', '2,125.00', '1,875.00', '1,875.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(15, 'Benjie', 'Leogardo', '3,500.00', '2,425.00', '2,800.00', '2,100.00', '2,975.00', '2,625.00', '2,625.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(16, 'Billy', 'Santos', '2,200.00', '1,650.00', '1,760.00', '1,320.00', '1,870.00', '1,650.00', '1,650.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(17, 'Boopsie', 'EraÃ±a', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(18, 'Candice', 'Gan', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(19, 'Carlos', 'Legarda', '1,800.00', '1,450.00', '1,440.00', '1,080.00', '1,530.00', '1,350.00', '1,350.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(20, 'Cecille', 'Rebolos', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(21, 'Celine', 'Sugay-Costales', '3,100.00', '2,225.00', '2,480.00', '1,860.00', '2,635.00', '2,325.00', '2,325.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(22, 'Cheska', 'Winebrenner', '2,900.00', '2,125.00', '2,320.00', '1,740.00', '2,465.00', '2,175.00', '2,175.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(23, 'Chester', 'Cruz', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(24, 'Cindy', 'Burdette', '2,300.00', '1,700.00', '1,840.00', '1,380.00', '1,955.00', '1,725.00', '1,725.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(25, 'Clyde', 'Gacayan', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(26, 'Consy', 'Montemayor', '', '675.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(27, 'Dax', 'Cobarubbias', '2,900.00', '2,000.00', '2,320.00', '1,740.00', '2,465.00', '2,175.00', '2,175.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(28, 'Didith', 'Morales', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(29, 'Dingdong', 'Rosales', '2,300.00', '1,700.00', '1,840.00', '1,380.00', '1,955.00', '1,725.00', '1,725.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(30, 'Dom', 'Manahan', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(31, 'Eds', 'Locando', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(32, 'Elbert', 'Or', '2,500.00', '1,800.00', '2,000.00', '1,500.00', '2,125.00', '1,875.00', '1,875.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(33, 'Elcee', 'Villa', '5,000.00', '3,175.00', '4,000.00', '3,000.00', '4,250.00', '3,750.00', '3,750.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(34, 'Elizha', 'Corpus', '2,200.00', '1,650.00', '1,760.00', '1,320.00', '1,870.00', '1,650.00', '1,650.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(35, 'Elmo', 'Alforque', '3,900.00', '2,625.00', '3,120.00', '2,340.00', '3,315.00', '2,925.00', '2,925.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(36, 'Faith', 'de Chavez', '1,729.17', '1,239.58', '1,383.33', '1,037.50', '1,469.79', '1,296.88', '1,296.88', '750.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(37, 'Forest', 'Candelaria', '', '#VALUE!', '#VALUE!', '#VALUE!', '#VALUE!', '#VALUE!', '#VALUE!', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(38, 'Gabe', 'Mercado', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(39, 'GM', 'Hernandez', '2,400.00', '1,750.00', '1,920.00', '1,440.00', '2,040.00', '1,800.00', '1,800.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(40, 'Goody', 'Directo', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(41, 'Ian', 'Paredes', '', '675.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(42, 'Icar', 'Castro', '3,900.00', '2,625.00', '3,120.00', '2,340.00', '3,315.00', '2,925.00', '2,925.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(43, 'Ja', 'Duenas', '1,900.00', '1,500.00', '1,520.00', '1,140.00', '1,615.00', '1,425.00', '1,425.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(44, 'Jak', 'Kahn', '2,800.00', '2,075.00', '2,240.00', '1,680.00', '2,380.00', '2,100.00', '2,100.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(45, 'Jeff', 'Cua', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(46, 'Jeff', 'Tan', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(47, 'Jelaine', 'Chua', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(48, 'Jennie', 'Verano', '3,800.00', '2,575.00', '3,040.00', '2,280.00', '3,230.00', '2,850.00', '2,850.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(49, 'Jim', 'Bulan', '1,500.00', '1,150.00', '1,200.00', '900.00', '1,275.00', '1,125.00', '1,125.00', '800.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(50, 'Joi', 'Natividad', '3,900.00', '2,625.00', '3,120.00', '2,340.00', '3,315.00', '2,925.00', '2,925.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(51, 'Jolina', 'Kahn', '2,900.00', '2,125.00', '2,320.00', '1,740.00', '2,465.00', '2,175.00', '2,175.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(52, 'Jose Carlo t.', 'Arreza', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(53, 'Karen', 'Espiritu', '3,100.00', '2,225.00', '2,480.00', '1,860.00', '2,635.00', '2,325.00', '2,325.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(54, 'Karl', 'Kawachi', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(55, 'Krishna', 'Ayuso', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(56, 'Leo', 'Castillo', '3,900.00', '2,625.00', '3,120.00', '2,340.00', '3,315.00', '2,925.00', '2,925.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(57, 'Liang', 'Borlagdan', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(58, 'Liza', 'Estella', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(59, 'Lourdes', 'Fabia', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(60, 'Luisa', 'Ozamiz', '2,900.00', '2,125.00', '2,320.00', '1,740.00', '2,465.00', '2,175.00', '2,175.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(61, 'Ma. Celeste C.', 'Tanjuatco', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(62, 'Maita', 'Beltran', '3,500.00', '2,425.00', '2,800.00', '2,100.00', '2,975.00', '2,625.00', '2,625.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(63, 'Martin', 'Fausto', '2,200.00', '1,650.00', '1,760.00', '1,320.00', '1,870.00', '1,650.00', '1,650.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(64, 'Marv', 'Echipare', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(65, 'Miggy', 'Zaballero', '2,500.00', '1,800.00', '2,000.00', '1,500.00', '2,125.00', '1,875.00', '1,875.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(66, 'Miles', 'Cabizares', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(67, 'Monica', 'Cruz', '2,000.00', '1,550.00', '1,600.00', '1,200.00', '1,700.00', '1,500.00', '1,500.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(68, 'Nemy', 'Lim', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(69, 'Noelle', 'Protasio', '2,900.00', '2,125.00', '2,320.00', '1,740.00', '2,465.00', '2,175.00', '2,175.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(70, 'Ohmar', 'Picache', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(71, 'Pam', 'Valenzuela', '3,900.00', '2,625.00', '3,120.00', '2,340.00', '3,315.00', '2,925.00', '2,925.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(72, 'Paolo', 'Gomez', '2,200.00', '1,650.00', '1,760.00', '1,320.00', '1,870.00', '1,650.00', '1,650.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(73, 'Paris', 'Maranan', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(74, 'Paula', 'Peralta', '2,400.00', '1,750.00', '1,920.00', '1,440.00', '2,040.00', '1,800.00', '1,800.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(75, 'Pia', 'Cruz', '3,500.00', '2,425.00', '2,800.00', '2,100.00', '2,975.00', '2,625.00', '2,625.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(76, 'Rachel', 'Consunji', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(77, 'Ran', 'Mendoza', '2,300.00', '1,700.00', '1,840.00', '1,380.00', '1,955.00', '1,725.00', '1,725.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(78, 'Raphael', 'Balaccua', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(79, 'Rocio', 'Matute', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(80, 'Romeo', 'Serrano', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(81, 'Ryan', 'Fermin', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(82, 'Serge', 'dela Fuente', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(83, 'Shahein', 'Abraham', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(84, 'Sharon', 'Galang', '2,800.00', '2,075.00', '2,240.00', '1,680.00', '2,380.00', '2,100.00', '2,100.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(85, 'Soheil', 'Bidar', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(86, 'Tala', 'Ocampo', '2,800.00', '2,075.00', '2,240.00', '1,680.00', '2,380.00', '2,100.00', '2,100.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(87, 'Thea', 'Masangkay', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(88, 'Tina', 'Alafriz', '3,900.00', '2,625.00', '3,120.00', '2,340.00', '3,315.00', '2,925.00', '2,925.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(89, 'TJ', 'Parpan', '3,200.00', '2,275.00', '2,560.00', '1,920.00', '2,720.00', '2,400.00', '2,400.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(90, 'Ton', 'Francisco', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(91, 'Val', 'EraÃ±a', '3,500.00', '2,425.00', '2,800.00', '2,100.00', '2,975.00', '2,625.00', '2,625.00', '1,350.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(92, 'Val B', 'Baguios III', '2,300.00', '1,700.00', '1,840.00', '1,380.00', '1,955.00', '1,725.00', '1,725.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(93, 'Victor', 'Ayes', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(94, 'Vince', 'Dizon', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(95, 'Yeye', 'Agorilla', '2,400.00', '1,750.00', '1,920.00', '1,440.00', '2,040.00', '1,800.00', '1,800.00', '1,100.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13'),
(96, 'TBA', '', '3,000.00', '1,900.00', '2,400.00', '1,800.00', '2,550.00', '2,250.00', '2,250.00', '800.00', '550.00', '2022-11-23 06:17:13', '2022-11-23 06:17:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultantfees`
--
ALTER TABLE `consultantfees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultantfees`
--
ALTER TABLE `consultantfees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
