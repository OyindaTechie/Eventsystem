-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2017 at 03:58 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Eventsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Music', 'Annual Music event', '2017-12-05 18:01:17', '2017-12-05 18:01:17'),
(2, 'Nollywood', 'Annual', '2017-12-05 18:03:11', '2017-12-05 18:03:11'),
(3, 'Sport', 'Annual', '2017-12-05 18:03:56', '2017-12-05 18:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nigeria', NULL, NULL),
(2, 'Ghana', NULL, NULL),
(3, 'South Africa', NULL, NULL),
(4, 'Togo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(300) NOT NULL,
  `state_id` bigint(20) unsigned DEFAULT NULL,
  `state` varchar(200) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `category` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_state_id_foreign` (`state_id`),
  KEY `events_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `banner`, `logo`, `venue`, `start`, `end`, `date`, `description`, `state_id`, `state`, `user_id`, `category_id`, `category`, `created_at`, `updated_at`) VALUES
(11, 'jepth', '2017-11-27-oCv3aJ0JTD.png', '2017-11-27-RAEctAgp0O.jpg', 'ggg', '03:00:00', '07:00:00', '2017-12-10 00:00:00', 'annual event', NULL, 'Lagos', 1, NULL, 'Music', '2017-11-27 07:04:13', '2017-11-27 07:04:13'),
(12, 'africa music festival', '2017-11-28-nBrxa7UmDF.png', '2017-11-28-NYNpWuJR7C.jpg', 'n jnjnko', '05:00:00', '08:00:00', '2017-12-10 00:00:00', 'hhyyuu', 1, 'Lagos', 1, 1, 'Music', '2017-11-28 19:15:47', '2017-11-28 19:15:47'),
(13, 'Goodwill Ultimate Talent Show', '2017-11-29-1wu7b7oncj.JPG', '2017-11-29-94Dgalv6TD.JPG', 'International Conference Center, Abuja', '12:06:00', '12:07:00', '2018-06-16 00:00:00', 'The event is for all who can sing, dance and perform other talented skills in acting, comedy and more.', 1, 'Lagos', 1, 1, 'Music', '2017-11-29 14:37:19', '2017-11-29 14:37:19'),
(14, 'aaa', '2017-11-29-ln4Up7ioGb.png', '2017-11-29-pQNjXGeT9D.png', 'sddds', '05:00:00', '08:00:00', '2017-12-10 00:00:00', 'fddfvfd', 2, 'Abuja', 1, 1, '', '2017-11-29 18:21:54', '2017-11-29 18:21:54'),
(15, 'abc', '2017-12-05-eexJ0zMr8n.png', '2017-12-05-wjxviS86JN.jpg', 'ftfthft', '03:00:00', '05:00:00', '2017-12-10 00:00:00', 'ghygyhg', 2, 'Abuja', 1, 2, 'Nolly wood', '2017-12-05 18:16:48', '2017-12-05 18:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `eventusers`
--

CREATE TABLE IF NOT EXISTS `eventusers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventusers_event_id_foreign` (`event_id`),
  KEY `eventusers_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_09_075114_eventmigration', 1),
(4, '2017_11_09_104452_event_user', 1),
(5, '2017_11_09_104522_countries', 1),
(6, '2017_11_09_104551_states', 1),
(7, '2017_11_09_104613_categories', 1),
(8, '2017_11_09_164156_alter_event_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `states_country_id_foreign` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Lagos', 1, NULL, NULL),
(2, 'Abuja', 1, NULL, NULL),
(3, 'Port Harcourt', 1, NULL, NULL),
(4, 'Kano', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Dommy', 'ggggg', 'oyinda', 'abcd', NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `eventusers`
--
ALTER TABLE `eventusers`
  ADD CONSTRAINT `eventusers_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `eventusers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
