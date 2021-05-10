-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2020 at 06:40 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `howtoorigami`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_instructions`
--

DROP TABLE IF EXISTS `best_instructions`;
CREATE TABLE IF NOT EXISTS `best_instructions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_instructions`
--

INSERT INTO `best_instructions` (`id`, `category_id`, `image`, `alt`, `description`, `item_id`) VALUES
(1, 2, 'images/kusudama-flower.jpg', 'kusudama', 'The Most mesmerising flower that anyone can see is the Kududama Flower. This flower is extremely rare to find so what are the possible ways of seeing one? Make this beautiful and spread its uniqueness around the house.', 11),
(2, 1, 'images/origami-fish.jpg', 'fish', 'The Fish is a pet we all want at least once in our lives But, what if we can let your dream of having a penguin come slightly true? Make a cute adorable Fish origami and have fun.', 3),
(3, 1, 'images/origami-jumping-frog.jpg', 'frog', 'Want to make a frog? Make a frog that jumps all the way so you can have as much fun as you want regardless of where you are and what time it is.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(223) NOT NULL,
  `info` varchar(2000) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `alt` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `info`, `image`, `alt`) VALUES
(1, 'Animals', 'Animals are found all around us in this world. <br>\r\nLearn to create the origami sculpture for that animal.', 'images/animals.jpg', 'Animals'),
(2, 'Flowers', 'Make Beautiful flowers to make your day or someone elses day a better day.', 'images/flowers.jpg', 'flowers'),
(3, 'Occasions & Packaging', 'Make a perfect packaging or make a beautiful origami for a special occasion.', 'images/card.jpg', 'Occasions '),
(4, 'Toys & Games', 'Make fun toys and games to have a great day!', 'images/game.jpg', 'Toys & Games');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'Amman'),
(2, 'Tafilah'),
(3, 'Aqaba'),
(4, 'Madaba'),
(5, 'As Salt'),
(6, 'Zarqa'),
(7, 'Irbid');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(223) NOT NULL,
  `email` varchar(223) NOT NULL,
  `city` varchar(50) NOT NULL,
  `subject` varchar(223) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `city`, `subject`, `message`) VALUES
(1, 'zayna amierh', 'zayna.amierh@htu.edu.jo', 'Amman', 'Test', 'testing this '),
(46, 'Kareem', 'kerim.kiswani@gmail.com', 'Aqaba', 'Test', 'testingggg'),
(5, 'Yasmein', 'yasmein@gmail.com', 'Aqaba', 'Contact', 'I would like to contact you '),
(7, 'Tester', 'testing@gmail.com', 'Madaba', 'Test', 'TESTING ALERT'),
(15, 'Test testing2', 'test@gmail.com', 'Aqaba', 'Test', 'TEST'),
(13, 'Zayna Amierh', 'zayna.amierh@gmail.com', 'As Salt', 'Origami', 'This is very cool origami'),
(12, 'Zayna', 'zayna.amierh2000@gmail.com', 'Amman', 'Contact', 'Trying the GET FEATURE'),
(18, 'zayna amierh', 'zayna@domain.com', 'Amman', 'Testing AJAX', 'Hello,\r\n\r\nTesting AJAX if working hopefully.'),
(21, 'test', 'zayna@domain.com', 'As Salt', 'Test', 'Testing'),
(44, 'Test', 'test@gmail.com', 'Amman', 'Testing Form', 'Hello,I am testing the form.Thank you');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(4000) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoryID` (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `image`, `alt`, `description`, `categoryID`) VALUES
(1, 'images/easy-origami-cat.jpg', 'cat', 'Make a friendly and cute Cat Origami using paper.', 1),
(2, 'images/origami-jumping-frog.jpg', 'jumping-frog', 'Make a cute jumping frog that will hop all the way!', 1),
(3, 'images/origami-fish.jpg', 'fish', 'Make an amazing swimming fish that you can put in water.', 1),
(10, 'images/origami-rose.jpg', 'rose', 'Make a beautiful and unique rose.', 2),
(11, 'images/kusudama-flower.jpg', 'kusudama', 'Make a cool kusudama flower.', 2),
(12, 'images/easy-origami-tulip.jpg', 'tulip', 'Make a simple amazing tulip flower.', 2),
(15, 'images/origami-envelope.jpg', 'envelope', 'Make a simple envelope to put things inside.', 3),
(17, 'images/heart.jpg', 'heart', 'Make a simple Heart for someone special!', 3),
(20, 'images/origami-box.jpg', 'box', 'Make a simple box to put things inside.', 3),
(21, 'images/paper-fortune-teller.jpg', 'fortune teller', 'Make a fun fortune teller to play with friends and family.', 4),
(23, 'images/origami-cup.jpg', 'cup', 'Make a paper cup to drink from.', 4),
(26, 'images/hat.jpg', 'hat', 'Make a fun hat to wear and show all your friends.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `item_detail`
--

DROP TABLE IF EXISTS `item_detail`;
CREATE TABLE IF NOT EXISTS `item_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `step_num` int(11) NOT NULL,
  `step_info` varchar(500) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoryID` (`categoryID`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_detail`
--

INSERT INTO `item_detail` (`id`, `item_id`, `image`, `step_num`, `step_info`, `categoryID`) VALUES
(1, 1, 'images/cat_step1.jpg', 1, 'Start with a square piece of origami paper. ', 1),
(2, 1, 'images/cat_step2.jpg', 2, 'Fold paper in half by folding the bottom corner to top corner.', 1),
(3, 1, 'images/cat_step3.jpg', 3, 'Fold in half again by folding left corner to right corner.', 1),
(4, 1, 'images/cat_step4.jpg', 4, 'Unfold the paper to see it as an equilateral triangle.', 1),
(5, 1, 'images/cat_step5.jpg', 5, 'Fold the left and right corners of the triangle.', 1),
(6, 1, 'images/cat_step6.jpg', 6, 'Fold a portion of the top corner down as shown in the picture.', 1),
(7, 1, 'images/cat_step7.jpg', 7, 'Turn the figure over to view the origami as an overall.', 1),
(8, 1, 'images/cat_step8.jpg', 8, 'Draw some eyes and whiskers! using markers and pens.', 1),
(9, 2, 'images/frog-step1.jpg', 1, 'Start with a square piece of origami paper', 1),
(10, 2, 'images/frog-step2.jpg', 2, 'Fold the paper in half by folding the left side over to the right.', 1),
(11, 2, 'images/frog-step3.jpg', 3, 'Fold the left corner to the right side, creating a sharp point on the top/right corner. unfold and do for the other side', 1),
(12, 2, 'images/frog-step4.jpg', 4, 'Fold back at where the two diagonal creases meet and unfold', 1),
(13, 2, 'images/frog-step5.jpg', 5, 'Using the creases as guides, form a triangle', 1),
(14, 2, 'images/frog-step6.jpg', 6, 'Fold the bottom rectangle in half toward the triangle.', 1),
(15, 2, 'images/frog-step7.jpg', 7, 'Take the two corners of the triangle and fold them up at an angle and Fold the two sides of the rectangle towards the center.', 1),
(16, 2, 'images/frog-step8.jpg', 8, 'Fold the rectangle in half toward the triangle. and Fold the left and right corners of the rectangle down and to meet at the center.', 1),
(17, 2, 'images/frog-step9.jpg', 9, 'Open the legs and spread out the insides of until it matches the outter legs and Fold the legs up and crease', 1),
(18, 2, 'images/frog-step10.jpg', 10, 'take the left and right corners of the legs and fold them down at a slant just like the \"arms\".', 1),
(19, 2, 'images/frog-step11.jpg', 11, 'Fold the frog legs up, creasing at the center \"X\" where the arms and legs meet. then Fold about half of the legs back to form a spring.', 1),
(20, 3, 'images/fish-step1.jpg', 1, 'Start with a square piece of origami paper and  Fold the paper in half by folding the left corner to the right corner. fold in half again from top to bottom', 1),
(21, 3, 'images/fish-step2.jpg', 2, 'Fold the left corner to the right edge then unfold.', 1),
(22, 3, 'images/fish-step3.jpg', 3, ' Fold the upper layer diagonally. Make sure to leave a portion of the right corner unfolded. and Turn the figure over vertically. The lower left corner of the triangle you touch the crease in the center of the flap. Make adjustments if necessary.', 1),
(23, 3, 'images/fish-step4.jpg', 4, 'Fold parts of the triangle down over the lower flap', 1),
(24, 3, 'images/fish-step5.jpg', 5, 'Fold the little triangle up, then unfold.', 1),
(25, 3, 'images/fish-step6.jpg', 6, 'Open up the figure and inside reverse fold the little triangle, then close the figure.', 1),
(26, 3, 'images/fish-step7.jpg', 7, 'To make the tail, Pull out the inside layer to reflect the fin above.', 1),
(27, 3, 'images/fish-step8.jpg', 8, 'Fold the top corner to the bottom edge and do the same to the other side.', 1),
(28, 3, 'images/fish-step9.jpg', 9, 'Unfold the front flap and inside reverse fold. Don\'t pull it all the back, but pull it about 1/3rd behind the corner of the above triangle.', 1),
(29, 3, 'images/fish-step10.jpg', 10, 'Inside reverse fold the other flap. and then take the top layer of the lower left triangle and fold it up, then unfold. ', 1),
(30, 3, 'images/fish-step11.jpg', 11, 'Open the top layer and tuck in (inside reverse fold) the previously folded triangle.', 1),
(31, 3, 'images/fish-step12.jpg', 12, 'Fold up and unfold the second lower left triangle also.', 1),
(32, 3, 'images/fish-step13.jpg', 13, 'Inside reverse fold that flap as well. and fold the two flaps on the other side', 1),
(33, 3, 'images/fish-step14.jpg', 14, 'Fold the fin down along the right edge of the flap and unfold. open the find and fold down. Repeat on other side', 1),
(34, 10, 'images/rose-step1.jpg', 1, 'Start with a piece of napkin. Regular paper also works, but won\'t look as nice. and roll up the napkin', 2),
(35, 10, 'images/rose-step2.jpg', 2, 'Begin forming the rose by pinching near the top. While pinching with one hand, Roll below the rose with your other hand.', 2),
(36, 10, 'images/rose-step3.jpg', 3, 'Lift the corner up to one side from the bottom of the napkin. and start rolling up from the bottom of the rose. keep a loose corner as the petal', 2),
(37, 10, 'images/rose-step4.jpg', 4, 'Twist the base of the petal so its shape can be more defined. Now it\'s ready to be given away.', 2),
(38, 11, 'images/kusudama-step1.jpg', 1, 'Start with a square piece of paper and fold it into a triangle.', 2),
(39, 11, 'images/kusudama-step2.jpg', 2, 'Fold the triangle into a diamond by folding the left and right corners to the top.', 2),
(40, 11, 'images/kusudama-step3.jpg', 3, 'Take the flaps you just folded and fold them outward to the left and right edges of the diamond.', 2),
(41, 11, 'images/kusudama-step4.jpg', 4, 'Unfold the left side and insert a finger into the pocket of that flap, then squash down. repeat on other side to have two squash sides.', 2),
(42, 11, 'images/kusudama-step5.jpg', 5, 'Fold the left and right corners down and Fold the left and right triangles in half.', 2),
(43, 11, 'images/kusudama-step6.jpg', 6, 'Without creasing the paper, bring the left and right sides to face each other and glue them together. You have now completed one petal!', 2),
(44, 11, 'images/kusudama-step7.jpg', 7, 'Make four more of these and glue them together.', 2),
(45, 12, 'images/tulip-step1.jpg', 1, 'Use a square piece of paper and fold the paper into a triangle', 2),
(46, 12, 'images/tulip-step2.jpg', 2, 'Fold in half again by folding the left corner to the right corner. and then unfold.', 2),
(47, 12, 'images/tulip-step3.jpg', 3, 'Take the right corner and make an angled fold diagonally upwards like you see in the picture. do the same to the other side.', 2),
(48, 12, 'images/tulip-step4.jpg', 4, 'Fold the bottom corner backwards behind the figure.', 2),
(49, 12, 'images/tulip-step5.jpg', 5, 'Take another paper and fold the paper in half from left to right. Unfold afterwards', 2),
(50, 12, 'images/tulip-step6.jpg', 6, 'Grab the left and right corners and fold it to the center, making sure the left and right edges meet at the center crease.', 2),
(51, 12, 'images/tulip-step7.jpg', 7, 'Fold the figure in half by folding left to right. Take a small portion of the bottom and fold it up, aligning the right edges.', 2),
(52, 12, 'images/tulip-step8.jpg', 8, 'Tape the tulip to the top of the stem.', 2),
(53, 15, 'images/envelope-step1.jpg', 1, 'Use a square paper and fold the bottom half to the top half to make a triangle', 3),
(54, 15, 'images/envelope-step2.jpg', 2, 'Fold the top corner of the triangle to the bottom edge.', 3),
(55, 15, 'images/envelope-step3.jpg', 3, 'Fold in 1/3rd of the right side of the triangle. Repeat left side', 3),
(56, 15, 'images/envelope-step4.jpg', 4, 'Fold that flap\'s corner back out to the edge.', 3),
(57, 15, 'images/envelope-step5.jpg', 5, 'Open the little flap and squash it to form a diamond pocket.', 3),
(58, 15, 'images/envelope-step6.jpg', 6, 'Fold down the top. Tuck the tip into the diamond shaped pocket.', 3),
(59, 17, 'images/heart-step1.jpg', 1, 'Use a square piece of paper, Fold the paper in half by folding the top corner to the bottom corner, then unfold.', 3),
(60, 17, 'images/heart-step2.jpg', 2, 'Fold the paper in half by folding the top corner to the bottom corner, then unfold.', 3),
(61, 17, 'images/heart-step3.jpg', 3, 'Fold the top corner to the center. and then fold the bottom corner to the top edge.', 3),
(62, 17, 'images/heart-step4.jpg', 4, 'Fold the bottom left and right edges to the center crease.', 3),
(63, 17, 'images/heart-step5.jpg', 5, 'Fold the top and side corners back', 3),
(64, 20, 'images/box-step1.jpg', 1, 'Use a regular piece of paper and fold the bottom half to the top, making sure the corners touch each other.', 3),
(65, 20, 'images/box-step2.jpg', 2, 'Once again, fold the bottom half to the top. After that,  Fold the bottom left and right corners to the top.', 3),
(66, 20, 'images/box-step3.jpg', 3, 'Fold the left flap to the right along its vertical edge. do the same to the right flap', 3),
(67, 20, 'images/box-step4.jpg', 4, 'Unfold both flaps and turn the paper over.', 3),
(68, 20, 'images/box-step5.jpg', 5, 'Fold in both flaps on this side as well, like steps 3 and 4. and then unfold flaps. turn the paper over.', 3),
(69, 20, 'images/box-step6.jpg', 6, 'Unfold the left and right triangle flaps. unfold the top layer down', 3),
(70, 20, 'images/box-step7.jpg', 7, 'Fold up the bottom left and right corner to the creases.', 3),
(71, 20, 'images/box-step8.jpg', 8, 'Fold down only the top singler layer of the left and right corners.', 3),
(72, 20, 'images/box-step9.jpg', 9, 'Fold down the single layer of the top flap. Pull out the bottom pocket while creasing the left and right flaps into the shape of a box.', 3),
(73, 20, 'images/box-step10.jpg', 10, 'Bend up and bring in the opening of the box. Pinch both corners to make it easier. Then fold the corners to the side of the box.', 3),
(74, 20, 'images/box-step11.jpg', 11, 'Tuck the corners into the side pockets of the box. and there you have the box.', 3),
(75, 21, 'images/fortune-step1.jpg', 1, 'Use a square piece of paper, fold the paper in half by folding the bottom left corner to the upper right corner, then unfold.', 4),
(76, 21, 'images/fortune-step2.jpg', 2, 'Fold the paper in half again by folding the bottom right corner to the top left corner, then unfold again.', 4),
(77, 21, 'images/fortune-step3.jpg', 3, 'Fold the paper in half by folding the bottom edge to the top edge, then unfold.', 4),
(78, 21, 'images/fortune-step4.jpg', 4, 'Fold the paper in half again by folding the left edge to the right edge and unfold again.', 4),
(79, 21, 'images/fortune-step5.jpg', 5, 'Fold all four corners to the center. turn the paper over', 4),
(80, 21, 'images/fortune-step6.jpg', 6, 'Fold all four corners to the center.', 4),
(81, 21, 'images/fortune-step7.jpg', 7, 'Color or label all the triangles with different colors. write a fortune underneath each colour and close the flaps.', 4),
(82, 21, 'images/fortune-step8.jpg', 8, 'Fold the bottom half to the top. Tuck your thumbs and forefingers in the four openings below.', 4),
(83, 26, 'images/hat-step1.jpg', 1, 'Use a rectangular paper.Fold the paper in half lengthwise, then unfold.', 4),
(84, 26, 'images/hat-step2.jpg', 2, 'Fold the paper in half again from top to the bottom.', 4),
(85, 26, 'images/hat-step3.jpg', 3, 'Fold the left and right corners to the center to form a triangle.', 4),
(86, 26, 'images/hat-step4.jpg', 4, 'Fold up the bottom flap along the base of the triangle. turn the paper over and do the same step. Hat is ready.', 4),
(87, 23, 'images/cup-step1.jpg', 1, 'Start with a square piece of origami paper. Fold paper in half by folding the bottom corner to top corner.', 4),
(88, 23, 'images/cup-step2.jpg', 2, 'Fold the left edge of the triangle to the bottom edge, then unfold. We only need the crease line.', 4),
(89, 23, 'images/cup-step3.jpg', 3, 'Fold the left corner of the triangle to the end of the crease line on the right.', 4),
(90, 23, 'images/cup-step4.jpg', 4, 'Fold the right corner to the left corner.', 4),
(91, 23, 'images/cup-step5.jpg', 5, 'Fold the top flap down and turn the paper over. and fold the other flap the same way', 4),
(92, 23, 'images/cup-step6.jpg', 6, 'Open up the pocket. and there you have it. a cool cup to drink from', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'zayna.amierh', 'zayna123', 'zayna.amierh@htu.edu.jo'),
(16, 'zayna23', 'zayna23', 'zoo@gmail.com'),
(14, 'omarr700', 'omar2000', 'omar@gmail.com'),
(18, 'yasmein.amierh', 'yasmein1998', 'yasmein@gmail.com'),
(26, 'enas.ibraiwesh', 'enas', 'enas@gmail.com'),
(73, 'mira.abdo', 'mira123', 'mira@gmail.com'),
(74, 'kareem.mohsen', 'koko123', 'kerim.kiswani@gmail.com'),
(66, 'lina.badawi', 'lina123', 'lina@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
