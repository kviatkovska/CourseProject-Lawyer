
CREATE TABLE IF NOT EXISTS `employees` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `employees` (`e_id`, `e_name`, `email`, `login`, `password`) VALUES
(1, 'admin', 'admin@example.com', 'admin', 'admin');


CREATE TABLE IF NOT EXISTS `lawyers` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` text NOT NULL,
  `experience` text NOT NULL,
  `qualification` text NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`l_id`),
  KEY `s_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;


INSERT INTO `lawyers` (`l_id`, `l_name`, `experience`, `qualification`, `service_id`) VALUES
(1, 'Штогрін Вікторія', '9 років ', 'Консультування та розроблення договорів', 1),
(2, 'Чехомський Олег', '12 років', 'Консультування та розроблення договорів', 1),
(3, 'Філіпова Надія', '8 років', 'Дозвільна діяльність та реєстрація бізнесу', 2),
(4, 'Семенко Віктор', '11 років', 'Дозвільна діяльність та реєстрація бізнесу', 2),
(5, 'Ромашко Людмила', '6 років', 'Судовий спір та виконавче провадження', 3),
(6, 'Питель Володимир', '13 років', 'Судовий спір та виконавче провадження', 3),
(7, 'Пашкевич Ірина ', '8 років', 'Сімейні справи', 4),
(8, 'Пасічник Катерина', '7 років', 'Сімейні справи', 4),
(9, 'Орловська Ярослава', '7 років', 'ДТП', 5),
(10, 'Оніщук Валерій', '10 років', 'ДТП', 5),
(11, 'Огородник Максим ', '10 років', 'Земельні і житлові спори', 6),
(12, 'Мельничук Єлизавета', '11 років', 'Земельні і житлові спори', 6),
(13, 'Луцюк Микола', '14 років', 'Банківські спори', 7),
(14, 'Іващенко Ірина ', '13 років', 'Сфера інтелектуальної власності', 8);

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `lawyer_id` varchar(11) NOT NULL,
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;


INSERT INTO `services` (`s_id`, `s_name`, `price`, `lawyer_id`) VALUES
(1, 'Консультування та розроблення договорів', 'від 500 грн.', '1, 2'),
(2, 'Дозвільна діяльність та реєстрація бізнесу', 'від 1000 грн.', '3, 4'),
(3, 'Судовий спір та виконавче провадження', 'від 2000 грн.', '5, 6'),
(4, 'Сімейні справи', 'від 500 грн.', '7, 8'),
(5, 'ДТП', 'від 500 грн.', '8, 10'),
(6, 'Земельні і житлові спори', 'від 1500 грн.', '11, 12'),
(7, 'Банківські спори', 'від 500 грн.', '13'),
(8, 'Сфера інтелектуальної власності', 'від 200 грн.', '14');
