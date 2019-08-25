-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 08:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peoplescap`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcall1s`
--

CREATE TABLE `aboutcall1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutcall1s`
--

INSERT INTO `aboutcall1s` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'FIND JOBS AND REGISTER OUR SITE', NULL, '2019-07-09 11:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `aboutcall2s`
--

CREATE TABLE `aboutcall2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutcall2s`
--

INSERT INTO `aboutcall2s` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'FIND JOBS AND REGISTER OUR SITE', NULL, '2019-07-09 11:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `aboutchooses`
--

CREATE TABLE `aboutchooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutchooses`
--

INSERT INTO `aboutchooses` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WHY CHOOSE US', 'PeopleScape Ltd. started its journey from 2006 and presently have HR Partnering agreement with 20+ Multinational Company & 3000++ employees under our payroll and provide services in the field of Pool Sourcing & Recruitment, Payroll Management, Retaining & Managing of employees, Replacement, Managing Assessment Center and Recruitment , Headhunting &Exit process.', 'psimage/30579455.jpg', NULL, '2019-07-09 11:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `aboutheads`
--

CREATE TABLE `aboutheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutheads`
--

INSERT INTO `aboutheads` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT', 'psimage/1564485749.jpg', NULL, '2019-07-30 11:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OUR STRENGTH', '{\"1\":{\"ptitle\":\"Vast Experience\",\"description\":\"PeopleScape has 12 years\\u2019 experience in the field of Pool Sourcing & Recruitment, Payroll Management, Retaining & Managing of employees, Replacement, Managing Assessment Center and Recruitment, Headhunting &exit process.\"},\"2\":{\"ptitle\":\"Diversified Network\",\"description\":\"We guarantee the confidentiality of our client data through strict control over our infrastructure, as well as our physical and personal access rights.\"},\"3\":{\"ptitle\":\"CV Bank\",\"description\":\"More than 10000 leading positions CV bank and have corporate agreement withBangladeshi Largest CV Bank online job site.\"},\"4\":{\"ptitle\":\"HR Professionals\",\"description\":\"A dedicated & self-motivated team of HR professionals.\"}}', 'psimage/1344589244.jpg', '2019-07-02 18:14:30', '2019-07-09 11:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `alllocations`
--

CREATE TABLE `alllocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alllocations`
--

INSERT INTO `alllocations` (`id`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Gulshan-1, Dhaka', 'HOUSE-8, ROAD-23/C, GULSHAN-1, DHAKA-1212.', 'dsfsd', '2019-06-22 04:20:45', '2019-07-09 10:49:13'),
(3, 'Khulshi, Chittagong', '20, ARANIKA ZAKIR HOSSAIN ROAD, KHULSHI, CHITTAGONG', 'dfsdfsd', '2019-06-22 04:21:04', '2019-07-09 10:49:47'),
(5, 'East Subid Bazar, Sylhet', 'SONALI TRADERS, ( 2ND FLOOR ), LOVELY ROAD, EAST SUBIDBAZAR', 'dsdfgfh', '2019-07-09 10:50:39', '2019-07-09 10:55:07'),
(6, 'Champok Nagar, Comilla', 'SHENO NEER HOUSING, CHAMPOK NAGAR, SASHONGASA, COMILLA', 'dgfdghj', '2019-07-09 10:51:05', '2019-07-09 10:51:05'),
(7, 'Ahasan Ahmed Road, Khulna', '65, AHASAN AHMED ROAD, KHULNA', 'sdf', '2019-07-09 10:51:26', '2019-07-09 10:51:26'),
(8, 'Munsur Quarter, Barisal', '49, ALI MANSON, MUNSUR QUARTER, BATTALA, BARISAL', 'fd', '2019-07-09 10:51:47', '2019-07-09 10:51:47'),
(9, 'Sutrapur, Bogra', 'HARITEZ TOWER, 2ND FLOOR, REAZ KAZI LANE, SUTRAPUR, BOGRA', 'df', '2019-07-09 10:52:03', '2019-07-09 10:52:03'),
(10, 'Uposhahor, Rajshahi', 'HOUSE-A/256, UPOSHAHOR, RAJSHAHI', 'dvf', '2019-07-09 10:52:21', '2019-07-09 10:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `allservices`
--

CREATE TABLE `allservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allservices`
--

INSERT INTO `allservices` (`id`, `title`, `description`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Head Hunting', 'We view Headhunting as facilitating our clients with the Right People, to the Right Place, at the Right Time. At PeopleScape, we immerse ourselves in your world. We operate from the perspective of all your stakeholders , giving us the 360 degree view. This gives us the knowledge needed to build a talent acquisition and management program that meets clients’ objectives, matches your culture, which can be seamlessly implemented in your organization for maximum ROI in the shortest time.', 'psimage/1564384401.jpeg', 'fas fa-hat-wizard', '2019-06-20 11:36:55', '2019-07-29 07:13:21'),
(2, 'Manpower Outsourcing', 'By handing over the Manpower Outsourcing responsibly to us, you get to devote your internal resources and capital funds to more profit-driven activities. We help businesses reduce their response time to human resources needs as well as providing sophisticated staffing methods and reporting. Outsourcing your recruitment processes to us would help you reduce costs and understand and measure your recruitment strategy more efficiently and effectively.', 'psimage/1564384431.JPG', 'fas fa-book-reader', '2019-06-20 11:40:09', '2019-07-29 07:13:51'),
(3, 'Payroll Management', 'The payroll is one of the most vital elements of a business. This department is not only responsible for employees’ salary but we believe it plays a vibrant role in protecting the company’s reputation. We provide a comprehensive yet flexible solution, specifically tailored to clients’ ease. By keeping you legislatively compliant, we make sure your Human assets are well protected in terms of their salaries.', 'psimage/1564384450.jpg', 'far fa-credit-card', '2019-06-22 03:40:51', '2019-07-29 07:14:10'),
(4, 'Medical marketing', 'PeopleScape Ltd. has a vast knowledge of Medical Marketing in Bangladesh for various Multinational Companies. We know the category of Doctors & can read their mind which helped us to generate the ultimate target. We have also expertise to arrange the scientific seminar, RMPs Meeting,', 'psimage/430248024.jpg', 'fas fa-briefcase-medical', '2019-06-22 03:40:51', '2019-07-28 17:17:03'),
(5, 'Assessment Center', 'We have vast experience to run Assessment Center for BAT, Nestle, UBL, Hera Sweaters. We run an organized Assessment Center where candidates are examined to determine their suitability for specific types of employment. The assessment often consists of different components including interviews, group exercises, presentations, examinations and psychometric testing.', 'psimage/1564384489.jpg', 'fas fa-hotel', '2019-06-22 03:40:51', '2019-07-29 07:14:49'),
(6, 'Recruitment Process Management', 'Our experts help you to create a corporate staffing strategy to ensure the best results. Our recruitment process includes analyzing the requirements of a job, attracting employees to that job, screening and selecting applicants, hiring, and integrating the new employee to the organization.', 'psimage/1564384509.jpg', 'fas fa-recycle', '2019-06-22 03:40:51', '2019-07-29 07:15:09'),
(7, 'Training & Development', 'Our Training & Development programs will allow you to strengthen those skills that employee needs to improve. This also brings all employees to a higher level so that your human resources are up to dated in this dynamic market.', 'psimage/1564384533.JPG', 'fab fa-dev', '2019-06-22 03:40:51', '2019-07-29 07:15:33'),
(11, 'Campus Recruitment', 'We view Headhunting as facilitating our clients with the Right People, to the Right Place, at the Right Time. At PeopleScape, we immerse ourselves in your world. We operate from the perspective of all your stakeholders , giving us the 360 degree view. This gives us the knowledge needed to build a talent acquisition and management program that meets clients’ objectives, matches your culture, which can be seamlessly implemented in your organization for maximum ROI in the shortest time.', 'psimage/1564384552.jpeg', 'fas fa-hat-wizard', '2019-07-24 17:35:34', '2019-07-29 07:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `asscenters`
--

CREATE TABLE `asscenters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asscenters`
--

INSERT INTO `asscenters` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Assessment Centner', 'We have vast experience to run Assessment Center for BAT, Nestle, UBL, Hera Sweaters. We run an organized Assessment Center where candidates are examined to determine their suitability for specific types of employment. The assessment often consists of different components including interviews, group exercises, presentations, examinations and psychometric testing.', 'psimage/1032894482.jpg', NULL, '2019-07-09 11:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `careercats`
--

CREATE TABLE `careercats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careercats`
--

INSERT INTO `careercats` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Web Developer', '2019-06-25 05:04:26', '2019-06-25 05:06:27'),
(3, 'Marketing', '2019-07-02 18:32:59', '2019-07-02 18:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `careerheads`
--

CREATE TABLE `careerheads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careerheads`
--

INSERT INTO `careerheads` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Career', 'psimage/919019393.jpg', NULL, '2019-07-02 18:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catid` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posteddate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topdescription` text COLLATE utf8mb4_unicode_ci,
  `responsibilitiestext` text COLLATE utf8mb4_unicode_ci,
  `responsibilitiespoint` text COLLATE utf8mb4_unicode_ci,
  `qualification` text COLLATE utf8mb4_unicode_ci,
  `howtoapply` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `catid`, `title`, `company`, `experience`, `vacancy`, `education`, `deadline`, `location`, `salary`, `posteddate`, `topdescription`, `responsibilitiestext`, `responsibilitiespoint`, `qualification`, `howtoapply`, `created_at`, `updated_at`) VALUES
(1, 2, 'HTML Developer dssfs', 'Webstrot Technology Pvt. Ltd', '1+ Years Experience', '3', 'M.S.C', '20/05/2019', 'Los Angeles Califonia PO, 455001', '12K - 15k', '29/06/2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem in possimus repellendus. Atque beatae consectetur corporis cum cumque dicta distinctio dolores eaque eos est expedita fugit illo incidunt iste itaque laboriosam laborum libero mollitia nam nisi, nostrum odit officiis perferendis possimus quae quaerat quam quidem quod recusandae rem temporibus, veniam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem in possimus repellendus. Atque beatae consectetur corporis cum cumque dicta distinctio dolores eaque eos est expedita fugit illo incidunt iste itaque', '{\"1\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"},\"2\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"},\"1001\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"}}', '{\"1\":{\"qualification\":\"BA\\/BS degree in a technical field or equivalent practical experience.\"},\"2\":{\"qualification\":\"BA\\/BS degree in a technical field or equivalent practical experience.\"},\"1001\":{\"qualification\":\"Build next-generation web applications with a focus on the client side.\"}}', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2019-06-29 12:40:10', '2019-06-30 04:08:21'),
(2, 2, 'HTML Developer', 'Webstrot Technology Pvt. Ltd', '1+ Years Experience', '3', 'M.S.C', '20/05/2019', 'Los Angeles Califonia PO, 455001', '12K - 15k', '29/06/2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem in possimus repellendus. Atque beatae consectetur corporis cum cumque dicta distinctio dolores eaque eos est expedita fugit illo incidunt iste itaque laboriosam laborum libero mollitia nam nisi, nostrum odit officiis perferendis possimus quae quaerat quam quidem quod recusandae rem temporibus, veniam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem in possimus repellendus. Atque beatae consectetur corporis cum cumque dicta distinctio dolores eaque eos est expedita fugit illo incidunt iste itaque', '{\"1\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"},\"2\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"},\"1001\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"}}', '{\"1\":{\"qualification\":\"BA\\/BS degree in a technical field or equivalent practical experience.\"},\"2\":{\"qualification\":\"BA\\/BS degree in a technical field or equivalent practical experience.\"},\"1001\":{\"qualification\":\"Build next-generation web applications with a focus on the client side.\"}}', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2019-06-29 12:40:10', '2019-06-30 04:08:21'),
(3, 2, 'HTML Developer', 'Webstrot Technology Pvt. Ltd', '1+ Years Experience', '3', 'M.S.C', '20/05/2019', 'Los Angeles Califonia PO, 455001', '12K - 15k', '29/06/2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem in possimus repellendus. Atque beatae consectetur corporis cum cumque dicta distinctio dolores eaque eos est expedita fugit illo incidunt iste itaque laboriosam laborum libero mollitia nam nisi, nostrum odit officiis perferendis possimus quae quaerat quam quidem quod recusandae rem temporibus, veniam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem in possimus repellendus. Atque beatae consectetur corporis cum cumque dicta distinctio dolores eaque eos est expedita fugit illo incidunt iste itaque', '{\"1\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"},\"2\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"},\"1001\":{\"responsibilitiespoint\":\"Build next-generation web applications with a focus on the client side.\"}}', '{\"1\":{\"qualification\":\"BA\\/BS degree in a technical field or equivalent practical experience.\"},\"2\":{\"qualification\":\"BA\\/BS degree in a technical field or equivalent practical experience.\"},\"1001\":{\"qualification\":\"Build next-generation web applications with a focus on the client side.\"}}', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2019-06-29 12:40:10', '2019-06-30 04:08:21'),
(4, 3, 'df', 'dfgsd fgh', 'dfgsdf', 'dfgdfg', 'fgsdfg', 'dfgsdfgsdfgsd', 'dfgdsfg', 'sdfgsdfg', '02/07/2019', 'dssdfasf', 'dsfadasdfas', '{\"1\":{\"responsibilitiespoint\":\"sadfasd\"}}', '{\"1\":{\"qualification\":\"sdfas\"}}', 'sadfasdfasdf dfgdfg', '2019-07-02 18:33:34', '2019-07-02 18:49:18'),
(5, 3, 'dfs', 'dfg', 'dfgsd', 'dfgds', 'dfgd', 'dfg', 'sdfg', 'dfg', '02/07/2019', 'dfgdsf', 'dfgdsfg', '[{\"responsibilitiespoint\":\"dfgsdfg\"}]', '[{\"qualification\":\"dfgd\"}]', 'dfgdsfgdfg', '2019-07-02 18:48:50', '2019-07-02 18:48:50'),
(6, 3, 'sfd', 'sdf', 'asdf', 'sdf', 'sadf', 'asdf', 'sadf', 'sadf', '02/07/2019', 'sdfasdf', 'asdfs', '{\"1\":{\"responsibilitiespoint\":\"fdghfd\"}}', '{\"1\":{\"qualification\":\"asdfasdf\"}}', 'sdfasdf', '2019-07-02 18:50:20', '2019-07-02 18:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `clientheads`
--

CREATE TABLE `clientheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientheads`
--

INSERT INTO `clientheads` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'CLIENTS', 'psimage/584598324.jpg', NULL, '2019-07-02 18:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(14, 'psimage/830035494.png', 'http://peoplescapebd.net', '2019-07-18 13:21:17', '2019-07-18 13:21:17'),
(15, 'psimage/2071241141.png', 'http://peoplescapebd.net', '2019-07-18 13:22:13', '2019-07-18 13:22:13'),
(16, 'psimage/2122340192.png', 'http://peoplescapebd.net/', '2019-07-18 13:23:37', '2019-07-18 13:23:37'),
(17, 'psimage/1882002263.png', 'http://peoplescapebd.net/', '2019-07-18 13:23:50', '2019-07-18 13:23:50'),
(18, 'psimage/1523368120.png', 'http://peoplescapebd.net/', '2019-07-18 13:24:22', '2019-07-18 13:24:22'),
(19, 'psimage/61437727.png', 'http://peoplescapebd.net/', '2019-07-18 13:24:36', '2019-07-18 13:24:36'),
(20, 'psimage/289196138.png', 'http://peoplescapebd.net/', '2019-07-18 13:24:44', '2019-07-18 13:24:44'),
(21, 'psimage/1018100222.png', 'http://peoplescapebd.net/', '2019-07-18 13:24:59', '2019-07-18 13:24:59'),
(22, 'psimage/2140254108.png', 'http://peoplescapebd.net/', '2019-07-18 13:25:08', '2019-07-18 13:25:08'),
(23, 'psimage/678317751.png', 'http://peoplescapebd.net/', '2019-07-18 13:25:18', '2019-07-18 13:25:18'),
(24, 'psimage/631498874.png', 'http://peoplescapebd.net/', '2019-07-18 13:25:28', '2019-07-18 13:25:28'),
(25, 'psimage/1262980635.png', 'http://peoplescapebd.net/', '2019-07-18 13:25:36', '2019-07-18 13:25:36'),
(28, 'psimage/1113004056.jpg', 'http://peoplescapebd.net/', '2019-07-18 13:26:34', '2019-07-18 13:26:34'),
(29, 'psimage/1186583501.jpg', 'http://peoplescapebd.net/', '2019-07-18 13:26:55', '2019-07-18 13:26:55'),
(31, 'psimage/1498806778.png', 'http://peoplescapebd.net/', '2019-07-18 13:28:04', '2019-07-18 13:28:04'),
(33, 'psimage/1676015810.gif', 'http://peoplescapebd.net/', '2019-07-18 13:59:13', '2019-07-18 13:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `clienttops`
--

CREATE TABLE `clienttops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clienttops`
--

INSERT INTO `clienttops` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'WHOM WE WORK WITH', 'Whether you’re building a welcome mat for your SaaS or a clean, corporate portfolio, Sooad has your design needs covered.', NULL, '2019-07-02 18:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `contactdets`
--

CREATE TABLE `contactdets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactdets`
--

INSERT INTO `contactdets` (`id`, `address`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ASAD TOWER, HOUSE-8, ROAD-23/C, GULSHAN-1, DHAKA-1212, BANGLADESH.', '+88029848560, +88029893731', 'info@peoplescapebd.net', NULL, '2019-07-09 11:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `contactheads`
--

CREATE TABLE `contactheads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactheads`
--

INSERT INTO `contactheads` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Contact', 'psimage/413359988.jpg', NULL, '2019-07-02 18:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Nasima', 'nasimabegume12@gmail.com', 'dfgsdfgsdf', '2019-06-29 10:37:52', '2019-06-29 10:37:52'),
(2, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'sdfghgc nmnfghkjkjghkjk', '2019-06-29 10:42:36', '2019-06-29 10:42:36'),
(3, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'dsfgdhfgjfjytreutyyouiop', '2019-06-29 10:44:01', '2019-06-29 10:44:01'),
(4, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'fdfgdsfgsdfgdfgd', '2019-06-29 10:45:43', '2019-06-29 10:45:43'),
(5, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'sdsgfgfjgfhjgh ghdfghdfhgfdghdf', '2019-06-29 10:47:47', '2019-06-29 10:47:47'),
(6, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'hfdghfdghfdghh fdfghfdghdfhhfgdf', '2019-06-29 10:51:12', '2019-06-29 10:51:12'),
(7, 'Nasima', 'mahbubsprint310@gmail.com', 'sdfsadfasdf', '2019-06-29 11:01:46', '2019-06-29 11:01:46'),
(8, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'asdfsadfasdfas dsfsadfasdf', '2019-06-29 11:11:32', '2019-06-29 11:11:32'),
(9, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'nbjygyjtyiiu', '2019-06-29 11:21:35', '2019-06-29 11:21:35'),
(10, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'dftwrtwetrwete', '2019-07-02 08:08:41', '2019-07-02 08:08:41'),
(11, 'Nasima', 'nasimabegume12@gmail.com', 'hlw peoplescap world', '2019-07-25 12:13:55', '2019-07-25 12:13:55'),
(12, 'Nasima', 'nasimabegume12@gmail.com', 'dsdfsadfsadsdfsdsds dfsdf', '2019-07-25 12:16:53', '2019-07-25 12:16:53'),
(13, 'Nasima', 'nasimabegume12@gmail.com', 'asdfsdfsd sdfdsdf', '2019-07-25 12:17:38', '2019-07-25 12:17:38'),
(14, 'Nasima dd', 'nasimabegume12@gmail.com', 'fdfsdfsdfxcvzxc zvxcvxcv', '2019-07-25 12:53:26', '2019-07-25 12:53:26'),
(15, 'Mahabub Hossain', 'manager1@gamil.com', 'hlw hlw', '2019-07-25 13:11:21', '2019-07-25 13:11:21'),
(16, 'Nasima', 'nasimabegume12@gmail.com', 'hlw', '2019-07-25 13:24:32', '2019-07-25 13:24:32'),
(17, 'Nasima', 'nasimabegume12@gmail.com', 'sdfasdfsad', '2019-07-25 13:27:09', '2019-07-25 13:27:09'),
(18, 'mahbub', 'mahbubsprint310@gmail.com', 'hlw from contact form', '2019-07-31 06:29:25', '2019-07-31 06:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `counterparts`
--

CREATE TABLE `counterparts` (
  `id` int(10) UNSIGNED NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counterparts`
--

INSERT INTO `counterparts` (`id`, `experience`, `location`, `employee`, `team`, `created_at`, `updated_at`) VALUES
(1, '12', '9', '3000', '100', NULL, '2019-07-09 11:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `cvforms`
--

CREATE TABLE `cvforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `haddress` text COLLATE utf8mb4_unicode_ci,
  `paddress` text COLLATE utf8mb4_unicode_ci,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic` text COLLATE utf8mb4_unicode_ci,
  `experience` text COLLATE utf8mb4_unicode_ci,
  `project` text COLLATE utf8mb4_unicode_ci,
  `achievement` text COLLATE utf8mb4_unicode_ci,
  `skill` text COLLATE utf8mb4_unicode_ci,
  `objective` text COLLATE utf8mb4_unicode_ci,
  `reference` text COLLATE utf8mb4_unicode_ci,
  `interest` text COLLATE utf8mb4_unicode_ci,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvforms`
--

INSERT INTO `cvforms` (`id`, `userid`, `name`, `birthdate`, `haddress`, `paddress`, `mobile`, `email`, `academic`, `experience`, `project`, `achievement`, `skill`, `objective`, `reference`, `interest`, `cv`, `created_at`, `updated_at`) VALUES
(27, 37, 'dsfsagdgdgsdgfdsgd', '10.07.1992', '409/1 kollyonpur Dhaka', '409/1 kollyonpur Dhaka', '01781227493', 'sdfsdfgdsfgdsfg@gmail.com', '{\"0\":{\"degree\":\"xfdd\",\"instname\":\"dsfgsd\",\"cgpa\":\"dfgsdfg\",\"location\":\"dfgsdfg\",\"pyear\":\"sdfgsdf\"},\"1001\":{\"degree\":\"sdfgsd\",\"instname\":\"dsfgdf\",\"cgpa\":\"gdfgdf\",\"location\":\"gdfgdsfg\",\"pyear\":\"dfgdfgdfg\"}}', '{\"0\":{\"title\":\"sdfgdsf\",\"company\":\"msoft-tech\",\"responsibilites\":\"dsfgdfg\",\"joinedin\":\"dfsgdsf\",\"leftin\":\"dsfgdsfg\"},\"1001\":{\"title\":\"sdfgsdf\",\"company\":\"gdsfgdf\",\"responsibilites\":\"dfgdfg\",\"joinedin\":\"dsfgdsf\",\"leftin\":\"dfgdfg\"}}', '{\"0\":{\"url\":\"sdfgsd\",\"comment\":\"dsfgsdf\"},\"1001\":{\"url\":\"dfgdsf\",\"comment\":\"dfgdsfg\"}}', '{\"0\":{\"achieve\":\"sdfgsdfgd\"},\"1001\":{\"achieve\":\"sdfgsdfgdf\"}}', '{\"0\":{\"competent\":\"sdfgsdfgdf\"},\"1001\":{\"competent\":\"sdfgsdfgdfg\"}}', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{\"0\":{\"title\":\"dfgf\",\"company\":\"dfgf\",\"contactinfo\":\"dfgf\"},\"1001\":{\"title\":\"dfgsd\",\"company\":\"fdfgdsf\",\"contactinfo\":\"sdfgdfgd\"}}', 'dfgfhgh', 'careerfile/1675112893.docx', '2019-08-20 06:13:52', '2019-08-20 06:13:52'),
(28, 38, 'aasdfasdfasfd', '10.07.1992', '409/1 kollyonpur Dhaka', '409/1 kollyonpur Dhaka', '01781227493', 'sdfasdfasdfasdfsd@gmail.com', '[{\"degree\":\"sadfa\",\"instname\":\"sdfas\",\"cgpa\":\"dasdf\",\"location\":\"sadf\",\"pyear\":\"asdfas\"}]', '[{\"title\":\"asdfa\",\"company\":\"msoft-tech\",\"responsibilites\":\"asdfas\",\"joinedin\":\"asdfa\",\"leftin\":\"asdf\"}]', '[{\"url\":\"asdfas\",\"comment\":\"asdfasdf\"}]', '[{\"achieve\":\"asdfasd\"}]', '[{\"competent\":\"asdfasdf\"}]', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[{\"title\":\"asdfas\",\"company\":\"asdf\",\"contactinfo\":\"asdfasd\"}]', 'asdfasd', 'careerfile/857985476.docx', '2019-08-21 08:47:46', '2019-08-21 08:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ln_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `subtitle`, `image`, `address`, `email`, `phone`, `fb_link`, `ln_link`, `created_at`, `updated_at`) VALUES
(1, 'PEOPLE SCAPE LTD', 'A HR Consultancy Firm', 'psimage/2063721480.png', 'H# 08, R# 23/C Gulshan-1, Dhaka', 'info@peoplescapebd.net', '+88029848560', 'ertet', 'ertert', NULL, '2019-07-28 16:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `image`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Briefing Session', 'psimage/1527383855.jpg', 5, '2019-07-01 07:49:44', '2019-07-29 06:24:01'),
(3, 'Candidate Assessment Center', 'psimage/1931101532.JPG', 14, '2019-07-01 07:50:07', '2019-07-29 06:24:01'),
(4, 'Candidate Assessment Center', 'psimage/1593780283.JPG', 1, '2019-07-01 09:59:49', '2019-07-29 06:24:01'),
(5, 'Candidate Assessment Center', 'psimage/726598172.jpg', 3, '2019-07-01 10:02:26', '2019-07-29 06:24:01'),
(6, 'Assessment Center', 'psimage/543945194.jpg', 12, '2019-07-01 11:52:08', '2019-07-29 06:24:01'),
(7, 'Candidate Assessment Center', 'psimage/127145714.jpg', 13, '2019-07-02 18:53:50', '2019-07-29 06:24:01'),
(8, 'Employee Recognition', 'psimage/1881450771.jpg', 2, '2019-07-07 15:03:45', '2019-07-29 06:24:01'),
(9, 'Employee Recognition', 'psimage/2146374144.jpg', 6, '2019-07-07 15:04:06', '2019-07-29 06:24:01'),
(11, 'Job Fair', 'psimage/773874482.JPG', 7, '2019-07-07 15:04:30', '2019-07-29 06:24:01'),
(12, 'Job Fair', 'psimage/1624966418.JPG', 8, '2019-07-07 15:04:54', '2019-07-29 06:24:01'),
(13, 'Job Fair', 'psimage/57319530.JPG', 4, '2019-07-07 15:05:32', '2019-07-29 06:24:01'),
(14, 'Job Fair', 'psimage/1877924547.JPG', 9, '2019-07-07 15:07:02', '2019-07-29 06:24:01'),
(15, 'MOU Signing', 'psimage/1820686084.jpg', 10, '2019-07-07 15:23:06', '2019-07-29 06:24:01'),
(17, 'University view exchange program', 'psimage/1486703805.jpg', 11, '2019-07-07 15:23:36', '2019-07-29 06:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `hcalls`
--

CREATE TABLE `hcalls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hcalls`
--

INSERT INTO `hcalls` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'FIND JOBS AND REGISTER OUR SITE', NULL, '2019-07-09 10:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `headhuntings`
--

CREATE TABLE `headhuntings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headhuntings`
--

INSERT INTO `headhuntings` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Head Hunting', 'We view Headhunting as facilitating our clients with the Right People, to the Right Place, at the Right Time. At PeopleScape, we immerse ourselves in your world. We operate from the perspective of all your stakeholders , giving us the 360 degree view. This gives us the knowledge needed to build a talent acquisition and management program that meets clients’ objectives, matches your culture, which can be seamlessly implemented in your organization for maximum ROI in the shortest time.', 'psimage/452257636.jpg', NULL, '2019-07-09 11:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `healthscreenings`
--

CREATE TABLE `healthscreenings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `healthscreenings`
--

INSERT INTO `healthscreenings` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Health Screening', 'With true Events expertise on board, we work with meticulous and unyielding focus on landing the kind of event folks will remember for days to come. From conception to execution, we are here to ensure your event runs smoothly without any fumbles.\r\n\r\nWe are big on spectacle but never lose track of the details.\r\n\r\nWe are big on spectacle but never lose track of the details. We are big on spectacle but never lose track of the details.', 'psimage/847489503.png', NULL, '2019-06-22 10:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplieds`
--

CREATE TABLE `jobapplieds` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `applied_time` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobapplieds`
--

INSERT INTO `jobapplieds` (`id`, `job_id`, `applicant_id`, `applied_time`, `pdf`) VALUES
(20, 2, 37, '2019-08-22', '37.pdf'),
(21, 2, 38, '2019-08-22', '38.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `locationtops`
--

CREATE TABLE `locationtops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locationtops`
--

INSERT INTO `locationtops` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR LOCATION IN BANGLADESH', 'Whether you’re building a welcome mat for your SaaS or a clean, corporate portfolio, Sooad has your design needs covered.', NULL, '2019-07-09 10:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `manpoweroutsourcings`
--

CREATE TABLE `manpoweroutsourcings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manpoweroutsourcings`
--

INSERT INTO `manpoweroutsourcings` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Manpower Outsourcing', 'By handing over the Manpower Outsourcing responsibly to us, you get to devote your internal resources and capital funds to more profit-driven activities. We help businesses reduce their response time to human resources needs as well as providing sophisticated staffing methods and reporting. Outsourcing your recruitment processes to us would help you reduce costs and understand and measure your recruitment strategy more efficiently and effectively.', 'psimage/181330261.jpg', NULL, '2019-07-09 11:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `medicalmrks`
--

CREATE TABLE `medicalmrks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicalmrks`
--

INSERT INTO `medicalmrks` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Medical marketing', 'PeopleScape Ltd. has a vast knowledge of Medical Marketing in Bangladesh for various Multinational Companies. We know the category of Doctors & can read their mind which helped us to generate the ultimate target. We have also expertise to arrange the scientific seminar, RMPs Meeting,', 'psimage/1299521141.jpg', NULL, '2019-07-09 11:34:28');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_20_085426_create_sliders_table', 2),
(4, '2019_06_20_162902_create_sliderbtms_table', 3),
(5, '2019_06_20_165848_create_servicetops_table', 4),
(6, '2019_06_20_171924_create_allservices_table', 5),
(7, '2019_06_22_094517_create_locationtops_table', 6),
(8, '2019_06_22_095559_create_alllocations_table', 7),
(9, '2019_06_22_103840_create_hcalls_table', 8),
(10, '2019_06_22_104442_create_teamtops_table', 9),
(11, '2019_06_22_105135_create_teammembers_table', 10),
(12, '2019_06_22_114835_create_testimonials_table', 11),
(13, '2019_06_22_124135_create_monialtops_table', 12),
(14, '2019_06_22_124738_create_footers_table', 13),
(15, '2019_06_22_132159_create_serviceheads_table', 14),
(16, '2019_06_22_140725_create_servetops_table', 15),
(17, '2019_06_22_150110_create_headhuntings_table', 16),
(18, '2019_06_22_150204_create_manpoweroutsourcings_table', 16),
(19, '2019_06_22_150238_create_payrollmngs_table', 16),
(20, '2019_06_22_150310_create_medicalmrks_table', 16),
(21, '2019_06_22_150347_create_asscenters_table', 16),
(22, '2019_06_22_150423_create_remngs_table', 16),
(23, '2019_06_22_150458_create_trainingdevs_table', 16),
(24, '2019_06_22_150532_create_healthscreenings_table', 16),
(25, '2019_06_22_150559_create_servicecalls_table', 16),
(26, '2019_06_22_162827_create_clientheads_table', 17),
(27, '2019_06_22_162924_create_clienttops_table', 17),
(28, '2019_06_22_164034_create_clients_table', 18),
(29, '2019_06_22_171953_create_recognitionheads_table', 19),
(30, '2019_06_22_174423_create_recognitions_table', 20),
(31, '2019_06_22_180109_create_recognitions_table', 21),
(32, '2019_06_23_100254_create_aboutheads_table', 22),
(33, '2019_06_23_104337_create_aboutchooses_table', 23),
(34, '2019_06_23_105006_create_aboutcall1s_table', 24),
(35, '2019_06_23_105059_create_aboutcall2s_table', 24),
(36, '2019_06_23_110457_create_advantages_table', 25),
(37, '2019_06_23_110517_create_successes_table', 25),
(38, '2019_06_23_170742_create_contactdets_table', 26),
(39, '2019_06_25_095052_create_ourmissions_table', 27),
(40, '2019_06_25_095231_create_ourvisions_table', 27),
(41, '2019_06_25_101550_create_careers_table', 28),
(42, '2019_06_25_101737_create_careercats_table', 28),
(43, '2019_06_29_163400_create_contacts_table', 29),
(44, '2019_06_30_111505_create_careerheads_table', 30),
(45, '2019_06_30_113035_create_contactheads_table', 31),
(46, '2019_06_30_114651_create_counterparts_table', 32),
(47, '2019_07_01_105652_create_galleries_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `monialtops`
--

CREATE TABLE `monialtops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monialtops`
--

INSERT INTO `monialtops` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'TESTIMONIAL', 'Whether you’re building a welcome mat for your SaaS or a clean, corporate portfolio, Sooad has your design needs covered.', NULL, '2019-07-09 11:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `ourmissions`
--

CREATE TABLE `ourmissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourmissions`
--

INSERT INTO `ourmissions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR MISSION', 'OUR MISSION is to create a partnership with our clients to deliver the best possible talent in the marketplace and thereby optimizing their investment in HR Processes and Programs.', NULL, '2019-07-09 11:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `ourvisions`
--

CREATE TABLE `ourvisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourvisions`
--

INSERT INTO `ourvisions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR VISION', 'OUR GOAL is to Help Our Clients with Improved Productivity, Reduced Turnover and Increased Profitability.', NULL, '2019-07-09 11:26:03');

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
-- Table structure for table `payrollmngs`
--

CREATE TABLE `payrollmngs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrollmngs`
--

INSERT INTO `payrollmngs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Payroll Management', 'The payroll is one of the most vital elements of a business. This department is not only responsible for employees’ salary but we believe it plays a vibrant role in protecting the company’s reputation. We provide a comprehensive yet flexible solution, specifically tailored to clients’ ease. By keeping you legislatively compliant, we make sure your Human assets are well protected in terms of their salaries.', 'psimage/462744978.jpg', NULL, '2019-07-09 11:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `recognitionheads`
--

CREATE TABLE `recognitionheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recognitionheads`
--

INSERT INTO `recognitionheads` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Certificates', 'psimage/75177466.jpg', NULL, '2019-07-24 13:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `recognitions`
--

CREATE TABLE `recognitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recognitions`
--

INSERT INTO `recognitions` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Recognitions Title Here', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque eveniet minima obcaecati quod sapiente tenetur velit voluptates! Architecto culpa deserunt enim illo incidunt minus mollitia quibusdam ullam! Adipisci asperiores dolores fugit mollitia dd', 'psimage/1631022012.jpg', '2019-06-22 12:03:15', '2019-07-18 17:42:05'),
(2, 'Recognitions Title Here', 'orem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque eveniet minima obcaecati quod sapiente tenetur velit voluptates! Architecto culpa deserunt enim illo incidunt minus mollitia quibusdam ullam! Adipisci asperiores dolores fugit mollitia', 'psimage/1066932037.jpg', '2019-06-29 09:02:13', '2019-07-18 17:42:22'),
(4, 'Recognitions Title Here', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque eveniet minima obcaecati quod sapiente tenetur velit voluptates! Architecto culpa deserunt enim illo incidunt minus mollitia quibusdam ullam! Adipisci asperiores dolores fugit mollitia dd', 'psimage/1799295844.jpg', '2019-07-09 11:40:21', '2019-07-18 17:42:36'),
(5, 'Recognitions Title Here', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque eveniet minima obcaecati quod sapiente tenetur velit voluptates! Architecto culpa deserunt enim illo incidunt minus mollitia quibusdam ullam! Adipisci asperiores dolores fugit mollitia dd', 'psimage/2092744479.jpg', '2019-07-09 11:40:39', '2019-07-18 17:42:50'),
(6, 'Recognitions Title Here', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cumque eveniet minima obcaecati quod sapiente tenetur velit voluptates! Architecto culpa deserunt enim illo incidunt minus mollitia quibusdam ullam! Adipisci asperiores dolores fugit mollitia dd', 'psimage/262365123.jpg', '2019-07-09 11:41:11', '2019-07-18 17:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `remngs`
--

CREATE TABLE `remngs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `remngs`
--

INSERT INTO `remngs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Recruitment Process Management', 'Our experts help you to create a corporate staffing strategy to ensure the best results. Our recruitment process includes analyzing the requirements of a job, attracting employees to that job, screening and selecting applicants, hiring, and integrating the new employee to the organization.', 'psimage/703217410.jpg', NULL, '2019-07-09 11:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `servetops`
--

CREATE TABLE `servetops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servetops`
--

INSERT INTO `servetops` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR SERVICES', 'Whether you’re building a welcome mat for your SaaS or a clean, corporate portfolio, Sooad has your design needs covered.', NULL, '2019-07-09 11:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `servicecalls`
--

CREATE TABLE `servicecalls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicecalls`
--

INSERT INTO `servicecalls` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'FIND JOBS AND REGISTER OUR SITE', NULL, '2019-07-09 11:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `serviceheads`
--

CREATE TABLE `serviceheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceheads`
--

INSERT INTO `serviceheads` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SERVICES', 'psimage/1260705270.jpg', NULL, '2019-07-02 18:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `servicetops`
--

CREATE TABLE `servicetops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicetops`
--

INSERT INTO `servicetops` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR SERVICES', 'Make the best out of every moment - Concentrate in Your Core Business – and the rest, we will manage', NULL, '2019-07-09 10:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `shortlisteds`
--

CREATE TABLE `shortlisteds` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shortlisteds`
--

INSERT INTO `shortlisteds` (`id`, `job_id`, `user_id`) VALUES
(4, 2, 19),
(5, 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sliderbtms`
--

CREATE TABLE `sliderbtms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliderbtms`
--

INSERT INTO `sliderbtms` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WELCOME TO PEOPLESCAPE LIMITED', 'PeopleScape Ltd. provides a new vision of HR partnering-the one that unites all the elements of HR transformation & outsourcing under one roof. Armed with solid knowledge base, the firm started its journey from 2006. The firm now is enriched with deep portfolio of Human Resource space. Our mission is to create a partnership with you, our client and deliver the best possible HR solutions to meet your business needs..', 'psimage/997130227.jpg', '2019-06-20 10:41:32', '2019-07-28 17:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'RECRUITMENT PROCESS OUTSOURCING', '3000+ Outsourcing Employees', 'psimage/1968678504.jpg', '2019-06-20 09:33:37', '2019-07-09 10:34:44'),
(9, 'A HOLISTIC APPROACH TO PROCESSES', '10 Long Support Team Previous ddd', 'psimage/1564485787.jpg', '2019-07-02 17:19:06', '2019-08-03 05:23:31'),
(10, 'HUMAN RESOURCES PARTNERING', '12th Years Experience', 'psimage/1564383680.jpeg', '2019-07-02 17:19:22', '2019-07-29 07:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `successes`
--

CREATE TABLE `successes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `successes`
--

INSERT INTO `successes` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SUCCESS STORY', '{\"1\":{\"ptitle\":\"Long-term Partnering projects\",\"description\":\"5000+ Candidates successfully placement to different MNC\'S.\"},\"2\":{\"ptitle\":\"Mass Recruitment Projects\",\"description\":\"10000+ Entry level candidates places in different MNC & LOCAL companies.\"},\"3\":{\"ptitle\":\"STAFFING\",\"description\":\"3000+ Outsourced staff now working in  20+ Multinational Company.\"},\"4\":{\"ptitle\":\"MEDICAL MARKETING\",\"description\":\"300+ Medical representative work in different projects .\"},\"5\":{\"ptitle\":\"SALES PEOPLE MANAGEMENT\",\"description\":\"We manage 2000+ sales people in nationwide.\"}}', 'psimage/1564384716.jpg', '2019-07-29 07:18:36', '2019-07-29 07:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ln_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`id`, `name`, `designation`, `image`, `description`, `fb_link`, `tw_link`, `ln_link`, `gp_link`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'GLOBAL CONVENOR', 'psimage/1667766129.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'ghjgj', 'hj', 'hjkh  fdsfsdfs', 'hjkjk', '2019-06-22 05:34:17', '2019-07-09 10:57:27'),
(2, 'John Doe', 'GLOBAL CONVENOR', 'psimage/1667766129.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'ghjgj', 'hj', 'hjkh  fdsfsdfs', 'hjkjk', '2019-06-22 05:34:17', '2019-07-09 10:57:45'),
(3, 'John Doe', 'GLOBAL CONVENOR', 'psimage/1667766129.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'ghjgj', 'hj', 'hjkh  fdsfsdfs', 'hjkjk', '2019-06-22 05:34:17', '2019-07-09 10:58:02'),
(4, 'John Doe', 'GLOBAL CONVENOR', 'psimage/1667766129.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'ghjgj', 'hj', 'hjkh  fdsfsdfs', 'hjkjk', '2019-06-22 05:34:17', '2019-07-09 10:58:16'),
(5, 'John Doe', 'GLOBAL CONVENOR', 'psimage/1667766129.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'ghjgj', 'hj', 'hjkh  fdsfsdfs', 'hjkjk', '2019-06-22 05:34:17', '2019-07-09 10:58:28'),
(6, 'John Doe', 'GLOBAL CONVENOR', 'psimage/1564381399.png', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'sdfgs', 'sdfg', 'sdfgds', 'dfgsdfg fdfdfd', '2019-07-02 17:37:48', '2019-07-29 06:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `teamtops`
--

CREATE TABLE `teamtops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamtops`
--

INSERT INTO `teamtops` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR TEAM MEMBERS', 'Whether you’re building a welcome mat for your SaaS or a clean, corporate portfolio, Sooad has your design needs covered.', NULL, '2019-07-09 10:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'John Doe', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'psimage/10275326.jpg', '2019-06-22 06:18:57', '2019-07-09 11:03:27'),
(3, 'John Doe', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'psimage/10275326.jpg', '2019-06-22 06:18:57', '2019-07-09 11:03:41'),
(4, 'John Doe', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'psimage/10275326.jpg', '2019-06-22 06:18:57', '2019-07-09 11:03:54'),
(8, 'John Doe', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'psimage/2061743681.jpg', '2019-07-02 17:50:53', '2019-07-09 11:04:43'),
(9, 'John Doe', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'psimage/2042331624.png', '2019-07-02 18:03:40', '2019-07-09 11:05:11'),
(10, 'John Doe', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'psimage/582985712.jpg', '2019-07-02 18:05:13', '2019-07-09 11:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `trainingdevs`
--

CREATE TABLE `trainingdevs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainingdevs`
--

INSERT INTO `trainingdevs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Training & Development', 'Our Training & Development programs will allow you to strengthen those skills that employee needs to improve. This also brings all employees to a higher level so that your human resources are up to dated in this dynamic market.', 'psimage/1674729638.jpg', NULL, '2019-07-09 11:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `gender`, `email_verified_at`, `password`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$HSrvBUYSLxNQdXXmL4AIg.W9AtjBpe2H3Jk2eVuEM2..9UnWkQRrq', 'admin', NULL, NULL, '2019-06-19 22:42:23', '2019-06-19 22:42:23'),
(37, 'dsfsagdgdgsdgfdsgd', 'sdfsdfgdsfgdsfg@gmail.com', '01781227493', 'Male', NULL, '$2y$10$HVyi7CR.gERAyLSWNs7FcuPCg0HBcy/uekIhdFEZzOiLArSqvtEZi', 'user', 'careerfile/dsfsagdgdgsdgfdsgd.1566281632.jpg', NULL, '2019-08-20 05:50:26', '2019-08-20 06:13:52'),
(38, 'aasdfasdfasfd', 'sdfasdfasdfasdfsd@gmail.com', '01781227493', 'Male', NULL, '$2y$10$BNVKwnVcOb3UzwmHdz0fB.MgLsUHjcZpcghDUmxvWOCRkXqfgxxFa', 'user', 'careerfile/aasdfasdfasfd.1566377266.jpg', NULL, '2019-08-21 08:47:46', '2019-08-21 08:47:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcall1s`
--
ALTER TABLE `aboutcall1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutcall2s`
--
ALTER TABLE `aboutcall2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutchooses`
--
ALTER TABLE `aboutchooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutheads`
--
ALTER TABLE `aboutheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alllocations`
--
ALTER TABLE `alllocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allservices`
--
ALTER TABLE `allservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asscenters`
--
ALTER TABLE `asscenters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careercats`
--
ALTER TABLE `careercats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careerheads`
--
ALTER TABLE `careerheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientheads`
--
ALTER TABLE `clientheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clienttops`
--
ALTER TABLE `clienttops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdets`
--
ALTER TABLE `contactdets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactheads`
--
ALTER TABLE `contactheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counterparts`
--
ALTER TABLE `counterparts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvforms`
--
ALTER TABLE `cvforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hcalls`
--
ALTER TABLE `hcalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headhuntings`
--
ALTER TABLE `headhuntings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthscreenings`
--
ALTER TABLE `healthscreenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapplieds`
--
ALTER TABLE `jobapplieds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locationtops`
--
ALTER TABLE `locationtops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manpoweroutsourcings`
--
ALTER TABLE `manpoweroutsourcings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalmrks`
--
ALTER TABLE `medicalmrks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monialtops`
--
ALTER TABLE `monialtops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourmissions`
--
ALTER TABLE `ourmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourvisions`
--
ALTER TABLE `ourvisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payrollmngs`
--
ALTER TABLE `payrollmngs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recognitionheads`
--
ALTER TABLE `recognitionheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recognitions`
--
ALTER TABLE `recognitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remngs`
--
ALTER TABLE `remngs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servetops`
--
ALTER TABLE `servetops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecalls`
--
ALTER TABLE `servicecalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceheads`
--
ALTER TABLE `serviceheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicetops`
--
ALTER TABLE `servicetops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortlisteds`
--
ALTER TABLE `shortlisteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderbtms`
--
ALTER TABLE `sliderbtms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `successes`
--
ALTER TABLE `successes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamtops`
--
ALTER TABLE `teamtops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainingdevs`
--
ALTER TABLE `trainingdevs`
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
-- AUTO_INCREMENT for table `aboutcall1s`
--
ALTER TABLE `aboutcall1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutcall2s`
--
ALTER TABLE `aboutcall2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutchooses`
--
ALTER TABLE `aboutchooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutheads`
--
ALTER TABLE `aboutheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alllocations`
--
ALTER TABLE `alllocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `allservices`
--
ALTER TABLE `allservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `asscenters`
--
ALTER TABLE `asscenters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careercats`
--
ALTER TABLE `careercats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `careerheads`
--
ALTER TABLE `careerheads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clientheads`
--
ALTER TABLE `clientheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `clienttops`
--
ALTER TABLE `clienttops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactdets`
--
ALTER TABLE `contactdets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactheads`
--
ALTER TABLE `contactheads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `counterparts`
--
ALTER TABLE `counterparts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cvforms`
--
ALTER TABLE `cvforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hcalls`
--
ALTER TABLE `hcalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headhuntings`
--
ALTER TABLE `headhuntings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `healthscreenings`
--
ALTER TABLE `healthscreenings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobapplieds`
--
ALTER TABLE `jobapplieds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `locationtops`
--
ALTER TABLE `locationtops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manpoweroutsourcings`
--
ALTER TABLE `manpoweroutsourcings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicalmrks`
--
ALTER TABLE `medicalmrks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `monialtops`
--
ALTER TABLE `monialtops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourmissions`
--
ALTER TABLE `ourmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourvisions`
--
ALTER TABLE `ourvisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payrollmngs`
--
ALTER TABLE `payrollmngs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recognitionheads`
--
ALTER TABLE `recognitionheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recognitions`
--
ALTER TABLE `recognitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `remngs`
--
ALTER TABLE `remngs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servetops`
--
ALTER TABLE `servetops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicecalls`
--
ALTER TABLE `servicecalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serviceheads`
--
ALTER TABLE `serviceheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicetops`
--
ALTER TABLE `servicetops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shortlisteds`
--
ALTER TABLE `shortlisteds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliderbtms`
--
ALTER TABLE `sliderbtms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `successes`
--
ALTER TABLE `successes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teamtops`
--
ALTER TABLE `teamtops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainingdevs`
--
ALTER TABLE `trainingdevs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
