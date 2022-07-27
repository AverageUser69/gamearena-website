-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 12:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arena`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `gameid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `gameid`, `userid`, `username`, `date`, `comment`) VALUES
(18, 9, 11, 'user', '2006-07-22', 'hwlll'),
(19, 9, 11, 'user', '2006-07-22', 'jjjjjjjj'),
(20, 2, 10, 'admin', '2022-07-06', 'jjfjfjfjf'),
(21, 12, 2, 'wrestleking', '2022-07-26', 'Game is meh, look at this instead.\r\n⠄⠄⣿⣿⣿⣿⠘⡿⢛⣿⣿⣿⣿⣿⣧⢻⣿⣿⠃⠸⣿⣿⣿⠄⠄⠄⠄⠄\r\n⠄⠄⣿⣿⣿⣿⢀⠼⣛⣛⣭⢭⣟⣛⣛⣛⠿⠿⢆⡠⢿⣿⣿⠄⠄⠄⠄⠄\r\n⠄⠄⠸⣿⣿⢣⢶⣟⣿⣖⣿⣷⣻⣮⡿⣽⣿⣻⣖⣶⣤⣭⡉⠄⠄⠄⠄⠄\r\n⠄⠄⠄⢹⠣⣛⣣⣭⣭⣭⣁⡛⠻⢽⣿⣿⣿⣿⢻⣿⣿⣿⣽⡧⡄⠄⠄⠄\r\n⠄⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣶⣌⡛⢿⣽⢘⣿⣷⣿⡻⠏⣛⣀⠄⠄\r\n⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠙⡅⣿⠚⣡⣴⣿⣿⣿⡆⠄\r\n⠄⠄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠄⣱⣾⣿⣿⣿⣿⣿⣿⠄\r\n⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄\r\n⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄\r\n⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄\r\n⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄'),
(22, 13, 2, 'wrestleking', '2022-07-26', '░░▄███▄███▄\r\n░░█████████\r\n░░▒▀█████▀░\r\n░░▒░░▀█▀\r\n░░▒░░█░\r\n░░▒░█\r\n░░░█\r\n░░█░░░░███████\r\n░██░░░██▓▓███▓██▒\r\n██░░░█▓▓▓▓▓▓▓█▓████\r\n██░░██▓▓▓(◐)▓█▓█▓█\r\n███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█\r\n▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█\r\n░▀██▀░░█▓▓▓▓▓▓▓▓▓▓▓▓▓█\r\n░░░░▒░░░█▓▓▓▓▓█▓▓▓▓▓▓█\r\n░░░░▒░░░█▓▓▓▓█▓█▓▓▓▓▓█\r\n░▒░░▒░░░█▓▓▓█▓▓▓█▓▓▓▓█\r\n░▒░░▒░░░█▓▓▓█░░░█▓▓▓█\r\n░▒░░▒░░██▓██░░░██▓▓██\r\n████████████████████████\r\n█▄─▄███─▄▄─█▄─█─▄█▄─▄▄─█\r\n██─██▀█─██─██─█─███─▄█▀█\r\n▀▄▄▄▄▄▀▄▄▄▄▀▀▄▄▄▀▀▄▄▄▄▄▀\r\n'),
(23, 14, 2, 'wrestleking', '2022-07-26', '⠀⠀⠀⢀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⠀⠀⢺⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⠀⣠⡗⠉⠀⠀⠀⠀⠀⠀⠀⣠⣠⣤⠀⠀⠀\r\n⠀⣞⠉⢁⡀⠹⣄⠀⠀⠀⠀⢠⣿⠀⢀⠃⠀⠀\r\n⠀⣻⡇⠸⡇⢸⣎⠳⠤⠤⢤⠴⠾⠏⢑⣒⣒⣒\r\n⠀⢹⢻⡄⢿⣌⠈⠉⠈⣽⠏⠀⠀⢺⢱⣤⣠⣢\r\n⢀⠞⠀⠙⠳⣝⢦⣴⣻⡅⢀⣀⠖⠋⠀⠀⠀⠀\r\n⢸⡀⠀⠀⢰⡟⠻⠦⣽⡷⠋⠁⠀⠀⠀⠀⠀⠀\r\n⠀⠙⣄⠀⠈⣷⡀⠀⢯⠀⠀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⠀⠹⣆⠀⢸⣷⡄⠘⡄⠀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⠀⣠⠟⢀⡾⠁⣻⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⢰⡇⢀⡾⠁⠀⠉⢸⠀⠀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⢸⢁⣻⣓⣲⢦⣻⣮⣀⣀⠀⠀⠀⠀⠀⠀⠀\r\n⠀⢯⣘⠣⢄⡀⠰⢧⣽⣻⣯⠀⠀⠀⠀⠀⠀⠀\r\n⠀⠀⠈⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀'),
(24, 15, 2, 'wrestleking', '2022-07-26', '🩸🩸🩸🩸'),
(25, 13, 3, 'acepro', '2022-07-26', '⡴⠑⡄⠀⠀⠀⠀⠀⠀⠀ ⣀⣀⣤⣤⣤⣀⡀\r\n⠸⡇⠀⠿⡀⠀⠀⠀⣀⡴⢿⣿⣿⣿⣿⣿⣿⣿⣷⣦⡀\r\n⠀⠀⠀⠀⠑⢄⣠⠾⠁⣀⣄⡈⠙⣿⣿⣿⣿⣿⣿⣿⣿⣆\r\n⠀⠀⠀⠀⢀⡀⠁⠀⠀⠈⠙⠛⠂⠈⣿⣿⣿⣿⣿⠿⡿⢿⣆\r\n⠀⠀⠀⢀⡾⣁⣀⠀⠴⠂⠙⣗⡀⠀⢻⣿⣿⠭⢤⣴⣦⣤⣹⠀⠀⠀⢀⢴⣶⣆\r\n⠀⠀⢀⣾⣿⣿⣿⣷⣮⣽⣾⣿⣥⣴⣿⣿⡿⢂⠔⢚⡿⢿⣿⣦⣴⣾⠸⣼⡿\r\n⠀⢀⡞⠁⠙⠻⠿⠟⠉⠀⠛⢹⣿⣿⣿⣿⣿⣌⢤⣼⣿⣾⣿⡟⠉\r\n⠀⣾⣷⣶⠇⠀⠀⣤⣄⣀⡀⠈⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇\r\n⠀⠉⠈⠉⠀⠀⢦⡈⢻⣿⣿⣿⣶⣶⣶⣶⣤⣽⡹⣿⣿⣿⣿⡇\r\n⠀⠀⠀⠀⠀⠀⠀⠉⠲⣽⡻⢿⣿⣿⣿⣿⣿⣿⣷⣜⣿⣿⣿⡇\r\n⠀⠀ ⠀⠀⠀⠀⠀⢸⣿⣿⣷⣶⣮⣭⣽⣿⣿⣿⣿⣿⣿⣿⠇\r\n⠀⠀⠀⠀⠀⠀⣀⣀⣈⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇\r\n⠀⠀⠀⠀⠀⠀⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿'),
(26, 14, 3, 'acepro', '2022-07-26', 'My girlfriend and I enjoy this game together. We love the co operative clean fun and challenges She doesnt have a lot of mobility because of a huge weight so this is a way for us to get out - Thank you'),
(27, 15, 3, 'acepro', '2022-07-26', 'jesus lord help me i am dying playing this game cuz i am not eating anything because of this game my father got cancer.'),
(28, 16, 3, 'acepro', '2022-07-26', 'delete this shit. my brother is getting step sis because of this game...... oh wait, i am also getting step sis. yehhhhh'),
(29, 14, 4, 'thestargamer', '2022-07-26', 'this game is the best game ever i have played in my entire life. i want to play this game after my death. oh lord jesus please let me play this game when i am in heaven.'),
(30, 15, 4, 'thestargamer', '2022-07-26', 'Very nice and sexy thumbnail you have posted. Because of this game i have 4 child cuz whenever i see this picture i became horny and me and my wife will have to sex.'),
(31, 16, 4, 'thestargamer', '2022-07-26', 'very violence game and i dont know how to play violin. closer right?'),
(32, 17, 4, 'thestargamer', '2022-07-26', 'What an useless game this is, its not even 3D.'),
(33, 15, 5, 'thegamingbeast', '2022-07-26', 'You are right my brother, because of this game i can make a team of football where players are only my children. curse this game, my life is ruined'),
(34, 16, 5, 'thegamingbeast', '2022-07-26', 'Games have so much freedom. you can go anywhere you want\r\n\r\nRead more https://www.yourfates.com/gaming-quotes-and-gaming-status-for-gamers/'),
(35, 17, 5, 'thegamingbeast', '2022-07-26', 'I don’t need to get a life, I am a gamer, I have lots of lives'),
(36, 20, 5, 'thegamingbeast', '2022-07-26', 'Break a trillion dead souls and ask the ghost if honor still matters'),
(37, 23, 5, 'thegamingbeast', '2022-07-26', 'Video games foster the mindset that allows creativity to grow'),
(38, 15, 8, 'theacer', '2022-07-26', 'theacer'),
(39, 26, 8, 'theacer', '2022-07-26', '前所未有的开放世界，这是一款超级酷炫的游戏，游戏设计的很宏大，很期待续作，希望制作者再接再厉！'),
(40, 13, 8, 'theacer', '2022-07-26', 'After a few hours playing i just felt i had to type down something about the game. First off the game looks realy nice, no way i could say it was a early access game if i didnt know it alrdy. No major game breaking buggs so far, some bigger dinos stuck between trees but so far i just seen a handfull of them.'),
(41, 18, 8, 'theacer', '2022-07-26', 'woh meri machli ka kya hua ? Babu Rao: Woh mein mast tel mein fry karke, woh mein kha gaya!'),
(42, 16, 8, 'theacer', '2022-07-26', 'Baburao: Jyada Much Much Kiya To raat me Ramlal Ke Saath Sona Padhega.\r\n\r\nShyam: Yeh Ramlal Kon Hai Re\r\nBaburao: Gali Ka Kutta'),
(43, 19, 8, 'theacer', '2022-07-26', 'Yeh baburao ka style hai'),
(44, 17, 8, 'theacer', '2022-07-26', 'Agar subah subah sandaas jana hai toh singer banna padega…');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `typeone` varchar(40) NOT NULL,
  `typetwo` varchar(40) NOT NULL,
  `publisher` varchar(40) NOT NULL,
  `rating` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `dimension` varchar(20) NOT NULL,
  `price` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `typeone`, `typetwo`, `publisher`, `rating`, `description`, `dimension`, `price`, `image`) VALUES
