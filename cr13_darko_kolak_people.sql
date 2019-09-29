-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Sep 2019 um 14:52
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_darko_kolak_people`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `friendship`
--

CREATE TABLE `friendship` (
  `friendshipId` int(10) UNSIGNED NOT NULL,
  `user1` int(10) UNSIGNED DEFAULT NULL,
  `user2` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `friendship`
--

INSERT INTO `friendship` (`friendshipId`, `user1`, `user2`) VALUES
(1, 1, 2),
(2, 3, 2),
(5, 3, 1),
(6, 4, 1),
(7, 4, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `request`
--

CREATE TABLE `request` (
  `requestId` int(10) UNSIGNED NOT NULL,
  `requestfrom` int(10) UNSIGNED DEFAULT NULL,
  `requestto` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `usersId` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `lastname` varchar(55) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `userrole` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `job` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`usersId`, `name`, `lastname`, `birthdate`, `email`, `pass`, `userrole`, `image`, `job`) VALUES
(1, 'Darko', 'Kolak', '2019-01-21', 'darko@darko.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 0, 'http://iliuzionist11.weebly.com/uploads/7/8/6/9/786922/230035451.jpg', 'Junior Developer'),
(2, 'Goran', 'Stevic', '2019-09-03', 'gogi@codefactory.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 0, 'https://static01.heute.at/images/content/5/7/5/57508094/6/topelement.jpg', 'Full Stack Developer'),
(3, 'Christoph', 'Aigner', '2019-09-18', 'aigner@ch.at', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 0, 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/10592816_10202476393831685_2135551322009224213_n.jpg?_nc_cat=108&_nc_oc=AQm3c7TZLk0zfOUa6QOwJolENBOLqHceGrD-thLrsOQ1Dv73XAgjFQ8DzNVSme0DvYo&_nc_ht=scontent-vie1-1.xx&oh=d8c27fd1116c269412238c1b7f5a19ed&oe=5DF9A4EF', 'Junior Developer'),
(4, 'Alexander', 'Kubczak', '2019-09-01', 'alex@test.at', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 0, 'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fforbestechcouncil%2Ffiles%2F2019%2F01%2Fcanva-photo-editor-8-7.jpg', 'Junior Developer'),
(5, 'Test', 'Goran', '2019-09-04', 'test@test.at', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 0, 'https://www.outbrain.com/techblog/wp-content/uploads/2017/05/road-sign-361513_960_720.jpg', 'Testing');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`friendshipId`),
  ADD KEY `user1` (`user1`),
  ADD KEY `user2` (`user2`);

--
-- Indizes für die Tabelle `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`),
  ADD KEY `requestfrom` (`requestfrom`),
  ADD KEY `requestto` (`requestto`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `friendship`
--
ALTER TABLE `friendship`
  MODIFY `friendshipId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `friendship_ibfk_1` FOREIGN KEY (`user1`) REFERENCES `users` (`usersId`),
  ADD CONSTRAINT `friendship_ibfk_2` FOREIGN KEY (`user2`) REFERENCES `users` (`usersId`);

--
-- Constraints der Tabelle `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`requestfrom`) REFERENCES `users` (`usersId`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`requestto`) REFERENCES `users` (`usersId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
