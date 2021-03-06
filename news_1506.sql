-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2021 г., 17:59
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news_1506`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_text` text NOT NULL,
  `main_text` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `short_text`, `main_text`, `creation_date`, `user_id`) VALUES
(1, 'Драники картофельные с луком', 'Как правильно готовить «тесто» драников картофельных с луком? На этот счет существует немало разных версий. Многие считают, что для драников вообще не нужно ничего, кроме соли, масла для жарки и собственно картошки. ', 'Драники картофельные с луком\r\nКак правильно готовить «тесто» драников картофельных с луком? На этот счет существует немало разных версий. Многие считают, что для драников вообще не нужно ничего, кроме соли, масла для жарки и собственно картошки. Этот подход вполне оправдан, особенно если речь идет о сортах с высоким содержанием крахмала, который без проблем скрепит измельченную массу. Дополнить такое простое блюдо можно грибным или чесночным соусом. Предлагаемый же нами рецепт драников картофельных с луком — более «богатый»: вкус блюда получается насыщенным, пикантным. Попробуйте!', '2021-06-17 20:40:01', 1),
(2, 'Чизкейк с пряными мандаринами', 'Предлагаю приготовить интересный рецепт творожного чизкейка на \"подушке\" из шоколадного брауни', 'Предлагаю приготовить интересный рецепт творожного чизкейка на \"подушке\" из шоколадного брауни и сверху украшенного ароматными пряными мандаринами в сиропе! ', '2021-06-17 20:40:01', 1),
(3, 'Тонкая пицца', 'Тонкая пицца или толстая? Кому что нравится! Самую тонкую и хрустящую традиционно готовят в Риме. В Неаполе она тоже не толстая, но более мягкая.', 'Тонкая пицца или толстая? Кому что нравится! Самую тонкую и хрустящую традиционно готовят в Риме. В Неаполе она тоже не толстая, но более мягкая. А вот американцы обычно предпочитают пиццу на пышном тесте, которая иногда напоминает просто дрожжевой открытый пирог. Кстати, такой вариант нравится и многим россиянам, особенно бабушкам, которые традиционно хотят накормить внуков посытнее и повкуснее. Если же вы предпочитаете более итальянскую версию, то проверьте на практике наш рецепт. Пицца получается действительно тонкой и довольно хрустящей, особенно если вы не перестараетесь с соусом.', '2021-06-17 20:40:01', 1),
(4, 'Окрошка', 'Окрошка – популярное блюдо русской кухни. Его название происходит от слова «крошить». Рецепт окрошки можно описать просто – это мелко нарезанные свежие овощи, залитые холодной жидкостью', 'Окрошка – популярное блюдо русской кухни. Его название происходит от слова «крошить». Рецепт окрошки можно описать просто – это мелко нарезанные свежие овощи, залитые холодной жидкостью. Традиционной основой блюда считается квас, хотя в старину ее заливали огуречным или капустным рассолом. Сегодня используют кислое молоко, кефир, йогурт, минеральную воду и даже пиво. Для лета окрошка – идеальное решение: во-первых, она отлично освежает в жаркий день, во-вторых, ее не надо варить, поэтому в овощах сохраняются витамины.\r\n\r\nЧто кладут в окрошку. Наиболее популярные продукты – огурцы, морковь, редис, зелень (петрушка, укроп, зеленый лук) и вареный картофель. Также окрошку можно готовить с вареным мясом, курицей или рыбой. Вареные яйца и сметану обычно добавляют непосредственно перед подачей на стол. \r\n\r\nМяса и овощей должно быть примерно поровну. Чтобы вкус был богаче, лучше использовать несколько видов мяса: говядину, свинину, курицу, но можно и ограничится говядиной. Мясо должно быть нежное и мягкое, лучше – срезанное с кости.\r\n\r\nРыба для окрошки нужна с нейтральным, лучше сладковатым вкусом: линь, судак или треска. Ее отваривают, предварительно порезав кубиками.\r\n\r\nКакой квас выбрать. Вкус окрошки во многом зависит от качества кваса. Предпочтительно использовать домашний квас, лучше белый и достаточно кислый. Особенно это актуально для рыбной окрошки, которую лучше подкислить лимонным соком. Овощную и мясную окрошку можно залить и более сладким квасом.\r\n\r\nРецепт кваса для окрошки. Ржаной хлеб нарезать маленькими ломтиками и подрумянить в духовке (чем сильнее вы подрумяните хлеб, тем темнее будет квас). Затем залить хлеб крутым кипятком и поставить в теплое место на 4-5 часов. Полученное сусло процедить, добавить сахар и дрожжи, накрыть плотной тканью и настоять в теплом месте в течение нескольких часов. На 500 г хлеба вам понадобится 50 г дрожжей, 4 л воды и 200 г сахара.\r\n\r\nЗаправка для окрошки. Для придания окрошке остроты надо предварительно смешать горчицу и черный молотый перец с небольшим количеством кваса. Залить нарезанные продукты заправкой и дать немного настояться, а потом залить квасом. В рецепте овощной окрошки вместо горчицы лучше использовать хрен и мелко нарубленную зелень – укроп, сельдерей, петрушку.', '2021-06-17 20:40:01', 4),
(7, 'Щавелевый суп', 'Щавелевый суп, пожалуй, самый любимый весенний легкий суп. Он одинаково хорош и в горячем, и в холодном виде. Главный ингредиент такого супа - естественно, щавель.', 'Щавелевый суп, пожалуй, самый любимый весенний легкий суп. Он одинаково хорош и в горячем, и в холодном виде. Главный ингредиент такого супа - естественно, щавель.\r\n\r\nВ щавелевых листьях содержится набор витаминов — А, С, К, В1, В2, РР, Е, а также полезные микроэлементы — калий, железо, медь, магний, натрий, никель, стронций, фтор, цинк.\r\n\r\nСуп из щавеля обычно готовится очень быстро: весь процесс занимает на больше 20 минут. Щавель можно добавить в овощные супы на бульоне или же на воде, в зеленые щи с отваренными яйцами и сметаной, в окрошки на травяном отваре, в ботвинью из зелени или с рыбой. Главное помнить о том, что щавель готовится очень быстро: добавлять его в суп', '2021-06-17 20:40:01', 4),
(8, 'Классический салат из печени трески', 'У вас осталась банка печени трески и много хлеба. Приготовьте этот простой, сытный, но вполне праздничный салат.  И подавайте его, как намазку на хлеб.', 'Классический салат из печени трески\r\nУ вас осталась банка печени трески и много хлеба. Приготовьте этот простой, сытный, но вполне праздничный салат.  И подавайте его, как намазку на хлеб.', '2021-06-17 20:40:01', 4),
(9, 'Рецепт шашлыка', 'Тем кто ищет легкий рецепт шашлыка, стоит обратить внимание на рецепт шашлыка из курицы или индейки. ', 'Тем кто ищет легкий рецепт шашлыка, стоит обратить внимание на рецепт шашлыка из курицы или индейки. Готовить шашлык из мяса птицы удобно и быстро, правда, иногда он выходит суховатым. Еще при выборе рецепта шашлыка нужно помнить, что из свинины он получится мягким, из говядины — более жестким, из баранины — ароматным и сочным, из ягнятины — особенно нежным.', '2021-06-17 20:40:01', 1),
(10, 'Рецепты блюд из творога', 'Свежий творог прекрасно сочетается со многими продуктами: сахаром, какао, томатами, солью, изюмом, курагой, мармеладом, орехами, корицей, ванилином, перцем, тмином, горчицей, укропом, петрушкой… ', 'Рецепты блюд из творога\r\nСвежий творог прекрасно сочетается со многими продуктами: сахаром, какао, томатами, солью, изюмом, курагой, мармеладом, орехами, корицей, ванилином, перцем, тмином, горчицей, укропом, петрушкой… Простейшее русское блюдо из творога настолько очевидно, что даже не имеет названия: перемешать творог с ягодами (черникой, голубикой, смородиной – вариантом много), полить молоком (или простоквашей, варенцом, сметаной), посыпать сахаром. Удивительно вкусно!\r\n\r\nК сожалению, творог быстро портится, хранить его в открытом виде можно не более двух дней, а если он герметично запакован – около двух недель. Если же творог потерял свежесть, лучше всего приготовить с ним сырники, запеканку или вареники.', '2021-06-17 20:40:01', 5),
(16, 'Салат Цезарь с курицей и сухариками', 'Предлагаю интересный вариант приготовления популярного ресторанного салата «Цезарь». Хоть и состоит салат из достаточно обычных продуктов, но всё же получается очень изысканным. Пробуем!', '<p>Салат «Церарь» имеет множество вариантов, некоторые кладут в него помидоры, некоторые — оливки и кусочки лимона, некоторые – креветки и другие морепродукты. Но обязательными ингредиентами этого салата являются курица и яйцо. Яркость блюду придают листья салата. Чтобы еще более разнообразить вкус и добавить цветов, я также кладу в салат кусочки помидоров. Очень важной является заправка салата «Цезарь», ее правильное приготовление, наверное, значит больше, чем состав самого салата. Заправка для салата «Цезарь» действительно уникальная и оригинальная, она состоит из свежего яйца, лимонного сока, чеснока, горчицы, оливкового масла или вустерского соуса. В наше время очень редко готовят заправку для салата «Цезарь» именно с яйцом, все чаще используют лишь лимонный сок, горчицу и оливковое масло. Именно такой я предлагаю вариант, как приготовить салат «Цезарь» с курицей и сухариками.&nbsp;</p><p>Ингредиенты:&nbsp;</p><ul><li>Куриное филе — 150 Грамм&nbsp;</li><li>Помидор — 1 Штука&nbsp;</li><li>Яйцо — 2 Штуки&nbsp;</li><li>Хлеб белый — 2 Ломтика&nbsp;</li><li>Листья салата — 4-5 Штук&nbsp;</li><li>Оливковое масло — 2 Ст. ложки&nbsp;</li><li>Лимонный сок — 1 Ст. ложка&nbsp;</li><li>Горчица — По вкусу&nbsp;</li><li>Кунжутные семечки — 2 Щепотки&nbsp;</li></ul><p>Количество порций: 1-2&nbsp;</p><p>Как приготовить \"Салат Цезарь с курицей и сухариками\"&nbsp;</p><ol><li>Подготовьте все необходимые ингредиенты. Яйца отварите вкрутую.&nbsp;</li><li>Куриное филе порежьте на небольшие по размеру пластины толщиной 5-6 мм. и обжарьте в небольшом количестве растительного масла до золотистой корочки. Идеально, если вы будете жарить их на гриле.&nbsp;</li><li>Хлеб порежьте на небольшие кубики и подсушите в духовке или микроволновке.&nbsp;</li><li>Помидор очистите и порежьте нетолстыми дольками.&nbsp;</li><li>Соберите салат. На дно тарелки положите промытые листья салата, сверху положите помидоры, сухарики, порезанные дольками яйца и кусочки курицы.&nbsp;</li><li>Подготовьте заправку: смешайте в небольшой креманке свежевыжатый лимонный сок, горчицу и немного оливкового масла. Полейте готовой смесью салат, присыпьте кунжутными семечками. Они хоть и не входят в классический вариант салата «Цезарь», очень хорошо сочетаются с овощами и придают салату пикантность.&nbsp;</li></ol><p>Подавайте салат в качестве закуски перед основным блюдом или в качестве главного блюда. Приятного аппетита!</p>', '2021-06-18 20:16:12', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(1, 'adminsql', 'qweasd', 'adminsql@ddd.qqq'),
(4, 'test', '$2y$10$oXGmxotgcF1oBFSEez2tou6i4nBDAw6aN35z1dty74Dc8tA/v8JWC', 'wqrr@w.w'),
(5, 'qwe', '$2y$10$qfsamoaJQydau9p2YTb/0.SqBR5J8/LPaE67YvaRJdWNGGJVKFw3e', 'qwe@qwe.com'),
(9, 'user', '$2y$10$dpw8pWuaYKqrfGZh8fGOtOSvZKd2lrFRMNaPDrxvD92nYLv1mZyh.', 'user@mail.com'),
(10, 'moderator', '$2y$10$5Uq/meFFQbHnwdgtuZHFH.2KgahkI/PQdF0XnH6msA94Hu1k.qqOq', 'qwe1@qwe.com'),
(11, 'newuser', '$2y$10$OB.LP4jX3g1neQBgn99YveA3N3/QSggQ2twCOK/arZU3VXTqFq2Fy', 'asdf@err.re');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
