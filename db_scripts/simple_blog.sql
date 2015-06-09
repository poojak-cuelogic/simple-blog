-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2015 at 05:13 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) NOT NULL,
  `commentUserName` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `postId`, `commentUserName`, `comment`, `date`) VALUES
(1, 1, 'Guest', 'A guest Comment', '2015-06-09 11:25:59'),
(2, 1, 'Martin', 'Martin''s Comment', '2015-06-09 11:36:32'),
(3, 2, 'James', 'His comment', '2015-06-09 11:32:16'),
(4, 2, 'Marie', 'Marie''s Comment', '2015-06-09 11:32:46'),
(5, 1, 'Shubham', 'Shubham''s view', '2015-06-09 11:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) NOT NULL,
  `postBody` text NOT NULL,
  `authorId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postTitle`, `postBody`, `authorId`, `date`) VALUES
(1, 'My First Post', ' Curabitur at nulla non tortor congue tempor. Duis magna justo, bibendum ut ipsum in, sodales dapibus elit. Sed sem erat, mattis sit amet vulputate ut, finibus sit amet felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis feugiat est sed elit facilisis auctor. Donec consectetur suscipit dui ac laoreet.\r\n\r\nMaecenas ut luctus ligula. Etiam eget nisl felis. Cras quis diam eu tellus faucibus sodales. Duis eu condimentum elit. Nunc consectetur ante vitae urna accumsan, at sodales dui dignissim. Nulla sit amet tellus ex. Nam vitae sollicitudin dui. Donec tristique tincidunt consectetur. Suspendisse scelerisque dui at odio imperdiet, eget lacinia risus consequat. Etiam finibus maximus convallis. Phasellus eget dolor a nulla vehicula vulputate. Curabitur semper mi justo, vel dignissim sem dictum vitae. Vestibulum quis blandit velit. Phasellus hendrerit et est non ornare. Phasellus nunc risus, imperdiet sed tortor nec, porta ullamcorper ante. Pellentesque bibendum ante in turpis tincidunt, ut viverra lorem posuere.\r\n\r\nPellentesque accumsan consectetur pretium. Pellentesque eleifend et tortor mollis fermentum. In dictum massa vitae felis placerat accumsan. Praesent vitae eleifend felis. Aliquam erat volutpat. Nunc non facilisis turpis. Maecenas condimentum leo ac finibus ullamcorper. Nulla leo purus, pretium a enim fermentum, dictum porta quam. Sed nec felis quis urna tristique suscipit eget eget odio. Fusce id posuere magna. Mauris lacinia risus sit amet pharetra venenatis. Sed id orci elit. Pellentesque rutrum urna id dolor tempus, ac pharetra neque finibus. Aliquam risus turpis, mattis vel condimentum a, rhoncus eget erat. Fusce cursus volutpat libero, non dignissim nunc rutrum et. ', 1, '2015-06-09 10:36:02'),
(2, 'My Second Post', ' Nunc quis egestas elit, eu luctus nulla. Sed dapibus placerat tortor eget tincidunt. Etiam rhoncus gravida ornare. Phasellus iaculis nec felis in porttitor. Curabitur sed convallis metus. Etiam posuere nec urna quis vestibulum. Aliquam erat volutpat.\r\n\r\nNunc non magna elementum, fringilla est a, varius odio. Integer iaculis et mi ac viverra. Suspendisse potenti. Suspendisse sit amet lacus vehicula, imperdiet nunc nec, rhoncus justo. Curabitur at nunc sem. Mauris sapien quam, laoreet quis sapien at, vulputate maximus nunc. Praesent non mauris ac nulla elementum elementum non ut lectus. Etiam vestibulum id leo eu ultricies.\r\n\r\nUt efficitur facilisis faucibus. Sed quam odio, auctor et aliquam quis, lobortis eu metus. Sed placerat nunc non turpis interdum luctus. Nulla vitae fermentum lorem. Quisque fringilla, ligula vel tincidunt gravida, neque elit lacinia purus, tincidunt vestibulum magna nisl eget orci. Morbi sed blandit arcu. Maecenas scelerisque, nulla eu sollicitudin efficitur, neque justo lobortis dolor, sed fermentum ante sapien sed urna. Donec nec ipsum eu urna venenatis pellentesque at ut risus. Aliquam dictum orci nisi, sit amet interdum nisi volutpat at.\r\n\r\nFusce sollicitudin, massa dictum aliquam aliquet, turpis felis rutrum metus, a convallis diam nisl fermentum est. Vivamus vitae augue a libero sodales sollicitudin sed in nulla. Curabitur dui nunc, molestie eu condimentum sit amet, dignissim vel nibh. Curabitur quam sapien, suscipit ac lorem sit amet, vestibulum posuere nulla. Fusce mi lorem, tincidunt sed lectus in, placerat ornare ex. Duis nulla diam, congue sagittis massa ut, efficitur pulvinar ante. Fusce vehicula, ante feugiat tincidunt egestas, felis eros aliquam nibh, sed egestas ante erat eget dolor. Praesent suscipit velit at posuere malesuada. Nunc lacinia, urna sit amet volutpat accumsan, dui massa varius sapien, vel finibus orci justo in lacus. Praesent eleifend maximus placerat. Nulla ornare nec ante porttitor sollicitudin. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; ', 1, '2015-06-09 10:36:47'),
(3, 'Another Post', ' Suspendisse ligula nisi, sollicitudin in dui id, hendrerit fermentum nisl. Fusce rutrum quam ac tempus pellentesque. Mauris vel laoreet purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam non fermentum leo. Curabitur nibh enim, varius non eleifend sed, dignissim quis diam. Vestibulum sed orci quis augue ornare ullamcorper. Proin pellentesque neque sit amet lectus elementum, sed pulvinar elit interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nInteger vitae aliquam erat. Vivamus quis justo convallis, placerat felis vel, ornare est. Aliquam non ex in quam porttitor luctus a non tortor. Suspendisse potenti. Nullam at nunc non ligula placerat dapibus ut ac augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla lorem turpis, rhoncus sed ex ac, ornare pulvinar enim. Nulla egestas venenatis mollis. ', 1, '2015-06-09 10:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`) VALUES
(1, 'Pooja K', 'pooja@cuelogic.com'),
(2, 'Mary George', 'mary@cuelogic.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
