-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 24 2018 г., 18:48
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geek_brains_php1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `good` varchar(30) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `good_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `good`, `description`, `price`, `good_img`) VALUES
(1, 'Мышь', 'Мышь красная', '30', 'mouse.jpg'),
(2, 'Клавиатура', 'Клавиатура русифицированная', '200', 'button.jpg'),
(3, 'Монитор', 'Монитор 21\\\"', '4000', 'monitor.jpg'),
(4, 'macbook', 'macbook белый 12\\\"', '60000', 'macbook.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `title`, `link`, `size`, `count`) VALUES
(1, 'js world', '1.jpg', '2500x1250', 11),
(2, 'js monitor', '2.jpg', '750x422', 15),
(3, 'js learning', '3.jpg', '650x361', 10),
(4, 'js communal services', '4.jpg', '550x413', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `products` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `products`, `id_user`, `status`, `date`) VALUES
(105, '[{\"id\":\"1\",\"good\":\"\\u041c\\u044b\\u0448\\u044c\",\"description\":\"\\u041c\\u044b\\u0448\\u044c \\u043a\\u0440\\u0430\\u0441\\u043d\\u0430\\u044f\",\"price\":\"30\",\"good_img\":\"mouse.jpg\"},{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"},{\"id\":\"3\",\"good\":\"\\u041c\\u043e\\u043d\\u0438\\u0442\\u043e\\u0440\",\"description\":\"\\u041c\\u043e\\u043d\\u0438\\u0442\\u043e\\u0440 21\\\\\\\"\",\"price\":\"4000\",\"good_img\":\"monitor.jpg\"},{\"id\":\"4\",\"good\":\"macbook\",\"description\":\"macbook \\u0431\\u0435\\u043b\\u044b\\u0439 12\\\\\\\"\",\"price\":\"60000\",\"good_img\":\"macbook.jpg\"}]', 1, 2, '2018-11-17'),
(106, '[{\"id\":\"1\",\"good\":\"\\u041c\\u044b\\u0448\\u044c\",\"description\":\"\\u041c\\u044b\\u0448\\u044c \\u043a\\u0440\\u0430\\u0441\\u043d\\u0430\\u044f\",\"price\":\"30\",\"good_img\":\"mouse.jpg\"},{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"},{\"id\":\"4\",\"good\":\"macbook\",\"description\":\"macbook \\u0431\\u0435\\u043b\\u044b\\u0439 12\\\\\\\"\",\"price\":\"60000\",\"good_img\":\"macbook.jpg\"}]', 1, 4, '2018-11-17'),
(107, '[{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"},{\"id\":\"3\",\"good\":\"\\u041c\\u043e\\u043d\\u0438\\u0442\\u043e\\u0440\",\"description\":\"\\u041c\\u043e\\u043d\\u0438\\u0442\\u043e\\u0440 21\\\\\\\"\",\"price\":\"4000\",\"good_img\":\"monitor.jpg\"}]', 5, 5, '2018-11-24'),
(108, '[{\"id\":\"1\",\"good\":\"\\u041c\\u044b\\u0448\\u044c\",\"description\":\"\\u041c\\u044b\\u0448\\u044c \\u043a\\u0440\\u0430\\u0441\\u043d\\u0430\\u044f\",\"price\":\"30\",\"good_img\":\"mouse.jpg\"},{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"}]', 5, 5, '2018-11-24'),
(109, '[{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"}]', 5, 2, '2018-11-24'),
(110, '[{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"}]', 5, 4, '2018-11-24'),
(111, '[{\"id\":\"2\",\"good\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430\",\"description\":\"\\u041a\\u043b\\u0430\\u0432\\u0438\\u0430\\u0442\\u0443\\u0440\\u0430 \\u0440\\u0443\\u0441\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f\",\"price\":\"200\",\"good_img\":\"button.jpg\"},{\"id\":\"3\",\"good\":\"\\u041c\\u043e\\u043d\\u0438\\u0442\\u043e\\u0440\",\"description\":\"\\u041c\\u043e\\u043d\\u0438\\u0442\\u043e\\u0440 21\\\\\\\"\",\"price\":\"4000\",\"good_img\":\"monitor.jpg\"},{\"id\":\"4\",\"good\":\"macbook\",\"description\":\"macbook \\u0431\\u0435\\u043b\\u044b\\u0439 12\\\\\\\"\",\"price\":\"60000\",\"good_img\":\"macbook.jpg\"}]', 5, 1, '2018-11-24');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'start'),
(2, 'reject'),
(3, 'delivery'),
(4, 'success'),
(5, 'reject-user');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `is_admin`) VALUES
(1, 'john', '202cb962ac59075b964b07152d234b70', 'Yevgeniy Medvedev', 1),
(5, 'john5', '202cb962ac59075b964b07152d234b70', 'john', 0),
(6, 'john7', 'd41d8cd98f00b204e9800998ecf8427e', 'john7', 0),
(7, 'john8', '202cb962ac59075b964b07152d234b70', 'john8', 0),
(8, 'john10', '1a1dc91c907325c69271ddf0c944bc72', 'john10', 0),
(9, 'john11', '1a1dc91c907325c69271ddf0c944bc72', 'john11', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
