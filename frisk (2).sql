-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 03:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frisk`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_description` longtext NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_title`, `about_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'Ventura Builders LTD is a fast-growing lead company in engineering and construction project delivery by providing single-source responsibility, integrated design, construction planning, and accelerated schedules with open communications and teamwork. The name “VENTURA” has a rich origin rooted in the Spanish language. Derived from the Latin word Ventura, meaning good fortune or luck, it symbolizes the concept of favorable circumstances or fortunate events. At VENTURA, we\'re more than just builders; you get a team of professionals working to maximize the value of your project. Our project professionals are nimble and innovative, tailoring design and construction solutions to the best interests of our customers. You benefit from the relationships we have with designers, consultants and subcontractors. At Ventura, our mission is simple: to deliver superior results while exceeding our clients\' expectations. By working with us, you receive more than an engineering and construction firm; you also get a reliable partner who is dedicated to realizing your vision on schedule and within your allocated budget', NULL, '2024-11-06 12:46:25', '2024-11-10 04:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `banner_name` longtext NOT NULL,
  `banner_details` longtext NOT NULL,
  `banner` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `banner_name`, `banner_details`, `banner`, `created_at`, `updated_at`) VALUES
(1, 1, 'Money Laundering Compliance Scannersddsfsdfds', '<p>gfdggfdgdfgfdgdfgfdgfghgfhfhffhgfh</p>', 'uploads/banner_image/1815676981370307.jpg', '2024-11-14 06:08:08', '2024-11-14 06:10:37'),
(2, 1, 'Shopify Redesign for a Nova Scotia Winery', '<div class=\"title-area mb-35\">\r\n<h2 class=\"sec-title\">Decentralized Platform</h2>\r\n<p class=\"sec-text mt-30\">BaseCreate is pleased to announce that it has been commissioned by Leighton Asia reposition its brand. We will help Leighton Asia evolve its brand strategy, and will be responsible updating Leighton Asia&rsquo;s brand identity, website, and other collaterals.</p>\r\n<p class=\"sec-text mt-30\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n<h3>Challenge &amp; Solution</h3>\r\n<p class=\"sec-text mb-n1\">Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients.</p>\r\n<h3 class=\"mt-35\">Final Result</h3>', 'uploads/banner_image/1815678076642564.jpg', '2024-11-14 06:25:17', '2024-11-14 06:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_title` varchar(255) DEFAULT NULL,
  `contact_description` longtext DEFAULT NULL,
  `contact_mobile` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_google_map` longtext DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_title`, `contact_description`, `contact_mobile`, `contact_email`, `contact_google_map`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Contact Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '01822823912', 'admin@frisk.com', '<iframe class=\"gmap_iframe\" width=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe>', NULL, '2024-11-10 13:07:05', '2024-11-10 13:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `experience_category_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `experience_category_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 'Civil Work', NULL, '2024-11-11 10:01:05', NULL),
(4, 1, 'Building', NULL, '2024-11-11 10:01:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/logo/1815704451978563.jpg', '2024-11-14 13:25:02', NULL),
(2, 'uploads/logo/1815704512866390.jpg', '2024-11-14 13:26:00', NULL),
(3, 'uploads/logo/1815704953987172.jpg', '2024-11-14 13:33:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_11_06_090817_create_abouts_table', 2),
(15, '2024_11_10_174634_create_contacts_table', 3),
(18, '2024_11_11_101146_create_work_categories_table', 4),
(19, '2024_11_11_133720_create_experiences_table', 5),
(20, '2024_11_11_161213_create_portfolio_categories_table', 6),
(29, '2024_11_13_163216_create_banners_table', 7),
(31, '2024_11_12_115917_create_portfolios_table', 8),
(32, '2024_11_14_165511_create_logos_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$5CNv4Iaf3FQkuUUA8L4DhulPYIpeM6iYhXQSq4z7eCyj8VWQT68VW', '2024-11-11 12:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `portfolio_category_id` int(11) NOT NULL,
  `portfolio_name` varchar(255) NOT NULL,
  `client_name` text DEFAULT NULL,
  `project_date` date DEFAULT NULL,
  `project_url` text DEFAULT NULL,
  `details` longtext NOT NULL,
  `image` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `portfolio_category_id`, `portfolio_name`, `client_name`, `project_date`, `project_url`, `details`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Facebook Marketing', 'Jon Von', '2024-11-14', 'https://www.prothomalo.com/', '<p>fdgfdgfdgdfgfdgfdgdfgfdgfdgfdg</p>', 'uploads/portfolio_image/1815693704814797.jpg', NULL, '2024-11-14 10:34:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `portfolio_category_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `user_id`, `portfolio_category_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Development', '2024-11-14 10:33:42', '2024-11-11 11:38:44', '2024-11-14 10:33:42'),
(3, 1, 'Digital Marketing', NULL, '2024-11-11 12:59:31', '2024-11-13 09:40:05'),
(4, 1, 'Web Design', NULL, '2024-11-12 05:54:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shubha Mandal', 'admin@gmail.com', '2024-11-11 12:34:35', '$2y$12$NbWf7OPqUtCawDGz6mmYne2WDB/mXaaz0efEFq6HZf2oZySmYTaQC', 'vCVWOXRHKaS9yreGtDeBPAxHMdgcvSXlzIBJU5omQ4die3cPdErB782MIJho', '2024-11-05 23:02:52', '2024-11-11 12:34:35'),
(2, 'Test name', 'test@gmail.com', NULL, '$2y$12$OkiUuPCmUxLwdsAq1bm1Sem1jy91hWLEjw30yfLnEFXZsHKOacp3O', NULL, '2024-11-11 08:41:34', '2024-11-11 08:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `work_categories`
--

CREATE TABLE `work_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_category_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_categories`
--

INSERT INTO `work_categories` (`id`, `user_id`, `work_category_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 2, 'Digital Marketting 2', NULL, '2024-11-11 07:30:57', '2024-11-11 08:46:58'),
(6, 1, 'E-commerce Website Development', NULL, '2024-11-11 07:31:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_contact_mobile_unique` (`contact_mobile`),
  ADD UNIQUE KEY `contacts_contact_email_unique` (`contact_email`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `experiences_experience_category_name_unique` (`experience_category_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_categories_portfolio_category_name_unique` (`portfolio_category_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_categories`
--
ALTER TABLE `work_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `work_categories_work_category_name_unique` (`work_category_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_categories`
--
ALTER TABLE `work_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
