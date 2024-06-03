-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 03:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `book_management`
--
-- --------------------------------------------------------
--
-- Table structure for table `books`
--
CREATE TABLE `books` (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `author` varchar(255) NOT NULL,
    `published_year` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `books`
--
INSERT INTO
    `books` (`id`, `title`, `author`, `published_year`)
VALUES
    (39, '', '', 0),
    (40, '', '', 0),
    (41, '', '', 0),
    (42, 't', '', 0),
    (43, 't', '', 0),
    (44, 't', '', 0),
    (45, '', '', 0),
    (46, '', '', 0),
    (47, '', '', 0),
    (48, '', '', 0),
    (49, '', '', 0),
    (50, '', '', 0);

--
-- Indexes for dumped tables
--
--
-- Indexes for table `books`
--
ALTER TABLE
    `books`
ADD
    PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE
    `books`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 51;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;