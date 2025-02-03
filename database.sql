-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 03, 2025 at 08:16 AM
-- Server version: 8.0.33
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedevs`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `slug` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`) VALUES
(1, 'news paper', 'news-paper'),
(2, 'food', 'food'),
(3, 'Kheladhula', 'kheladhula');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text,
  `post_category` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_status` varchar(15) DEFAULT NULL,
  `delated_at` timestamp NULL DEFAULT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `content`, `post_category`, `created_at`, `updated_at`, `post_status`, `delated_at`, `user_id`) VALUES
(2, 'Update testiing', 'update-testiing', 'Bari, also a director of United Hospital, was delivering a keynote paper through a presentation at a seminar, styled \"Reversing the Outbound Healthcare Tourism\", at the DCCI today.\r\n\r\nThere are 5,461 private hospitals and clinics in Bangladesh, of which 1,810 are within Dhaka division, he said.', 3, '2024-10-31 18:00:00', NULL, 'active', NULL, 1),
(5, 'Test now', 'test-now', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 0, '2024-12-26 18:00:00', NULL, 'active', NULL, 3),
(6, 'Blog for author 2', 'blog-for-author-2', '<p>Hello from author 1</p>', 0, '2024-12-29 18:00:00', NULL, 'active', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `bio`, `password`, `email`) VALUES
(1, 'Noman', 'Lorem ipsum is a dummy or placeholder text commonly used in graphic design, publishing, and web development to fill empty spaces in a layout that do not yet have content. Wikipedia\r\n', '', ''),
(2, 'Abdullah', 'Lorem ipsum is a dummy or placeholder text commonly used in graphic design, publishing, and web development to fill empty spaces in a layout that do not yet have content. Wikipedia\r\n', '', 'info@swiftsparklabs.com'),
(3, 'Abdullah An Noman', NULL, '12345', 'sbnoman1122@gmail.com'),
(4, 'Abdullah An Noman', NULL, '$2y$10$NK6oFIABZpP9ztSNAc.FgOpoFhVQgCRYgZwAnYN1dlou4KzJotBVi', 'ruism973@gmail.com'),
(5, 'Abdullah An Noman', NULL, '$2y$10$VfV0V5oQO6eaLXh6EASgAeEtNJlxE.xNjD/dlrBws2dkpQPTxbSXe', 'nicuqyha@mailinator.com'),
(8, 'Abdullah An Noman', NULL, '$2y$10$gwGEZQITtyzR7pGfZHnsm.Nttw8LTNpHUEC9c83kpXKVN8TkrXZLi', 'christophe.inthavivanh@gmail.com'),
(10, 'Jamal', NULL, '$2y$10$ok.Vi7Z1bIxtu3lA3Ldhm.53flzbVfmevm4vDBD/QAgH8dl/8qly.', 'jamal@mailinator.com'),
(11, 'test', NULL, '$2y$10$pPFbt3o7rctCyEurInXQc.D9mVXSrkJubkY/M1VnBlQvzDHSmdM1i', 'sb@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
