-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 01:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail_cisco`
--

-- --------------------------------------------------------

--
-- Table structure for table `searchperson`
--

CREATE TABLE `searchperson` (
  `contact_id` int(11) NOT NULL,
  `name_person_dari` varchar(100) NOT NULL,
  `name_person_en` varchar(100) NOT NULL,
  `office_person_dari` varchar(100) NOT NULL,
  `office_person_en` varchar(100) NOT NULL,
  `title_person_dari` varchar(100) NOT NULL,
  `title_person_en` varchar(100) NOT NULL,
  `cisco_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchperson`
--

INSERT INTO `searchperson` (`contact_id`, `name_person_dari`, `name_person_en`, `office_person_dari`, `office_person_en`, `title_person_dari`, `title_person_en`, `cisco_number`) VALUES
(1, 'ابراهیم فاروق', 'Ibrahim Farooq', 'ریاست تکنالوژی معلوماتی', 'Information Technology', 'آمر سیستم ها', 'Head of Systems', 2028),
(3, 'میوند', 'Maiwand', 'ریاست تدارکات', 'Procurement', 'مدیر تدارکات', 'Procurement Manager', 2022),
(67, 'حکمت', 'Hikmat', 'ریاست تکنالوژی معلوماتی', 'Information Technology', 'مدیر تکنالوژی معلوماتی', 'IT Manager', 2203),
(69, 'قدرت', 'Qudrat', 'ریاست خدمات', 'Services', 'مدیر تحویلخانه', 'Warehouse Manager', 2027),
(70, 'کریم', 'Karim', 'ریاست مالی و حسابی', 'Finance', 'مدیر مالی ', 'Finance Manager', 2399),
(71, 'احمد', 'Ahmad', 'ریاست تکنالوژی معلوماتی', 'Information Technology', 'تحلیلگر سیستم', 'System Analyst', 2020),
(72, 'جان محمد جاهد', 'Jan Mohammad Jahid', 'ریاست تکنالوژی معلوماتی', 'Information Technology', 'آمر شبکه', 'Head of Network', 2020),
(73, 'حکمت', 'Hikmat', 'ریاست تکنالوژی معلوماتی', 'Information Technology', 'مدیر تکنالوژی معلوماتی', 'IT Manager', 2303),
(74, 'قدرت', 'Qudrat', 'ریاست مالی و حسابی', 'Finance', 'مدیر مالی ', 'Finance Manager', 3021),
(75, 'میوند', 'Maiwand', 'ریاست تکنالوژی معلوماتی', 'Information Technology', 'مدیر امنیت شبکه', 'Cyber Security Manager', 2303),
(76, 'احمد', 'Ahmad', 'ریاست تدارکات', 'Procurement', 'مدیر تدارکات', 'Procurement Manager', 2102);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `full_name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', '$2y$10$ekuuPuDDqMlttRA/QUO3qusl00ziY3It.eWlHcGNtn027HfnEAdEK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `searchperson`
--
ALTER TABLE `searchperson`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `searchperson`
--
ALTER TABLE `searchperson`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
