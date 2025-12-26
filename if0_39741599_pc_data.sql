-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.infinityfree.com
-- Generation Time: Dec 10, 2025 at 02:23 AM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_39741599_pc_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `activity_type` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `child_id`, `activity_type`, `description`, `created_at`) VALUES
(1, 1, 'Child Added', 'Parent added a new child: Smit Rakholiya', '2025-08-12 19:36:18'),
(2, 1, 'Task Created', 'Parent created a new task: Speling Writing', '2025-08-12 19:37:46'),
(3, 1, 'Task Created', 'Parent created a new task: Speling Writing', '2025-08-12 19:38:20'),
(4, 1, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-08-12 19:39:19'),
(5, 1, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-08-12 19:39:46'),
(6, 3, 'Child Added', 'Parent added a new child: vivek patel', '2025-08-12 19:45:19'),
(7, 3, 'Task Created', 'Parent created a new task: 10 sums based on profit and loss', '2025-08-12 20:07:53'),
(8, 3, 'Task Submitted', 'Child submitted task: 10 sums based on profit and loss', '2025-08-12 20:09:01'),
(9, 9, 'Child Added', 'Parent added a new child: Urmin Patel', '2025-08-12 20:20:48'),
(10, 9, 'Task Created', 'Parent created a new task: Create Calculator in HTML CSS JS', '2025-08-13 16:23:38'),
(11, 9, 'Task Submitted', 'Child submitted task: Create Calculator in HTML CSS JS', '2025-08-13 16:25:11'),
(12, 3, 'Task Created', 'Parent created a new task: Science and Technology Book Complete Write and Submit...', '2025-08-13 16:33:51'),
(13, 3, 'Task Submitted', 'Child submitted task: Science and Technology Book Complete Write and Submit...', '2025-08-13 16:34:39'),
(14, 11, 'Child Added', 'Parent added a new child: Sunny Patel', '2025-08-18 14:02:07'),
(15, 11, 'Task Created', 'Parent created a new task: Speling Writing', '2025-08-18 14:03:03'),
(16, 11, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-08-18 14:04:04'),
(17, 11, 'Task Created', 'Parent created a new task: Science and Technology Book Complete Write and Submit...', '2025-08-18 18:39:00'),
(18, 11, 'Task Submitted', 'Child submitted task: Science and Technology Book Complete Write and Submit...', '2025-08-18 18:39:18'),
(19, 11, 'Task Created', 'Parent created a new task: Test Task 1', '2025-08-18 19:07:59'),
(20, 11, 'Task Submitted', 'Child submitted task: Test Task 1', '2025-08-18 19:10:09'),
(21, 11, 'Task Submitted', 'Child submitted task: Test Task 1', '2025-08-18 19:13:29'),
(22, 11, 'Task Submitted', 'Child submitted task: Test Task 1', '2025-08-18 19:13:35'),
(23, 11, 'Task Submitted', 'Child submitted task: Test Task 1', '2025-08-18 19:13:37'),
(24, 11, 'Task Submitted', 'Child submitted task: Test Task 1', '2025-08-18 19:13:42'),
(25, 11, 'Task Submitted', 'Child submitted task: Test Task 1', '2025-08-18 19:13:44'),
(26, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:15:00'),
(27, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:15:08'),
(28, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:15:13'),
(29, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:18:33'),
(30, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:18:38'),
(31, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:25:12'),
(32, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:25:50'),
(33, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:30:38'),
(34, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 19:37:03'),
(35, 11, 'Task Created', 'Parent created a new task: Test Task 2', '2025-08-18 20:39:35'),
(36, 11, 'Task Submitted', 'Child submitted task: Test Task 2', '2025-08-18 20:40:09'),
(37, 11, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-18 20:40:19'),
(38, 12, 'Child Added', 'Parent added a new child: Baby', '2025-08-21 10:27:54'),
(39, 12, 'Task Created', 'Parent created a new task: Learn Machine Larrning', '2025-08-21 10:30:45'),
(40, 12, 'Task Submitted', 'Child submitted task: Learn Machine Larrning', '2025-08-21 10:34:08'),
(41, 12, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-21 10:34:46'),
(42, 13, 'Child Added', 'Parent added a new child: Aman Patel', '2025-08-22 05:35:13'),
(43, 11, 'Task Updated', 'Parent updated task: Test Task 02', '2025-08-22 05:39:46'),
(44, 11, 'Task Updated', 'Parent updated task: Test Task 02', '2025-08-22 05:39:52'),
(45, 13, 'Task Created', 'Parent created a new task: 10 sums based on profit and loss', '2025-08-24 16:47:17'),
(46, 14, 'Child Added', 'Parent added a new child: Bhavik Patel', '2025-08-26 06:30:01'),
(47, 14, 'Task Created', 'Parent created a new task: Speling Writing', '2025-08-26 06:30:33'),
(48, 14, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-08-26 06:31:55'),
(49, 13, 'Child Updated', 'Parent updated child information: Aman Patel', '2025-08-26 08:16:24'),
(50, 13, 'Child Updated', 'Parent updated child information: Aman Patel', '2025-08-26 08:16:31'),
(51, 1, 'Wish Added', 'Child added a new wish: give me football', '2025-08-26 10:31:24'),
(52, 1, 'Wish Approved', 'Parent approved wish: give me football', '2025-08-26 10:31:50'),
(53, 1, 'Wish Added', 'Child added a new wish: give me football', '2025-08-26 11:06:06'),
(54, 1, 'Wish Added', 'Child added a new wish: give me a cycle', '2025-08-26 11:08:03'),
(55, 1, 'Wish Deleted', 'Child deleted wish: give me a cycle', '2025-08-26 11:08:06'),
(56, 1, 'Wish Deleted', 'Child deleted wish: give me football', '2025-08-26 11:08:10'),
(57, 1, 'Wish Added', 'Child added a new wish: give me football', '2025-08-26 11:08:27'),
(58, 1, 'Wish Added', 'Child added a new wish: give me a cycle', '2025-08-26 11:08:40'),
(59, 1, 'Wish Rejected', 'Parent rejected wish: give me a cycle', '2025-08-26 11:11:06'),
(60, 1, 'Wish Approved', 'Parent approved wish: give me football', '2025-08-26 11:11:11'),
(61, 1, 'Task Updated', 'Parent updated task: Speling Writing', '2025-08-26 13:10:02'),
(62, 1, 'Task Created', 'Parent created a new task: Test Task 15', '2025-08-26 13:10:50'),
(63, 1, 'Task Created', 'Parent created a new task: Test Task 16', '2025-08-26 13:11:32'),
(64, 1, 'Task Submitted', 'Child submitted task: Test Task 15', '2025-08-26 13:12:22'),
(65, 1, 'Task Submitted', 'Child submitted task: Test Task 16', '2025-08-26 13:13:03'),
(66, 1, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-26 13:13:42'),
(67, 1, 'Reward Redeemed', 'Redeemed reward: play video game for 30 min.', '2025-08-26 13:13:46'),
(68, 13, 'Task Submitted', 'Child submitted task: 10 sums based on profit and loss', '2025-08-29 05:02:37'),
(69, 15, 'Child Added', 'Parent added a new child: Heet Ramoliya', '2025-09-01 07:01:10'),
(70, 16, 'Child Added', 'Parent added a new child: ravi', '2025-09-02 07:53:30'),
(71, 16, 'Task Created', 'Parent created a new task: Speling Writing', '2025-09-02 07:54:24'),
(72, 16, 'Task Created', 'Parent created a new task: Speling Writing', '2025-09-02 07:54:30'),
(73, 16, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-09-02 07:56:10'),
(74, 16, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-09-02 07:56:29'),
(75, 16, 'Task Created', 'Parent created a new task: Speling Writing', '2025-09-02 09:17:25'),
(76, 16, 'Task Created', 'Parent created a new task: Speling Writing', '2025-09-02 09:17:37'),
(77, 16, 'Task Created', 'Parent created a new task: Speling Writing', '2025-09-02 09:17:44'),
(78, 16, 'Task Updated', 'Parent updated task: Speling Writing', '2025-09-02 09:17:52'),
(79, 16, 'Task Submitted', 'Child submitted task: Speling Writing', '2025-09-02 09:18:41'),
(80, 16, 'Task Updated', 'Parent updated task: Speling Writing', '2025-09-02 09:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `standard` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `parent_id`, `name`, `standard`, `username`, `password`, `created_at`, `points`) VALUES
(1, 1, 'Smit Rakholiya', '10', 'smit', '$2y$12$nSLALngXWDil3sJFociIt.TOyHdulijHNSkVKLHhXpPpnsKYiEq0K', '2025-08-12 19:36:18', 0),
(3, 1, 'vivek patel', '12', 'vivek', '$2y$12$tjvOfL.Y2v34EYTa41wr3u8iH7R8ISK8VEi4q6ReDOuS3D7VcJRCy', '2025-08-12 19:45:19', 0),
(9, 1, 'Urmin Patel', '11', 'urmin', '$2y$12$uQ1Nm0yM9/Z/WpHwF0ruY.SKkBJs6zHIB6tsn.3US7CowIXdsEWlu', '2025-08-12 20:20:48', 0),
(11, 1, 'Sunny Patel', '11', 'sunny', '$2y$12$.nL/MdBSeZr0RfE/ECboBeu3Q0j5G3oV9VkLn59N9TzMsPLh.lh2y', '2025-08-18 14:02:07', 0),
(13, 1, 'Aman Patel', '12', 'aman', '$2y$10$Os4WuAFzk8IDgoT2.llQt.XvkmjZFyTmuueBRjraIctM.bc6POeBe', '2025-08-22 05:35:13', 13),
(14, 10, 'Bhavik Patel', '10', 'bhavik', '$2y$10$5iP58brah/03t8apeSpUp.IodWXk2yp7tA5koOeb329u0uPWVtYEu', '2025-08-26 06:30:01', 20),
(15, 1, 'Heet Ramoliya', '12', 'heet', '$2y$10$Rejm484TTyGgbbzCeC5h.epq7w9bPD0.X2hB/gLouvCVXp/qenVeG', '2025-09-01 07:01:10', 0),
(16, 11, 'ravi', '12', 'ravi', '$2y$10$4T2CqGi3Aow100dVQKrBkuoNAwayoYxHHyeMcEXYfzAWPGPSsoDSS', '2025-09-02 07:53:30', 50);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `user_type`, `message`, `is_read`, `created_at`) VALUES
(1, 9, 'child', 'New task assigned: Create Calculator in HTML CSS JS', 1, '2025-08-13 16:23:38'),
(2, 1, 'parent', 'Task completed: Create Calculator in HTML CSS JS', 1, '2025-08-13 16:25:11'),
(3, 3, 'child', 'New task assigned: Science and Technology Book Complete Write and Submit...', 1, '2025-08-13 16:33:51'),
(4, 1, 'parent', 'Task completed: Science and Technology Book Complete Write and Submit...', 1, '2025-08-13 16:34:39'),
(5, 11, 'child', 'New task assigned: Speling Writing', 1, '2025-08-18 14:03:03'),
(6, 1, 'parent', 'Task completed: Speling Writing', 1, '2025-08-18 14:04:04'),
(7, 11, 'child', 'New task assigned: Science and Technology Book Complete Write and Submit...', 1, '2025-08-18 18:39:00'),
(8, 1, 'parent', 'Task completed: Science and Technology Book Complete Write and Submit...', 1, '2025-08-18 18:39:18'),
(9, 11, 'child', 'New task assigned: Test Task 1', 1, '2025-08-18 19:07:59'),
(10, 1, 'parent', 'Task completed: Test Task 1', 1, '2025-08-18 19:10:09'),
(11, 1, 'parent', 'Task completed: Test Task 1', 1, '2025-08-18 19:13:29'),
(12, 1, 'parent', 'Task completed: Test Task 1', 1, '2025-08-18 19:13:35'),
(13, 1, 'parent', 'Task completed: Test Task 1', 1, '2025-08-18 19:13:37'),
(14, 1, 'parent', 'Task completed: Test Task 1', 1, '2025-08-18 19:13:42'),
(15, 1, 'parent', 'Task completed: Test Task 1', 1, '2025-08-18 19:13:44'),
(16, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:15:00'),
(17, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:15:08'),
(18, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:15:13'),
(19, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:18:33'),
(20, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:18:38'),
(21, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:25:12'),
(22, 1, 'parent', 'Sunny Patel redeemed reward: play video game for 30 min.', 1, '2025-08-18 19:25:50'),
(25, 11, 'child', 'New task assigned: Test Task 2', 1, '2025-08-18 20:39:35'),
(28, 12, 'child', 'New task assigned: Learn Machine Larrning', 1, '2025-08-21 10:30:45'),
(29, 8, 'parent', 'Task completed: Learn Machine Larrning', 0, '2025-08-21 10:34:08'),
(30, 8, 'parent', 'Baby redeemed reward: play video game for 30 min.', 0, '2025-08-21 10:34:46'),
(31, 13, 'child', 'New task assigned: 10 sums based on profit and loss', 1, '2025-08-24 16:47:17'),
(32, 14, 'child', 'New task assigned: Speling Writing', 1, '2025-08-26 06:30:33'),
(33, 10, 'parent', 'Task completed: Speling Writing', 1, '2025-08-26 06:31:55'),
(35, 1, 'child', 'Your wish \'give me football\' has been approved!', 1, '2025-08-26 10:31:50'),
(40, 1, 'child', 'Your wish \'give me a cycle\' has been rejected.', 1, '2025-08-26 11:11:06'),
(41, 1, 'child', 'Your wish \'give me football\' has been approved!', 1, '2025-08-26 11:11:11'),
(42, 1, 'child', 'New task assigned: Test Task 15', 1, '2025-08-26 13:10:50'),
(43, 1, 'child', 'New task assigned: Test Task 16', 1, '2025-08-26 13:11:32'),
(44, 1, 'parent', 'Task completed: Test Task 15', 1, '2025-08-26 13:12:22'),
(45, 1, 'parent', 'Task completed: Test Task 16', 1, '2025-08-26 13:13:03'),
(46, 1, 'parent', 'Smit Rakholiya redeemed reward: play video game for 30 min.', 1, '2025-08-26 13:13:42'),
(47, 1, 'parent', 'Smit Rakholiya redeemed reward: play video game for 30 min.', 1, '2025-08-26 13:13:46'),
(48, 1, 'parent', 'Task completed: 10 sums based on profit and loss', 1, '2025-08-29 05:02:37'),
(49, 16, 'child', 'New task assigned: Speling Writing', 1, '2025-09-02 07:54:24'),
(50, 16, 'child', 'New task assigned: Speling Writing', 1, '2025-09-02 07:54:30'),
(53, 16, 'child', 'New task assigned: Speling Writing', 1, '2025-09-02 09:17:25'),
(54, 16, 'child', 'New task assigned: Speling Writing', 1, '2025-09-02 09:17:37'),
(55, 16, 'child', 'New task assigned: Speling Writing', 1, '2025-09-02 09:17:44'),
(56, 11, 'parent', 'Task completed: Speling Writing', 1, '2025-09-02 09:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `username`, `password`, `name`, `email`, `created_at`) VALUES
(1, 'parent', '$2y$12$5/RgQRgrWHcEVmNkuMo5A.A8upuKz8kPUjVWBRmBaeLhZEatK3ieG', 'Pravinbhai', 'parent@example.com', '2025-08-12 19:33:46'),
(3, 'parent2', '$2y$12$oUCQhvGlY40JP1yWv9maGukRimI8ur54PetyDGTZ7zMim.BrHUZ1i', 'Prabhulal', 'parent@gmail.com', '2025-08-12 20:29:45'),
(4, 'kalpesh', '$2y$12$DdQ9vJz9gaNlf4K7vVJL0OYvUsSqzbHyAeqDYw7iSth02euXUY/BC', 'Kalpesh Chhatrola', 'kalpesh@gmail.com', '2025-08-12 20:42:50'),
(5, 'smitdesai', '$2y$12$bfw2Ui/bsFKaq50eGSwie.nE1I8LM8.C0dYXOzN13JD2dzjn5t7Em', 'Smit Desai', 'smit@gmail.com', '2025-08-20 12:13:35'),
(7, 'vivek123', '$2y$10$jpaAsTyKwhmzLCxD/XMI/uP4a5S62M2wpDkeFWrPRt0pZQMW/PWgG', 'vivek', 'vive@gmail.com', '2025-08-20 06:34:11'),
(8, 'pm', '$2y$10$t3hNzAoyQvPSWhHQ5HewuOyPv4ubwmvvzilYsVuSEDY.IbeHS/bBu', 'Parthiv', 'parthiv.virtueinfotrainee@gmail.com', '2025-08-21 10:26:45'),
(9, 'ahhhhh', '$2y$10$86WgX9UrMjKoC/VH2OaElOpMvrFFhmRzLq4Zd1yMtLi3ndTSVERAe', 'mitaxi', 'admin@gmail.com', '2025-08-22 10:13:48'),
(10, 'anil', '$2y$10$KZxtAJ42CAfdXeAISg4U0OPUDiZOfyTNV6lOAbP3s7UyQtJLl1A4q', 'anil patel', 'anil@gmail.com', '2025-08-25 13:59:44'),
(11, 'karan758', '$2y$10$vzG5inbpwbNI2jKwHcUmFOK2ikQ/cXHMLoiC5q8BpRA4b8PQ.9Tqe', 'Karan Chhatrola', 'karan.virtueinfo@gmail.com', '2025-09-02 07:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `points` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `child_id`, `task_id`, `points`, `note`, `created_at`) VALUES
(1, 11, 8, 100, 'Auto-awarded for completing task', '2025-08-18 19:10:09'),
(2, 11, 8, 100, 'Auto-awarded for completing task', '2025-08-18 19:13:29'),
(3, 11, 8, 100, 'Auto-awarded for completing task', '2025-08-18 19:13:35'),
(4, 11, 8, 100, 'Auto-awarded for completing task', '2025-08-18 19:13:37'),
(5, 11, 8, 100, 'Auto-awarded for completing task', '2025-08-18 19:13:42'),
(6, 11, 8, 100, 'Auto-awarded for completing task', '2025-08-18 19:13:44'),
(7, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 19:18:33'),
(8, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 19:18:38'),
(9, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 19:25:12'),
(10, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 19:25:50'),
(11, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 19:30:38'),
(12, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 19:37:03'),
(13, 11, 9, 100, 'Auto-awarded for completing task', '2025-08-18 20:40:09'),
(14, 11, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-18 20:40:19'),
(15, 12, 10, 100, 'Auto-awarded for completing task', '2025-08-21 10:34:08'),
(16, 12, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-21 10:34:46'),
(17, 14, 12, 20, 'Auto-awarded for completing task', '2025-08-26 06:31:55'),
(18, 1, 13, 100, 'Auto-awarded for completing task', '2025-08-26 13:12:22'),
(19, 1, 14, 100, 'Auto-awarded for completing task', '2025-08-26 13:13:03'),
(20, 1, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-26 13:13:42'),
(21, 1, NULL, -100, 'Points redeemed for reward: play video game for 30 min.', '2025-08-26 13:13:46'),
(22, 13, 11, 13, 'Auto-awarded for completing task', '2025-08-29 05:02:37'),
(23, 16, 16, 20, 'Auto-awarded for completing task', '2025-09-02 07:56:10'),
(24, 16, 15, 20, 'Auto-awarded for completing task', '2025-09-02 07:56:29'),
(25, 16, 19, 10, 'Auto-awarded for completing task', '2025-09-02 09:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `redemptions`
--

CREATE TABLE `redemptions` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL,
  `redemption_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redemptions`
--

INSERT INTO `redemptions` (`id`, `child_id`, `reward_id`, `redemption_date`, `created_at`) VALUES
(1, 11, 1, '2025-08-18', '2025-08-18 19:15:00'),
(2, 11, 1, '2025-08-18', '2025-08-18 19:15:08'),
(3, 11, 1, '2025-08-18', '2025-08-18 19:15:13'),
(4, 11, 1, '2025-08-18', '2025-08-18 19:18:33'),
(5, 11, 1, '2025-08-18', '2025-08-18 19:18:38'),
(6, 11, 1, '2025-08-18', '2025-08-18 19:25:12'),
(7, 11, 1, '2025-08-18', '2025-08-18 19:25:50'),
(8, 11, 1, '2025-08-18', '2025-08-18 19:30:38'),
(9, 11, 1, '2025-08-18', '2025-08-18 19:37:03'),
(10, 11, 1, '2025-08-18', '2025-08-18 20:40:19'),
(11, 12, 1, '2025-08-21', '2025-08-21 10:34:46'),
(12, 1, 1, '2025-08-26', '2025-08-26 13:13:42'),
(13, 1, 1, '2025-08-26', '2025-08-26 13:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `points_required` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `name`, `points_required`, `description`, `created_at`) VALUES
(1, 'play video game for 30 min.', 100, 'with your brother', '2025-08-18 18:25:49'),
(2, 'play video game for 30 min.', 100, 'with your brother', '2025-08-18 18:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `submit_date` date NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `parent_id`, `child_id`, `title`, `start_date`, `submit_date`, `note`, `created_at`, `points`) VALUES
(1, 1, 1, 'Speling Writing', '2025-08-12', '2025-08-13', 'You have to complete the task and give it to me tomorrow.\r\n', '2025-08-12 19:37:46', 0),
(2, 1, 1, 'Speling Writing', '2025-08-12', '2025-08-13', 'You have to complete the task and give it to me tomorrow.\r\n', '2025-08-12 19:38:20', 90),
(3, 1, 3, '10 sums based on profit and loss', '2025-08-12', '2025-08-13', 'Give me your completed task tommorow.', '2025-08-12 20:07:53', 0),
(4, 1, 9, 'Create Calculator in HTML CSS JS', '2025-08-13', '2025-08-14', 'Yesterday Complete Work And Submit Please', '2025-08-13 16:23:38', 0),
(5, 1, 3, 'Science and Technology Book Complete Write and Submit...', '2025-08-13', '2025-08-14', 'Complete Write Book Please', '2025-08-13 16:33:51', 0),
(6, 1, 11, 'Speling Writing', '2025-08-18', '2025-08-19', 'xyz', '2025-08-18 14:03:03', 0),
(7, 1, 11, 'Science and Technology Book Complete Write and Submit...', '2025-08-18', '2025-08-26', 'uhgchfg', '2025-08-18 18:39:00', 0),
(8, 1, 11, 'Test Task 1', '2025-08-18', '2025-08-20', 'You have a create task...', '2025-08-18 19:07:59', 100),
(9, 1, 11, 'Test Task 02', '2025-08-18', '2025-08-23', 'You have a give me date 23/08/2025', '2025-08-18 20:39:35', 100),
(10, 8, 12, 'Learn Machine Larrning', '2025-08-21', '2026-01-21', 'You can use any resource you want and tell me which course you want to buy.....', '2025-08-21 10:30:45', 100),
(11, 1, 13, '10 sums based on profit and loss', '2025-08-24', '2025-08-25', 'dsfwo', '2025-08-24 16:47:17', 13),
(12, 10, 14, 'Speling Writing', '2025-08-26', '2025-08-28', '100 Spelings', '2025-08-26 06:30:33', 20),
(13, 1, 1, 'Test Task 15', '2025-08-26', '2025-08-26', 'spelling', '2025-08-26 13:10:50', 100),
(14, 1, 1, 'Test Task 16', '2025-08-27', '2025-08-28', 'Speling', '2025-08-26 13:11:32', 100),
(15, 11, 16, 'Speling Writing', '2025-09-02', '2025-09-03', '100 Spellings', '2025-09-02 07:54:24', 20),
(16, 11, 16, 'Speling Writing', '2025-09-02', '2025-09-03', '100 Spellings', '2025-09-02 07:54:30', 20),
(17, 11, 16, 'Speling Writing', '2025-09-03', '2025-09-19', 'shdyuwdhfsnc', '2025-09-02 09:17:25', 10),
(18, 11, 16, 'Speling Writing', '2025-09-03', '2025-09-19', 'shdyuwdhfsnc', '2025-09-02 09:17:37', 10),
(19, 11, 16, 'Speling Writing', '2025-09-03', '2025-09-19', 'shdyuwdhfsnc', '2025-09-02 09:17:44', 100);

-- --------------------------------------------------------

--
-- Table structure for table `task_submissions`
--

CREATE TABLE `task_submissions` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `submission_date` date NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_submissions`
--

INSERT INTO `task_submissions` (`id`, `task_id`, `child_id`, `submission_date`, `file_path`, `note`, `created_at`) VALUES
(1, 2, 1, '2025-08-12', '', 'Complete My Task', '2025-08-12 19:39:19'),
(2, 1, 1, '2025-08-13', '', 'Complete My Task', '2025-08-12 19:39:46'),
(3, 3, 3, '2025-08-12', '', 'i have completed my task by a day before.', '2025-08-12 20:09:01'),
(4, 4, 9, '2025-08-14', '', 'This task is fully completed', '2025-08-13 16:25:11'),
(5, 5, 3, '2025-08-14', '', 'This Task as Completed', '2025-08-13 16:34:39'),
(6, 6, 11, '2025-08-19', '', 'hyinbvvbbvvh', '2025-08-18 14:04:04'),
(7, 7, 11, '2025-08-18', '', '', '2025-08-18 18:39:18'),
(8, 8, 11, '2025-08-18', '', '', '2025-08-18 19:10:09'),
(9, 8, 11, '2025-08-18', '', '', '2025-08-18 19:13:29'),
(10, 8, 11, '2025-08-18', '', '', '2025-08-18 19:13:35'),
(11, 8, 11, '2025-08-18', '', '', '2025-08-18 19:13:37'),
(12, 8, 11, '2025-08-18', '', '', '2025-08-18 19:13:42'),
(13, 8, 11, '2025-08-18', '', '', '2025-08-18 19:13:44'),
(14, 9, 11, '2025-08-18', '', 'Ok', '2025-08-18 20:40:09'),
(15, 10, 12, '2025-08-21', 'uploads/1755772448_Screenshot (179).png', 'Very thoughtfully', '2025-08-21 10:34:08'),
(16, 12, 14, '2025-08-26', 'uploads/1756189915_index.txt', 'Complete success', '2025-08-26 06:31:55'),
(17, 13, 1, '2025-08-26', 'uploads/1756213942_index.txt', 'dhywdifb', '2025-08-26 13:12:22'),
(18, 14, 1, '2025-08-26', 'uploads/1756213983_login.txt', 'hwhdfhwbdfb', '2025-08-26 13:13:03'),
(19, 11, 13, '2025-08-29', 'uploads/1756443756_cypress.config.js', 'Complete My Task', '2025-08-29 05:02:37'),
(20, 16, 16, '2025-09-02', 'uploads/1756799770_logo.png', 'Task Complete', '2025-09-02 07:56:10'),
(21, 15, 16, '2025-09-02', 'uploads/1756799789_logo.png', 'Task Complete', '2025-09-02 07:56:29'),
(22, 19, 16, '2025-09-02', 'uploads/1756804721_style.css', 'whdasfklnd', '2025-09-02 09:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `wishes`
--

CREATE TABLE `wishes` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `points_required` int(11) NOT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishes`
--

INSERT INTO `wishes` (`id`, `child_id`, `title`, `description`, `points_required`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'give me football', 'red colour', 97, 'approved', '2025-08-26 11:08:27', '2025-08-26 11:11:11'),
(4, 1, 'give me a cycle', 'black colour', 70, 'rejected', '2025-08-26 11:08:40', '2025-08-26 11:11:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`user_type`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `redemptions`
--
ALTER TABLE `redemptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`),
  ADD KEY `reward_id` (`reward_id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `task_submissions`
--
ALTER TABLE `task_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_id` (`child_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `redemptions`
--
ALTER TABLE `redemptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `task_submissions`
--
ALTER TABLE `task_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`);

--
-- Constraints for table `children`
--
ALTER TABLE `children`
  ADD CONSTRAINT `children_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`);

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`),
  ADD CONSTRAINT `points_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `redemptions`
--
ALTER TABLE `redemptions`
  ADD CONSTRAINT `redemptions_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`),
  ADD CONSTRAINT `redemptions_ibfk_2` FOREIGN KEY (`reward_id`) REFERENCES `rewards` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`);

--
-- Constraints for table `task_submissions`
--
ALTER TABLE `task_submissions`
  ADD CONSTRAINT `task_submissions_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `task_submissions_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
