-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2020 г., 15:51
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `loginID` int(11) NOT NULL,
  `goodID` int(11) NOT NULL,
  `countGoods` int(11) NOT NULL,
  `dateBuy` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `goodsCount` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `goodsCount`, `img`) VALUES
(1, 'iPhone 7', 'Телефоны iPhone 7 внешне практически идентичны iPhone 6s, среди отличий: симметричность нижнего торца. Аппараты доступны как в 3 традиционных расцветках: «Silver» (серебристый), «Gold» (золотой), «Rose Gold» («Розовое золото»), так и в двух новых вариантах чёрного цвета: «Black» (матовый чёрный) и «Jet Black» («Чёрный оникс»). В марте 2017 года, в рамках благотворительной кампании (RED), была представлена версия в ярко-красном цвете[9].\r\nВ iPhone 7/7 Plus изменён механизм кнопки «Home», в отличие от предыдущих моделей она лишилась механизма нажатия и стала полностью сенсорной и чувствительной к силе нажатия; тактильный отклик при нажатии обеспечивается вибрацией телефона — так называемый «haptic[en] feedback», реализованный при помощи Apple Taptic Engine[10]. Сохранена система «3D Touch» от 6s.', 500, 132, 'iphone7.png'),
(3, 'iPhone 8', 'iPhone 8 и iPhone 8 Plus основаны на процессоре A11 Bionic с 64-битной архитектурой и сопроцессором M11, отвечающим за геопозицию и гироскоп. Объем оперативной памяти составляет 2 ГБ (3 ГБ в iPhone 8 Plus).\r\nВ отличие от своего предшественника, смартфоны получили беспроводную зарядку (поддерживаются зарядные устройства стандарта Qi 1.0 мощностью 5 Вт), оптическое увеличение; 6-кратное цифровое увеличение (только для iPhone 8 Plus).\r\niPhone 8 поддерживает стандарты быстрой зарядки. В частности, зарядное устройство MacBook 29W при использовании USB-кабеля типа USB — Lightning зарядит iPhone 8 на 50 % за полчаса и до 80-85 % за час[4]. В комплекте iPhone 8 идёт только обычное зарядное устройство мощностью 5 Вт, не поддерживающее быструю зарядку.', 600, 45, 'iphone8.png'),
(6, 'iPhone X', 'Экран Super Retina с разрешением 2436×1125, при диагонали 5,8 дюйма, 458ppi[6]; впервые среди продуктов Apple используется технология OLED.\r\nПоддерживается HDR, Dolby Vision и True Tone.\r\nСенсорный модуль дисплея распознает жесты «3D Touch».\r\nВ верхней части дисплея имеется вырез для фронтальной камеры и прочих сенсоров, по краям от выреза расположена информация из верхней статусной полосы (сигнал сетей связи, уровень заряда).\r\nДля быстрой разблокировки и подтверждений Apple Pay и других сервисов применяется новая технология — Face ID — она распознает лицо владельца телефона. Ранее использовавшийся метод авторизации при помощи отпечатка пальца (Touch ID) более не поддерживается, у телефона нет кнопки Home («Домой»).\r\nSOC Apple A11 Bionic Neural, в которой использованы разработанные Apple шестиядерный процессор CPU, трёхблочный видеопроцессор GPU, сопроцессор движения и «нейронный движок» Neural Engine. Последний применяется для машинного обучения, например, в технологии Face ID.\r\nОсновная камера имеет разрешение 12 Мп и использует двойную оптическую стабилизацию. Доступна вспышка TrueTone из 4 светодиодов с повышенной однородностью засветки.\r\nПередняя камера TrueDepth имеет 7 Мп, может снимать серии и видео 1080p. Добавлен портретный режим и режим переноса мимики на анимированные эмодзи «Animoji».\r\nЗаряда аккумулятора смартфона хватает на 2 часа использования больше, чем iPhone 7.\r\nПоддерживается беспроводная зарядка Air Power (впоследствии запланированный выпуск AirPower был отменён), используется стандарт Qi.\r\nСмартфон доступен в вариантах с 64 ГБ и 256 ГБ флеш-памяти[6].', 1000, 21, 'iphoneX.png'),
(8, '123', 'sdffg\r\ngfhgfgh\r\nf', 489, 2, '5.jpg'),
(10, 'gb', 'srthsrthrthsrth', 34, 4, '2.jpg'),
(12, 'ffvv', 'sdfsf', 45, 3, '2.jpg'),
(14, 'asd', 'xcvbbdebdfb', 56, 3, '6.jpg'),
(15, 'iphone 13', 'new!!!', 6000, 3, '5.jpg'),
(16, 'iphone 14', 'NEW new', 7000, 1, '6.jpg'),
(17, 'iphone 15', 'dfgf', 54, 2, '1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `author`, `txt`, `date`) VALUES
(4, 'Сергей', 'ва', '0000-00-00 00:00:00'),
(5, 'Сергей', 'ва', '2020-10-22 07:18:55'),
(6, 'Алекс', 'Плохой сайт!!!', '2020-10-22 07:37:36'),
(7, 'Миша', 'Можно еще улучшить', '2020-10-22 07:46:07'),
(10, '123', 'dfdff', '2020-10-22 07:55:43'),
(14, 'wsx', 'cde', '2020-10-22 08:02:59');

-- --------------------------------------------------------

--
-- Структура таблицы `shopusers`
--

CREATE TABLE `shopusers` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `shopusers`
--

INSERT INTO `shopusers` (`id`, `login`, `pwd`, `privilege`) VALUES
(1, 'user1', 'rtgh', 0),
(2, 'ert', '678', 1),
(5, 'se', '123', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shopusers`
--
ALTER TABLE `shopusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `shopusers`
--
ALTER TABLE `shopusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
