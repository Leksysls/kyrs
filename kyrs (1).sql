-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.100.80:3306
-- Время создания: Дек 24 2021 г., 00:33
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kyrs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courcels`
--

CREATE TABLE `courcels` (
  `item_id` int NOT NULL,
  `cource_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cource_description` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `asic_consumption` int NOT NULL,
  `algorithm` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currencies` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashrate` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cource_img_path` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courcels`
--

INSERT INTO `courcels` (`item_id`, `cource_name`, `cource_description`, `price`, `asic_consumption`, `algorithm`, `currencies`, `hashrate`, `cource_img_path`) VALUES
(2, 'AVALONMINER A1246', 'Компания Сanaan выпустила Asic AvalonMiner A1246 для майнинга Bitcoin и Bitcoin Cash на алгоритме SHA-256.\r\n\r\nАсик AvalonMiner A1246 изготовлен из высококачественного алюминия, поэтому конструкция устройства надежно защищена от механических повреждений. По бокам расположены специальные кулера в количестве 4 шт, которые обеспечивают эффективное охлаждение, защищая асик от перегрева.\r\n\r\nАсик майнинг AvalonMiner A1246 выдает мощность 90 TH/s терахэш/сек (90 TH/s), при потребляемой мощности в 3420 W.\r\n\r\nAvalonMiner A1246 работает при температуре внешней среды от 0 °C до 35 °C и имеет вес 12,8 кг.', 400000, 3420, 'SHA-256 ', ' Bitcoin (BTC) / BitcoinCash (BCH)', ' 90 TH/S', 0x2e2e2f696d672f4176616c6f6e2041313234362e706e67),
(3, 'ASIC AVALONMINER A920', 'Компания Сanaan выпустила Asic AvalonMiner A920 для майнинга Bitcoin и Bitcoin Cash на алгоритме SHA-256.\r\n\r\nАсик AvalonMiner A920 изготовлен из высококачественного алюминия, поэтому конструкция устройства надежно защищена от механических повреждений. По бокам расположен специальный кулер, который обеспечивает эффективное охлаждение, защищая асик от перегрева.\r\n\r\nАсик майнинг AvalonMiner A920 выдает мощность 18 терахэш/сек (18 TH/s), при потребляемой мощности в 1530 W.\r\n\r\nAvalonMiner A920 работает при температуре внешней среды от 0 °C до 35 °C и имеет вес 5,5 кг.', 45000, 1530, 'SHA-256 ', ' Bitcoin (BTC) / BitcoinCash (BCH)', '18 TH/S', 0x2e2e2f696d672f41534943204156414c4f4e4d494e455220413932302e706e67),
(4, 'AVALON MINER 911', 'Компания Сanaan выпустила Asic AvalonMiner Miner 911 для майнинга Bitcoin и Bitcoin Cash на алгоритме SHA-256.\r\n\r\nАсик AvalonMiner Miner 841 изготовлен из высококачественного алюминия, поэтому конструкция устройства надежно защищена от механических повреждений. Кулер обеспечивает эффективное охлаждение, защищая асик от перегрева.\r\n\r\nАсик майнинг AvalonMiner Miner 911 выдает мощность 19,5 терахэш/сек (13,5 TH/s), при потребляемой мощности в 1750 W.\r\n\r\nAvalonMiner Miner 911 работает при температуре внешней среды от 0 °C до 35 °C и имеет вес 6 кг.', 55000, 1750, 'SHA-256 ', ' Bitcoin (BTC) / BitcoinCash (BCH)', '19 TH/S', 0x2e2e2f696d672f4156414c4f4e204d494e4552203931312e706e67),
(25, 'ASIC ANTMINER T15', 'Компания Bitmain выпустила Asic Antminer T15 23 TH/s для майнинга Bitcoin и Bitcoin Cash на алгоритме SHA-256.\r\n\r\nАсик Antminer T15 23 TH/s изготовлен из высококачественного алюминия, поэтому конструкция устройства надежно защищена от механических повреждений. По бокам расположены специальные кулера в количестве 2 шт, которые обеспечивают эффективное охлаждение, защищая асик от перегрева.\r\n\r\nАсик майнинг Т15 выдает мощность 23 терахэш/сек (23 TH/s), при потребляемой мощности в 1540 W. Bitmain Antminer Т15 работает при температуре внешней среды от 0 °C до 40 °C и имеет вес 6.6 кг.', 60000, 1540, 'SHA-256 ', 'Bitcoin (BTC)', '23 TH/S', 0x2e2e2f696d672f4153494320414e544d494e4552205431352e706e67),
(26, 'ASIC ANTMINER T16', '', 70000, 1900, 'SHA-256', 'Bitcoin (BTC)', '22 TH/S', ''),
(35, 'AVALONMINER ', 'dfgfdvcvvvv', 120000, 10000, 'SHA-256 ', 'Bitcoin (BTC)', '28', '');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Пользователь'),
(2, 'Администратор');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role_id`) VALUES
(56, 'admin', '202cb962ac59075b964b07152d234b70', 2),
(59, 'user', '202cb962ac59075b964b07152d234b70', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courcels`
--
ALTER TABLE `courcels`
  ADD PRIMARY KEY (`item_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courcels`
--
ALTER TABLE `courcels`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
