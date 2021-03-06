-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               6.0.6-alpha-community - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица aquilon_db.aquilon_categ
DROP TABLE IF EXISTS `aquilon_categ`;
CREATE TABLE IF NOT EXISTS `aquilon_categ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы aquilon_db.aquilon_categ: ~53 rows (приблизительно)
/*!40000 ALTER TABLE `aquilon_categ` DISABLE KEYS */;
INSERT INTO `aquilon_categ` (`id`, `parent_id`, `name`, `img`, `description`, `active`) VALUES
	(1, 0, 'Мебель', NULL, NULL, 1),
	(2, 1, 'Столы', NULL, NULL, 1),
	(3, 2, 'Столы для кабинета', NULL, NULL, 1),
	(4, 1, 'Тумбы', NULL, NULL, 1),
	(5, 4, 'Тумба прикроватная', NULL, NULL, 1),
	(6, 4, 'Тумба лабораторная', NULL, NULL, 1),
	(7, 1, 'Шкафы', NULL, NULL, 1),
	(8, 7, 'Шкафы для документов', NULL, NULL, 1),
	(9, 7, 'Шкафы для одежды', NULL, NULL, 1),
	(10, 7, 'Шкафы для хозяйственного инвентаря', NULL, NULL, 1),
	(11, 0, 'ОБОРУДОВАНИЕ', NULL, NULL, 1),
	(12, 11, ' Оборудование для акушерства и гинекологии', NULL, NULL, 1),
	(13, 12, 'Коагуляторы (электрокоагуляторы)', NULL, NULL, 1),
	(14, 12, 'Мониторы фетальные', NULL, NULL, 1),
	(15, 12, ' Отсасыватели гинекологические', NULL, NULL, 1),
	(16, 11, 'Анестезиология и реанимация', NULL, NULL, 1),
	(17, 16, 'Аппараты Боброва', NULL, NULL, 1),
	(18, 16, 'Аппараты ИВЛ', NULL, NULL, 1),
	(19, 16, 'Дефибрилляторы', NULL, NULL, 1),
	(20, 16, 'Концентраторы кислорода', NULL, NULL, 1),
	(21, 16, 'Мониторы пациента', NULL, NULL, 1),
	(22, 16, 'Наркозные аппараты', NULL, NULL, 1),
	(23, 16, 'Светильники', NULL, NULL, 1),
	(24, 11, 'Диагностика', NULL, NULL, 1),
	(25, 24, 'Алкотестеры и принадлежности', NULL, NULL, 1),
	(26, 24, 'Дерматоскопы', NULL, NULL, 1),
	(27, 24, 'Стетоскопы', NULL, NULL, 1),
	(28, 24, 'Тонометры', NULL, NULL, 1),
	(29, 24, 'Термометры', NULL, NULL, 1),
	(30, 11, 'Кислородное оборудование', NULL, NULL, 1),
	(31, 30, 'Коктейлеры кислородные', NULL, NULL, 1),
	(32, 30, 'Концентраторы кислородные', NULL, NULL, 1),
	(33, 30, 'Увлажнители кислорода', NULL, NULL, 1),
	(34, 30, 'Пульсоксиметры', NULL, NULL, 1),
	(35, 11, 'Неонатология', NULL, NULL, 1),
	(36, 35, 'Весы для новорожденных', NULL, NULL, 1),
	(37, 35, 'Облучатели фототерапевтические', NULL, NULL, 1),
	(38, 35, 'Столы для санитарной обработки', NULL, NULL, 1),
	(39, 35, 'Ростомеры детские', NULL, NULL, 1),
	(40, 11, 'Стерилизация и дезинфекция', NULL, NULL, 1),
	(41, 40, 'Рециркуляторы', NULL, NULL, 1),
	(42, 40, 'Стерилизаторы медицинские', NULL, NULL, 1),
	(43, 40, 'Деструкторы для игл', NULL, NULL, 1),
	(44, 11, 'Стоматологическое оборудование', NULL, NULL, 1),
	(45, 44, 'Печи зуботехнические', NULL, NULL, 1),
	(46, 0, 'Физиотерапия и реабилитация', NULL, NULL, 1),
	(47, 46, 'Физиотерапевтическое оборудование', NULL, NULL, 1),
	(48, 47, 'Ингаляторы', NULL, NULL, 1),
	(49, 47, 'Аппараты КВЧ терапии', NULL, NULL, 1),
	(50, 47, 'Магнитотерапия', NULL, NULL, 1),
	(51, 47, 'Ультразвуковая (УЗ) терапия', NULL, NULL, 1),
	(53, 0, 'tesst23', NULL, NULL, 1),
	(54, 53, 't123', NULL, NULL, 1);
/*!40000 ALTER TABLE `aquilon_categ` ENABLE KEYS */;

-- Дамп структуры для таблица aquilon_db.aquilon_favouritet
DROP TABLE IF EXISTS `aquilon_favouritet`;
CREATE TABLE IF NOT EXISTS `aquilon_favouritet` (
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы aquilon_db.aquilon_favouritet: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `aquilon_favouritet` DISABLE KEYS */;
/*!40000 ALTER TABLE `aquilon_favouritet` ENABLE KEYS */;

-- Дамп структуры для таблица aquilon_db.aquilon_orders
DROP TABLE IF EXISTS `aquilon_orders`;
CREATE TABLE IF NOT EXISTS `aquilon_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(250) DEFAULT NULL,
  `exec` smallint(6) NOT NULL DEFAULT '0',
  `descript_manager` varchar(250) DEFAULT NULL,
  `date_manager` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы aquilon_db.aquilon_orders: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `aquilon_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `aquilon_orders` ENABLE KEYS */;

-- Дамп структуры для таблица aquilon_db.aquilon_order_details
DROP TABLE IF EXISTS `aquilon_order_details`;
CREATE TABLE IF NOT EXISTS `aquilon_order_details` (
  `id_order` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы aquilon_db.aquilon_order_details: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `aquilon_order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `aquilon_order_details` ENABLE KEYS */;