(12, 'Apex Legends', 'Multiplayer', 'Battle Royal', ' Electronic Arts', '4000', 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', '3D', 'Free', '2616_gamearena.jpg'),
(13, 'ARK: Survival Evolved', 'Survival', 'Open World', 'Studio Wildcard', '3500', 'Stranded on the shores of a mysterious island, you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land, and encounter other players to survive, dominate... and escape!', '3D', '10.49', '53013_gamearena.jpg'),
(14, 'Assassins Creed', 'RPG', 'Single Player', 'Ubisoft Quebec', '7000', 'Choose your fate in Assassins Creed Odyssey. From outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece.', '3D', '43.99', '62872_gamearena.jpg'),
(15, 'Control Ultimate Edition', 'Action', 'Adventure', '505 Games', '5500', 'Winner of over 80 awards, Control is a visually stunning third-person action-adventure that will keep you on the edge of your seat.', '3d', '39.99', '43725_gamearena.jpg'),
(16, 'Counter Strike: Global Offensive', 'Multiplayer', 'FPS', 'Valve', '8000', 'Counter-Strike: Global Offensive (CS: GO) expands upon the team based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content.', '3D', 'Free', '21996_gamearena.jpg'),
(17, 'Dota 2', 'PvP', 'MOVA', 'Valve', '3000', 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if its their 10th hour of play or 1,000th, theres always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.', '3D', 'Free', '86494_gamearena.jpg'),
(18, 'FINAL FANTASY XIV Online', 'RPG', 'Fantasy', 'Square Enix', '4775', 'Take part in an epic and ever changing FINAL FANTASY as you adventure and explore with friends from around the world.', '3D', '8.19', '58496_gamearena.jpg'),
(19, 'Grand Theft Auto V', 'Open World', 'Action', 'Rockstar Games', '10000', 'Grand Theft Auto V for PC offers players the option to explore the award winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.', '3D', '27.48', '99006_gamearena.jpg'),
(20, 'Horizon Zero Dawn', 'Open World', 'Adventure', 'PlayStation PC LLC', '4040', 'Experience Aloy’s legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!', '3D', '49.99', '80642_gamearena.jpg'),
(21, 'No Mans Sky', 'Open World', 'Space', 'Hello Games', '6060', 'No Mans Sky is a game about exploration and survival in an infinite procedurally generated universe.', '3D', '59.99', '50153_gamearena.jpg'),
(22, 'ARK: Survival Evolved', 'Survival', 'Open World', 'Studio Wildcard', '3500', 'Stranded on the shores of a mysterious island, you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land, and encounter other players to survive, dominate... and escape!', '3D', '10.49', '20835_gamearena.jpg'),
(23, 'Assassins Creed', 'RPG', 'Single Player', 'Ubisoft Quebec', '7000', 'Choose your fate in Assassins Creed Odyssey. From outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece.', '3D', '43.99', '69285_gamearena.jpg'),
(24, 'Control Ultimate Edition', 'Action', 'Adventure', '505 Games', '5500', 'Winner of over 80 awards, Control is a visually stunning third-person action-adventure that will keep you on the edge of your seat.', '3d', '39.99', '93453_gamearena.jpg'),
(25, 'Counter Strike: Global Offensive', 'Multiplayer', 'FPS', 'Valve', '8000', 'Counter-Strike: Global Offensive (CS: GO) expands upon the team based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content.', '3D', 'Free', '22368_gamearena.jpg'),
(26, 'Dota 2', 'PvP', 'MOVA', 'Valve', '3000', 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if its their 10th hour of play or 1,000th, theres always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.', '3D', 'Free', '17425_gamearena.jpg'),
(27, 'FINAL FANTASY XIV Online', 'RPG', 'Fantasy', 'Square Enix', '4775', 'Take part in an epic and ever changing FINAL FANTASY as you adventure and explore with friends from around the world.', '3D', '8.19', '89041_gamearena.jpg'),
(28, 'Grand Theft Auto V', 'Open World', 'Action', 'Rockstar Games', '10000', 'Grand Theft Auto V for PC offers players the option to explore the award winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.', '3D', '27.48', '19435_gamearena.jpg'),
(29, 'Horizon Zero Dawn', 'Open World', 'Adventure', 'PlayStation PC LLC', '4040', 'Experience Aloy’s legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!', '3D', '49.99', '12130_gamearena.jpg'),
(30, 'No Mans Sky', 'Open World', 'Space', 'Hello Games', '6060', 'No Mans Sky is a game about exploration and survival in an infinite procedurally generated universe.', '3D', '59.99', '46433_gamearena.jpg'),
(31, 'Apex Legends', 'Multiplayer', 'Battle Royal', 'Electronic Arts', '4000', 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', '3D', 'Free', '68419_gamearena.jpg'),
(32, 'ARK: Survival Evolved', 'Survival', 'Open World', 'Studio Wildcard', '3500', 'Stranded on the shores of a mysterious island, you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land, and encounter other players to survive, dominate... and escape!', '3D', '10.49', '23904_gamearena.jpg'),
(33, 'Assassins Creed', 'RPG', 'Single Player', 'Ubisoft Quebec', '7000', 'Choose your fate in Assassins Creed Odyssey. From outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece.', '3D', '43.99', '62034_gamearena.jpg'),
(34, 'Control Ultimate Edition', 'Action', 'Adventure', '505 Games', '5500', 'Winner of over 80 awards, Control is a visually stunning third-person action-adventure that will keep you on the edge of your seat.', '3d', '39.99', '69618_gamearena.jpg'),
(35, 'Counter Strike: Global Offensive', 'Multiplayer', 'FPS', 'Valve', '8000', 'Counter-Strike: Global Offensive (CS: GO) expands upon the team based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content.', '3D', 'Free', '99804_gamearena.jpg'),
(36, 'Dota 2', 'PvP', 'MOVA', 'Valve', '3000', 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if its their 10th hour of play or 1,000th, theres always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.', '3D', 'Free', '45280_gamearena.jpg'),
(37, 'FINAL FANTASY XIV Online', 'RPG', 'Fantasy', 'Square Enix', '4775', 'Take part in an epic and ever changing FINAL FANTASY as you adventure and explore with friends from around the world.', '3D', '8.19', '10166_gamearena.jpg'),
(38, 'Grand Theft Auto V', 'Open World', 'Action', 'Rockstar Games', '10000', 'Grand Theft Auto V for PC offers players the option to explore the award winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.', '3D', '27.48', '77562_gamearena.jpg'),
(39, 'Horizon Zero Dawn', 'Open World', 'Adventure', 'PlayStation PC LLC', '4040', 'Experience Aloy’s legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!', '3D', '49.99', '97094_gamearena.jpg'),
(40, 'No Mans Sky', 'Open World', 'Space', 'Hello Games', '6060', 'No Mans Sky is a game about exploration and survival in an infinite procedurally generated universe.', '3D', '59.99', '83297_gamearena.jpg'),
(41, 'Apex Legends', 'Multiplayer', 'Battle Royal', 'Electronic Arts', '4000', 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', '3D', 'Free', '22194_gamearena.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phonenumber` varchar(14) NOT NULL DEFAULT '+977',
  `usertype` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `password`, `email`, `phonenumber`, `usertype`) VALUES
(1, 'averageuser', '95b451c8e47e5199353bc1083edb13cc', 'averageuser@gmail.com', '+977', 'admin'),
(2, 'wrestleking', '705b4292e6a5a4181ed9b506dc300b2d', 'wrestleking@gmail.com', '+977', 'user'),
(3, 'acepro', '6dfc040ab5cde188fec1bbc4ff44780f', 'acepro@gmail.com', '+977', 'user'),
(4, 'thestargamer', '3c758d41ca74d0afb508c2e16541a413', 'thestargamer@gmail.com', '+977', 'user'),
(5, 'thegamingbeast', 'aa569b20ef225face6544d81a8081959', 'thegamingbeast@gmail.com', '+977', 'user'),
(6, 'thegamekiller', '63706bce6fc4fead7a23df4fcbb74baf', 'thegamekiller@gmail.com', '+977', 'user'),
(7, 'deathwish', '2bd3be910cd6ac2715a608799e611ca9', 'deathwish@gmail.com', '+977', 'admin'),
(8, 'theacer', '54da443fd88478075b1d2e84742c53fa', 'theacer@gmail.com', '+977', 'user'),
(9, 'noobmaster69', '419a09b43733d43bb9aae8a2bfa8391f', 'noobmaster69@gmail.com', '+977', 'admin'),
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '+977', 'admin'),
(11, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', '+977', 'user'),
(15, 'rohan123', 'c916d142f0dc7f9389653a164f1d4e9d', 'rohanhero@gmail.com', '+977 982211221', 'user'),
(22, 'user', '7878a97fc8510d516b4f632aa70f4dee', 'aarya@gmail.com', '+977', 'user'),
(23, 'aarya', '7878a97fc8510d516b4f632aa70f4dee', 'aarya@gmail.com', '+977', 'user'),
(24, 'knitin', '5b4a53e9567379b13871273c56f24cc2', 'knitin@gmail.com', '+977 982121214', 'user'),
(25, 'NeerZayn', '95df309b224b3e694f2eee7bae124daf', 'neerpopat@gmail.com', '+977', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
