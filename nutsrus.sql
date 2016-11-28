--
-- Database: `nutsrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `A_id` int(11) NOT NULL,
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

INSERT INTO `address` (`A_id`, `house_number`, `street`, `city`, `state`, `zip`, `updated_at`, `created_at`) VALUES
(1, 917, 'Monroe Court', 'Apollo', 'Pa', 15613, '2016-11-16 20:51:09', '2016-11-16 20:51:09'),
(2, 3200, 'College Ave', 'Beaver FAlls', 'Pa', 15010, '2016-11-16 20:51:09', '2016-11-16 20:51:09'),
(3, 3200, 'College Ave', 'Beaver FAlls', 'Pa', 15010, '2016-11-16 20:51:09', '2016-11-16 20:51:09'),
(5, 123, 'street', 'city', 'state', 12345, '2016-11-17 01:59:23', '2016-11-17 01:59:23'),
(6, 123, 'street', 'city', 'state', 11111, '2016-11-19 05:16:34', '2016-11-19 05:16:34'),
(7, 11, 'adasda', 'dwdad', 'ad', 13211, '2016-11-29 01:11:58', '2016-11-29 01:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `B_id` int(11) NOT NULL,
  `O_id` int(11) NOT NULL,
  `I_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`B_id`, `O_id`, `I_id`, `amount`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 1, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `D_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`D_id`, `order_date`) VALUES
(1, '0000-00-00 00:00:00');

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
  `D_id` int(11) DEFAULT NULL,
  `shipping_status` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_id`, `U_id`, `A_id`, `D_id`, `shipping_status`, `total`) VALUES
(1, 1, 1, 1, 'Not shipped', 30);

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
(1, 'Zack Fisher', 'Zack.fisher@geneva.edu', '$2y$10$FpsOqg7aOrpIx4y85te72O71UPf2S17ma834TogPqGjW4ZX6U5pUy', 'igNNGMPM55rCo6arfPxnNKsYVIfXDWyHx9xGMtX4w6eyUclA1Kk3Pqq4cQrc', '2016-11-29 00:22:12', '2016-11-29 01:27:39'),
(3, 'Joe Shmo', 'joe@test.test', '$2y$10$Z2qBnS/lep5eVpz9xJAD3enZl9heAbZqoCVDFx9pcr0HAX2uQTrRu', 'sUK7SgiGiEai7imCDdKJ4WUNqOkrb8pF3VBn8OnUQ0RZlJt6f6cXKRaRkMBi', '2016-11-29 01:22:27', '2016-11-29 01:23:11'),
(4, 'John Smith', 'John@test.net', '$2y$10$HG/dmhwsyEGegiyb9nQgd.eD/OUXRblz00UgF.WnWWCl/t4FUicEa', 'YOqNtQlDXErovTlRcHW3IgLr8ltUAimX1OzXJFknro9ihpWaJK2eyxORsCHx', '2016-11-29 01:24:22', '2016-11-29 01:25:25'),
(5, 'Jane doe', 'jane@test.test', '$2y$10$Q53PeGqAlqbPHf0Xsk78jOWtHA7gz0vOUYuWlboGxJMNFWfDWg3h.', NULL, '2016-11-29 01:30:20', '2016-11-29 01:30:20');

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
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`D_id`);

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
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `I_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
