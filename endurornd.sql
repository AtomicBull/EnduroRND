-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 21 2023 г., 16:19
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `endurornd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `certificate`
--

CREATE TABLE `certificate` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Подарочный сертификат с картинкой';

--
-- Дамп данных таблицы `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `phone`, `email`, `status`) VALUES
(57, 'Андрей', '79205538555', 'Cool_guy@mail.ru', '1'),
(56, 'Михаил', '89182178455', 'Miha@yandex.ru', '0'),
(55, 'Виктор', '79185732777', 'Victor@mail.ru', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `vk` varchar(255) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `logofile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Лого (filename) для шапки и foooter. Соцсети шапка и контакт';

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `whatsapp`, `vk`, `telegram`, `instagram`, `phone`, `address`, `logofile`) VALUES
(1, 'https://wa.me/79885513216', 'https://vk.com/prokat_enduro_61', 'https://t.me/prokat_enduro_61', 'https://www.instagram.com/prokat_enduro_61/', '+7 988 551-32-15', 'Ростов-на-Дону', 'Logo.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Вопросы и ответы';

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Нужны ли права категории А? ', 'Нет не нужны. Техника внедорожная и не предназначена для движения по автодорогам. '),
(2, 'Можно ли ехать на одном мотоцикле вдвоём?', 'Нет! Эндуро мотоциклы предназначены только для одного человека.'),
(3, 'Где проводится прокат?', 'Трек располагается на 4-ом км трассы М-23 Ростов-Таганрог. Бывшее место проведения '),
(4, 'Можно ли кататься девушкам?', 'Разумеется! Для девушек, подростков и просто начинающих райдеров мы рекомендуем начать с питбайка.'),
(5, 'Вы организовываете прокат только для группы?', 'Нет мы организуем поездку даже для одного человека!'),
(6, 'Как добраться до места проката? Ездит ли туда транспорт?', 'Автобусы к месту проката не ходят! Добраться до места проката вы можете на автомобиле, (до места проката идёт асвальтированная дорога) либо можете добраться на такси.');

-- --------------------------------------------------------

--
-- Структура таблицы `motopark`
--

CREATE TABLE `motopark` (
  `id` int(10) NOT NULL,
  `model` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `engine_power` varchar(255) NOT NULL,
  `engine_capacity` varchar(255) NOT NULL,
  `suspension` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Карточки техники';

--
-- Дамп данных таблицы `motopark`
--

INSERT INTO `motopark` (`id`, `model`, `engine`, `engine_power`, `engine_capacity`, `suspension`, `price`, `img`) VALUES
(1, 'Racer SR-X2', '174', '31', '300', 'Optimum', '2200', '/Img/motopark_racer_sr-x2.png'),
(2, 'GR7', '172', '21', '250', 'Optimum', '2000', '/Img/motopark_gr7.png'),
(3, 'Motoland XT', '172', '21', '250', 'Lite', '1800', '/Img/motopark_motoland_xt.png'),
(4, 'Kayo', '156', '15', '140 ', 'Lite', '1500 ', '/Img/motopark_kayo.png'),
(5, 'BSE EX', '153', '12', '125', 'Lite', '1400 ', '/Img/motopark_bse_ex.png');

-- --------------------------------------------------------

--
-- Структура таблицы `promo`
--

CREATE TABLE `promo` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Промо блок с большой фоткой';

--
-- Дамп данных таблицы `promo`
--

INSERT INTO `promo` (`id`, `title`, `subtitle`, `filename`) VALUES
(1, 'Прокат эндуро мотоциклов в Ростове-на-Дону!', 'Открой МИР Эндуро вместе с нами!', 'Background_image.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `rentform`
--

CREATE TABLE `rentform` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `rent_time` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Таблица записи';

--
-- Дамп данных таблицы `rentform`
--

INSERT INTO `rentform` (`id`, `name`, `phone`, `model`, `date`, `rent_time`, `status`) VALUES
(53, 'Андрей', '79205538555', 'GR7', '2023-07-13', '3 часа', '0'),
(52, 'Михаил', '89182178455', 'BSE EX', '2023-06-29', '2 часа', '0'),
(51, 'Юрий', '89283453653', 'Motoland XT', '2023-06-22', '2.5 часа', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `certificate`
--
ALTER TABLE `certificate`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `motopark`
--
ALTER TABLE `motopark`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `promo`
--
ALTER TABLE `promo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `rentform`
--
ALTER TABLE `rentform`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `motopark`
--
ALTER TABLE `motopark`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `rentform`
--
ALTER TABLE `rentform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