-- Дамп структуры для таблица aquilon_db.aquilon_products
DROP TABLE IF EXISTS `aquilon_products`;
CREATE TABLE IF NOT EXISTS `aquilon_products` (
  `id_categ` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `art` varchar(100) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `coast` decimal(10,2) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `active` bit(1) NOT NULL DEFAULT '',
  UNIQUE KEY `id_categ_id_name_art` (`id_categ`,`id`,`name`,`art`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы aquilon_db.aquilon_products: ~149 rows (приблизительно)
/*!40000 ALTER TABLE `aquilon_products` DISABLE KEYS */;
INSERT INTO `aquilon_products` (`id_categ`, `id`, `name`, `art`, `count`, `coast`, `img`, `description`, `active`) VALUES
	(3, 1, 'Стол для кабинета ', 'СВ-Л-01 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(3, 2, 'Стол для врача ', 'СМВ-МСК МД-301.13', NULL, NULL, NULL, NULL, b'1'),
	(3, 3, 'Стол для кабинета ', 'СКМ-Л-01 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(3, 4, 'Стол для кабинета ', 'СКМ-Л-02 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(3, 5, 'Стол для кабинета', ' СКМ-Л-03 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(3, 6, 'Стол для кабинета ', 'СДТ-103', NULL, NULL, NULL, NULL, b'1'),
	(3, 7, 'Стол для кабинета ', 'СТ-101', NULL, NULL, NULL, NULL, b'1'),
	(3, 8, 'Стол для кабинета ', 'СТ-103', NULL, NULL, NULL, NULL, b'1'),
	(5, 9, 'Тумба прикроватная', 'ТПп101-МСК', NULL, NULL, NULL, NULL, b'1'),
	(5, 10, 'Прикроватная тумбочка ', 'ТП-Л-01 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(5, 11, 'Прикроватная тумбочка ', 'ТП-Л-04 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(5, 12, 'Прикроватная тумбочка ', 'ТПП-Л-01 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(5, 13, 'Прикроватная тумбочка ', 'ТПП-Л-02 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(5, 14, 'Тумба прикроватная ', 'АСК ТМ.03.01', NULL, NULL, NULL, NULL, b'1'),
	(5, 15, 'Тумба прикроватная ', 'АСК ТМ.03.00', NULL, NULL, NULL, NULL, b'1'),
	(5, 16, 'Тумба прикроватная ', 'АСК ТМ.02.00', NULL, NULL, NULL, NULL, b'1'),
	(5, 17, 'Тумба прикроватная ', 'АСК ТМ.03.01 (на колесах)', NULL, NULL, NULL, NULL, b'1'),
	(5, 18, 'Тумба прикроватная ', 'ТПп102-МСК', NULL, NULL, NULL, NULL, b'1'),
	(5, 19, 'Тумба прикроватная ', 'ТМ-МСК МД-103.00', NULL, NULL, NULL, NULL, b'1'),
	(6, 20, 'Тумба лабораторная ', 'ТЛ-104', NULL, NULL, NULL, NULL, b'1'),
	(6, 21, 'Тумба лабораторная ', 'ТЛ-103', NULL, NULL, NULL, NULL, b'1'),
	(6, 22, 'Тумба лабораторная ', 'ТЛ-106/2', NULL, NULL, NULL, NULL, b'1'),
	(6, 23, 'Тумба лабораторная ', 'ТЛ-106/3', NULL, NULL, NULL, NULL, b'1'),
	(6, 24, 'Тумба лабораторная ', 'ТЛ-106', NULL, NULL, NULL, NULL, b'1'),
	(6, 25, 'Тумба лабораторная ', 'ТЛ-108', NULL, NULL, NULL, NULL, b'1'),
	(8, 26, 'Шкаф для документов ', 'АСК ШК.14.06', NULL, NULL, NULL, NULL, b'1'),
	(8, 27, 'Шкаф для документов ', 'АСК ШК.14.00', NULL, NULL, NULL, NULL, b'1'),
	(8, 28, 'Шкаф для документов ', 'ШМД-МСК МД-509.00', NULL, NULL, NULL, NULL, b'1'),
	(8, 29, 'Шкаф для документов ', 'АСК ШК.14.04', NULL, NULL, NULL, NULL, b'1'),
	(8, 30, 'Шкаф для документов ', 'АСК ШК.14.14', NULL, NULL, NULL, NULL, b'1'),
	(8, 31, 'Шкаф для документов ', 'ШМД-МСК МД-510.00', NULL, NULL, NULL, NULL, b'1'),
	(8, 32, 'Шкаф для документов', ' АСК ШК.14.02', NULL, NULL, NULL, NULL, b'1'),
	(8, 33, 'Шкаф для документов ', 'АСК ШК.13.06', NULL, NULL, NULL, NULL, b'1'),
	(8, 34, 'Шкаф для кабинета ', 'ШК-Л-05 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(8, 35, 'Шкаф для документов ', 'АСК ШК.12.00', NULL, NULL, NULL, NULL, b'1'),
	(9, 36, 'Шкаф металлический для одежды ПАКС металл ', 'ШРМ-М-400', NULL, NULL, NULL, NULL, b'1'),
	(9, 37, 'Шкаф для одежды ', 'ШО-Л-02 ЛАВКОР', NULL, NULL, NULL, NULL, b'1'),
	(9, 38, 'Шкаф для одежды ', 'АСК ШК.36.00', NULL, NULL, NULL, NULL, b'1'),
	(9, 39, 'Шкаф для документов ', 'АСК ШК.14.03', NULL, NULL, NULL, NULL, b'1'),
	(9, 40, 'Шкаф для одежды ', 'ШМО-МСК МД-511.00', NULL, NULL, NULL, NULL, b'1'),
	(9, 41, 'Шкаф для белья и одежды ', 'ШМБО-МСК МД-508.02', NULL, NULL, NULL, NULL, b'1'),
	(9, 42, 'Шкаф металлический для одежды ПАКС металл ', 'ШРМ-12', NULL, NULL, NULL, NULL, b'1'),
	(9, 43, 'Шкаф для одежды АСК ', 'ШК.37.01 (мод.1)', NULL, NULL, NULL, NULL, b'1'),
	(10, 44, 'Шкаф ', 'ШРМ-22У', NULL, NULL, NULL, NULL, b'1'),
	(10, 45, 'Шкаф ', 'LS-21 U', NULL, NULL, NULL, NULL, b'1'),
	(10, 46, 'Шкаф ', 'МД 1 ШМ-SS (11-50)', NULL, NULL, NULL, NULL, b'1'),
	(10, 47, 'Шкаф для инвентаря ', 'ШРМ-АК-У', NULL, NULL, NULL, NULL, b'1'),
	(10, 48, 'Шкаф для инвентаря ', 'ШРХ-11 L500', NULL, NULL, NULL, NULL, b'1'),
	(13, 49, 'Электрокоагулятор (для оперативной амбулаторной гинекологии, базовый)', 'ЭХВЧ-80-ск Никор', NULL, NULL, NULL, NULL, b'1'),
	(13, 50, 'Электрокоагулятор (для оперативной амбулаторной гинекологии, расширенный)', 'ЭХВЧ-80-ск Никор', NULL, NULL, NULL, NULL, b'1'),
	(13, 51, 'Электрокоагулятор (для общей хирургии, базовый) ', 'ЭХВЧ-400-ск Никор', NULL, NULL, NULL, NULL, b'1'),
	(13, 52, 'Электрокоагулятор ', 'Sensitec ES-50D', NULL, NULL, NULL, NULL, b'1'),
	(13, 53, 'Электрокоагулятор (для оперативной гинекологии, базовый)', ' ЭХВЧ-400-ск Никор', NULL, NULL, NULL, NULL, b'1'),
	(13, 54, 'Электрокоагулятор (для общей хирургии, расширенный) ', 'ЭХВЧ-400-ск Никор', NULL, NULL, NULL, NULL, b'1'),
	(14, 55, 'Монитор фетальный Edan ', 'F6', NULL, NULL, NULL, NULL, b'1'),
	(14, 56, 'Тележка Edan  для фетального монитора', 'МТ-503', NULL, NULL, NULL, NULL, b'1'),
	(15, 57, 'Отсасыватель для прерывания беременности ', 'ОПГ-01 Элема-Н', NULL, NULL, NULL, NULL, b'1'),
	(17, 58, 'Аппарат Боброва для аспирации ', 'АБ1А Элема-Н', NULL, NULL, NULL, NULL, b'1'),
	(17, 59, 'Аппарат Боброва для нагнетания ', 'АБ1Н Элема-Н', NULL, NULL, NULL, NULL, b'1'),
	(18, 60, 'Аппарат ИВЛ и оксигенотерапии Медпром ', 'АИВЛп-2/20-ТМТ', NULL, NULL, NULL, NULL, b'1'),
	(19, 61, 'Дефибриллятор ', 'Heart Save PAD M250 Metrax', NULL, NULL, NULL, NULL, b'1'),
	(19, 62, 'Дефибриллятор ', 'Primedic Defi-B M110 Metrax', NULL, NULL, NULL, NULL, b'1'),
	(19, 63, 'Дефибриллятор автоматический ', 'ДА-Н-01 Аксион', NULL, NULL, NULL, NULL, b'1'),
	(19, 64, 'Дефибриллятор-монитор ', 'ДКИ-Н-10 Аксион', NULL, NULL, NULL, NULL, b'1'),
	(19, 65, 'Дефибриллятор автоматический ', 'ДА-Н-02 Аксион', NULL, NULL, NULL, NULL, b'1'),
	(19, 66, 'Дефибриллятор-монитор ', 'ДКИ-Н-11 Аксион', NULL, NULL, NULL, NULL, b'1'),
	(20, 67, 'Концентратор кислородный ', '7F-3A Армед', NULL, NULL, NULL, NULL, b'1'),
	(20, 68, 'Концентратор кислородный ', '8F-5 Армед', NULL, NULL, NULL, NULL, b'1'),
	(20, 69, 'Концентратор кислородный ', '7F-5L Армед', NULL, NULL, NULL, NULL, b'1'),
	(20, 70, 'Концентратор кислородный ', '7F-8L Армед', NULL, NULL, NULL, NULL, b'1'),
	(20, 71, 'Концентратор кислородный ', ' 7F-10L Армед', NULL, NULL, NULL, NULL, b'1'),
	(21, 72, 'Монитор пациента ', 'РС-900s Армед', NULL, NULL, NULL, NULL, b'1'),
	(21, 73, 'Монитор пациента ', 'РС-900sn Армед', NULL, NULL, NULL, NULL, b'1'),
	(21, 74, 'Монитор реанимационный ', 'МИТАР-01-Р-Д', NULL, NULL, NULL, NULL, b'1'),
	(22, 75, 'Аппарат ингаляционного наркоза Медпром ', 'АИНпСП-01/15', NULL, NULL, NULL, NULL, b'1'),
	(23, 76, 'Светильник хирургический ', 'L735 Армед', NULL, NULL, NULL, NULL, b'1'),
	(23, 77, 'Светильник медицинский KaWe Masterlight ', 'LED 10.11020.002', NULL, NULL, NULL, NULL, b'1'),
	(23, 78, 'Светильник хирургический ', 'SD 200 Армед', NULL, NULL, NULL, NULL, b'1'),
	(23, 79, 'Светильник хирургический ', 'L734 Армед', NULL, NULL, NULL, NULL, b'1'),
	(23, 80, 'Светильник медицинский KaWe Masterlight ', 'LED 10.12020.002', NULL, NULL, NULL, NULL, b'1'),
	(23, 81, 'Светильник хирургический ', 'ZD-I Армед', NULL, NULL, NULL, NULL, b'1'),
	(23, 82, 'Светильник медицинский ', 'ЛД-2-ЛЕД Армед', NULL, NULL, NULL, NULL, b'1'),
	(23, 83, 'Крепление настольное KaWe для светильника Masterlight LED', '10.90301.001 ', NULL, NULL, NULL, NULL, b'1'),
	(23, 84, 'Крепление настенное KaWe  для светильника Masterlight LED', '10.90201.001', NULL, NULL, NULL, NULL, b'1'),
	(23, 85, 'Светильник хирургический KLS Martin marLED ', 'E1', NULL, NULL, NULL, NULL, b'1'),
	(25, 86, 'Мундштук для алкотестера ', 'Динго Е-010', NULL, NULL, NULL, NULL, b'1'),
	(25, 87, 'Мундштук для алкотестера', ' Динго Е-200, Е-200 (В)', NULL, NULL, NULL, NULL, b'1'),
	(25, 88, 'Алкотестер', ' Динго Е010', NULL, NULL, NULL, NULL, b'1'),
	(25, 89, 'Алкотестер ', 'Динго Е-200', NULL, NULL, NULL, NULL, b'1'),
	(25, 90, 'Алкотестер ', 'Динго Е-200 с принтером', NULL, NULL, NULL, NULL, b'1'),
	(25, 91, 'Алкотестер ', 'Динго Е-200 (В) с принтером', NULL, NULL, NULL, NULL, b'1'),
	(26, 92, 'Дерматоскоп KaWe Пикколайт ', 'D 01.33100.021', NULL, NULL, NULL, NULL, b'1'),
	(26, 93, 'Дерматоскоп KaWe Евролайт', ' D 30 01.31130.001', NULL, NULL, NULL, NULL, b'1'),
	(27, 94, 'Стетоскоп B.Well ', 'WS-1 (бордовый)', NULL, NULL, NULL, NULL, b'1'),
	(27, 95, 'Стетоскоп B.Well ', 'WS-1 (синий)', NULL, NULL, NULL, NULL, b'1'),
	(27, 96, 'Стетоскоп B.Well ', 'WS-2 (красный)', NULL, NULL, NULL, NULL, b'1'),
	(27, 97, 'Стетоскоп KaWe Single (красный) ', '06.10300.012', NULL, NULL, NULL, NULL, b'1'),
	(27, 98, 'Стетоскоп KaWe Rapport (синий) ', '06.22500.032', NULL, NULL, NULL, NULL, b'1'),
	(28, 99, 'Тонометр механический B.Well ', ' MED-61', NULL, NULL, NULL, NULL, b'1'),
	(28, 100, 'Тонометр механический ', ' 3.02.008 (white head) Армед', NULL, NULL, NULL, NULL, b'1'),
	(28, 101, 'Тонометр механический ', ' 3.02.008 (black head) Армед', NULL, NULL, NULL, NULL, b'1'),
	(28, 102, 'Тонометр механический B.Well', ' MED-63', NULL, NULL, NULL, NULL, b'1'),
	(28, 103, 'Тонометр автоматический B.Well ', ' PRO-33 (M-L) с адаптером', NULL, NULL, NULL, NULL, b'1'),
	(28, 104, 'Тонометр автоматический B.Well ', 'PRO-35 (M-L) с адаптером', NULL, NULL, NULL, NULL, b'1'),
	(29, 105, 'Термометр электронный B.Well', 'WT-05 accuracy', NULL, NULL, NULL, NULL, b'1'),
	(29, 106, 'Термометр электронный B.Well ', 'WT-03 base', NULL, NULL, NULL, NULL, b'1'),
	(29, 107, 'Термометр инфракрасный B.Well', 'WF-1000', NULL, NULL, NULL, NULL, b'1'),
	(29, 108, 'Термометр бесконтактный B.Well ', ' WF-4000', NULL, NULL, NULL, NULL, b'1'),
	(29, 109, 'Термометр бесконтактный Berrcom ', ' JXB-178', NULL, NULL, NULL, NULL, b'1'),
	(29, 110, 'Термометр бесконтактный B.Well ', ' WF-5000', NULL, NULL, NULL, NULL, b'1'),
	(29, 111, 'Термометр инфракрасный Geratherm non Contact ', 'GT 101', NULL, NULL, NULL, NULL, b'1'),
	(31, 112, 'Коктейлер кислородный Семейный', ' Армед', NULL, NULL, NULL, NULL, b'1'),
	(31, 113, 'Коктейлер кислородный ', 'LDPE BAG Армед', 10, 1200.00, NULL, '', b'1'),
	(32, 114, 'Концентратор кислородный ', '7F-3A Армед', NULL, NULL, NULL, NULL, b'1'),
	(32, 115, 'Концентратор кислородный ', '8F-5 Армед', NULL, NULL, NULL, NULL, b'1'),
	(32, 116, 'Концентратор кислородный ', '7F-5L Армед', NULL, NULL, NULL, NULL, b'1'),
	(32, 117, 'Концентратор кислородный ', '7F-8L Армед', NULL, NULL, NULL, NULL, b'1'),
	(32, 118, 'Концентратор кислородный ', ' 7F-10L Армед', NULL, NULL, NULL, NULL, b'1'),
	(33, 119, 'Увлажнитель кислорода ', 'XY-98BII Армед', NULL, NULL, NULL, NULL, b'1'),
	(34, 120, 'Пульсоксиметр ', 'YX200 Армед', NULL, NULL, NULL, NULL, b'1'),
	(34, 121, 'Пульсоксиметр ChoiceMMed ', ' MD300C2', NULL, NULL, NULL, NULL, b'1'),
	(34, 122, 'Пульсоксиметр ', ' YX301 Армед', NULL, NULL, NULL, NULL, b'1'),
	(34, 123, 'Пульсоксиметр ChoiceMMed ', ' MD300C22', NULL, NULL, NULL, NULL, b'1'),
	(34, 124, 'Пульсоксиметр ChoiceMMed ', ' MD300C12', NULL, NULL, NULL, NULL, b'1'),
	(34, 125, 'Пульсоксиметр', ' YX300 Армед', NULL, NULL, NULL, NULL, b'1'),
	(34, 126, 'Пульсоксиметр ', ' YX302 Армед', NULL, NULL, NULL, NULL, b'1'),
	(34, 127, 'Пульсоксиметр ', ' PM-60 Mindray', NULL, NULL, NULL, NULL, b'1'),
	(36, 128, 'Весы для новорожденных ', 'Твес ВЭНд-01 Малыш 15-С-5', NULL, NULL, NULL, NULL, b'1'),
	(36, 129, 'Весы для новорожденных ', ' Твес ВЭНд-01 Малыш 15-С-5-А', NULL, NULL, NULL, NULL, b'1'),
	(36, 130, 'Весы для новорожденных ', ' Твес ВЭНд-01 Малыш 15-С-1/2/5-А', NULL, NULL, NULL, NULL, b'1'),
	(36, 131, 'Весы для новорожденных ', 'Твес ВЭНд-01 Малыш 15-С-5-Рм-А', NULL, NULL, NULL, NULL, b'1'),
	(36, 132, 'Весы для новорожденных ', ' Масса-К В1-15 Саша', NULL, NULL, NULL, NULL, b'1'),
	(36, 133, 'Весы для новорожденных', ' Seca 354', NULL, NULL, NULL, NULL, b'1'),
	(36, 134, 'Весы для новорожденных', ' Твес ВЭНд-01 Малыш 15-С-5-И-Рэ-А', NULL, NULL, NULL, NULL, b'1'),
	(36, 135, 'Весы для новорожденных ', 'Твес ВЭНд-01 Малыш 15-С-5-И-Д-А-СТ', NULL, NULL, NULL, NULL, b'1'),
	(36, 136, 'Весы для новорожденных ', ' Seca 334', NULL, NULL, NULL, NULL, b'1'),
	(37, 137, 'Облучатель фототерапевтический ', 'ОФТН-420/470-02 Аксион', NULL, NULL, NULL, NULL, b'1'),
	(37, 138, 'Облучатель фототерапевтический ', 'ОФТН-03 Аксион', NULL, NULL, NULL, NULL, b'1'),
	(38, 139, 'Стол для санитарной обработки новорожденных ', 'ДЗМО Аист-1', NULL, NULL, NULL, NULL, b'1'),
	(38, 140, 'Стол для санитарной обработки новорожденных', ' ДЗМО Аист-2', NULL, NULL, NULL, NULL, b'1'),
	(39, 141, 'Ростомер детский ', 'Твес РДМ-01', NULL, NULL, NULL, NULL, b'1'),
	(41, 142, 'Облучатель-рециркулятор Кронт ', 'Дезар-802', NULL, NULL, NULL, NULL, b'1'),
	(41, 143, 'Облучатель-рециркулятор ', 'СН 211-115 М/1 Армед (корпус металл)', NULL, NULL, NULL, NULL, b'1'),
	(41, 144, 'Облучатель-рециркулятор МЕГИДЕЗ', ' РБОВ 909-МСК (МСК-909)', NULL, NULL, NULL, NULL, b'1'),
	(41, 145, 'Облучатель-рециркулятор Кронт ', ' Дезар-802п', NULL, NULL, NULL, NULL, b'1'),
	(41, 146, 'Облучатель-рециркулятор ', ' ОРУБн2-01 Кронт (Дезар-2)', NULL, NULL, NULL, NULL, b'1'),
	(41, 147, 'Облучатель-рециркулятор МЕГИДЕЗ Р', 'РБОВ 911-МСК (МСК-911)', NULL, NULL, NULL, NULL, b'1'),
	(41, 148, 'Облучатель-рециркулятор ', 'ОРУБП-3-3 Кронт (Дезар-4)', NULL, NULL, NULL, NULL, b'1'),
	(42, 149, 'Стерилизатор воздушный ', 'ГП-10 МО', NULL, NULL, NULL, NULL, b'1'),
	(42, 150, 'Стерилизатор воздушный ', ' ГП-20 МО', NULL, NULL, NULL, NULL, b'1'),
	(42, 151, 'Стерилизатор воздушный Витязь', 'ГП-20-3', NULL, NULL, NULL, NULL, b'1'),
	(42, 152, 'Стерилизатор воздушный ', ' ГП-40 МО', NULL, NULL, NULL, NULL, b'1'),
	(42, 153, 'Стерилизатор воздушный Витязь ', ' ГП-40-3', NULL, NULL, NULL, NULL, b'1'),
	(42, 154, 'Стерилизатор воздушный ', ' ГП-10 СПУ', NULL, NULL, NULL, NULL, b'1'),
	(42, 155, 'Стерилизатор воздушный Витязь ', ' ШСТ-ГП40-400', NULL, NULL, NULL, NULL, b'1'),
	(42, 156, 'Стерилизатор воздушный', ' ГП-20 СПУ', NULL, NULL, NULL, NULL, b'1'),
	(43, 157, 'Деструктор игл Nulife DOTS с гильотиной', NULL, NULL, NULL, NULL, NULL, b'1'),
	(43, 158, 'Деструктор игл Liston D1101', NULL, NULL, NULL, NULL, NULL, b'1'),
	(43, 159, 'Деструктор игл Diagram Etna 497', NULL, NULL, NULL, NULL, NULL, b'1'),
	(45, 160, 'Печь муфельная ', 'ЭКПС-10/1100 (одноступенчатая)', NULL, NULL, NULL, NULL, b'1'),
	(45, 161, 'Печь муфельная', ' ЭКПС-10/1100 (одноступенчатая, с вытяжкой)', NULL, NULL, NULL, NULL, b'1'),
	(45, 162, 'Печь муфельная', ' ЭКПС-10/1100 (многоступенчатая)', NULL, NULL, NULL, NULL, b'1'),
	(45, 163, 'Печь муфельная ', 'ЭКПС-10/1100 (многоступенчатая, с вытяжкой)', NULL, NULL, NULL, NULL, b'1'),
	(48, 164, 'Ингалятор (небулайзер) компрессорный Aeon', 'A500LW06', NULL, NULL, NULL, NULL, b'1'),
	(48, 165, 'Ингалятор (небулайзер) ', 'ИНГпорт ультразвуковой', NULL, NULL, NULL, NULL, b'1'),
	(48, 166, 'Ингалятор (небулайзер) компрессорный Elisir ', ' RF6 Plus', NULL, NULL, NULL, NULL, b'1'),
	(48, 167, 'Ингалятор (небулайзер) компрессорный ', ' ЭлНеб-Т', NULL, NULL, NULL, NULL, b'1'),
	(49, 168, 'Аппарат КВЧ-терапии Рэсла ', 'КВЧ-НД', NULL, NULL, NULL, NULL, b'1'),
	(50, 169, 'Аппарат магнитотерапии Амкодор-Белвар ', 'АМТ-01', NULL, NULL, NULL, NULL, b'1'),
	(50, 170, 'Аппарат магнитотерапии ЭМА ', ' Полюс-2Д', NULL, NULL, NULL, NULL, b'1'),
	(50, 171, 'Аппарат магнитотерапии ', ' Маг-30', NULL, NULL, NULL, NULL, b'1'),
	(50, 172, 'Аппарат магнитотерапии ', ' Алмаг-01', NULL, NULL, NULL, NULL, b'1'),
	(50, 173, 'Аппарат магнитотерапии ЭМА', ' Полюс-101', NULL, NULL, NULL, NULL, b'1'),
	(50, 174, 'Аппарат магнитотерапии', ' Алмаг-02', NULL, NULL, NULL, NULL, b'1'),
	(51, 175, 'Аппарат ультразвуковой терапии Sonopulse Compact 3 МГц', NULL, NULL, NULL, NULL, NULL, b'1'),
	(51, 176, 'Аппарат ультразвуковой терапии Sonopulse Compact 1 МГц', NULL, NULL, NULL, NULL, NULL, b'1'),
	(51, 177, 'Аппарат ультразвуковой терапии Sonopulse III 1 и 3 МГц', NULL, NULL, NULL, NULL, NULL, b'1'),
	(54, 178, 'Тестовый товар', '123-444-11', 12, 1201.00, NULL, '', b'1'),
	(54, 179, 'qwerty', 'G004000m2', 1, 10001.00, NULL, '', b'1');
/*!40000 ALTER TABLE `aquilon_products` ENABLE KEYS */;

-- Дамп структуры для таблица aquilon_db.aquilon_users
DROP TABLE IF EXISTS `aquilon_users`;
CREATE TABLE IF NOT EXISTS `aquilon_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '0',
  `phone` varchar(200) NOT NULL DEFAULT '0',
  `email` varchar(200) NOT NULL DEFAULT '0',
  `pwd` varchar(200) DEFAULT '0',
  `registr` bit(1) NOT NULL DEFAULT '\0',
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `discont` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы aquilon_db.aquilon_users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `aquilon_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `aquilon_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
