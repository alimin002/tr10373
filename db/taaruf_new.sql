-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jul 2018 pada 07.40
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taaruf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_dating_request`
--

CREATE TABLE `app_dating_request` (
  `app_dating_request_id` mediumint(6) NOT NULL,
  `request_date` datetime NOT NULL,
  `request_to` mediumint(6) NOT NULL,
  `request_from` mediumint(6) NOT NULL,
  `request_status` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_gender`
--

CREATE TABLE `app_gender` (
  `app_gender_id` smallint(6) NOT NULL,
  `gender_name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_messages`
--

CREATE TABLE `app_messages` (
  `app_message_id` bigint(10) NOT NULL,
  `message_content` text NOT NULL,
  `message_from` mediumint(6) NOT NULL,
  `message_to` mediumint(6) NOT NULL,
  `message_date` datetime NOT NULL,
  `read_status` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_users`
--

CREATE TABLE `app_users` (
  `app_user_id` mediumint(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `join_date` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `is_activated` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_users_baned`
--

CREATE TABLE `app_users_baned` (
  `app_users_baned_id` mediumint(6) NOT NULL,
  `app_users_id` mediumint(8) NOT NULL,
  `banned_reason` text NOT NULL,
  `banned_status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_users_profile`
--

CREATE TABLE `app_users_profile` (
  `app_user_profile_id` mediumint(15) NOT NULL,
  `app_user_id` mediumint(15) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender_id` int(1) NOT NULL,
  `birth_date` date NOT NULL,
  `marital_status_id` smallint(6) NOT NULL,
  `telephone_number` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_gender`
--
ALTER TABLE `app_gender`
  ADD PRIMARY KEY (`app_gender_id`);

--
-- Indexes for table `app_messages`
--
ALTER TABLE `app_messages`
  ADD PRIMARY KEY (`app_message_id`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`app_user_id`);

--
-- Indexes for table `app_users_baned`
--
ALTER TABLE `app_users_baned`
  ADD PRIMARY KEY (`app_users_baned_id`);

--
-- Indexes for table `app_users_profile`
--
ALTER TABLE `app_users_profile`
  ADD PRIMARY KEY (`app_user_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_gender`
--
ALTER TABLE `app_gender`
  MODIFY `app_gender_id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_messages`
--
ALTER TABLE `app_messages`
  MODIFY `app_message_id` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `app_user_id` mediumint(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_users_baned`
--
ALTER TABLE `app_users_baned`
  MODIFY `app_users_baned_id` mediumint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_users_profile`
--
ALTER TABLE `app_users_profile`
  MODIFY `app_user_profile_id` mediumint(15) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
