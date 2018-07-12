-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2018 at 11:19 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pikachu`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(4) NOT NULL,
  `categories` varchar(30) NOT NULL,
  `source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_`, `name`, `price`, `categories`, `source`) VALUES
(1, 'Chips', 40, 'Bakeries', 'images/chips.jpg'),
(2, 'Khakhra(1kg)', 260, 'Bakeries', 'images/khakhra.jpg'),
(3, 'Chakli(1kg)', 410, 'Bakeries', 'images/chakli.jpg'),
(4, 'Haldirams Khatta Meetha(700gm)', 65, 'Bakeries', 'images/khattameetha.jpg'),
(5, 'Haldirams Aloo Bhujia(1 kg)', 190, 'Bakeries', 'images/aloobhujiya.jpg'),
(6, 'Haldirams Panchratan Mixture', 145, 'Bakeries', 'images/Panchratanmixture.jpg'),
(7, 'Haldirams All In One', 155, 'Bakeries', 'images/allinone.jpg'),
(8, 'Haldirams Punjabi Tadka(150 gm', 29, 'Bakeries', 'images/punjabitadka.jpg'),
(9, 'Haldirams Nimbu Masala(150 gm)', 30, 'Bakeries', 'images/nimbumasala.jpg'),
(10, 'Haldirams Moong Dal(1 kg)', 220, 'Bakeries', 'images/moongdal.jpg'),
(11, 'Haldirams Bhelpuri', 40, 'Bakeries', 'images/bhelpuri.jpg'),
(12, 'Banana Chips(100 gm)', 20, 'Bakeries', 'images/bananachips.jpg'),
(13, 'Nestle KitKat', 10, 'Bakeries', 'images/kitkat.jpg'),
(14, 'Cadbury 5 Star', 10, 'Bakeries', 'images/5star.jpg'),
(15, 'Cadbury Dairymilk', 20, 'Bakeries', 'images/dairymilkchocolate.jpg'),
(16, 'Cadbury Dairymilk Silk', 60, 'Bakeries', 'images/silkchocolate.jpg'),
(17, 'Ferrero Rocher', 140, 'Bakeries', 'images/ferrerorocherchocolate.jpg'),
(18, 'Mars', 40, 'Bakeries', 'images/mars.jpg'),
(19, 'Nestle Milky Bar', 20, 'Bakeries', 'images/milkybar.jpg'),
(20, 'Cadbury Munch', 10, 'Bakeries', 'images/munch.jpg'),
(21, 'Cadbury Perk', 5, 'Bakeries', 'images/perk.jpg'),
(22, 'Cadbury Bournville', 40, 'Bakeries', 'images/BournvilleChocolate.jpg'),
(23, 'Cadbury Temptations', 70, 'Bakeries', 'images/cadburytemptations.jpg'),
(24, 'Tobelerone (150 gm)', 375, 'Bakeries', 'images/tobelerone.jpg'),
(25, 'Kelloggs Chocos', 350, 'Bakeries', 'images/chocos.jpg'),
(26, 'Kissan Jam(1kg)', 250, 'Bakeries', 'images/jam.jpg'),
(27, 'Kissan Sauce(1 kg)', 120, 'Bakeries', 'images/ketchup.jpg'),
(28, 'Tang', 50, 'Bakeries', 'images/tang.jpg'),
(29, 'Nestle Icetea', 30, 'Bakeries', 'images/icetea.jpg'),
(30, 'Glucon D', 100, 'Bakeries', 'images/glucond.jpg'),
(31, 'Honey', 100, 'Bakeries', 'images/honey.jpg'),
(32, 'Nestle Maggi(70 gm)', 10, 'Bakeries', 'images/maggi.jpg'),
(33, 'Butter(500 gm)', 232, 'Bakeries', 'images/butter.jpg'),
(34, 'Brown bread(200 gm)', 34, 'Bakeries', 'images/brownbread.jpg'),
(35, 'Real fruit juice(1 lt)', 100, 'Bakeries', 'images/juice.jpg'),
(36, 'Milk', 29, 'Bakeries', 'images/milk.jpg'),
(37, 'Parle-G', 10, 'Bakeries', 'images/parleg.jpg'),
(38, 'HideNSeek', 40, 'Bakeries', 'images/hideandseek.jpg'),
(39, 'Milano', 35, 'Bakeries', 'images/milano.jpg'),
(40, 'Nice', 20, 'Bakeries', 'images/nice.jpg'),
(41, 'Good Day', 15, 'Bakeries', 'images/goodday.jpg'),
(42, 'Happy Happy', 10, 'Bakeries', 'images/happyhappy.jpg'),
(43, 'Jim Jam', 25, 'Bakeries', 'images/jimjam.jpg'),
(44, 'Cake', 30, 'Bakeries', 'images/cake.jpg'),
(45, 'Swiss Roll', 35, 'Bakeries', 'images/swissroll.jpg'),
(46, 'Unibic', 25, 'Bakeries', 'images/unibic.jpg'),
(47, 'Cadbury Oreo', 30, 'Bakeries', 'images/oreo.jpg'),
(48, 'Sunfeast Dark Fantasy', 30, 'Bakeries', 'images/darkfantasy.jpg'),
(49, 'Eggs', 85, 'Bakeries', 'images/eggs.jpg'),
(50, 'Amul Cheese', 85, 'Bakeries', 'images/cheese.jpg'),
(51, 'Horlicks', 110, 'Bakeries', 'images/horlicks.jpg'),
(52, 'Rice(1 kg)', 185, 'Groceries', 'images/rice.jpg'),
(53, 'Wheat Flour(5 kg)', 155, 'Groceries', 'images/wheatflour.jpg'),
(54, 'Ghee', 450, 'Groceries', 'images/ghee.jpg'),
(55, 'Cooking Oil', 225, 'Groceries', 'images/cookingoil.jpg'),
(56, 'Oats(200 gm)', 240, 'Groceries', 'images/oats.jpg'),
(57, 'Coffee Mug', 100, 'Groceries', 'images/coffeemug.jpg'),
(58, 'Cashew(250 gm)', 430, 'Groceries', 'images/cashew.jpg'),
(59, 'Almonds(250 gm)', 219, 'Groceries', 'images/almonds.jpg'),
(60, 'Pistachios(100 gm)', 185, 'Groceries', 'images/pistachios.jpg'),
(61, 'Raisin(100 gm)', 130, 'Groceries', 'images/raisins.jpg'),
(62, 'Dates(1 kg)', 700, 'Groceries', 'images/dates.jpg'),
(63, 'Tomato(1kg)', 30, 'Vegetables and Fruits', 'images/tomato.jpg'),
(64, 'Potato(1kg)', 25, 'Vegetables and Fruits', 'images/potato.jpg'),
(65, 'Onions(1 kg)', 25, 'Vegetables and Fruits', 'images/onion.jpg'),
(66, 'Cauliflower(500 gm)', 30, 'Vegetables and Fruits', 'images/cauliflower.jpg'),
(67, 'Watermelon(1 kg)', 20, 'Vegetables and Fruits', 'images/watermelon.jpg'),
(68, 'Carrot(1 kg)', 40, 'Vegetables and Fruits', 'images/carrots.jpg'),
(69, 'Capsicum(500 gm)', 40, 'Vegetables and Fruits', 'images/capsicum.jpg'),
(70, 'Pumpkin(1kg)', 15, 'Vegetables and Fruits', 'images/pumpkin.jpg'),
(71, 'Sprouts(500 gm)', 50, 'Vegetables and Fruits', 'images/sprouts.jpg'),
(72, 'Frozen Peas', 120, 'Vegetables and Fruits', 'images/peas.jpg'),
(73, 'Spinach(1 kg)', 60, 'Vegetables and Fruits', 'images/spinach.jpg'),
(74, 'Cucumber(1 kg)', 30, 'Vegetables and Fruits', 'images/cucumber.jpg'),
(75, 'Lemon(100gm)', 10, 'Vegetables and Fruits', 'images/lemon.jpg'),
(76, 'Beetroot', 35, 'Vegetables and Fruits', 'images/beetroot.jpg'),
(77, 'Garlic(250gm)', 25, 'Vegetables and Fruits', 'images/garlic.jpg'),
(78, 'Mushroom(500gm)', 45, 'Vegetables and Fruits', 'images/mushroom.jpg'),
(79, 'Pencil', 4, 'Stationery', 'images/pencil.jpg'),
(80, 'Eraser', 2, 'Stationery', 'images/eraser.jpg'),
(81, 'Sharpner', 3, 'Stationery', 'images/sharpner.jpg'),
(82, 'Geometry box', 225, 'Stationery', 'images/geometrybox.jpg'),
(83, 'Ball pen', 10, 'Stationery', 'images/ballpen.jpg'),
(84, 'Gel pen', 15, 'Stationery', 'images/gelpen.jpg'),
(85, 'Scale', 20, 'Stationery', 'images/scale.jpg'),
(86, 'Laptop Bag', 1200, 'Stationery', 'images/laptopbag.jpg'),
(87, 'Pencilbox', 60, 'Stationery', 'images/pencilbox.jpg'),
(88, 'Glue', 25, 'Stationery', 'images/glue.jpg'),
(89, 'Crayons', 70, 'Stationery', 'images/crayons.jpg'),
(90, 'Sparkle pens', 100, 'Stationery', 'images/sparklepens.jpg'),
(91, 'Notebook (200 page)', 25, 'Stationery', 'images/notebook.jpg'),
(92, 'Drawing book', 85, 'Stationery', 'images/drawingbook.jpg'),
(93, 'Tape', 28, 'Stationery', 'images/tape.jpg'),
(94, 'Sketch pen', 120, 'Stationery', 'images/sketchpen.jpg'),
(95, 'Toothbrush', 25, 'Personal Care', 'images/toothbrush.jpg'),
(96, 'Toothpaste', 30, 'Personal Care', 'images/toothpaste.jpg'),
(97, 'Tongue cleaner', 15, 'Personal Care', 'images/tonguecleaner.jpg'),
(98, 'Earbuds', 40, 'Personal Care', 'images/earbuds.jpg'),
(99, 'Nailcutter', 50, 'Personal Care', 'images/nailcutter.jpg'),
(100, 'Comb', 100, 'Personal Care', 'images/comb.jpg'),
(101, 'Loofah', 50, 'Personal Care', 'images/loofah.jpg'),
(102, 'Toothpick', 20, 'Personal Care', 'images/toothpick.jpg'),
(103, 'Soap', 25, 'Personal Care', 'images/soap.jpg'),
(104, 'Face Wash', 105, 'Personal Care', 'images/facewash.jpg'),
(105, 'Body Wash', 135, 'Personal Care', 'images/bodywash.jpg'),
(106, 'Volini', 40, 'Personal Care', 'images/volini.jpg'),
(107, 'Moov', 35, 'Personal Care', 'images/moov.jpg'),
(108, 'Itchguard', 20, 'Personal Care', 'images/itchguard.jpg'),
(109, 'Wet Wipes', 50, 'Personal Care', 'images/wetwipes.jpg'),
(110, 'Powder', 125, 'Personal Care', 'images/powder.jpg'),
(111, 'Deodorant', 225, 'Personal Care', 'images/deodorant.jpg'),
(112, 'Hair oil', 155, 'Personal Care', 'images/hairoil.jpg'),
(113, 'Shaving Cream', 260, 'Personal Care', 'images/shavingcream.jpg'),
(114, 'Razor', 105, 'Personal Care', 'images/razor.jpg'),
(115, 'After Shave', 300, 'Personal Care', 'images/aftershave.jpg'),
(116, 'Moisturizer', 165, 'Personal Care', 'images/moisturiser.jpg'),
(117, 'Hair Dye', 300, 'Personal Care', 'images/hairdye.jpg'),
(118, 'Serum', 180, 'Personal Care', 'images/serum.jpg'),
(119, 'Face Cream', 250, 'Personal Care', 'images/facecream.jpg'),
(120, 'Bucket', 150, 'Home Care', 'images/bucket.jpg'),
(121, 'Mug', 50, 'Home Care', 'images/mug.jpg'),
(122, 'Plastic Bottle', 200, 'Home Care', 'images/plasticbottle.jpg'),
(123, 'Metal Bottle', 500, 'Home Care', 'images/metalbottle.jpg'),
(124, 'Lunchbox', 300, 'Home Care', 'images/lunchbox.jpg'),
(125, 'Surf Excel Liquid', 125, 'Home Care', 'images/surfexcelliquid.jpg'),
(126, 'Surf Excel Soap', 25, 'Home Care', 'images/surfexcelsoap.jpg'),
(127, 'Dishwash', 100, 'Home Care', 'images/dishwash.jpg'),
(128, 'Handwash', 220, 'Home Care', 'images/handwash.jpg'),
(129, 'Toilet Paper', 30, 'Home Care', 'images/toiletpaper.jpg'),
(130, 'Tissues', 20, 'Home Care', 'images/tissues.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
