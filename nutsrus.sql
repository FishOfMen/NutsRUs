--
-- Database: `nutsrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `A_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `house_number` int(11) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`A_id`, `U_id`, `house_number`, `street`, `city`, `state`, `zip`, `updated_at`, `created_at`) VALUES
(1, 1, 917, 'Monroe Court', 'Apollo', 'Pa', 15613, '2016-11-30 04:17:40', '2016-11-16 20:51:09'),
(11, 16, 123, 'testing', 'testing', 'testing', 12345, '2016-11-29 23:19:14', '2016-11-29 23:19:14'),
(12, 17, 3200, 'College Ave', 'Beaver Falls', 'PA', 15010, '2016-11-30 04:20:51', '2016-11-30 04:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `B_id` int(11) NOT NULL,
  `O_id` int(11) NOT NULL,
  `I_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`B_id`, `O_id`, `I_id`, `amount`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 2, '2016-11-29 15:05:05', '2016-11-29 15:05:05'),
(2, 1, 2, 1, '2016-11-29 15:05:05', '2016-11-29 15:05:05'),
(3, 1, 3, 6, '2016-11-29 15:05:05', '2016-11-29 15:05:05'),
(4, 6, 1, 1, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(5, 6, 2, 1, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(6, 6, 3, 1, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(7, 6, 4, 1, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(8, 6, 5, 1, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(9, 6, 6, 1, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(10, 7, 1, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(11, 7, 2, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(12, 7, 3, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(13, 7, 4, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(14, 7, 5, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(15, 7, 6, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(16, 7, 7, 1, '2016-11-29 20:07:50', '2016-11-29 20:07:50'),
(17, 8, 1, 1, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(18, 8, 2, 1, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(19, 8, 3, 1, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(20, 8, 4, 1, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(21, 8, 5, 1, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(22, 8, 6, 1, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(23, 8, 7, 1, '2016-11-29 20:09:15', '2016-11-29 20:09:15'),
(24, 9, 1, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(25, 9, 2, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(26, 9, 3, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(27, 9, 4, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(28, 9, 5, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(29, 9, 6, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(30, 9, 7, 3, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(31, 10, 1, 4, '2016-11-29 20:13:09', '2016-11-29 20:13:09'),
(32, 10, 2, 4, '2016-11-29 20:13:10', '2016-11-29 20:13:10'),
(33, 10, 3, 4, '2016-11-29 20:13:10', '2016-11-29 20:13:10'),
(34, 10, 4, 4, '2016-11-29 20:13:10', '2016-11-29 20:13:10'),
(35, 10, 5, 4, '2016-11-29 20:13:10', '2016-11-29 20:13:10'),
(36, 10, 6, 4, '2016-11-29 20:13:10', '2016-11-29 20:13:10'),
(37, 10, 7, 4, '2016-11-29 20:13:10', '2016-11-29 20:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `I_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`I_id`, `name`, `price`) VALUES
(1, 'Almonds', 10),
(2, 'Cashews', 11),
(3, 'Peanuts', 3),
(4, 'Macadamias', 7),
(5, 'Walnuts', 10),
(6, 'Dried Raspberries', 12),
(7, 'M&Ms', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_id` int(11) NOT NULL,
  `U_id` int(11) DEFAULT NULL,
  `A_id` int(11) DEFAULT NULL,
  `shipping_status` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_id`, `U_id`, `A_id`, `shipping_status`, `total`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Not shipped', 30, '2016-11-29 15:01:44', '2016-11-29 15:01:44'),
(2, 16, 11, 'Not Shipped', 57, '2016-11-29 20:02:02', '2016-11-29 20:02:02'),
(3, 16, 11, 'Not Shipped', 57, '2016-11-29 20:03:51', '2016-11-29 20:03:51'),
(4, 16, 11, 'Not Shipped', 57, '2016-11-29 20:04:24', '2016-11-29 20:04:24'),
(5, 16, 11, 'Not Shipped', 57, '2016-11-29 20:05:13', '2016-11-29 20:05:13'),
(6, 16, 11, 'Not Shipped', 57, '2016-11-29 20:07:21', '2016-11-29 20:07:21'),
(7, 16, 11, 'Not Shipped', 57, '2016-11-29 20:07:49', '2016-11-29 20:07:49'),
(8, 16, 11, 'Not Shipped', 57, '2016-11-29 20:09:14', '2016-11-29 20:09:14'),
(9, 1, 1, 'Not Shipped', 171, '2016-11-29 20:11:44', '2016-11-29 20:11:44'),
(10, 1, 1, 'Not Shipped', 228, '2016-11-29 20:13:09', '2016-11-29 20:13:09'),
(11, 17, 12, 'Not Shipped', 0, '2016-11-29 23:21:36', '2016-11-29 23:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zachary Fisher', 'Zack.fisher@geneva.edu', '$2y$10$FpsOqg7aOrpIx4y85te72O71UPf2S17ma834TogPqGjW4ZX6U5pUy', 'h9N8QZc91dKSAVxvrUKQfdvlVKHSOy7SaWZKsjCJjpbnbqUTyjSCwu0Fezi4', '2016-11-29 00:22:12', '2016-12-01 06:15:28'),
(16, 'testing', 'test@test.test', '$2y$10$LXiir8D9MJuOA..4X6rrRuAMwrANeQQblvqxhmPCYyvA/nvycagLe', 'rB9LC15JXYj7elOmDzAszXVbNEMyvvRF64YtgNEIHOFHnlXPeXArAsXA2Gx6', '2016-11-29 23:18:55', '2016-12-01 06:15:50'),
(17, 'Luke Gatchell', 'test@test.com', '$2y$10$BmEWtYozDFUE8IIbVGF5P.c8O.VF0EUYCWfWgsA2o5VlgYjp9Vz1G', 'AiZBJNaB516lnxKRZ6lMhpoxt2sQqFjzyGEHa68xee6FzCSxhr4eYkGFlb8v', '2016-11-30 04:19:46', '2016-11-30 04:22:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`I_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_id`);

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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `I_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
