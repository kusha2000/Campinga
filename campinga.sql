-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 07:51 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campinga`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `quantity` int(20) NOT NULL DEFAULT '1',
  `total` int(100) NOT NULL DEFAULT '0',
  `from_d` varchar(20) NOT NULL,
  `to_d` varchar(20) NOT NULL,
  `deliver` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `quantity`, `total`, `from_d`, `to_d`, `deliver`) VALUES
(46, 5, 4, 1, 450, '', '', 'No'),
(43, 2, 2, 1, 300, '', '', 'No'),
(45, 5, 1, 1, 365, '', '', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `small_desc` varchar(1000) NOT NULL,
  `location_id` int(10) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `location_pic` varchar(1000) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `planner_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `small_desc`, `location_id`, `description`, `image`, `location_pic`, `tag`, `planner_id`) VALUES
(1, 'Big & Strong Tent', 365, '5 Person', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'tent1.png', 'location1.png', 'tent', 4),
(2, 'German Triple Tent', 300, '3 Person', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'germen_tent.png', 'location1.png', 'tent', 4),
(3, 'Simple and Light Tent', 250, '1 Person', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'light_tent.png', 'location1.png', 'tent', 1),
(4, '2 Side Cooking Stove', 450, 'Gas Powered', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'cooker1.png', 'location1.png', 'cooking', 1),
(5, 'Big Chinees Tent', 450, '8 Person', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh1.png', 'location1.png', 'tent', 15),
(6, 'Japaneese Double Tent', 200, '2 Person', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh4.png', 'location1.png', 'tent', 1),
(7, 'Gas Cooking Stove', 500, 'Electric Cooker', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh2.png', 'location1.png', 'cooking', 1),
(8, 'New Sleeping Bag', 460, 'Sleeping Bag', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh3.png', 'location1.png', 'sleeping', 4),
(9, 'BBQ Camping Stoves', 650, 'Battery', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh5.jpg', 'location1.png', 'stove', 1),
(10, 'Sri Lankan Black Chair', 350, 'For 1 Person', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh6.jpg', 'location1.png', 'chairs', 1),
(11, 'New Leather Backpack', 700, '70l', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh8.jpg', 'location1.png', 'backpack', 4),
(12, 'Long 30m Flashlight', 200, '30m range', 1, 'Introducing the TitanX Big and Strong Tent: Your Ultimate Shelter for Adventure!<br><br> Unleash the full potential of your outdoor adventures with the TitanX Big and Strong Tent, the ultimate fortress of comfort and durability. Crafted with precision and engineered to withstand the harshest elements, this remarkable tent will become your reliable companion in every camping, hiking, or outdoor escapade.<br><br>\r\n<div class=\"red_box\">\r\n<ul><li>Unmatched Size and Space: With its cavernous interior, the TitanX Tent offers an abundance of space to comfortably accommodate up to 10 people, making it perfect for family outings, group adventures, or simply for those who love a little extra room to spread out.</li><br><li> Rock-Solid Construction: Built to endure and last, the TitanX Tent is made from high-quality, heavy-duty materials that provide exceptional strength and resistance. The sturdy frame is crafted from aircraft-grade aluminum, ensuring maximum stability and support, even in gusty winds.</li><br><li> Weatherproof Wonder: Don\'t let inclement weather spoil your outdoor fun. The TitanX Tent boasts a 3000mm waterproof rating, defending against rain and snow. The heat-sealed seams and rugged fabric guard you against unwanted moisture, keeping you dry and cozy inside.</li><br><li> Breathable and Ventilated: While the TitanX Tent is tough on the outside, it remains breathable on the inside. Multiple mesh windows and vents promote excellent airflow, preventing condensation and stuffiness, so you can wake up refreshed and ready for another day of adventure. Enhanced Safety: Your safety is our top priority. The TitanX Tent comes with reflective guy lines and tent stakes, making it visible during the night, reducing the risk of accidental trips or collisions.</li></ul></div>', 'sh7.jpg', 'location1.png', 'headlamps', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `province` varchar(1000) NOT NULL,
  `district` varchar(1000) NOT NULL,
  `level` int(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `province`, `district`, `level`, `image`) VALUES
(1, 'Serenity Pines Campsite', 'Western', 'Colombo', 1, 'serenity.png'),
(2, 'Evergreen Escape Campsite', 'Sabaragamuwa', 'Rathnapura', 1, 'evergreen.png'),
(3, 'Adventure Peaks Basecamp', 'Southern', 'Galle', 2, 'peaks.png'),
(4, 'Coastal Breeze Campsite', 'Central', 'Kandy', 3, 'coastal.png'),
(5, 'Serenity Pines Campsite', 'Sabaragamuwa', 'Rathnapura', 3, 'serentity_p.png'),
(6, 'Lakeside Haven Retreat', 'Uva', 'Badulla', 3, 'lakeside.png'),
(7, 'Whispering Woods\r\nCampground', 'Northern', 'Jaffna', 3, 'whispering.png'),
(8, 'Rolling Hills Campground', 'Eastern', 'Batticaloa', 3, 'rolling.png'),
(9, 'Serenity Pines Escape', 'Central', 'Nuwara eliya', 1, 'c1.jpeg'),
(10, 'Evergreen Escape Pines', 'North Central', 'Anuradhapura', 2, 'c2.jpg'),
(11, 'New Peaks Hills', 'Southern', 'Hambantota', 1, 'c3.JPG'),
(12, 'Peak Breeze Hills', 'Central', 'Kandy', 2, 'c4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `f_date` varchar(100) NOT NULL,
  `t_date` varchar(1000) NOT NULL,
  `total_products` int(10) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `planner_id` int(100) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `f_date`, `t_date`, `total_products`, `total_price`, `placed_on`, `payment_status`, `planner_id`, `pid`) VALUES
(13, 2, 'shabeeb', '714249784', 'shabeeb@sa.com', 'after event', '1, niss mawatha, allaawa, kurunegala', '2023-05-04', '2023-08-06', 2, 1495, '07-Aug-2023', 'pending', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

DROP TABLE IF EXISTS `tbl_message`;
CREATE TABLE IF NOT EXISTS `tbl_message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` text NOT NULL,
  `outgoing_msg_id` text NOT NULL,
  `text_message` text NOT NULL,
  `curr_date` text NOT NULL,
  `curr_time` text NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `text_message`, `curr_date`, `curr_time`) VALUES
(1, '1476479542', '993628918', 'Hi', 'August 7, 2023 ', '12:30 am'),
(2, '993628918', '1476479542', 'Hello bro how are you? How i will help you\r\n', 'August 7, 2023 ', '12:31 am'),
(3, '1476479542', '993628918', 'Ya bro i want to know the price of the cooker', 'August 7, 2023 ', '12:34 am'),
(4, '993628918', '1476479542', 'you can rent this for rs.365 for one day', 'August 7, 2023 ', '12:38 am'),
(5, '1476479542', '993628918', 'It is too much bro', 'August 7, 2023 ', '12:38 am'),
(6, '993628918', '1476479542', 'oh sorry sir. I will give rs.50 discount if you buy this for three days.', 'August 7, 2023 ', '12:38 am'),
(7, '993628918', '1476479542', 'ok i will check', 'August 7, 2023 ', '12:40 am'),
(8, '1476479542', '993628918', 'Thank you sir', 'August 7, 2023 ', '12:41 am'),
(17, '1476479542', '993628918', 'hi\n', 'August 7, 2023 ', '7:48 pm'),
(18, '320634488', '1476479542', 'hi', 'August 7, 2023 ', '7:49 pm'),
(19, '1476479542', '320634488', 'yes tell', 'August 7, 2023 ', '7:49 pm'),
(20, '320634488', '665130422', 'hi\n', 'August 8, 2023 ', '1:36 pm'),
(21, '993628918', '665130422', 'hi\n', 'August 8, 2023 ', '1:40 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `t_no` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `img` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `about` varchar(10000) NOT NULL,
  `unique_id` text NOT NULL,
  `username` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `nic`, `t_no`, `name`, `email`, `password`, `user_type`, `img`, `about`, `unique_id`, `username`, `status`) VALUES
(1, 'Mevin', 'Perera', '199658961234', 764123586, 'mevin', 'mevin@se.com', '123', 'planner', 'mevin.jpg', 'Hi there, I\'m Kasun, an event planner with a passion for creating magical beach weddings. Growing up near the coast, I\'ve always been drawn to the natural beauty and tranquility of the beach, and I feel fortunate to have turned this passion into a career.\r\n\r\nI studied event management in college and quickly discovered that my true calling was in helping couples plan their dream beach weddings. Over the past decade, I\'ve developed a reputation for my attention to detail, creativity, and ability to work under pressure.\r\n\r\nWhen I work with a couple, I take a collaborative and hands-on approach. I take the time to get to know them and their vision for their special day, and then use my expertise to bring that vision to life. I have a keen eye for design and work closely with my trusted vendors to create stunning floral arrangements, decor, and lighting that perfectly complement the beach setting.\r\n\r\nFrom sourcing the perfect beachfront location to coordinating the wedding day timeline, I take care of every detail to ensure a stress-free experience for the couple and their guests. I\'m known for my excellent communication skills, professionalism, and ability to handle unexpected challenges with ease.\r\n\r\nIt\'s an honor to be a part of such an important moment in a couple\'s life, and I take that responsibility very seriously. With me as their event planner, couples can relax and enjoy their special day, knowing that every detail has been taken care of and that their beach wedding will be truly unforgettable.', '993628918', 'mevin', 'Active'),
(2, 'Shabeeb', 'Ishaq', '200012802803', 714249784, 'shabeeb', 'shabeeb@sa.com', '123', 'user', 'shabeeb.jpg', '', '1476479542', 'shabeeb', 'offline'),
(3, 'Ishani', 'Samaraweera', '199845789632', 785623418, 'ishani99', 'ishani@se.com', '123', 'user', 'ishani.jpg', '', '945803191', 'ishani', 'offline'),
(4, 'Akela', 'Dumindu', '199425463687', 712345785, 'akela', 'planner4@ka.com', '123', 'planner', 'akela.jpg', 'Hi there, I\'m Sandun, an event planner with a passion for creating magical beach weddings. Growing up near the coast, I\'ve always been drawn to the natural beauty and tranquility of the beach, and I feel fortunate to have turned this passion into a career.\r\n\r\nI studied event management in college and quickly discovered that my true calling was in helping couples plan their dream beach weddings. Over the past decade, I\'ve developed a reputation for my attention to detail, creativity, and ability to work under pressure.\r\n\r\nWhen I work with a couple, I take a collaborative and hands-on approach. I take the time to get to know them and their vision for their special day, and then use my expertise to bring that vision to life. I have a keen eye for design and work closely with my trusted vendors to create stunning floral arrangements, decor, and lighting that perfectly complement the beach setting.\r\n\r\nFrom sourcing the perfect beachfront location to coordinating the wedding day timeline, I take care of every detail to ensure a stress-free experience for the couple and their guests. I\'m known for my excellent communication skills, professionalism, and ability to handle unexpected challenges with ease.\r\n\r\nIt\'s an honor to be a part of such an important moment in a couple\'s life, and I take that responsibility very seriously. With me as their event planner, couples can relax and enjoy their special day, knowing that every detail has been taken care of and that their beach wedding will be truly unforgettable.', '320634488', 'akela', 'Active'),
(5, 'kushan', 'Andarawewa', '199752364517', 754123856, 'kushan', 'kushan@se.com', '123', 'user', 'kushan.jpg', '', '665130422', 'kushan', 'offline'),
(6, 'admin', 'admin', '000000000000', 0, 'admin', 'admin@ka.com', '123', 'admin', 'admin.jpg', 'i\'m the admin of this web site', '1047514398', 'admin', 'offline'),
(7, 'Wasana', 'Amarathunga', '200244567841', 704125369, 'Wasana02', 'planner7@ka.com', '123', 'planner', 'pic-6.png', 'Hi there, I\'m Wasana, an event planner with a passion for creating magical beach weddings. Growing up near the coast, I\'ve always been drawn to the natural beauty and tranquility of the beach, and I feel fortunate to have turned this passion into a career.\r\n\r\nI studied event management in college and quickly discovered that my true calling was in helping couples plan their dream beach weddings. Over the past decade, I\'ve developed a reputation for my attention to detail, creativity, and ability to work under pressure.\r\n\r\nWhen I work with a couple, I take a collaborative and hands-on approach. I take the time to get to know them and their vision for their special day, and then use my expertise to bring that vision to life. I have a keen eye for design and work closely with my trusted vendors to create stunning floral arrangements, decor, and lighting that perfectly complement the beach setting.\r\n\r\nFrom sourcing the perfect beachfront location to coordinating the wedding day timeline, I take care of every detail to ensure a stress-free experience for the couple and their guests. I\'m known for my excellent communication skills, professionalism, and ability to handle unexpected challenges with ease.\r\n\r\nIt\'s an honor to be a part of such an important moment in a couple\'s life, and I take that responsibility very seriously. With me as their event planner, couples can relax and enjoy their special day, knowing that every detail has been taken care of and that their beach wedding will be truly unforgettable.', '376350839', 'wasana', 'offline'),
(15, 'Navindu', 'Kumara', '200001212356', 124578456, 'navindu', 'planner15@ka.com', '123', 'planner', 'default.jpg', '', '1529629075', 'navindu', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
