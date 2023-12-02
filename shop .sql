-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 08:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `checkout_session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `item_number`, `item_name`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `checkout_session_id`, `payment_status`, `created`, `modified`) VALUES
(1, 'test', 'test@gmail.com', '1', 'HP Pavilion Laptop', 2.00, 'USD', 2.00, 'usd', 'pi_3JvaOFIuhitIP6cR0FEnom0H', 'cs_test_a1TndHS3IhW2KTTT06PTXLrsz0eU9qC1XvrFn5pCLATtSN30VNRyOlozsd', 'succeeded', '2021-11-14 10:03:12', '2021-11-14 10:03:12'),
(2, 'test', 'test@gmail.com', '1', 'HP Pavilion Laptop', 2.00, 'USD', 2.00, 'usd', 'pi_3JvahlIuhitIP6cR0Ti7w6lW', 'cs_test_a1o7uV7nVT1RCz9TNxoaMyk3wFrhPuSb6cdUusaau1zZzoPSt9aZ4JahhD', 'succeeded', '2021-11-14 10:23:14', '2021-11-14 10:23:14'),
(3, 'dfsdf', 'jkdkfa@gmail.com', '', '', 0.00, '', 8145.00, 'usd', 'pi_3LRCdbKFm2vs15LF0SNzZVGI', 'cs_test_a1dnE99H3yvcVEoe8AEY4CcxR5TuLW7Dhih5Gy9r0A2k3JUvsNraEpt9lO', 'succeeded', '2022-07-30 16:12:14', '2022-07-30 16:12:14'),
(4, 'dfsdf', 'jkdkfa@gmail.com', '', '', 0.00, '', 10645.00, 'usd', 'pi_3LRIJXKFm2vs15LF161vgnsp', 'cs_test_a1MoYlJjNg6zgf3XBLIFm0EiLnwwqr3EPSQguF7UmKgEXuXpOfEEicfqpT', 'succeeded', '2022-07-30 22:16:16', '2022-07-30 22:16:16'),
(5, 'dfsdf', 'kamrulislam20801@gmail.com', '', '', 0.00, '', 12748.00, 'usd', 'pi_3LRgVXKFm2vs15LF1XC89L6E', 'cs_test_a1jpRmj3rtomTQtZnwTBjga6tGqdIwXRVYGWFk2KiNeHgWbvUBrocG8VsT', 'succeeded', '2022-08-01 00:05:53', '2022-08-01 00:05:53'),
(6, 'dfsdf', 'kamrulislam20801@gmail.com', '', '', 0.00, '', 19023.00, 'usd', 'pi_3LRgXGKFm2vs15LF0aNPR1eT', 'cs_test_a1QtPv4l2EQJwMhCpNqK9u6NjQuL4JmYZKDMknMioSu0jRmvPLNfDmuqg7', 'succeeded', '2022-08-01 00:07:19', '2022-08-01 00:07:19'),
(7, 'dfsdf', '1802016@icte.bdu.ac.bd', '', '', 0.00, '', 20278.00, 'usd', 'pi_3LSEz3KFm2vs15LF1Zv5zTg3', 'cs_test_a1FztghqOFrEuHBYGrpb6fXAQfTvKFlzMbO5IBJJp3cZHz6NKTWCGjHQiB', 'succeeded', '2022-08-02 12:54:06', '2022-08-02 12:54:06'),
(8, 'dfsdf', 'kamrulislam20801@gmail.com', '', '', 0.00, '', 39358.00, 'usd', 'pi_3LUEXUKFm2vs15LF1CXVksML', 'cs_test_a1u2iMk4y4Aqzb4DmA3wu9GDwpxdMAQuKs3nkE556yH5PptJCzUJcgGwKq', 'succeeded', '2022-08-08 00:50:10', '2022-08-08 00:50:10'),
(9, 'dfsdf', 'kamrulislam20801@gmail.com', '', '', 0.00, '', 39358.00, 'usd', 'pi_3LUEfTKFm2vs15LF1JGQbmJx', 'cs_test_a1jIib2WZVo6vijGFQQnZuHY1kPSKJSX06pFpmpYI6ihkl2UKNpimZBWrs', 'succeeded', '2022-08-08 00:58:10', '2022-08-08 00:58:10'),
(10, 'dfsdf', 'jkdkfa@gmail.com', '', '', 0.00, '', 3975.00, 'usd', 'pi_3LUd0QKFm2vs15LF1qnMHUcM', 'cs_test_a1gMoEXlXCL9BYSfIU6S1tUWihtgny2Odnad3pcDqEmDsQjrUvdqHFcT6o', 'succeeded', '2022-08-09 02:57:21', '2022-08-09 02:57:21'),
(11, 'dfsdf', 'kamrulislam20801@gmail.com', '', '', 0.00, '', 71775.00, 'usd', 'pi_3LVG2gKFm2vs15LF1QqPY0mY', 'cs_test_a1SVeXYCLMSIgSUBR0qnYtpDxWt2XaLt3rxapnvWNYDEgulborkEDoOU2G', 'succeeded', '2022-08-10 20:40:28', '2022-08-10 20:40:28'),
(12, 'dfsdf', 'kamrulislam20801@gmail.com', '', '', 0.00, '', 12860.00, 'usd', 'pi_3LVJcWKFm2vs15LF0gKzBPyt', 'cs_test_a1rPMDcO0myRnNMkcew7D7mI5myMqVfMiBMyiZuBJB2pOJWtpKizvlvzhK', 'succeeded', '2022-08-11 00:27:33', '2022-08-11 00:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(400) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_cat` varchar(400) NOT NULL,
  `p_img` varchar(800) NOT NULL,
  `p_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_cat`, `p_img`, `p_description`) VALUES
