-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.62-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных seal
CREATE DATABASE IF NOT EXISTS `seal` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `seal`;

-- Дамп структуры для таблица seal.products
CREATE TABLE IF NOT EXISTS `products` (
                                          `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
                                          `title` varchar(50) NOT NULL,
                                          `short_description` varchar(150) NOT NULL,
                                          `characteristics` text NOT NULL,
                                          `description` text NOT NULL,
                                          `cover` varchar(50) DEFAULT NULL,
                                          `certificate` varchar(50) DEFAULT NULL,
                                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы seal.products: ~4 rows (приблизительно)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `title`, `short_description`, `characteristics`, `description`, `cover`, `certificate`) VALUES
                                                                                                                          (1, 'ТП 350-01', 'Запорно-пломбировочное устройство типа «ТП 350-01»  предназначено для пломбирования специализированных железнодорожных цистерн с диаметром пломбировоч', '<div class="characteristics_inner">\r\n                <h5 class="mb-2">Технические характеристики</h5>\r\n                <ul class="p-0">\r\n                    <li class="d-flex">\r\n                        <div class="element">Тип:</div>\r\n                        <div class="characteristics">Универсальные ЗПУ;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Разрушающее усилие при растяжении замкнутой петли каната:</div>\r\n                        <div class="characteristics">≥ 3,5 кН;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Диаметр гибкого стержня (каната):</div>\r\n                        <div class="characteristics"> 2,2 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Длина каната: </div>\r\n                        <div class="characteristics">500 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Масса:</div>\r\n                        <div class="characteristics"> ≤ 30 г;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Усилие замыкания стержня в пломбе:</div>\r\n                        <div class="characteristics">≤ 60 Н;</div>\r\n                    </li>\r\n\r\n                </ul>\r\n            </div>', '<div class="description_wrap">\r\n            <div>\r\n                <h5>Назначение, область применения</h5>\r\n\r\n                <p>Запорно-пломбировочное устройство типа «ТП 350-01»  предназначено для пломбирования специализированных железнодорожных цистерн с диаметром пломбировочного отверстия не менее 2,5 мм для перевозки сжиженных газов, кислот и других химических продуктов, и подлежит строгому учету. </p>\r\n            </div>\r\n\r\n            <div>\r\n                <h5>Достоинства</h5>\r\n\r\n                <p>\r\n                    Универсальность, малогабаритность. Высокая стойкость к криминальному воздействию. Удобство навешивания. Высокая защищенность конструкции от подделок.\r\n                    Гибкий стержень (канат) и все наружные элементы из стали и имеют антикоррозийные покрытия. Корпус выполнен из алюминиевого сплава.\r\n                    Технические решения, применяемые в конструкции ЗПУ «ТП 350-01», защищены патентами Российской Федерации на изобретение.\r\n                    Сертификат МВД России на криминалистическую устойчивость и заключение МЧС России на противопожарную безопасность.\r\n                </p>\r\n            </div>\r\n        </div>', 'tp350-01.jpg', 'Сертификат ТП 350-01.jpg'),
                                                                                                                          (2, 'ТП 40 Закрутка', 'ЗУ ТП-40 предназначено для запирания крытых вагонов, вагонов - хопперов, вагонов - цистерн, изотермических вагонов, крытых вагонов для перевозки легко', '<div class="characteristics_inner">\r\n                <h5 class="mb-2">Технические характеристики</h5>\r\n                <ul class="p-0">\r\n                    <li class="d-flex">\r\n                        <div class="element">Диаметр каната:</div>\r\n                        <div class="characteristics">5,2 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Длина каната:</div>\r\n                        <div class="characteristics"> 400-650 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Усилие запирания ЗУ: </div>\r\n                        <div class="characteristics"> ≤ 60 N;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Крутящий момент на ручке при дополнительной фиксации каната:</div>\r\n                        <div class="characteristics">≤ 0,04N.м;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Разрушающее усилие при растяжении замкнутой петли каната:</div>\r\n                        <div class="characteristics"> ≥ 20 kN;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Удлинение петли при нагрузке 20 kN:</div>\r\n                        <div class="characteristics">≤ 15 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Масса:</div>\r\n                        <div class="characteristics"> 0,122 кг;</div>\r\n                    </li>\r\n\r\n                </ul>\r\n            </div>\r\n               ', '<div class="description_wrap">\r\n            <div>\r\n                <h5>Назначение, область применения</h5>\r\n\r\n                <p>ЗУ ТП-40 предназначено для запирания крытых вагонов, вагонов - хопперов, вагонов - цистерн, изотермических вагонов, крытых вагонов для перевозки легковых автомобилей, а также контейнеров с диаметром отверстий в запорных и пломбировочных узлах не менее 6 мм.</p>\r\n            </div>\r\n\r\n            <div>\r\n                <h5>Достоинства</h5>\r\n\r\n                <p>\r\n                    - высокая стойкость к внешним механическим нагрузкам; <br>\r\n                    - дешевизна, конструктивная простота и надёжность;<br>\r\n                    - высокая стойкость к криминальному вскрытию;<br>\r\n                    - удобство в эксплуатации (установка, снятие);<br>\r\n                    - технические решения, применяемые в конструкции ЗУ «ТП-40», защищены патентами Российской Федерации на изобретение;<br>\r\n                    - сертификат МВД России на криминалистическую устойчивость;<br>\r\n                    - заключение МЧС России на противопожарную безопасность;<br>\r\n                    - корпус, канат и рукоятка-зажим выполнены из стали и имеют антикоррозионное покрытие;\r\n                </p>\r\n            </div>\r\n        </div>', 'tp40.jpg', 'Сертификат ТП 40.jpg'),
                                                                                                                          (3, 'ТП 1200-01', 'Запорно-пломбировочное устройство "ТП 1200-01", изготовленное фирмой ООО "ТРАНС-ПЛОМБИР" по конструкторской документации ТП 1200-01, предназначено для', '<div class="characteristics_inner">\r\n                <h5 class="mb-2">Технические характеристики</h5>\r\n                <ul class="p-0">\r\n                    <li class="d-flex">\r\n                        <div class="element">Тип:</div>\r\n                        <div class="characteristics"> Стержневые ЗПУ;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Усилие разрушения:</div>\r\n                        <div class="characteristics"> ≥ 12кН;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Диаметр стержня:</div>\r\n                        <div class="characteristics"> 9 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Усилие замыкания стержня в пломбе:</div>\r\n                        <div class="characteristics"> ≤ 60 Н;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Масса:</div>\r\n                        <div class="characteristics"> ≤ 110 г;</div>\r\n                    </li>\r\n\r\n                </ul>\r\n            </div>', '<div class="description_wrap">\r\n            <div>\r\n                <h5>Назначение, область применения</h5>\r\n\r\n                <p>Запорно-пломбировочное устройство "ТП 1200-01", изготовленное фирмой ООО "ТРАНС-ПЛОМБИР" по конструкторской документации ТП 1200-01, предназначено для пломбирования грузовых контейнеров с диаметром пломбировочного отверстия не менее 10 мм.</p>\r\n            </div>\r\n\r\n            <div>\r\n                <h5>Достоинства</h5>\r\n\r\n                <p>\r\n                    Малогабаритность в сочетании с высокой стойкостью к силовым воздействиям.\r\n                    Высокая стойкость к криминальному воздействию. Удобство навешивания. Высокая защищенность конструкции от подделок. Все элементы запорно-пломбировочного устройства «ТП 1200-01» из стали и имеют антикоррозийные покрытия.\r\n                    Технические решения, применяемые в конструкции ЗПУ «ТП 1200-01», защищены патентами Российской Федерации на изобретение.\r\n                    Сертификат МВД России на криминалистическую устойчивость и заключение МЧС России на противопожарную безопасность.\r\n                </p>\r\n            </div>\r\n        </div>', 'tp1200-01.jpg', 'Сертификат ТП 1200-01.jpg'),
                                                                                                                          (4, 'ТП 2800-02', 'Запорно-пломбировочное устройство "ТП 2800-02", предназначено для пломбирования крытых вагонов, вагонов - хопперов, вагонов цистерн, рефрижераторов, к', '<div class="characteristics_inner">\r\n                <h5 class="mb-2">Технические характеристики</h5>\r\n                <ul class="p-0">\r\n                    <li class="d-flex">\r\n                        <div class="element">Тип:</div>\r\n                        <div class="characteristics"> Универсальные ЗПУ;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Разрушающее усилие при растяжении замкнутой петли каната:</div>\r\n                        <div class="characteristics"> ≥ 20 кН;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Диаметр гибкого стержня (каната):</div>\r\n                        <div class="characteristics"> 5,2 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Длина гибкого стержня (каната):</div>\r\n                        <div class="characteristics"> 500 мм;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Масса:</div>\r\n                        <div class="characteristics"> ≤ 150 г;</div>\r\n                    </li>\r\n                    <li class="d-flex">\r\n                        <div class="element">Усилие замыкания гибкого стержня в пломбе:</div>\r\n                        <div class="characteristics"> ≤ 60 Н;</div>\r\n                    </li>\r\n\r\n                </ul>\r\n                </div>\r\n            ', '<div class="description_wrap">\r\n            <div>\r\n                <h5>Назначение, область применения</h5>\r\n\r\n                <p>Запорно-пломбировочное устройство "ТП 2800-02", предназначено для пломбирования крытых вагонов, вагонов - хопперов, вагонов цистерн, рефрижераторов, крытых вагонов для легковых автомобилей и контейнеров, а также других объектов с диаметром отверстий в запорных и пломбировочных узлах не менее 6,0 мм.</p>\r\n            </div>\r\n\r\n            <div>\r\n                <h5>Требования безопасности</h5>\r\n\r\n                <p>\r\n                    Кострукция ЗПУ должна обеспечивать безопасную работу с ним при испытаниях, установке и съеме ЗПУ. Материалы и покрытия, используемые при изготовлении ЗПУ, не должны содержать токсичных веществ, предсталяющих угрозу для обслуживающего персонала, не должны вызывать химических реакций и не должны образовывать химических соединений с перевозимыми грузами. При снятии ЗПУ должны соблюдаться Правила пожарной безопасности на железнодорожном транспорте.\r\n                </p>\r\n            </div>\r\n        </div>', 'tp2800-02.jpg', 'Сертификат ТП 2800-02.jpg');

-- Дамп структуры для таблица seal.users
CREATE TABLE IF NOT EXISTS `users` (
                                       `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
                                       `login` varchar(50) NOT NULL,
                                       `hash` varchar(60) NOT NULL,
                                       `permissions` enum('user','manager','admin') NOT NULL DEFAULT 'user',
                                       `token` varchar(32) DEFAULT NULL,
                                       PRIMARY KEY (`id`),
                                       UNIQUE KEY `login` (`login`),
                                       UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы seal.users: 0 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
