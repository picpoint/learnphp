-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 11 2020 г., 23:02
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rammstein`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posters`
--

CREATE TABLE `posters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `concert_date` int(2) NOT NULL,
  `monthyear` varchar(16) NOT NULL,
  `city` varchar(50) NOT NULL,
  `place` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posters`
--

INSERT INTO `posters` (`id`, `concert_date`, `monthyear`, `city`, `place`) VALUES
(1, 22, 'Май 2021', 'Лейпциг', 'Red Bull Arena'),
(2, 23, 'Май 2021', 'Лейпциг', 'Red Bull Arena'),
(3, 27, 'Май 2021', 'Клагенфурт', 'Wörthersee Stadion'),
(4, 31, 'Май 2021', 'Штутгард', 'Mercedes-Benz Arena'),
(5, 1, 'Июня 2021', 'Клагенфурт', 'Wörthersee Stadion'),
(6, 5, 'Июня 2021', 'Берлин', 'Olympiastadion Berlin'),
(7, 6, 'Июня 2021', 'Берлин', 'Olympiastadion Berlin'),
(8, 12, 'Июня 2021', 'Белфаст', 'Boucher Road Playing Fields'),
(10, 16, 'Июня 2021', 'Кардиф', 'Principality Stadium'),
(11, 19, 'Июня 2021', 'Ковентри', 'Ricoh Arena'),
(12, 23, 'Июня 2021', 'Opxyc', 'Ceres Park'),
(13, 26, 'Июня 2021', 'Дюсельдорф', 'Merkur Spiel-Arena'),
(14, 30, 'Июня 2021', 'Гамбург', 'Volksparkstadion'),
(15, 1, 'Июля 2021', 'Гамбург', 'Volksparkstadion'),
(16, 5, 'Июля 2021', 'Цюрих', 'Stadion Letzigrund');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe`
--

CREATE TABLE `subscribe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscribe_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `subscribe`
--

INSERT INTO `subscribe` (`id`, `subscribe_email`) VALUES
(1, 'picpoint@yandex.ru'),
(324, 'rubin-site@yandex.ru'),
(326, 'riminbox@inbox.ru'),
(328, 'rubin@magazin-rubin.ru'),
(330, 'goga@inbox.ru'),
(331, 'burbonGon563@inbox.ru'),
(332, 'asfg@mail.ru'),
(333, 'ggg@inbox.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(63, 'nor', '$2y$10$ck4K0dffq06ae.YbqquCJuSlr2jnOxRtDGY43RZHMFWelvEN4Bueu', 'nor@mail.ru'),
(67, 'den', '$2y$10$KoWSDTbkT38jKjL33iras.0aNQL/3cDTqiF/LE2fUPiBmSPWX44sK', 'den@mail.ru'),
(68, 'adm', '$2y$10$FHbAWNzM0KLhSkC7CpaA2OD7j4Xvwj5GiIDs0ZaQ8.iqchUg9Tecm', 'adm@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posters`
--
ALTER TABLE `posters`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posters`
--
ALTER TABLE `posters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
