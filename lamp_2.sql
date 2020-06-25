-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2020 at 08:42 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `url` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `author` varchar(50) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `short` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `url`, `author`, `category`, `short`, `title`, `image`, `text`, `tags`, `created_at`, `updated_at`) VALUES
(1, '?controller=blog&action=article&id=1', 'Donult Trum', 'Alumni', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'A lesson in surgery preparedness - from hurricane season', '5.jpg', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\nPraesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\nPraesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\nPraesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Medical, Hospitality', '2019-12-17 18:47:28', '2020-06-25 17:41:45'),
(2, '?controller=blog&action=article&id=2', 'James Anderson', 'Psycology', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Patient engagement and the improvement of care and recovery', '6.jpg', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Hospitality, Dormamu, Medical', '2020-01-05 18:47:28', '2020-06-25 17:14:12'),
(3, '?controller=blog&action=article&id=3', 'Garry Moe', 'Dental', 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'How to make your medical training event over the top', '7.jpg', 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\nSed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\nSed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\nSed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'Dormamu, Medical', '2020-02-10 18:47:28', '2020-06-25 17:14:17'),
(4, '?controller=blog&action=article&id=4', 'Luis Morris', 'X-Ray', 'Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.', 'What does the flexdex bring to laparoscopy?', '8.jpg', 'Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\r\nProin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\r\nProin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\r\nProin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.', 'ray, hospitality', '2020-03-01 18:47:28', '2020-06-25 17:14:23'),
(5, '?controller=blog&action=article&id=5', 'James Anderson', 'Psycology', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Patient engagement and the improvement of care and recovery', '6.jpg', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Hospitality, Dormamu, Medical', '2020-04-05 17:47:28', '2020-06-25 17:14:27'),
(6, '?controller=blog&action=article&id=6', 'Garry Moe', 'Sonogram', 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'How to make your medical training event over the top', '7.jpg', 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\nSed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\nSed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\nSed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'Dormamu, Medical', '2020-05-10 17:47:28', '2020-06-25 17:14:32'),
(7, '?controller=blog&action=article&id=7', 'Luis Morris', 'X-Ray', 'Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.', 'What does the flexdex bring to laparoscopy?', '8.jpg', 'Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\r\nProin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\r\nProin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.\r\nProin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.', 'ray, hospitality, clean', '2020-06-01 17:47:28', '2020-06-25 17:14:36'),
(8, '?controller=blog', 'Donult Trum', 'Sonogram', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'A lesson in surgery preparedness - from hurricane season', '5.jpg', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\nPraesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\nPraesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\nPraesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Medical, Hospitality', '2020-06-12 17:47:28', '2020-06-25 17:41:33'),
(9, '?controller=blog', 'James Anderson', 'Psycology', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Patient engagement and the improvement of care and recovery', '6.jpg', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Hospitality, Dormamu, Medical', '2020-06-26 17:47:28', '2020-06-25 17:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(100) NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `speciality` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `speciality`, `category`, `description`, `created_at`, `updated_at`) VALUES
(1, 'emely', 'robert', 'bone', 'doctor', 'lorem ipsum dolorem sit amet', '2020-05-21 22:03:36', '2020-05-21 22:03:36'),
(2, 'rag', 'jhon', 'eye', 'doctor', 'lorem ipsum dolorem sit amet', '2020-05-21 22:03:36', '2020-05-21 22:03:36'),
(3, 'tent', 'richardson', 'skin', 'doctor', 'lorem ipsum dolorem sit amet', '2020-05-21 22:03:36', '2020-05-21 22:03:36'),
(4, 'sheiring', 'ton', 'manager', 'event planning', 'lorem ipsum dolorem sit amet', '2020-05-21 22:03:36', '2020-05-21 22:03:36'),
(5, 'rig', 'richard', 'sr. manager', 'event planning', 'lorem ipsum dolorem sit amet', '2020-05-21 22:03:36', '2020-05-21 22:03:36'),
(6, 'tom', 'moddy', 'president', 'event planning', 'lorem ipsum dolor sit amet', '2020-05-21 22:04:11', '2020-05-21 22:08:00'),
(7, 'maria', 'robert', 'x-ray', 'lab', 'lorem ipsum dolor sit amet', '2020-05-21 22:06:19', '2020-05-21 22:06:19'),
(8, 'john', 'kelly', 'ultrasound therapy', 'lab', 'lorem ipsum dolor sit amet', '2020-05-21 22:06:19', '2020-05-21 22:06:19'),
(9, 'simran', 'toe', 'bone therapy', 'lab', 'lorem ipsum dolor sit amet', '2020-05-21 22:07:21', '2020-05-21 22:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `menu-items`
--

CREATE TABLE `menu-items` (
  `id` smallint(6) NOT NULL,
  `menu_id` tinyint(4) NOT NULL,
  `parent_id` tinyint(3) NOT NULL DEFAULT '0',
  `url` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `text` char(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu-items`
--

INSERT INTO `menu-items` (`id`, `menu_id`, `parent_id`, `url`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '#', NULL, 'fa fa-facebook', '2020-05-20 23:04:01', '2020-06-06 11:26:33'),
(3, 2, 1, '#', NULL, 'fa fa-twitter', '2020-05-20 23:04:01', '2020-06-06 11:26:40'),
(4, 3, 1, '#', NULL, 'fa fa-google-plus', '2020-05-20 23:04:01', '2020-06-06 11:26:44'),
(5, 4, 1, '#', NULL, 'fa fa-instagram', '2020-05-20 23:04:01', '2020-06-06 11:26:48'),
(6, 5, 1, '#', NULL, 'fa fa-pinterest-p', '2020-05-20 23:04:01', '2020-06-06 11:26:54'),
(7, 1, 2, '?controller=default', 'home', NULL, '2020-05-20 23:04:01', '2020-06-01 19:53:07'),
(8, 2, 2, '?controller=page&slug=about', 'about', NULL, '2020-05-20 23:04:01', '2020-06-03 20:34:21'),
(9, 3, 2, '?controller=page&slug=service', 'service', NULL, '2020-05-20 23:04:01', '2020-06-16 21:58:19'),
(10, 4, 2, '?controller=page&slug=gallery', 'gallery', NULL, '2020-05-20 23:04:01', '2020-06-01 19:44:34'),
(11, 5, 2, '?controller=page&slug=team', 'team', NULL, '2020-05-20 23:04:01', '2020-06-01 19:44:34'),
(12, 6, 2, '?controller=page&slug=appointment', 'appointment', NULL, '2020-05-20 23:04:01', '2020-06-01 19:44:34'),
(13, 7, 2, '?controller=blog', 'blog', NULL, '2020-05-20 23:04:01', '2020-06-18 22:30:36'),
(14, 8, 2, '?controller=contact', 'contact', NULL, '2020-05-20 23:04:01', '2020-06-23 19:35:29'),
(15, 9, 2, '?controller=page&slug=login', 'login', NULL, '2020-05-20 23:04:01', '2020-06-01 19:44:34'),
(16, 10, 2, '?controller=page&slug=profile', 'profile', NULL, '2020-05-20 23:04:01', '2020-06-01 19:44:34'),
(17, 1, 3, '#', 'Orthopadic Liabilities', NULL, '2020-05-20 23:04:01', '2020-06-06 11:27:01'),
(18, 2, 3, '#', 'Dental Clinic', NULL, '2020-05-20 23:04:01', '2020-06-06 11:27:04'),
(19, 3, 3, '#', 'Dormamu Clinic', NULL, '2020-05-20 23:04:01', '2020-06-06 11:27:06'),
(20, 4, 3, '#', 'Psycological Clinic', NULL, '2020-05-20 23:04:01', '2020-06-06 11:27:09'),
(21, 5, 3, '#', 'Gynaecological Clinic', NULL, '2020-05-20 23:04:01', '2020-06-06 11:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` tinyint(3) NOT NULL COMMENT 'Primary Key',
  `code` char(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Menu name',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `code`, `name`, `create_at`, `updated_at`) VALUES
(1, 'social-media', 'Social Media', '2020-06-01 12:12:12', '2020-06-01 18:30:25'),
(2, 'main-menu', 'Main Menu', '2020-06-01 12:12:12', '2020-06-01 13:59:53'),
(3, 'serv', 'Services', '2020-06-01 18:57:11', '2020-06-01 19:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `sent_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `sent_date`) VALUES
(1, 'aaa', 'aaa@aa.a', 'aaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-06-25 20:06:52'),
(3, 'aaa', 'aaa@aa.a', 'aaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-06-25 20:32:43'),
(6, 'aaab', 'aaa@aa.a', 'aaaaab', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-06-25 20:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` smallint(255) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `description`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 'index', 'home', 'description', 'content', 'author', '2020-05-21 20:14:08', '2020-05-26 18:00:48'),
(2, 'about', 'about us', 'description', 'content', 'author', '2020-05-20 19:35:01', '2020-05-26 18:01:07'),
(3, 'service', 'service', 'description', 'content', 'author', '2020-05-21 20:15:13', '2020-05-26 18:01:25'),
(4, 'gallery', 'gallery', 'description', 'content', 'author', '2020-05-21 20:15:13', '2020-05-29 18:50:25'),
(5, 'team', 'team', 'description', 'content', 'author', '2020-05-21 20:16:04', '2020-05-28 22:37:28'),
(6, 'appointment', 'appointment', 'description', 'content', 'author', '2020-05-21 20:16:04', '2020-05-28 22:37:44'),
(7, 'blog', 'blog', 'description', 'content', 'author', '2020-05-21 20:16:28', '2020-05-28 22:38:01'),
(8, 'contact', 'contact', 'description', 'content', 'author', '2020-05-21 20:16:28', '2020-05-26 18:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `first_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `age` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `gender`, `age`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', 1, 33, '2020-04-27 17:39:36', '2020-04-27 17:39:36'),
(2, 'John', 'Hill', 1, 35, '2020-04-27 17:39:36', '2020-04-27 17:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `slogan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `service_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serv_description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `serv_advantages` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slogan`, `service_name`, `image`, `short_description`, `serv_description`, `serv_advantages`, `created_at`, `updated_at`) VALUES
(1, 'Better Service At Low Cost', 'Dormitory', '1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 'Whitening is among the most popular dental\r\nTeeth cleaning is part of oral hygiene and involves\r\nTeeth cleaning is part of oral hygiene and involves', '2020-06-06 14:17:18', '2020-06-06 14:51:54'),
(2, 'Better Service At Low Cost', 'Germs Protection', '2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 'Whitening is among the most popular dental\r\nTeeth cleaning is part of oral hygiene and involves\r\nTeeth cleaning is part of oral hygiene and involves', '2020-06-06 14:17:18', '2020-06-06 14:51:59'),
(3, 'Better Service At Low Cost', 'Psycology', '3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 'Whitening is among the most popular dental\r\nTeeth cleaning is part of oral hygiene and involves\r\nTeeth cleaning is part of oral hygiene and involves', '2020-06-06 14:32:29', '2020-06-06 14:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `services-test`
--

CREATE TABLE `services-test` (
  `id` int(255) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu-items`
--
ALTER TABLE `menu-items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNQ_mail_message` (`email`,`subject`,`message`) USING BTREE;

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services-test`
--
ALTER TABLE `services-test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu-items`
--
ALTER TABLE `menu-items`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` smallint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services-test`
--
ALTER TABLE `services-test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu-items`
--
ALTER TABLE `menu-items`
  ADD CONSTRAINT `menu-items_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
