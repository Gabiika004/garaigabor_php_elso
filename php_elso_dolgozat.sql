-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 21. 16:23
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `celebrities`
--

CREATE TABLE `celebrities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `activeFrom` date DEFAULT NULL,
  `activeNow` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `celebrities`
--

INSERT INTO `celebrities` (`id`, `name`, `age`, `profession`, `nationality`, `activeFrom`, `activeNow`) VALUES
(1, 'Gábor Zsazsa', 99, 'Színésznő', 'Magyar/Amerikai', '1936-01-01', 1),
(2, 'Rubik Ernő', 78, 'Mérnök', 'Magyar', '1974-01-01', 1),
(3, 'Teller Ede', 95, 'Fizikus', 'Magyar/Amerikai', '1930-01-01', 0),
(4, 'Schwarzenegger Arnold', 75, 'Színész', 'Ausztriai/Amerikai', '1969-01-01', 1),
(5, 'Spielberg Steven', 76, 'Rendező', 'Amerikai', '1971-01-01', 1),
(6, 'DiCaprio Leonardo', 48, 'Színész', 'Amerikai', '1989-01-01', 1),
(7, 'Smith Will', 54, 'Színész', 'Amerikai', '1986-01-01', 1),
(8, 'Jolie Angelina', 48, 'Színésznő', 'Amerikai', '1991-01-01', 1),
(9, 'Cruise Tom', 60, 'Színész', 'Amerikai', '1981-01-01', 1),
(10, 'Hanks Tom', 66, 'Színész', 'Amerikai', '1977-01-01', 1),
(11, 'Pitt Brad', 59, 'Színész', 'Amerikai', '1987-01-01', 1),
(12, 'Depp Johnny', 60, 'Színész', 'Amerikai', '1984-01-01', 1),
(13, 'Clooney George', 61, 'Színész', 'Amerikai', '1984-01-01', 1),
(14, 'Swift Taylor', 33, 'Énekesnő', 'Amerikai', '2006-01-01', 1),
(15, 'Gaga Lady', 37, 'Énekesnő', 'Amerikai', '2008-01-01', 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `celebrities`
--
ALTER TABLE `celebrities`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `celebrities`
--
ALTER TABLE `celebrities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
