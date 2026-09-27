-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2026 at 07:29 AM
-- Server version: 10.6.28-MariaDB
-- PHP Version: 8.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Table structure for table `access_staffs`
--

CREATE TABLE `access_staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `access_staffs`
--

INSERT INTO `access_staffs` (`id`, `name`) VALUES
(1, 'create_student'),
(2, 'edit_student'),
(3, 'create_book'),
(4, 'edit_book'),
(5, 'mail_student');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity_text` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_text`, `student_id`, `date`) VALUES
(1, 'Login successfully', 1, '2024-11-27 23:02:40'),
(2, 'Read book Ultamite Fate Universe', 1, '2024-11-27 23:02:40'),
(3, 'Login successfully', 19, '2024-11-27 23:02:40'),
(4, 'Rest Password', 19, '2024-11-27 23:02:40'),
(5, 'Read book 20 Min Book id - 345', 19, '2024-11-27 23:02:40'),
(6, '', 0, '0000-00-00 00:00:00'),
(7, '', 0, '0000-00-00 00:00:00'),
(8, '', 0, '0000-00-00 00:00:00'),
(9, '', 0, '0000-00-00 00:00:00'),
(10, '', 0, '0000-00-00 00:00:00'),
(11, '', 0, '0000-00-00 00:00:00'),
(12, '', 0, '0000-00-00 00:00:00'),
(13, '', 0, '0000-00-00 00:00:00'),
(14, '', 0, '0000-00-00 00:00:00'),
(15, '', 0, '0000-00-00 00:00:00'),
(16, '', 0, '0000-00-00 00:00:00'),
(17, '', 0, '0000-00-00 00:00:00'),
(18, '', 0, '0000-00-00 00:00:00'),
(19, '1', 0, '0000-00-00 00:00:00'),
(20, '1', 0, '0000-00-00 00:00:00'),
(21, '1', 0, '0000-00-00 00:00:00'),
(22, '1', 0, '0000-00-00 00:00:00'),
(23, '1', 0, '0000-00-00 00:00:00'),
(24, '1', 0, '2026-09-27 12:45:33'),
(25, '1', 0, '2026-09-27 12:45:48'),
(26, '', 0, '2026-09-27 12:46:18'),
(27, '', 0, '2026-09-27 12:49:39'),
(28, '', 0, '2026-09-27 12:50:26'),
(29, '1', 0, '2026-09-27 12:54:15'),
(30, '1', 0, '2026-09-27 12:54:20'),
(31, '1', 0, '2026-09-27 12:54:23'),
(32, '1', 0, '2026-09-27 12:55:15'),
(33, '1', 0, '2026-09-27 12:55:24'),
(34, '1', 0, '2026-09-27 01:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `session_hash` text NOT NULL,
  `verifycation_code` int(11) NOT NULL,
  `pp_img` text NOT NULL,
  `role` enum('admin','staff') NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `access` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `fname`, `lname`, `password`, `session_hash`, `verifycation_code`, `pp_img`, `role`, `status`, `access`, `date`) VALUES
(1, 'degi-admin@gmail.com', 'sazzad', 'hossain', '$2y$10$pXczeBxwURprckkW3H8YOOS1K5jYaykLQN9adbL8OmCj255RS41Je', 'f023c23d723f8495e474c432923ceb57', 643689, 'profile.png', 'admin', 'active', 'all', '2024-11-22 04:10:25'),
(15, 'khatifoodbazar@gmail.com', 'Sazzad 2', 'Sazzad2', '$2y$10$TZBAEbnr23uKKXyBDrpnGei9pIva8fP5BiT5HhXYHDeaVTW0HhEoq', '89e4bde3f66de0cbe1a8f7d6a538bc98', 0, 'staffs__330227cf30246408bb2df96c65ca17ceb7b3a317.png', 'staff', 'active', '1,2,3,4,5,', '2024-12-04 07:48:13'),
(16, 'khatifoodbazar@gmail.com', 'Sazzad hossain', 'Sazzad', '$2y$10$RzS0MmfRtKhPbeWUlkl5zeuqvIzsOL5o8fftKmuwAa17Uw0luk9OW', '89e4bde3f66de0cbe1a8f7d6a538bc98', 0, 'staffs__e0b97b6340fde28e7172252511d5b74e2b4a9e94.png', 'staff', 'active', '1,3', '2024-11-25 01:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE `book_request` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `bok_autor` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_request`
--

