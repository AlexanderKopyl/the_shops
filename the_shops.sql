-- phpMyAdmin SQL Dump
-- version 4.9.7deb1~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 03 2021 г., 15:23
-- Версия сервера: 10.3.27-MariaDB-0+deb10u1
-- Версия PHP: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `c0_newfanatick`
--

-- --------------------------------------------------------

--
-- Структура таблицы `oc_the_shops`
--

CREATE TABLE `oc_the_shops` (
  `shop_id` int(11) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `longitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `latitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `schedule` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `oc_the_shops`
--

INSERT INTO `oc_the_shops` (`shop_id`, `city`, `address`, `longitude`, `latitude`, `schedule`) VALUES
(4, 'Днепр', 'Тестовый Адрес', '38,0333', '35,888', 'Работаем с 9:00 по 10:00'),
(5, 'Днепр', 'Тестовый Адрес 1 ', '38,0333', '38,0333', 'Работаем с 9:00 по 10:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `oc_the_shops`
--
ALTER TABLE `oc_the_shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `oc_the_shops`
--
ALTER TABLE `oc_the_shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
