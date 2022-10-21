-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 05:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saiomscg`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(222) DEFAULT NULL,
  `slug` varchar(222) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(222) DEFAULT NULL,
  `roll` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `slug`, `description`, `images`, `roll`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OUR STORY', 'our-story', 'Founded in 2019, Saiom SCG Pvt Ltd has come a long way from its beginnings, in city of ‘Diversity’ New York. When we started out, our passion for \"providing technical solutions that work for the betterment of everyday life\" drove us to start this business.', NULL, 1, 2, '2021-08-13 19:10:58', '2021-08-13 13:40:58'),
(2, 'OUR MISSION', 'our-mission', 'Our mission is to create a brighter tomorrow while bringing comfort for all by creating affordable software solutions.', 'OUR MISSION.jpg', 1, 1, '2021-08-12 14:19:02', '2021-08-12 08:49:02'),
(3, 'OUR VISION', 'our-vision', 'Saiom Software Consultancy Group is a technology company whose mission is to make technology work for the betterment of everyday life.', 'OUR VISION.png', 1, 1, '2021-08-16 16:19:57', '2021-08-16 10:43:07'),
(4, 'OUR SUCCESS', 'our-success', 'Saiom Software Consultancy Group is a technology company whose mission is to make technology work for the betterment of everyday life.', 'OUR SUCCESS.jpg', 1, 2, '2021-08-12 15:19:25', '2021-08-12 09:49:25'),
(15, 'vikas dwivedi', 'vikas-dwivedi', 'cc123', NULL, 1, 1, '2021-08-16 15:31:59', '2021-08-16 10:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `job_post` varchar(200) NOT NULL,
  `slug` varchar(222) DEFAULT NULL,
  `description` text NOT NULL,
  `location` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_post`, `slug`, `description`, `location`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Data Scientist', 'data-scientist', 'We are looking for DATA SCIENTIST who must have an experience of work as Statistician / Predictive Analyst /Data Scientist with experience in strategic and predictive analytics in banking, finance, and retail using Python, SAS, R and SPSS.', 'Data Scientist', 1, '2021-08-09 04:43:58', '2021-08-09 04:43:58'),
