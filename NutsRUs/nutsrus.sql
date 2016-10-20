CREATE DATABASE IF NOT EXISTS `nutsrus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nutsrus`;

CREATE TABLE `address` (
  `A_id` int(11) NOT NULL,
  `house_number` int(11) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `address` (`A_id`, `house_number`, `street`, `city`, `state`, `zip`) VALUES
(1, 917, 'Monroe Court', 'Apollo', 'Pa', 15613),
(2, 3200, 'College Ave', 'Beaver FAlls', 'Pa', 15010),
(3, 3200, 'College Ave', 'Beaver FAlls', 'Pa', 15010);

CREATE TABLE `batch` (
  `B_id` int(11) NOT NULL,
  `O_id` int(11) NOT NULL,
  `I_id` int(11) DEFAULT NULL,
  `ammount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `batch` (`B_id`, `O_id`, `I_id`, `ammount`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 1, 3, 6);

CREATE TABLE `date` (
  `D_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `date` (`D_id`, `order_date`) VALUES
(1, '0000-00-00 00:00:00');

CREATE TABLE `items` (
  `I_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `items` (`I_id`, `name`, `price`) VALUES
(1, 'Almonds', 10),
(2, 'Cashews', 11),
(3, 'Peanuts', 3);

CREATE TABLE `orders` (
  `O_id` int(11) NOT NULL,
  `U_id` int(11) DEFAULT NULL,
  `A_id` int(11) DEFAULT NULL,
  `D_id` int(11) DEFAULT NULL,
  `shipping_status` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `orders` (`O_id`, `U_id`, `A_id`, `D_id`, `shipping_status`, `total`) VALUES
(1, 1, 1, 1, 'Not shipped', 30);

CREATE TABLE `users` (
  `U_id` int(11) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `A_id` int(11) DEFAULT NULL,
  `permissions` int(11) DEFAULT NULL,
  `credit_card` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`U_id`, `last_name`, `first_name`, `A_id`, `permissions`, `credit_card`, `email`) VALUES
(1, 'Fisher', 'Zack', 1, 2, NULL, 'zack.fisher@geneva.edu'),
(2, 'Wehr', 'Evan', 2, 2, NULL, 'enwehr@gmail.com'),
(3, 'Gilleland', 'Will', 3, 2, NULL, 'willgilleland95@gmail.com');


ALTER TABLE `address`
  ADD PRIMARY KEY (`A_id`);

ALTER TABLE `batch`
  ADD PRIMARY KEY (`B_id`);

ALTER TABLE `date`
  ADD PRIMARY KEY (`D_id`);

ALTER TABLE `items`
  ADD PRIMARY KEY (`I_id`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`U_id`),
  ADD UNIQUE KEY `U_id` (`U_id`);


ALTER TABLE `address`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `batch`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `date`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `items`
  MODIFY `I_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `orders`
  MODIFY `O_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `users`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
