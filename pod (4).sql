-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 01:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pod`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE `addcat` (
  `cat_id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`cat_id`, `cname`) VALUES
(1, 'mugs'),
(2, 'tshirts'),
(4, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `addcatcon`
--

CREATE TABLE `addcatcon` (
  `catcon_id` int(11) NOT NULL,
  `condname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcatcon`
--

INSERT INTO `addcatcon` (`catcon_id`, `condname`) VALUES
(1, 'mugs'),
(2, 'tshirt'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `addorderdetail`
--

CREATE TABLE `addorderdetail` (
  `ao_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dboy` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `status` varchar(800) NOT NULL,
  `u_id` int(100) NOT NULL,
  `or_id` int(100) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL,
  `phno` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addorderdetail`
--

INSERT INTO `addorderdetail` (`ao_id`, `name`, `dboy`, `address`, `state`, `pin`, `bdate`, `ddate`, `status`, `u_id`, `or_id`, `paymode`, `tamount`, `phno`) VALUES
(11, 'megha', 'varun', 'Mangaladevi', 'Karnataka', 527864, '2021/10/11', '2021-10-12', 'Order confirmed', 2, 13, 'cod', 280, '9775436532'),
(2, 'megha', 'Shamanth', 'Mangaladevi', 'KARNATAKA', 575001, '2021/10/03', '2021-10-05', 'deliverd', 2, 2, 'cod', 577, '1234561234'),
(3, 'Swara', 'Shamanth', 'Bejai', 'Karnataka', 575012, '2021/10/03', '2021-10-05', 'Order confirmed', 3, 3, 'cod', 600, '1234567811'),
(4, 'Ashik', 'Peter', 'Padil', 'Karnataka', 575005, '2021/10/03', '2021-10-05', 'Order confirmed', 4, 4, 'cod', 1800, '1234500123'),
(5, 'Shahad', 'John', 'Gurupura', 'KARNATAKA', 575025, '2021/10/03', '2021-10-06', 'Processing', 1, 1, 'cod', 500, '1234567890'),
(8, 'megha', 'Peter', 'Mangaladevi', 'Karnataka', 527864, '2021/10/08', '2021-10-11', 'Canceled', 2, 9, 'cod', 550, '9775436532'),
(7, 'admin', 'adapa', 'qwqwq', 'qwqw', 789456, '2021/10/06', '2021-10-28', 'Order confirmed', 5, 6, 'cod', 500, '7894561237'),
(9, 'Shahad Sheikh', 'varun', 'Rahemani manzil, gurukambla, p.o, kinnikambla, mangalore 574151', 'Karnataka', 574151, '2021/10/11', '2021-10-12', 'Canceled', 1, 11, 'paid online', 166, '9035537821'),
(10, 'megha', 'varun', 'Mangaladevi', 'Karnataka', 527864, '2021/10/11', '2021-10-13', 'Order confirmed', 2, 12, 'cod', 161, '9775436532'),
(12, 'megha', 'varun', 'Mangaladevi', 'Karnataka', 527864, '2021/10/11', '2021-10-12', 'Processing', 2, 13, 'cod', 280, '9775436532'),
(13, 'megha', 'varun', 'Mangaladevi', 'Karnataka', 527864, '2021/10/12', '2021-10-13', 'Order confirmed', 2, 16, 'cod', 340, '9775436532'),
(14, 'megha', 'varun', 'Mangaladevi', 'Karnataka', 527864, '2021/10/12', '2021-10-13', 'Processing', 2, 16, 'cod', 340, '9775436532');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `b_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `condname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(800) NOT NULL,
  `discount` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`b_id`, `name`, `cname`, `condname`, `image`, `price`, `description`, `discount`, `quantity`) VALUES
(1, 'Ceramic Mug', '1', 'mugs', 'upload/mug01.webp', 599, 'Buy photo personalized digital printing ceramic coffee mugs', 259, 5),
(2, 'Ceramic Mug', '1', 'mugs', 'upload/ceramic.jpg', 233, 'MAGICAL GIFTS Sublimation Plain White Ceramic Coffee Mugs with SafePack Box Packing for Sublimation Printing, Kitchen use, Gifts, Business, Customizable', 29, 5),
(3, 'Simple mug', '1', 'mugs', 'upload/mug03.webp', 699, 'BM Sales Mug of Best Printed Quality.You can Print Your own Photo on Mug', 199, 4),
(4, 'Custom Mug', '1', 'mugs', 'upload/mug04.jpg', 799, 'WingsWare Superhero Printed Ceramic Coffee Mug for Kids (Yellow, Motu-Patlu-Mug-1)', 249, 10),
(5, 'Ceramic mug', '1', 'mugs', 'upload/mug05.jpg', 799, 'Consilio - Personalized/Customized Photo or Design Printing on Tea/Coffee Mug for Gifting, Supreme Quality Printing on, White Ceramic Glossy 11oz/320ml Mug, Follow Steps from Pictures Shown', 329, 6),
(6, 'Coffee Mug', '1', 'mugs', 'upload/mug06.jpg', 799, 'Brightlight Traders Printed Ceramic Coffee Mug with Mirror Reflection Lid - 400 ml - 1 Piece - Multi Design\r\n', 399, 9),
(7, 'Printed Mug', '1', 'mugs', 'upload/mug3.jpg', 599, 'One Personalised Magic Mug Material- Ceramic Colour- Black Dimension: Height- 4 inches & Diameter- 3 inches', 549, 8),
(8, 'Glass mug', '1', 'mugs', 'upload/glass.jpg', 199, 'Glass mug .No customization .Height- 4 inches & Diameter- 3 inches', 135, 10),
(9, 'Black colored mug', '1', 'mugs', 'upload/mug13.jpg', 299, 'Black colored mug. Mug Can hold upto 325ml.', 199, 5),
(10, 'Ceramic Coffee MUg', '1', 'mugs', 'upload/mug111.webp', 1349, 'Nyrwana Delivering Smiles in India.\r\nKing & queen ceramic coffee tea mug for couple 400ml. ', 301, 10),
(11, 'Mens Tshirt', '2', 'tshirt', 'upload/m1.webp', 1000, 'EYEBOGLER Regular Fit Mens Cotton TShirt', 100, 3),
(12, 'Mens Tshirt', '2', 'tshirt', 'upload/m4.webp', 649, 'Levis Mens Regular TShirt', 49, 18),
(13, 'School Id', '5', 'Others', 'upload/id1.webp', 499, 'WHNOATOC id Card Holder for Office,id Card Holder for Women,id Card Holder for Men Stylish,Blue id Card Holder for School Student,id Card Holder for Office Steel, Office id Card Covers Holder Pack 1', 219, 6),
(14, 'Business id', '5', 'Others', 'upload/b1.webp', 549, 'FAITH CUSTOMISED Business Card Printing with Your Details FDLVC052 ', 200, 15),
(15, 'Flex', '5', 'Others', 'upload/f1.webp', 790, 'Quality Star customised Flex Banner with Firm Name and gst no. add. and Deals Size 36X24 INCH Flex Digital Print Star qaulity', 250, 6),
(16, 'Student Id Card', '5', 'Others', 'upload/id2.jpg', 350, 'True-Ally unruled Index student Cards - 3x5 inch, White, ', 55, 20),
(17, 'Student Id Card', '5', 'Others', 'upload/s1.webp', 399, 'Student Card/Customized/Personalized Brand: Generic', 99, 10),
(18, 'School Id Card', '1', 'Others', 'upload/schoolid.jpg', 300, 'School Card/Customized/Personalized. Brand: Generic', 55, 15),
(19, 'Student Id Card', '5', 'Others', 'upload/id4.jpg', 599, 'Student Card Customize your card', 199, 20),
(20, 'Business Card', '5', 'Others', 'upload/b1.webp', 399, 'Business Card/Customized/Personalized.', 199, 5),
(21, 'Business Card', '5', 'Others', 'upload/busi1.webp', 199, 'NFC Smart business contactless QR & tap digital business card (Standard)', 20, 10),
(22, 'Business Card', '5', 'Others', 'upload/busi4.jpg', 199, 'Simple customized business card', 30, 20),
(23, 'Visiting Card', '5', 'Others', 'upload/v01.webp', 199, 'IMPRINT Visiting Card/Business Cards, Plain Visiting Cards Orange Color', 22, 20),
(24, 'Visiting Card', '5', 'Others', 'upload/v02.webp', 299, 'Jatinder Graphics visting Card | Visiting Card | Personalized', 99, 25),
(25, 'Visiting Card', '5', 'Others', 'upload/v03.webp', 499, 'Devraaj Eco-Friendly White Seed Paper visiting Cards 2 X 3.5 inch', 155, 22),
(26, 'Normal Flex', '5', 'Others', 'upload/flex2.webp', 1100, 'Wesurprise Matte Star Flex Chalk Boards Poster  3 x2 ft', 200, 5),
(27, 'Mens Cotton Hooded Tshirt', '2', 'tshirt', 'upload/m5.webp', 1599, 'Best Fashionably Comfortable Hundred Percent Cotton Tshirt that you have wore till now.\r\n', 699, 25),
(28, 'Mens TShirt', '2', 'tshirt', 'upload/m3.webp', 600, 'Jockey Mens Cotton TShirt', 55, 15),
(29, 'Mens Cotton TShirt', '2', 'tshirt', 'upload/m2.webp', 499, 'AELOMART Mens Cotton Full Sleeve T Shirt Amt1125 N Olive', 29, 10),
(30, 'Womens Tshirt', '2', 'tshirt', 'upload/w1.webp', 666, 'Reifica Cotton Full Sleeve Regular Fit Printed TShirt for Women or Girls.', 99, 30),
(31, 'Boys Tshirt', '2', 'tshirt', 'upload/k1.webp', 499, '\r\n Lion King by Wear Your Mind\r\nLion King by Wear Your Mind Boys Regular fit T-Shirt', 199, 23),
(32, 'Womens Tshirt', '2', 'tshirt', 'upload/w2.webp', 399, 'Vogue Squad Womens Cotton BTS Printed Stylish TShirt for Women Casual Wear Black Color', 156, 39),
(33, ' Girls Hooded TShirt', '2', 'tshirt', 'upload/g1.webp', 699, '100% Cotton Slub Jersey\r\nCarhartt Logo Graphic Screen Print On Center Front Chest\r\nFull Hood\r\nRoll Cuff Dolma Sleeves\r\nFront Pouch Pocket', 122, 32),
(34, 'Womens and Girls TShirt', '2', 'tshirt', 'upload/w3.jpg', 233, 'Product Color May Slightly Vary .Cotton Womens V Neck Printed T-Shirt No Fade  Best Suitable for Summer Wear', 55, 12),
(35, 'Printed Sleeveless Tshirt', '2', 'tshirt', 'upload/w6.png', 237, 'Comfortable for all women\r\nSoft premium quality fabric\r\nWomens Sleeveless Tshirts', 59, 31),
(36, 'Women Long TOP', '2', 'tshirt', 'upload/w7.png', 348, 'This Top is Made From Finest Quality Bio Washed Cotton Fabric Which Gives You Comfort and Softness', 99, 25),
(37, 'Girls Regular TShir', '2', 'tshirt', 'upload/g2.jpg', 399, 'Pattern Printed\r\nNeck  Round Neck\r\nSleeve  Full Sleeves\r\n', 99, 34),
(38, ' Black Coffee Mug', '1', 'mugs', 'upload/mu1.webp', 555, 'THE KAMY Mugs made from Premium Quality Ceramic which is Highly Durable and has a Capacity of 350 ML liquid. Quote Printed on only the highest quality mugs.', 222, 10),
(39, 'BTS Printed Mug', '1', 'mugs', 'upload/mu2.jpg', 399, ': Each mug is carefully packaged in a durable white gift box. They are guaranteed to arrive safely, and ready for gifting', 199, 19),
(40, 'Mug', '1', 'mugs', 'upload/mu3.webp', 444, ' Made from the highest-standard glossy ceramic for outstanding durability', 111, 25),
(41, ' Porcelain Mug', '1', 'mugs', 'upload/mu4.jpg', 222, 'These designer cups makes for an exquisite addition to your crockery collection', 25, 34),
(42, 'Coffee Mug', '1', 'mugs', 'upload/mu5.jpg', 199, 'Our cups have a generous total capacity of 200 Ml.', 39, 23),
(43, 'Printed Mug', '1', 'mugs', 'upload/mu6.jpg', 499, 'TOM AND JERRY printed coffee mug\r\nYou can pour any type of beverage in it.', 299, 33),
(44, 'Robin Shape Mug', '1', 'mugs', 'upload/mu7.jpg', 999, 'These designer cups makes for an exquisite addition to your crockery collection', 399, 44),
(45, 'Stainless Steel Mug', '1', 'mugs', 'upload/mu8.jpg', 550, 'Copper Stainless steel: Artisan’s Village brings you authentic, traditionally handcrafted Moscow Mule Mugs made from copper Stainless Steel', 90, 10),
(46, 'Printed Mug', '1', 'mugs', 'upload/mu9.jpg', 499, 'The Perfect Gift - Great for any coffee lover, for any occasion! Makes a great gift for couples, family and friends', 259, 25),
(47, 'Black Ceramic Mug', '1', 'mugs', 'upload/mu10.jpg', 699, 'Made of: Ceramic\r\nType: Coffee Mug\r\nMicrowave Safe', 345, 23),
(48, 'Couple Tshirt', '2', 'tshirt', 'upload/c2.webp', 1599, 'Gift Set Contents: 2 Cotton Tshirts For Men And Women Each As Part Of Matching Couple Tshirts.', 399, 25),
(49, 'Couple Tshirt', '2', 'tshirt', 'upload/c3.jpg', 899, 'COUPLESTUFF.IN made Couple Braggy and Swaggy Printed TShirt And CropTop  Fabric: Cotton', 99, 22),
(50, 'Couple Tshirt', '2', 'tshirt', 'upload/c4.jpg', 780, 'Material: Blend, In-Box Contents:  TShirt\r\nMaterial: Cotton Blend Fabric\r\nColor: White', 20, 11),
(51, 'Neck Pink Tshirt', '2', 'tshirt', 'upload/k2.webp', 405, ' Superior Cotton T-Shirt with enzyme treatment, Breathable fabric which allows air circulation and keeps you cool', 25, 12),
(52, 'LEWEL Girls Tshirt', '2', 'tshirt', 'upload/g3.jpg', 399, 'Red Label Combed Cotton\r\nBio-Washed, Super soft & breezy fafric', 59, 33),
(53, 'Kids Tshirt', '2', 'tshirt', 'upload/k3.jpg', 713, 'Dress up your young girl and boy in this cool funky elephant printed, blue and black coloured fullength set by Bold N Elegant.', 101, 15),
(54, 'Kids Tshirt', '2', 'tshirt', 'upload/k6.jpg', 1000, 'The most comfortable outerwear, which come in bright and beautiful colors, these hooded jacket with t shirt', 99, 25),
(55, 'Pink Colored Mug', '1', 'mugs', 'upload/mug design.jpg', 199, 'Ceramic coffe mug Pink color 300ml', 29, 15),
(56, 'Mug MockUp', '1', 'mugs', 'upload/mug mockup.jpg', 500, 'Customize your mockup designed mug can hold upto 300ml', 120, 25),
(57, 'Printed Mug', '1', 'mugs', 'upload/mug umbrella cup.jpg', 220, 'Color: Sky Blue\r\nMaterial: Ceramic\r\nHighly chip resistant and durable, microwave, oven and diswasher safe', 59, 22),
(58, 'Blackwhite Mug', '1', 'mugs', 'upload/mug14.jpg', 111, 'Funny Coffee Mug printed with cat design, this unbreakable plastic mug printing on one side.', 22, 11),
(59, 'Mug', '1', 'mugs', 'upload/mug19.jpg', 199, 'Coffee Mug can hold upto 350ml this unbreakable plastic mug printing on one side.', 33, 20),
(60, 'Steel Mug', '1', 'mugs', 'upload/mug16.jpg', 123, 'SKARS Stainless Steel Tea And Coffee Mug - 1 Piece, Silver, 500 ml', 25, 11),
(61, 'flex', '4', 'Others', 'upload/flexa.jpg', 599, 'flex', 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `adminfeedback`
--

CREATE TABLE `adminfeedback` (
  `af_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `u_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminfeedback`
--

INSERT INTO `adminfeedback` (`af_id`, `name`, `text`, `u_id`) VALUES
(1, 'Shahad', 'Good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordercheckout`
--

CREATE TABLE `ordercheckout` (
  `or_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL,
  `expm` varchar(100) NOT NULL,
  `expy` varchar(100) NOT NULL,
  `odate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercheckout`
--

INSERT INTO `ordercheckout` (`or_id`, `u_id`, `name`, `email`, `phone`, `address`, `city`, `state`, `pin`, `paymode`, `cardname`, `cardno`, `cvv`, `tamount`, `expm`, `expy`, `odate`) VALUES
(17, 2, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 204, '', '', '2021/10/12'),
(16, 2, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 340, '', '', '2021/10/12'),
(3, 3, 'Swara', 'swara@gmail.com', '1234567811', 'Bejai', 'Mangalore', 'Karnataka', 575012, 'cod', '', '', '', 600, '', '', '2021/10/03'),
(4, 4, 'Ashik', 'ashik@gmail.com', '1234500123', 'Padil', 'Mangalore', 'Karnataka', 575005, 'cod', '', '', '', 1800, '', '', '2021/10/03'),
(9, 2, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 550, '', '', '2021/10/08'),
(15, 5, 'peter', 'peter@gmail.com', '9963958247', 'Jyothi', 'Mangalore', 'Karnataka', 214566, 'paid online', '', '', '', 166, '', '', '2021/10/11'),
(8, 1, 'Shahad Sheikh', 'shahadsheikh15@gmail.com', '9035537821', 'Rahemani manzil, gurukambla, p.o, kinnikambla, mangalore 574151', 'Mangalore', 'Karnataka', 574151, 'cod', '', '', '', 577, '', '', '2021/10/08'),
(10, 3, 'Swara', 'swara@gmail.com', '9632154145', 'Jyothi', 'Mangalore', 'Karnataka', 154545, 'paid online', 'swara', '1564189415616848', '154', 89, '10', '2025', '2021/10/08'),
(13, 2, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 280, '', '', '2021/10/11'),
(14, 5, 'peter', 'peter@gmail.com', '9963958247', 'Jyothi', 'Mangalore', 'Karnataka', 214566, 'cod', '', '', '', 166, '', '', '2021/10/11'),
(12, 2, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 161, '', '', '2021/10/11'),
(18, 2, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 600, '', '', '2021/10/12'),
(19, 3, 'Swara', 'swara@gmail.com', '9632154145', 'Jyothi', 'Mangalore', 'Karnataka', 154545, 'cod', '', '', '', 499, '', '', '2021/10/12'),
(20, 3, 'megha', 'megha@gmail.com', '9775436532', 'Mangaladevi', 'Mangalore', 'Karnataka', 527864, 'cod', '', '', '', 98, '', '', '2021/10/12');

-- --------------------------------------------------------

--
-- Table structure for table `orderedproducts`
--

CREATE TABLE `orderedproducts` (
  `ob_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `or_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `b_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderedproducts`
--

INSERT INTO `orderedproducts` (`ob_id`, `u_id`, `or_id`, `quantity`, `title`, `b_id`, `image`, `description`, `status`) VALUES
(1, 1, 1, 1, 'Simple mug', 3, 'upload/mug03.webp', '<p> <img src=\"data:image/jpeg;base64,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\" style=\"width: 25%;\" data-filename=\"mug8.jpg\"></p>', ''),
(2, 2, 2, 1, ' Girls Hooded TShirt', 33, 'upload/g1.webp', ' ', 'Canceled'),
(3, 3, 3, 2, 'Student Id Card', 17, 'upload/s1.webp', '<p> <img src=\"data:image/jpeg;base64,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\" style=\"width: 25%;\" data-filename=\"id3.jpg\"></p>', 'Canceled'),
(4, 4, 4, 2, 'Mens Cotton Hooded Tshirt', 27, 'upload/m5.webp', ' ', ''),
(5, 2, 5, 1, 'Mug', 59, 'upload/mug19.jpg', ' ', ''),
(6, 5, 6, 1, 'Simple mug', 3, 'upload/mug03.webp', 'zda', 'Canceled'),
(7, 5, 7, 1, 'Ceramic Mug', 2, 'upload/mug002.webp', ' ', ''),
(8, 1, 8, 1, ' Girls Hooded TShirt', 33, 'upload/g1.webp', ' ', ''),
(9, 2, 9, 1, 'Custom Mug', 4, 'upload/mug04.jpg', '<h1><b>mm</b><img src=\"data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAQAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiWxb/4BhT/+AYU//gGFP/4BhT/+AYU//gGFP/4lsW/8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlXpr/7CZjP/p4t7/6eLe/+ni3v/p4t7/6eLe/+ni3v+wmYz/fl9M/wAAAAAAAAAAAAAAAAAAAAAAAAAAfl9M/+ni3v/69/b/////////////////////////////////9/Pw/72roP9+X0z/AAAAAAAAAAAAAAAAgGFP//Xx7v/48+//9ezm//Pn4f/x5Nz/8eHY//Hh1//x4tj/8+Xd//ft5//79/P/ybiu/35fTP8AAAAAiWxb/9vQyf/48e3/hVRF/4VURf+FVEX/hVRF/4VURf+FVEX/hVRF/72ai//m0MP/9ujg//nz7/+wmYz/iWxb/4BhT//48+//9enh/9zDt/+FVEX/hlVG/5drXP+Xalz/l2pb/49gUf+FVEX/lGZX//Hazf/46+P/6NvU/35fTP+AYU//+vTw//Pj2f/dwLH/hVRF/6R6av/u0sL/7tLB/+7Rv//t0L7/qn9v/4VURf/v0sH/9eTZ//Hl3v9+X0z/gGFP//ry7v/z39P/3Lys/4VURf+idmb/6su5/+rKt//qyrb/5cKu/6J1ZP+FVEX/7826//Xg1P/x5Nv/fl9M/4BhT//68uz/8tzP/9u5p/+GVUb/hlVG/4paSv+KWUr/illK/4VURf+FVEX/vZF9/+7Js//03c//8OLZ/35fTP+AYU//+vDq//LYyv/btaH/hVRF/5ZmVv/AlID/wJN//7+Tfv+0iXj/iFhJ/62Hef/68On//fn2/+ni3v9+X0z/gGFP//rv6P/y1sX/2rKc/4VURf+ld2T/7sex//Xg0v/89fH//////5pyZf+FVEX////////////m4N3/fl9M/4BhT//67+j/89bF/9uym/+FVEX/jF1O/6mFev+phnz/qYd8/553a/+FVEX/nHRo////////////zL+4/4lsW/+AYU//++/p//TZyf+FVEX/hVRF/4VURf+FVEX/hVRF/4VURf+bc2f/s5WM//Dq6P//////7+vo/4lsW/8AAAAAgGFP//z28v/57OP//vv5////////////////////////////////////////////9fTy/45wYf8AAAAAAAAAAIBhT//58Or/+fXy//j19P/49fT/+PX0//j19P/49fT/+PX0//j29f/08e//1szH/4JiUP8AAAAAAAAAAAAAAACAYU//gGFP/4BhT/+AYU//gGFP/4BhT/+AYU//gGFP/4BhT/+AYU//gGFP/4lsW/8AAAAAAAAAAAAAAAAAAAAA8A8AAOAHAADAAwAAgAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAADAAAABwAAAA8AAA==\" style=\"width: 15.9896px;\" data-filename=\"bitnami.ico\"><span style=\"font-family: &quot;Arial Black&quot;;\">?</span></h1>', 'Canceled'),
(10, 3, 10, 1, 'Blackwhite Mug', 58, 'upload/mug14.jpg', ' ', ''),
(11, 1, 11, 1, 'Mug', 59, 'upload/mug19.jpg', 'guojhriogt', ''),
(12, 2, 12, 1, 'Printed Mug', 57, 'upload/mug umbrella cup.jpg', 'Hello!!', 'Canceled'),
(13, 2, 13, 1, 'School Id', 13, 'upload/id1.webp', ' ', 'Canceled'),
(14, 5, 14, 1, 'Mug', 59, 'upload/mug19.jpg', ' ', ''),
(15, 5, 15, 1, 'Mug', 59, 'upload/mug19.jpg', ' ', ''),
(16, 2, 16, 1, 'Ceramic Mug', 1, 'upload/mug01.webp', ' ', 'Canceled'),
(17, 2, 17, 1, 'Ceramic Mug', 2, 'upload/ceramic.jpg', ' ', ''),
(18, 2, 18, 1, 'Mens Tshirt', 12, 'upload/m4.webp', ' ', ''),
(19, 3, 19, 1, 'flex', 61, 'upload/flexa.jpg', ' ', ''),
(20, 3, 20, 1, 'Steel Mug', 60, 'upload/mug16.jpg', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `password`) VALUES
(1, 'Shahad', 'shahad@gmail.com', '123'),
(2, 'megha', 'megha@gmail.com', '123'),
(3, 'Swara', 'swara@gmail.com', '123'),
(4, 'Ashik', 'ashik@gmail.com', '123'),
(5, 'Peter', 'peter@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcat`
--
ALTER TABLE `addcat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `addcatcon`
--
ALTER TABLE `addcatcon`
  ADD PRIMARY KEY (`catcon_id`);

--
-- Indexes for table `addorderdetail`
--
ALTER TABLE `addorderdetail`
  ADD PRIMARY KEY (`ao_id`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `adminfeedback`
--
ALTER TABLE `adminfeedback`
  ADD PRIMARY KEY (`af_id`);

--
-- Indexes for table `ordercheckout`
--
ALTER TABLE `ordercheckout`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `orderedproducts`
--
ALTER TABLE `orderedproducts`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcat`
--
ALTER TABLE `addcat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addcatcon`
--
ALTER TABLE `addcatcon`
  MODIFY `catcon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addorderdetail`
--
ALTER TABLE `addorderdetail`
  MODIFY `ao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminfeedback`
--
ALTER TABLE `adminfeedback`
  MODIFY `af_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordercheckout`
--
ALTER TABLE `ordercheckout`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orderedproducts`
--
ALTER TABLE `orderedproducts`
  MODIFY `ob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