(31, 'Logitech G PRO Gaming', 125, 'Headphones', 'mm1.jpg', 'Logitech PRO X Gaming Headset is built with the highest quality materials and advanced technologies to provide audio performance that is second to none. '),
(32, 'Micropack MHP-01 3.5mm ', 1255, 'Headphones', 'mm2.jpg', 'Micropack MHP-01-BK 3.5mm Headphone comes with Stereo PC Headset, Volume Control, Flexible Mic Arm,'),
(33, ' Havit H2168d USB Gaming ', 1256, 'Headphones', 'mm4.jpg', 'It has Speaker 40mm, Impedance 32±15%ohm, Sensitivity 105dBÂ±3dB at 1KHz, Frequency Response 2011z to 20KH'),
(34, 'Edifier K550 Single Plug', 1255, 'Headphones', 'mm3.jpg', 'The K550 headset has an on-ear style that rests comfortably on your ears. The ear pads are made from soft foam and the headset itself is incredibly light weight.'),
(35, 'Havit H2590BT headphone', 1200, 'Headphones', 'mm5.jpg', 'Havit H2590BT Multi-Function Headphone is comes with V4.2 Version Bluetooth connectivity.'),
(36, '  Vitamix E310 Blender', 3200, 'Home Appliances', 'h2.jpg', 'ten variable speeds allow you to refine every texture with culinary precision, from the smoothest purées to the heartiest soups'),
(37, ' Countertop BL610  Blender', 3100, 'Home Appliances', 'h3.jpg', 'The 72 oz professional blender pitcher is excellent for making frozen drinks and creamy smoothies for the entire family. 64 oz. max liquid capacity'),
(38, ' WNI-6A9-GDNE-DD', 3215, 'Home Appliances', 'h1.jpg', 'Stylish and efficient, WALTON Non-Frost Refrigerator adds style to any kitchen and offers a host of interior features that save you space and energy. '),
(39, ' WNH-4C0-HDXX-XX', 2103, 'Home Appliances', 'h4.jpg', 'Stylish and efficient, WALTON Non-Frost Refrigerator adds style to any kitchen and offers a host of interior features that save you space and energy. '),
(40, 'Skmei', 3000, 'watches', 'ww1.png', ''),
(41, 'Swatch', 1200, 'watches', 'ww3.png', 'lorem imsum'),
(42, 'Jaeger-LeCoultre', 1600, 'watches', 'ww2.png', 'Established in 1833 in the Swiss Jura Mountains, Jaeger-LeCoultre is known for its clever designs'),
(43, 'smart watch pro x', 1650, 'watches', 'ww4.png', 'lorem imsum 2'),
(44, 'Remax RB-M27 Bluetooth ', 500, 'Bluetooth-Speaker', 'll5.jpg', 'The Remax RB-M27 is Portable Fabric Bluetooth Speaker type speaker'),
(45, 'Havit SF107BT Bluetooth ', 800, 'Bluetooth-Speaker', 'll1.jpg', 'Havit SF107BT Speaker comes with Bluetooth 5.0 Connectivity. This bluetooth speaker comes with Channel 1:0,'),
(46, 'Hoco BS45 Portable', 740, 'Bluetooth-Speaker', 'll2.jpg', 'The Hoco BS45 offers a wireless speaker and deep sound.'),
(47, ' Hoco HC1 Wireless ', 1200, 'Bluetooth-Speaker', 'll4.jpg', 'The Hoco HC1 is a trendy sound wireless waterproof Bluetooth speaker.'),
(48, 'Razer Kiyo Pro', 3100, 'Camera', 'aa3.jpg', 'lorem imsum 2'),
(49, 'Elgato Facecam', 3325, 'Camera', 'aa4.jpg', 'The Elgato Facecam might be in second place overall'),
(50, 'Sony Alpha a7 ', 3512, 'Camera', 'aa1.jpg', '7 IV offers a significant improvement on AF and Eye Tracking'),
(51, 'Canon EOS Rebel', 3456, 'Camera', 'aa5.jpg', 'AWESOME camera to start with. It is a very affordable camera'),
(53, 'Surviallance pro max', 35700, 'Camera', 'aa2.jpg', 'lorem imsum'),
(75, 'Dell Inspiron', 2500, 'Smart-Device', 'Dell Inspiron.jpg', 'lorem imsum'),
(76, 'Oppo pro 9', 1233, 'Smart-Device', 'Oppo pro 9.jpg', 'lorem imsum 2'),
(77, 'Redmi note 9 pro', 1488, 'Smart-Device', 'Redmi note 9 pro.jpg', 'lorem imsum 2'),
(78, 'Smasung Galaxy pro', 1564, 'Smart-Device', 'Smasung Galaxy pro.jpg', 'lorem imsum'),
(79, 'White lumia 9001', 1956, 'Smart-Device', 'White lumia 9001.png', 'lorem imsum 2'),
(80, 'Sony WF-1000XM4', 821, 'Headphones', 'pexels-sound-on-3394651.jpg', 'lorem imsum 2'),
(81, 'Sennheiser HD 450BT', 456, 'Headphones', 'pexels-jessica-lewis-creative-2919003.jpg', 'lorem imsum 2'),
(82, 'Jabra Elite 45h', 632, 'Headphones', 'pexels-oyster-haus-7260262.jpg', 'lorem imsum 2'),
(83, 'Bose QuietComfort 45', 780, 'Headphones', 'pexels-wallace-chuck-3587475.jpg', 'lorem imsum'),
(84, '', 0, '', '', ''),
(85, 'product 1', 3434, 'watches', 'fake.jpg', 'lorem imsum 2'),
(86, 'product 1', 3434, 'watches', 'fake.jpg', 'lorem imsum 2'),
(87, 'product 1', 3434, 'watches', 'fake.jpg', 'lorem imsum 2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `currency` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `currency`, `status`) VALUES
(1, 'HP Pavilion Laptop', '', 2.00, 'USD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `cp_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `cp_price` int(10) NOT NULL,
  `cu_id` varchar(100) NOT NULL,
  `cp_product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp_cart`
--

INSERT INTO `temp_cart` (`cp_id`, `qty`, `cp_price`, `cu_id`, `cp_product_id`) VALUES
(36, 4, 3215, '::1', 38),
(37, 3, 125, '::1', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_cart`
--
ALTER TABLE `temp_cart`
  ADD PRIMARY KEY (`cp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp_cart`
--
ALTER TABLE `temp_cart`
  MODIFY `cp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