INSERT INTO `book_request` (`id`, `student_id`, `book_name`, `bok_autor`, `details`, `date`) VALUES
(1, 19, 'Avarest', 'Mr kani', 'This book called Blue prient for Msc CSC. so need this book for enhance our skill', '2024-11-30 11:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `date`) VALUES
(1, 'Masters', 'active', '2024-11-27 12:41:05'),
(2, 'Bsc', 'active', '2024-11-23 20:26:08'),
(3, 'Honurs 1st Year', 'active', '2024-11-23 20:26:31'),
(4, 'Msc Last Year', 'active', '2024-11-25 01:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `year` varchar(16) NOT NULL,
  `book_cover` text NOT NULL,
  `book_details` longtext NOT NULL,
  `pdf_link_own` text NOT NULL,
  `pdf_link_ext` text NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `category_id`, `autor`, `title`, `publisher`, `year`, `book_cover`, `book_details`, `pdf_link_own`, `pdf_link_ext`, `status`, `date`) VALUES
(1, 1, 'Seb Kira', 'Masters Fundamentls', 'Mr Nalson', '2009', 'pdf_covers__12443de5e97b76fc1e50665245d1593e810e7eeb.png', 'Here is the first volume in George R. R. Martin’s magnificent cycle of novels that includes A Clash of Kings and A Storm of Swords. As a whole, this series comprises a genuine masterpiece of modern fantasy, bringing together the best the genre has to offer. Magic, mystery, intrigue, romance, and adventure fill these pages and transport us to a world unlike any we have ever experienced. Already hailed as a classic, George R. R. Martin’s stunning series is destined to stand as one of the great achievements of imaginative fiction.  A GAME OF THRONES  Long ago, in a time forgotten, a preternatural event threw the seasons out of balance. In a land where summers can last decades and winters a lifetime, trouble is brewing. The cold is returning, and in the frozen wastes to the north of Winterfell, sinister and supernatural forces are massing beyond the kingdom’s protective Wall. At the center of the conflict lie the Starks of Winterfell, a family as harsh and unyielding as the land they were born to. Sweeping from a land of brutal cold to a distant summertime kingdom of epicurean plenty, here is a tale of lords and ladies, soldiers and sorcerers, assassins and bastards, who come together in a time of grim omens.  Here an enigmatic band of warriors bear swords of no human metal; a tribe of fierce wildlings carry men off into madness; a cruel young dragon prince barters his sister to win back his throne; and a determined woman undertakes the most treacherous of journeys. Amid plots and counterplots, tragedy and betrayal, victory and terror, the fate of the Starks, their allies, and their enemies hangs perilously in the balance, as each endeavors to win that deadliest of conflicts: the game of thrones. --back cover', 'MrKEbook_b1a82b692f46a022355e87898516dc588a7924f2.pdf', '', 'active', '2024-12-02 08:46:41'),
(2, 1, 'JN islam', 'Masters Fundamentls', 'Mr Nikola', '2005', 'pdf_covers__31912cc953e4faf6fdc8139fc945471b0f0c18b5.png', 'Here is the first volume in George R. R. Martin’s magnificent cycle of novels that includes A Clash of Kings and A Storm of Swords. As a whole, this series comprises a genuine masterpiece of modern fantasy, bringing together the best the genre has to offer. Magic, mystery, intrigue, romance, and adventure fill these pages and transport us to a world unlike any we have ever experienced. Already hailed as a classic, George R. R. Martin’s stunning series is destined to stand as one of the great achievements of imaginative fiction.  A GAME OF THRONES  Long ago, in a time forgotten, a preternatural event threw the seasons out of balance. In a land where summers can last decades and winters a lifetime, trouble is brewing. The cold is returning, and in the frozen wastes to the north of Winterfell, sinister and supernatural forces are massing beyond the kingdom’s protective Wall. At the center of the conflict lie the Starks of Winterfell, a family as harsh and unyielding as the land they were born to. Sweeping from a land of brutal cold to a distant summertime kingdom of epicurean plenty, here is a tale of lords and ladies, soldiers and sorcerers, assassins and bastards, who come together in a time of grim omens.  Here an enigmatic band of warriors bear swords of no human metal; a tribe of fierce wildlings carry men off into madness; a cruel young dragon prince barters his sister to win back his throne; and a determined woman undertakes the most treacherous of journeys. Amid plots and counterplots, tragedy and betrayal, victory and terror, the fate of the Starks, their allies, and their enemies hangs perilously in the balance, as each endeavors to win that deadliest of conflicts: the game of thrones. --back cover', 'MrKEbook_cf1f840a2f85fc91049c39750699dd531d440202.pdf', '', 'active', '2024-11-27 12:40:39'),
(4, 2, 'Seb Kira', 'Masters Fundamentls', 'Mr Nalson', '2008', 'pdf_covers__7dfcabd8af48a280dd9e3e415b81fbaa294bcc38.png', '', 'MrKEbook_5b0025ad4318b46b9e9b1431d79c63dd9867a9aa.pdf', '', 'active', '2024-12-03 12:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_book_st`
--

CREATE TABLE `favorite_book_st` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `favorite_book_st`
--

INSERT INTO `favorite_book_st` (`id`, `book_id`, `student_id`, `date`) VALUES
(96, 1, 19, '2024-12-02 18:30:17'),
(97, 2, 19, '2024-12-02 18:30:18'),
(98, 4, 19, '2024-12-02 18:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `live_notice`
--

CREATE TABLE `live_notice` (
  `id` int(11) NOT NULL,
  `notice_title` text NOT NULL,
  `notice_body` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `live_notice`
--

INSERT INTO `live_notice` (`id`, `notice_title`, `notice_body`, `date`) VALUES
(1, 'Welcome Notice 1', '<h2><font face=\"Arial Black\"><b>ï»¿ï»¿ðŸŒŸ Join Our Digital Library Today! ðŸ“š</b></font></h2><span style=\"font-size:16px;\">\r\nDiscover the ultimate resource for your studies! Access thousands of e-books, journals, and research materials 24/7 from anywhere.<br><b>\r\nðŸ“… Registration Deadline:&nbsp;</b><br>\r\nðŸ“Œ Sign Up Now with Your Student ID: [Insert Link]<br></span>', '2024-12-01 11:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `noti_title` text NOT NULL,
  `noti_body` longtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `open_book_record`
--

CREATE TABLE `open_book_record` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `open_count` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `smtp` int(11) NOT NULL,
  `site_logo` int(11) NOT NULL,
  `site_tite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `host` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `port` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `host`, `email`, `password`, `port`, `date`) VALUES
(1, 'smtp.gmail.com', 'systemcornerltd@gmail.com', 'mfurbepbbzmbcxai', 587, '2024-10-02 04:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `session_hash` text NOT NULL,
  `verifycation_code` int(11) NOT NULL,
  `pp_img` text NOT NULL,
  `programe_name` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `online_status` enum('online','offline') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `password`, `session_hash`, `verifycation_code`, `pp_img`, `programe_name`, `country`, `status`, `online_status`, `date`) VALUES
(1, '    Sazzad hossain  ', '    Sazzad    ', ' developer1.sazzad.me@gmail.com ', '$2y$10$/X2AYZ4oPQvZ6Zzrt.jwvO34jUVPXmyYI0D2V2N7d/jNmqfLOO8tq', 'cb9fb421636f67a8088dd710ef1690f1', 0, 'students__a07702297d86bccf32f395fd81ab1c139267aff6.png', 'Msc', '    Bangladesh    ', 'active', '', '2024-11-24 02:10:57'),
(19, '  Akib12', '  Hossain12', 'sazzad01835558000@gmail.com', '$2y$10$FHDkrFM9Ya8qrZaac1DOau9qR9VjFw1Oj9PwpAkpun1XT3eiJB9Qa', '752926a7ce173aa4473bc329e9b9962f', 0, 'students__acebf03cc42951ef6bb5b1f2a79c4acacee9aaae.png', 'Msc12', 'india', 'active', '', '2024-11-29 11:33:13'),
(20, 'Sazzad hossain', 'Sazzad', 'developer.sazzad.me@gmail.com', '$2y$10$5N2dkqiYcjzfsWVNlZ9SUuLh0IHrO50NOO2BPBJj/wvB5nyZtW4ie', '', 0, '', 'Msc', 'Bangladesh', 'active', '', '2024-12-02 11:53:25'),
(21, 'Demo ', 'Student', 'demo@gmail.com', '$2y$10$H1QxLG/z.D2LGNe56jJDVuCW.EOT8e5j7KbyV778UEsSH4j7t/tUq', '', 0, 'students__ff80bc97fcf8552131fddf281e660c340c84e236.png', 'Msc', 'United States', 'active', '', '2024-12-04 08:42:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_staffs`
--
ALTER TABLE `access_staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite_book_st`
--
ALTER TABLE `favorite_book_st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_notice`
--
ALTER TABLE `live_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_staffs`
--
ALTER TABLE `access_staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book_request`
--
ALTER TABLE `book_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorite_book_st`
--
ALTER TABLE `favorite_book_st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `live_notice`
--
ALTER TABLE `live_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
