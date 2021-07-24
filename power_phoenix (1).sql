-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 02:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power_phoenix`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `detail`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(22, 'web development services', 'Described by Kenneth Rexroth as “one of the most accomplished, one of the most influential” of the postwar American poets, Robert Duncan was an important part of both the Black Mountain school of poetry, led by Charles Olson, and the San Francisco Renaissance, whose other members included poets Jack Spicer and Robin Blaser. A distinctive voice in American poetry, Duncan’s idiosyncratic poetics drew on myth, occultism, religion—including the theosophical tradition in which he was raised—and innovative writing practices such as projective verse and composition by field. During his lifetime, critics such as M.L. Rosenthal heralded him as “the most intellectual of our poets from the point of view of the effect upon him of a wide, critically intelligent reading.” Duncan’s work drew on a wide range of references, including Homer, Dante, and the work of modernist poets such as H.D. His many books of poetry include Heavenly City Earthly City (1947), The Opening of the Field (1960), Roots and Branches (1964), A Book of Resemblances (1966), Bending the Bow (1968), and, after a 15-year publishing hiatus, the influential volumes Ground Work I: Before the War (1984) and Ground Work II: In the Dark (1987). His Selected Poems (1993) was published posthumously, as was his volume of collected writings, and personal tribute to the work of H.D., The H.D. Book (2011). A decades-long project that distills much of Duncan’s thinking on poetry, modernism, and the role of the occult in the imagination, The Nation’s critic Ange Mlinko described The H.D. Book as a “palimpsest.” Mlinko noted the importance of book for being “not only revisited and restarted many times over the years, but incorporating different sources from different points in time… Duncan’s roving eye for patterns consistently saw relationships between the new science of his day and the ancient wisdom of the poets.”', '5d105a615ba7c_100.jpg', '0000-00-00', '2019-06-15 21:58:13', '2019-06-23 22:36:41'),
(25, 'web development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5d0885d3408ce_42.jpg', '0000-00-00', '2019-06-17 22:19:42', '2019-06-18 00:03:55'),
(26, 'Hacking', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi u...', '5d0885c9b35c2_9eba88e5-7911-461a-9e8c-c7545dadb207_5.jpg', '0000-00-00', '2019-06-17 22:38:37', '2019-06-18 00:03:45'),
(27, 'Robotic Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1560840833_14.jpg', '0000-00-00', '2019-06-18 00:23:53', '2019-06-18 00:23:53'),
(29, 'Laravel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor', '1561281643_0014.jpg', '0000-00-00', '2019-06-23 02:50:43', '2019-06-23 02:50:43'),
(30, 'Android', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor', '1561352864_888.jpg', '0000-00-00', '2019-06-23 22:37:44', '2019-06-23 22:37:44'),
(31, 'Top Reasons to Choose Us', 'Morbi quis porta dolor. Nullam feugiat sapien et libero elementum faucibus. Praesent sagittis venenatis ipsum, eget \ntristique odio pharetra quis. Sed maximus a eros quis ornare.', '1562483004_003.jpg', '0000-00-00', '2019-07-07 00:33:25', '2019-07-07 00:33:25'),
(32, 'ဂိမ္းေလာင္းကစားသူ ၁၁ ဦးကိုဖမ္းဆီး', 'ေျမာက္ဥကၠလာပၿမိဳ႕ နယ္တြင္ ဂိမ္းေလာင္းကစားသည့္ ဆုိင္တာ၀န္ခံအပါအ၀င္ ၀န္ထမ္း ၁၁ ဦးကို ဖမ္းဆီးအေရးယူထားေၾကာင္း ေျမာက္ဥကၠလာပၿမိဳ႕မရဲစခန္းမွ ရဲအရာရွိတစ္ဦးက ေျပာသည္။ ဇူလိုင္ ၁၀ ရက္ညေနက (စ်) ရပ္ကြက္ သီရိရတနာလက္ ကားေစ်း၀င္းရွိ ဆုိင္တစ္ဆုိင္တြင္ ဂိမ္းေလာင္းကစားေနေၾကာင္း သတင္းရရွိ၍ ရဲတပ္ဖြဲ႕က ၀င္ေရာက္ဖမ္းဆီးစဥ္ယင္း ဆိုင္အေပၚထပ္ႏွင့္ေအာက္ထပ္တုိ႔မွ ဂိမ္းေလာင္းကစားျပဳလုပ္သည့္ စက္ပစၥည္း မ်ားႏွင့္အတူ ဆိုင္တာ၀န္ခံတစ္ဦး၊ ဆုိင္၀န္ထမ္း ၁၀ ဦးတို႔ကိုဖမ္းဆီးရမိခဲ့ေၾကာင္း ရဲမွတ္တမ္းတြင္ ေဖာ္ျပသည္။', '1563008906_5d04af4097d0f_(111).jpg', '0000-00-00', '2019-07-13 02:38:26', '2019-07-13 02:40:58'),
(33, 'sandar', 'dsfs fss ffffffffffffff', '5d3d5653bd98e_5.jpg', '0000-00-00', '2019-07-28 00:00:44', '2019-07-28 01:31:23'),
(34, 'sandar', 'dsfs fss ffffffffffffff', '5d3d5688b0949_5.jpg', '2019-07-29', '2019-07-28 01:32:16', '2019-07-29 04:32:36'),
(35, 'phyo thazin', 'mingalar par', '5d3d56d92df0c_(16).jpg', '0000-00-00', '2019-07-28 01:33:37', '2019-07-28 01:33:37'),
(36, 'ဂိမ္းေလာင္းကစားသူ ၁၁ ဦးကိုဖမ္းဆီး', 'ေျမာက္ဥကၠလာပၿမိဳ႕ နယ္တြင္ ဂိမ္းေလာင္းကစားသည့္ ဆုိင္တာ၀န္ခံအပါအ၀င္ ၀န္ထမ္း ၁၁ ဦးကို ဖမ္းဆီးအေရးယူထားေၾကာင္း ေျမာက္ဥကၠလာပၿမိဳ႕မရဲစခန္းမွ ရဲအရာရွိတစ္ဦးက ေျပာသည္။ ဇူလိုင္ ၁၀ ရက္ညေနက (စ်) ရပ္ကြက္ သီရိရတနာလက္ ကားေစ်း၀င္းရွိ ဆုိင္တစ္ဆုိင္တြင္ ဂိမ္းေလာင္းကစားေနေၾကာင္း သတင္းရရွိ၍ ရဲတပ္ဖြဲ႕က ၀င္ေရာက္ဖမ္းဆီးစဥ္ယင္း ဆိုင္အေပၚထပ္ႏွင့္ေအာက္ထပ္တုိ႔မွ ဂိမ္းေလာင္းကစားျပဳလုပ္သည့္ စက္ပစၥည္း မ်ားႏွင့္အတူ ဆိုင္တာ၀န္ခံတစ္ဦး၊ ဆုိင္၀န္ထမ္း ၁၀ ဦးတို႔ကိုဖမ္းဆီးရမိခဲ့ေၾကာင္း ရဲမွတ္တမ္းတြင္ ေဖာ္ျပသည္။', '5d3d5714e5aa4_(16).jpg', '2019-07-29', '2019-07-28 01:34:36', '2019-07-29 00:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `photo`, `link`, `created_at`, `updated_at`) VALUES
(16, '5d09b0897afa0_0017.jpg', 'https://www.foreliink.com/', '2019-06-18 21:18:25', '2019-06-18 21:18:25'),
(17, '5d1728b82f0d1_105.jpg', 'https://www.netscriper.com/', '2019-06-18 21:42:22', '2019-06-29 02:30:40'),
(18, '5d09b697b0fac_20.jpg', 'https://www.facebook.com', '2019-06-18 21:44:15', '2019-06-18 21:44:15'),
(19, '5d0f3ffe7d730_1010.jpg', 'https://www.skylarkmyanmar.com/', '2019-06-23 02:31:38', '2019-06-23 02:31:50'),
(20, '5d1726d858db2_0103.jpg', 'https://www.facebook.com/home.php', '2019-06-29 02:22:40', '2019-06-29 02:22:40'),
(21, '5d1728d5221a0_0862e6e1-64e4-440b-abe0-24639d07703c_12.jpg', 'https://www.netscriper.com/', '2019-06-29 02:31:09', '2019-06-29 02:31:09'),
(22, '5d299d47e4749_5d04a615b63a6_20.jpg', 'https://www.foreliink.com/', '2019-06-29 02:31:19', '2019-07-13 02:28:47'),
(23, '5d3eb9d9e740a_021.jpg', 'https://www.netscriper.com/', '2019-06-29 02:31:28', '2019-07-29 02:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `message`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(6, 'Moon Lay', 'Mingalar Par', 'Your foundation is so good', '09543345876', 'moon123@gmail.com', '2019-06-23 00:18:29', '2019-06-23 00:18:29'),
(7, 'Power Phoenix Myanmar', 'Mingalar Par', 'Your Foundation is Good', '09543345876', 'moon@gmail.com', '2019-06-23 00:21:09', '2019-06-23 00:21:09'),
(9, 'Yamin', 'Hello World', 'Best company', '09765432234', 'moon@gmail.com', '2019-06-23 20:34:09', '2019-06-23 20:34:09'),
(10, 'Moon Lay', 'Mingalar Par', 'dfdsfsdfsddfdgdfg', '09543345876', 'moon123@gmail.com', '2019-06-25 08:09:58', '2019-06-25 08:09:58'),
(11, 'Ye Myint Soe', 'Hello World', 'dfdgdfgdfgd', '09797294931', 'moonlay@gmail.com', '2019-06-25 08:13:48', '2019-06-25 08:13:48'),
(12, 'Power Phoenix Myanmar', 'Mingalar Par', 'cxczxcz', '09543345876', 'moon123@gmail.com', '2019-06-25 21:02:16', '2019-06-25 21:02:16'),
(13, 'Power Phoenix Myanmar', 'Mingalar Par', 'sdfds', '09797294931', 'moonlay@gmail.com', '2019-06-27 23:55:09', '2019-06-27 23:55:09'),
(14, 'Moon Lay', 'Mingalar Parsds', 'sds', '09765432234', 'moonlay@gmail.com', '2019-06-28 00:01:56', '2019-06-28 00:01:56'),
(15, 'Yamin', 'Hello World', 'sdf', '09765432234', 'moon123@gmail.com', '2019-06-28 00:02:58', '2019-06-28 00:02:58'),
(16, 'Ye Myint Soe', 'Mingalar Par', 'rgrerert', '09543345876', 'moonlay@gmail.com', '2019-06-28 00:04:56', '2019-06-28 00:04:56'),
(17, 'Mr.Yar Zar Min', 'Hello World', 'fgdfgdfgd', '09797294931', 'moonlay@gmail.com', '2019-06-28 00:13:17', '2019-06-28 00:13:17'),
(18, 'koko', 'Mingalar Par', 'Sorry Pae', '09543345876', 'moonlay@gmail.com', '2019-06-28 05:02:33', '2019-06-28 05:02:33'),
(19, 'Mr.Yar Zar Min', 'Hello World', 'dxdfxdfx', '09543345876', 'moonlay@gmail.com', '2019-06-29 02:34:34', '2019-06-29 02:34:34'),
(20, 'Ko Ko', 'Hello', 'fdgdfgdfgdfgdfg', '09543345876', 'kokoD@gmail.com', '2019-07-01 00:27:18', '2019-07-01 00:27:18'),
(21, 'Power Phoenix Myanmar', 'Hello World', 'fdgdgdfg', '09543345876', 'fdgdfgd@gmail.com', '2019-07-05 05:02:04', '2019-07-05 05:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_06_11_034923_create_blogs_table', 1),
(7, '2019_06_12_042701_create_services_table', 2),
(8, '2019_06_12_065200_create_contacts_table', 3),
(9, '2019_06_12_074545_create_teams_table', 4),
(10, '2019_06_12_143010_create_offices_table', 5),
(12, '2019_06_12_143147_create_clients_table', 6),
(13, '2019_06_23_021946_create_donates_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Dr - Aung Win Htut', 'No(8).Swal Taw Quarters,  \r\nDSTA, Pyin Oo Lwin City', '095506082', '2019-06-11 17:30:00', '2019-06-25 21:36:15'),
(2, NULL, 'No(51),4 Floor.Baya Thokedi Street,\r\nKyauk Myaung,Tarmwe Township,Yangon City', '09799261714', '2019-06-23 17:30:00', '2019-06-24 21:27:29'),
(3, NULL, 'No(1/15),78 Street\r\n(Yangon-Mandalay Street)\r\nPyi Gyi Ta Kon Township,Mandalay City', '09797294931', '2019-06-23 17:30:00', '2019-06-24 21:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(1, '5d0f44ed3d0f1_Web-Design-Development-MT-Web-Sol-e1521274578857-1024x472.png', 'Web Design & Development Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 07:57:49', '2019-06-23 02:52:53'),
(2, '5d0f462e6735c_arduino.png', 'Arduion Controller Services', 'Great design is not created in a vacuum. Our designers dive deep to immerse themselves in your industry and your brand aesthetic. Our collaborative process involves you and your team every step of the way, ensuring that your new site is something that truly represents you and your business while also pushing you to the next level..', '2019-06-17 08:00:24', '2019-06-23 02:58:14'),
(3, 'kisspng-robotics.jpg', 'Robotic Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 08:03:00', '2019-06-17 08:03:00'),
(4, 'Mobile-App.png', 'Enterprise Resources Planning & Mobile Application', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 08:03:46', '2019-06-18 09:33:33'),
(5, '5d0f46d11379b_plc.jpg', 'PLC Control Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 08:04:58', '2019-06-23 03:00:57'),
(6, '0b7d1785d9b549dcd090c148728958df_full.jpg', 'နည္းပညာ', 'မဂ္လာပါရွင္ အားလုံးကုိေက်းဇူးတင္ပါတယ္ရွင္', '2019-07-29 01:48:00', '2019-07-29 01:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `photo`, `position`, `detail`, `fb_link`, `created_at`, `updated_at`) VALUES
(6, 'Dr. Aung Win Htut', '5d0f3d308124e_Picture1.jpg', 'MD', 'Engineer @ Moscow Power Engineering Institute', 'https://www.facebook.com/BluePhoenixMM', '2019-06-23 00:50:52', '2019-06-23 02:19:52'),
(8, 'Mr Pyae Soan Aung', '5d0f3c843f082_Picture3.jpg', 'Team Leader @ ROS', 'Programmer @ ROS Myanmar Community', 'https://www.facebook.com/Ghostman.44', '2019-06-23 02:02:10', '2019-06-23 02:17:00'),
(9, 'Mr.Yar Zar Min', '5d0f3d8dc5e93_Picture2.jpg', 'Team Leader @ PLC', 'Programmer at PLC Programmable Logic Controller Plc Logic controllers', 'https://www.facebook.com/yarzar.min.96930?fref=pb&hc_location=friends_tab', '2019-06-23 02:21:25', '2019-06-23 02:21:25'),
(10, 'Mr.Thu Yein Soe', '5d0f3de32df13_Picture5.jpg', 'Team Leader @ IT', 'Web Designer and Web Developer @ Green Hackers', 'https://www.facebook.com/profile.php?id=100011464260891', '2019-06-23 02:22:51', '2019-06-23 02:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'mm@gmail.com', NULL, '11111111', NULL, '2019-08-11 17:30:00', '2019-08-11 17:30:00'),
(4, 'moonlay@gmail.com', NULL, '$2y$10$2DddX6lCsn20QlVikFcVP.UySjXTHVlu6RX8dWADCgyduC9Wo0nHK', NULL, '2019-06-18 21:57:12', '2019-06-18 21:57:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
