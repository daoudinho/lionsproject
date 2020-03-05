-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 21 fév. 2020 à 21:47
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nicedoyen`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `last_edition` date DEFAULT NULL,
  `next_edition` date DEFAULT NULL,
  `file` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `last_edition`, `next_edition`, `file`) VALUES
(1, 'Luna Park', '&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;', '2019-12-16', '2020-04-25', '169386.jpg'),
(2, 'Event 2', '   At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', '2020-01-02', '2020-01-30', 'adobestock-243290527-1280x800.jpeg'),
(3, 'La foire du trone', 'De la apoteósis de su hat-trick contra el Galatasaray en otra mágica noche europea en el Bernabéu a desaparecer de las convocatorias de Zidane. En la tarde de este viernes la lista del Madrid para el Levante (sábado, 21:00 horas, Movistar LaLiga) mostraba una ausencia que sorprendentemente se ha convertido en habitual, la de Rodrygo Goes (18 años). Es la tercera convocatoria consecutiva (y la cuarta seguida en Liga) en la que no aparece el brasileño.\r\n\r\nUn bache después de que en muchos momentos de la temporada se posicionara por delante de su compatriota Vinicius en las preferencias de su entrenador y en minutos. Al contrario que ahora, la rareza durante semanas era su ausencia en el once. En el mes de febrero, solo ha disfrutado de 14 minutos de juego.\r\n\r\nUna circunstancia que, sin embargo, según ha podido saber AS, no le preocupa lo más mínimo. Rodrygo está viviendo con cautela su primera temporada en Europa, un poco montaña rusa. Igual que mantuvo los pies en el suelo cuando las titularidades, los goles y los elogios, ahora no pierde la perspectiva. El ex del Santos hubiera firmado estar en este punto a estas alturas, con 1.010 minutos con el primer equipo en cuatro competiciones, Liga, Champions, Copa y Supercopa de España.', '2020-02-01', '2020-02-29', NULL),
(5, 'coupe du monde', '&quot;No me gusta referirme a un jugador en concreto porque hay muchos y ganarse el espacio no es fácil&quot;, explicó el entrenador, &quot;y todos tienen que competir con jugadores de altísimo nivel&quot;.\r\n\r\n&quot;Riqui Puig lo está haciendo bien, igual que jugadores como Collado, Kike Siverio o Ronald Araújo. Potencialmente tienen condiciones y pueden estar ahí, pero en un momento determinado tengo que sacar a un profesional para que jueguen&quot;. \r\n\r\n&quot;Espero tener margen en algún momento para darles minutos... salvo que algunos de la primera plantilla se me relajen, entonces jugarán los chavales&quot;. \r\n\r\nEn ese sentido, valoró positivamente la entrada en la lista de Sergio Akieme, lateral zurdo de 22 años y nacido en Madrid. &quot;Está preparado para ayudarnos en lo que sea necesario&quot;, dijo. ', '2020-02-13', '2020-03-13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `activate` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`, `activate`) VALUES
(1, 'test', 'test@test.com', '$2y$10$Iwgc7rqmzJ85xkV0fltyw.bBbVHheg1oRFti0AfSms95coqcDGjTm', 0, 0),
(2, 'daoud', 'da@test.fr', '$2y$10$0oag3tGACTS3j3f4WU/H.OUf/DLChS8S145IG0h0c7BtS6pDl6k/y', 0, 0),
(3, 'daoud', 'ja@h.fr', '$2y$10$vvrslTVisli3/slJ6Weoxe3VHkKB1rG6ImlUzV7.FMUIHFLG8MTtW', 0, 0),
(4, 'test', 'test@test.fr', '$2y$10$r/.gjQDT2FTEytumYB3rme9CMcS52kiI8R2vQA3v4QVOwUa3RJ7iC', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
