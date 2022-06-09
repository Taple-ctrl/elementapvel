-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2022 г., 05:28
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `elementpavel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sites`
--

INSERT INTO `sites` (`id`, `name`, `category`, `description`, `img`) VALUES
(2, 'Dr.Harness', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem esse id tempora fuga maxime. Voluptatem, accusantium nulla illo, optio sed quidem nemo repellat reprehenderit voluptatum! Quam tempore illum suscipit tenetur.', 'imgonline-com-ua-Resize-ZOyVrD3u13sO0pLi.jpg'),
(32, 'Cosmo', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem esse id tempora fuga maxime. Voluptatem, accusantium nulla illo, optio sed quidem nemo repellat reprehenderit voluptatum! Quam tempore illum suscipit tenetur.', 'imgonline-com-ua-Resize-gIJyY10kXV2NVdL.jpg'),
(35, 'Master Dental', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsum ratione, amet! Sit perferendis, vero beatae eos nisi autem dicta est tempore veniam illum adipisci nam? Laboriosam, omnis minima porro.', 'imgonline-com-ua-Resize-ZGJfxeZfY2dgZ9.jpg'),
(36, 'Comfort Sport', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsum ratione, amet! Sit perferendis, vero beatae eos nisi autem dicta est tempore veniam illum adipisci nam? Laboriosam, omnis minima porro.', 'imgonline-com-ua-Resize-I2nf4nsrJvc3C.jpg'),
(37, 'Евклид', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsum ratione, amet! Sit perferendis, vero beatae eos nisi autem dicta est tempore veniam illum adipisci nam? Laboriosam, omnis minima porro.', 'imgonline-com-ua-Resize-dmIabYxm7N8.jpg'),
(38, 'Club Pet', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsum ratione, amet! Sit perferendis, vero beatae eos nisi autem dicta est tempore veniam illum adipisci nam? Laboriosam, omnis minima porro.', 'imgonline-com-ua-Resize-sVPI7HxeE9o7RC0H.jpg'),
(39, 'Coastal Trading', 'Лендинг', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eius rerum, vitae ex blanditiis itaque alias, non ut quibusdam quia nesciunt repudiandae quas doloremque laudantium quo deserunt laborum maiores harum.', 'imgonline-com-ua-Resize-5DMXAJbMDtyzu9q.jpg'),
(40, 'Донат магазин', 'Игровой Интерфейс', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eius rerum, vitae ex blanditiis itaque alias, non ut quibusdam quia nesciunt repudiandae quas doloremque laudantium quo deserunt laborum maiores harum.', '123123123123.png'),
(41, 'Окно авторизации/регистрации', 'Игровой Интерфейс', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eius rerum, vitae ex blanditiis itaque alias, non ut quibusdam quia nesciunt repudiandae quas doloremque laudantium quo deserunt laborum maiores harum.', 'Frame_74.png'),
(42, 'Карта мира с выбором спавна и транспорта', 'Игровой Интерфейс', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis sunt quos, quaerat eligendi distinctio, culpa rerum ullam cum voluptatum corrupti deserunt sed, ut? Velit in natus qui odit repellendus.', '03b4303313980031.png'),
(43, 'Худ', 'Игровой Интерфейс', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis sunt quos, quaerat eligendi distinctio, culpa rerum ullam cum voluptatum corrupti deserunt sed, ut? Velit in natus qui odit repellendus.', '127f635ed1aaeae1.png'),
(44, 'Лобби', 'Игровой Интерфейс', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quae quaerat sapiente corporis explicabo magni vel, eaque, sint et vero in, cupiditate suscipit dolorum laborum velit illum laboriosam sit expedita.\r\n', 'MAIN.png'),
(45, 'Выбор транспорта', 'Игровой Интерфейс', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque asperiores sapiente ratione unde placeat at temporibus maxime est similique facere dolorem, quis, modi ut fugit pariatur deserunt eligendi! Mollitia, perferendis!', 'CARSPAWN.png'),
(46, 'Магазин 24/7', 'Игровой Интерфейс', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque asperiores sapiente ratione unde placeat at temporibus maxime est similique facere dolorem, quis, modi ut fugit pariatur deserunt eligendi! Mollitia, perferendis!', 'image.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'Taple', 'wertex22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sites`
--
ALTER TABLE `sites`
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
-- AUTO_INCREMENT для таблицы `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