(2, 'BI Developer', NULL, 'Data Warehouse Architect / Developer SSIS SSRS and Power BI PAN INDIA.', 'Designation: BI Developer/Architect Job location : PAN India', 1, '2021-08-06 15:42:39', '2021-08-06 15:42:39'),
(9, 'eefert', 'eefert', 'eter', 'eefert', 1, '2022-08-23 09:45:03', '2022-08-23 09:45:03'),
(5, 'DevOps Engineer', 'devops-engineer', 'this is best it sector job in word', 'DevOps Engineer', 1, '2021-08-08 06:46:46', '2021-08-09 00:45:49'),
(6, 'Laravel developer', 'laravel-developer', 'i have need laravel 3+ year exprince', 'Bhopal M.P india', 1, '2021-08-08 06:47:49', '2021-08-09 00:55:47'),
(7, 'java developer', 'java-developer', 'java developer exprince 5 year+rtrt', 'Delhi', 1, '2021-08-08 07:18:04', '2022-08-23 09:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `client_review`
--

CREATE TABLE `client_review` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(222) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_review`
--

INSERT INTO `client_review` (`id`, `name`, `slug`, `designation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Noah Buddy', NULL, 'Refocus Eye Care', 'SAIOM SCG helped Refocus at a time when developers hired by our company left without proper transfer of knowledge.SAIOM SCG understood the whole Data Management and reporting process and helped us out at a critical juncture.Now the IT process is automated and there are proper notifications send out daily.We highly recommend SAIOM SCG for application, reporting, or any IT needs.', 2, '2021-08-03 11:25:14', '2021-08-09 09:50:57'),
(2, 'Maria Ilieva', NULL, 'OPW', 'The team of Saiom SCG is very focused and is consistently customer-centric. The availability of the team is 100% and they are always there to assist you. It was an awesome experience and the solution the team provided was perfect for resolving our problem.', 1, '2021-08-03 11:28:02', '2021-08-08 07:51:04'),
(3, 'Stephanie Pape', NULL, 'Matteo Amerio', 'Saiom SCG truly listens to the needs of the customer, understands those needs, and ensures that the company recognizes the opportunities that the client presents.', 1, '2021-08-03 11:46:40', '2021-08-03 11:46:40'),
(4, 'Amanda Jepson', NULL, 'Manager', 'Saiom SCG support team will help you out in all the ways possible for your IT solutions. Fantastic consultants and developers. Nothing but great results.', 1, '2021-08-03 11:50:45', '2021-08-08 08:03:21'),
(5, 'Eri Osta', NULL, 'Sienasoace.com', 'I was super skepital about Saiom SCG but I gave it a shot and I can honestly say that, they completely transform our business digitally and provide end support.', 1, '2021-08-03 11:51:25', '2021-08-08 08:01:45'),
(16, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-1', 'webtech delhi', 't ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset', 2, '2021-08-08 08:43:31', '2021-08-09 09:52:24'),
(20, 'vikas dwivedi', NULL, 'webtechno.ini', 't ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset', 1, '2021-08-09 09:53:06', '2021-08-09 09:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `contect_data`
--

CREATE TABLE `contect_data` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `mobile` varchar(222) DEFAULT NULL,
  `subject` varchar(222) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contect_data`
--

INSERT INTO `contect_data` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 1, '2021-08-09 09:37:34', '2021-08-09 09:37:34'),
(2, NULL, NULL, NULL, NULL, NULL, 1, '2021-08-09 09:40:55', '2021-08-09 09:40:55'),
(3, 'vikas', 'vikashdwivedi410@gmail.com', '8085517893', 'php developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2021-08-09 09:42:28', '2021-08-09 09:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `subject` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `mobile` varchar(222) DEFAULT NULL,
  `resume` varchar(222) DEFAULT NULL,
  `position` varchar(222) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `roll` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `subject`, `email`, `mobile`, `resume`, `position`, `status`, `roll`, `created_at`, `updated_at`) VALUES
(5, 'Riya Yadav', 'AWS Solution Architect', 'riyayadav2020@gmail.com', '9102121544', 'Riya Yadav.pdf', 'Cloud Engineer', 1, 1, '2021-08-08 13:05:33', '2021-08-08 22:01:13'),
(6, 'Gyanedra Mishra', 'web developer', 'gyanedramishra2012@gmail.com', '9745210232', 'Gyanedra Mishra.pdf', 'BI Developer', 1, 1, '2021-08-08 13:09:30', '2021-08-08 13:09:30'),
(7, 'Sunil Dwivedi', 'BI developer', 'vikashdwivedi410@gmail.com', '808517893', 'Sunil Dwivedi.pdf', 'BI Developer', 1, 1, '2021-08-08 13:20:32', '2021-08-08 13:20:32'),
(8, 'Shubham Yadav', 'Java Developer', 'shubhamyadav2012@gmail.com', '8787874545', 'Shubham Yadav.pdf', 'ada', 1, 1, '2021-08-09 00:52:38', '2021-08-09 00:52:38'),
(9, 'Gyan', 'gyan', 'gyan@mailinator.com', '9713506147', 'Gyan.docx', 'Data Scientist', 1, 1, '2021-08-09 09:08:51', '2021-08-09 09:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(222) DEFAULT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1: active 2: inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Data Governance', 'data-governance-5', 'Data governance is a term used on both a macro and a micro level. The former is a political concept and forms part of international <b>relations</b>.', 1, '2021-08-08 00:34:55', '2021-10-08 07:44:39'),
(2, 'Data Visualizations', 'data-visualizations', 'Data visualization is the graphical representation of information and data. By using visual elements like charts.', 1, '2021-08-08 00:35:12', '2021-08-08 11:01:35'),
(3, 'Data Migration', 'data-migration', 'Data migration is the process of selecting, preparing, extracting, and transforming data and permanently transferring.', 1, '2021-08-08 00:35:28', '2021-08-09 01:52:53'),
(4, 'Database Maintenance', 'database-maintenance', 'Database Maintenance is a term we use to describe a set of tasks that are all run with the intention to improve your database. There are routines meant to help performance, free up disk space, check for data errors.', 1, '2021-08-08 00:35:52', '2021-08-08 00:35:52'),
(5, 'Web Designing', 'web-designing', 'Web design encompasses many different skills and disciplines in the production and maintenance of websites.', 1, '2021-08-08 00:36:07', '2021-08-08 11:22:54'),
(6, 'Mobile Apps Development', 'mobile-apps-development', 'Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants.', 1, '2021-08-08 00:36:23', '2021-08-08 00:36:23'),
(7, 'Custom Software', 'custom-software', 'Customised software is software that is specially developed for some specific organization or other user As such.', 1, '2021-08-08 00:36:53', '2021-08-08 00:36:53'),
(8, 'IT Desktop Support', 'it-desktop-support', 'Our feature-rich help desk software speeds up ticket resolution with the help of proactive automations and highly customizable workflows.', 1, '2021-08-08 00:37:38', '2021-08-09 01:38:54'),
(9, 'Cloud Migration', 'cloud-migration', 'Cloud migration is the process of moving digital assets — like data, workloads, IT resources, or applications — to cloud infrastructure. Cloud migration commonly refers to moving tools and data from old.', 1, '2021-08-08 00:37:52', '2021-08-09 01:38:57'),
(10, 'Cloud service(AWS)', 'cloud-serviceaws', 'cloud If you are new to the world of cloud computing, you will want to select a cloud platform that can help you easily get started with learning cloud computing.', 1, '2021-08-08 00:38:13', '2021-08-08 00:38:13'),
(11, 'Cloud service(Azure)', 'cloud-serviceazure', 'cloud If you are new to the world of cloud computing, you will want to select a cloud platform that can help you easily get started with learning cloud computing.', 1, '2021-08-08 00:39:19', '2021-08-08 00:39:19'),
(12, 'Digital Transformation', 'digital-transformation', 'Digital transformation is the adoption of digital technology by a company to improve business processes, value for customers and innovation.', 1, '2021-08-08 00:39:34', '2021-08-08 00:39:34'),
(13, 'CRM', 'crm', 'CRM is a product line of enterprise resource planning and customer relationship management intelligent business applications.', 1, '2021-08-08 00:39:56', '2021-08-08 00:39:56'),
(14, 'Voice & Non-Voice', 'voice-non-voice', 'Unlike the call center outbound, this process does not require to receive or make a phone call to the customers. This process requires.', 1, '2021-08-08 00:40:15', '2021-08-08 00:40:15'),
(15, 'Business Intelligence & Reporting', 'business-intelligence-reporting', 'Business Intelligence reporting is broadly defined as the process of using a BI tool to prepare and analyze data to find and share actionable insights.', 1, '2021-08-08 00:40:30', '2021-08-08 00:40:30'),
(16, 'Data Entry', 'data-entry', 'The data entry service is one of the most popular services that is outsourced by companies worldwide. Every company needs to perform some data entry tasks that are necessary.', 1, '2021-08-08 00:40:45', '2021-08-09 01:38:20'),
(17, 'Google', 'google', 'Hello google', 1, '2021-08-08 10:02:26', '2021-08-15 10:51:03'),
(22, 'werwe', 'werwe', 'werwe', 1, '2021-08-10 07:12:47', '2021-08-10 07:12:47'),
(19, 'What is Lorem Ipsum', 'what-is-lorem-ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2021-08-08 11:09:26', '2021-08-09 09:02:14'),
(23, 'eqweqwe', 'eqweqwe', 'qweqweqw', 1, '2021-08-10 07:21:21', '2021-08-10 07:21:21'),
(24, 'description', 'description-4', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a <b>galley of type and scrambled </b>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"> remaining essentially<u> unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMake</u>r including versions of Lorem Ipsum</span></p>', 1, '2021-08-15 01:17:52', '2021-08-17 10:34:54'),
(25, 'test', 'test', '<b>Vikas Dwivedi</b>', 1, '2021-08-15 01:43:13', '2021-08-15 01:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'info@saiomscg.com', NULL, '$2y$10$9egEh1c2rgEyqisF3PIVzOL/Jg.7SwoUiw2dbfwjWbmlwgJ.MA0Gq', NULL, '2021-08-05 11:37:28', '2021-08-05 11:37:28'),
(2, 'vikasdwivedi', 'infoa@saiomscg.com', NULL, '$2y$10$f1axgbWzuob.c2GMXdZzLOKmiUqek8DPCo6KxCj17nWvcVWOeXRjW', NULL, '2021-08-13 10:35:20', '2021-08-13 10:35:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_review`
--
ALTER TABLE `client_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contect_data`
--
ALTER TABLE `contect_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_review`
--
ALTER TABLE `client_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contect_data`
--
ALTER TABLE `contect_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
