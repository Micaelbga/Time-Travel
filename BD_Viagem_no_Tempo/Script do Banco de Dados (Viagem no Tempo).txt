CREATE DATABASE  IF NOT EXISTS `viagem_no_tempo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `viagem_no_tempo`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: viagem_no_tempo
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ator`
--

DROP TABLE IF EXISTS `ator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ator` (
  `id_ator` int(11) NOT NULL AUTO_INCREMENT,
  `nome_ator` varchar(50) DEFAULT NULL,
  `personagem_ator` varchar(50) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `frase` text,
  PRIMARY KEY (`id_ator`)
) ENGINE=MyISAM AUTO_INCREMENT=396 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ator`
--

LOCK TABLES `ator` WRITE;
/*!40000 ALTER TABLE `ator` DISABLE KEYS */;
INSERT INTO `ator` VALUES (1,'Eidan Gallagher','The boy','2003-09-18',NULL),(2,'Ellen Page','Vanya Hargreeves','1987-02-21',NULL),(3,'Robert Sheehan','Klaus Hargreeves','1988-01-07',NULL),(4,'Tom Hopper','Luther Hargreeves','1985-01-28',NULL),(5,'Emmy Raver-Lampman','Allison Hargreeves','1988-09-05',NULL),(6,'David Castaneda','Diego Hargreeves','1989-10-24',NULL),(7,'Justin H. Min','Ben Hargreeves','1990-03-20',NULL),(8,'Mike Myers','Shrek','1963-05-25','Mike Myers - Shrek: \"Sabe a melhor parte do dia ? Foi que eu pude me apaixonar por você mais uma vez\".'),(9,'Cameron Dias','Princesa Fiona','1972-08-30',NULL),(10,'Eddie Murphy','Burro','1961-04-03',NULL),(11,'Walth Dohrn','Rumplestiltskin','1972-09-07',NULL),(12,'Ryan Reynolds','Deadpool','1976-10-23','Ryan Reynolds - Deadpool: \"Não para de estudar não menino, ou para eu parei e virei x-man\".'),(13,'Josh Brolin','Cable','1968-02-12',NULL),(14,'Zazie Beetz','Dominó','1991-06-01',NULL),(15,'Morena Baccarian','Vanessa Carlysle','1979-06-02',NULL),(16,'Mone Kamishiraishi','Mitsuha Miyamizu','1998-01-27',NULL),(17,'Ryūnosuke Kamiki','Taki Tachibana','1993-05-19','Ryūnosuke Kamiki - Taki Tachibana: \"Eu posso... saber o seu nome ?\".'),(18,'Aoi Yuki','Sayaka Natori','1992-03-27',NULL),(19,'Kaito Ishikawa','Shinta Takagi','1993-10-13',NULL),(20,'Will Smith','Agente J','1968-09-25',NULL),(21,'Tommy Lee Jones','Agente K','1946-09-15','Tommy Lee Jones - Agente K: \"Não faça perguntas quando não quiser saber as respostas\".'),(22,'Emma Thompson','Agente O','1959-04-15',NULL),(23,'Michael Fassbender','Callum Lynch','1977-04-02','Michael Fassbender - Callum Lynch: \"eu tô aqui pra ser curado da violência, mas quem vai curar você ?\"'),(24,'Marion Cotillard','Dr. Sophia Rikkin','1975-09-30',NULL),(25,'Jeremy Irons','Alan Rikkin','1948-09-19',NULL),(26,'Ariene Labed','María','1984-05-08',NULL),(27,'Greg Cipes','Mutano','1980-01-04',NULL),(28,'Scott Menville','Robin','1971-02-12','Scott Menville - Robin: \"Por que se o Aquaman pode ter um filme qualquer um pode\".'),(29,'Tara Strong','Ravena','1973-02-12',NULL),(30,'Khary Payton','Cyborgue','1972-05-16',NULL),(31,'Hynden Walch','Estelar','1971-02-01',NULL),(32,'Kevin McKidd','Batman','1973-08-09',NULL),(33,'Justin Chambers','Flash','1970-07-11',NULL),(34,'C. Thomas Howell','Professor Zoom','1966-12-07',NULL),(35,'Nathan Fillion','Lanterna Verde','1971-03-27',NULL),(36,'Grant Gustin','Flash','1990-01-14','Grant Gustin - Barry Allen: \"Eu sou o Barry Allen e eu sou homem mais rápido vivo\".'),(37,'Candice Patton','Iris West','1988-06-24',NULL),(38,'Danielle Panabaker','Caitlin Snow','1987-09-19',NULL),(39,'Tom Cavangh','Flash Reverso','1963-10-26',NULL),(40,'Carlos Valdes','Cisco Ramon','1989-04-20',NULL),(41,'Jesse L. Martin','Detetive West','1969-01-18',NULL),(42,'Eva Green','Senhorita Peregrine','1980-07-06',NULL),(43,'Asa Butterfield','Jacob Portman','1997-04-01',NULL),(44,'Ella Purnell','Emma Bloom','1966-09-17',NULL),(45,'Samuel L. Jackson','Barron','1948-12-21',NULL),(46,'Jessica Rothe','Tree Gelbman','1987-05-28','Jessica Rothe - Tree Gelbman: \"Eu não acredito nisso, é meu aniversário de 18 anos de novo\".'),(47,'Israel Broussard','Carter Davis','1994-08-22',NULL),(48,'Ruby Wylder Rivera Modine','Lori Spengler	','1990-07-31',NULL),(49,'Charles Aitken','Gregory Butler','1979-08-17',NULL),(50,'Michael J. Fox','Marty McFly','1961-06-09',NULL),(51,'Christopher Lloyd','Doctor Emmett','1938-10-22','Christopher Lloyd - Doctor Emmett: \"Seu futuro ainda não está escrito, o de ninguém está. Seu futuro será o que você quiser, então faça dele algo bom\".'),(52,'Lea Thompson','Lorraine Baines McFly','1961-05-31',NULL),(53,'Crispim Glover','George McFly','1964-04-20',NULL),(54,'Jake Gyllenhaal','Donald J. \"Donnie\" Darko','1980-12-19','Jake Gyllenhaal - Donnie Darko: \"Acho que algumas pessoas já nascem com a tragédia no sangue\".'),(55,'Jena Malone','Gretchen Ross','1984-11-21',NULL),(56,'Maggie Gyllenhaal','Elizabeth Darko','1977-11-16',NULL),(57,'Drew Barrymore','Karen Pomeroy','1975-02-22',NULL),(58,'Eri Kitamura','Sayaka Miki','1987-08-16',NULL),(59,'Lauren Landa','Kyoko Sakura','1988-06-09',NULL),(60,'Sarah Anne Williams','Sayaka Miki','1980-03-22',NULL),(61,'Carrie Keranen','Mami Tomoe','1987-01-16',NULL),(62,'Aoi Yūki','Madoka Kaname','1992-03-27',NULL),(63,'Kaori Mizuhashi','Mami Tomoe','1974-08-28',NULL),(64,'Christine Marie Cabanos','Madoka Kaname','1998-07-12',NULL),(65,'Cristina Valenzuela','Homura Akemi','1987-07-11','Cristina Valenzuela	- Homura Akemi: \"Não se esqueça, em algum lugar, alguém está lutando por você, enquanto se lembrar dela, você não estará sozinho\".'),(66,'Haruko Momoi','Faris NyanNyan','1977-12-14',NULL),(67,'Masaki Terasoma','Yuugo Tennouji','1962-05-08',NULL),(68,'Trina Nishimura','Kurisu Makise','1983-08-08',NULL),(69,'Saori Goto','Moeka Kiryū','1987-02-08',NULL),(70,'Cherami Leigh','Amane Suzuha','1988-07-19',NULL),(71,'Ashly Burch','Mayuri Shiina','1990-06-19',NULL),(72,'Yū Kobayashi','Ruka Urushibara','1982-02-05',NULL),(73,'Asami Imai','Kurisu Makise','1977-05-16',NULL),(74,'Yukari Tamura','Suzuha Amane','1976-02-27',NULL),(75,'Kana Hanazawa','Mayuri Shina','1989-02-25','Kana Hanazawa - Mayuri Shina: \"Tuturu mayushi desu\".'),(76,'Mamoru Miyano','Rintarō Okabe','1983-06-08',NULL),(77,'Kenyuu Horiuchi','Wilhelm van Astrea','1957-07-30',NULL),(78,'Keiji Fujiwara','Aldebaran','1964-10-05',NULL),(79,'Kana Ueda','Anastasia Hoshin','1980-06-09',NULL),(80,'Inori Minase','Rem','1995-12-02',NULL),(81,'Chinatsu Akasaki','Felt','1987-08-10',NULL),(82,'Arai Satomi','Beatrice','1980-07-04',NULL),(83,'Yuusuke Kobayashi','Subaru Natsuki','1985-03-25','Yuusuke Kobayashi - Subaru Natsuki: \"Eu amo a Emília\".'),(84,'Rie Takahashi','Emilia','1994-02-27',NULL),(85,'Ayane Sakura','Rio Ueda','1994-01-29',NULL),(86,'Kikuko Inoue','Naho Mother','1964-09-25',NULL),(87,'Tomohiro Tsuboi','Takamiya Father ','1971-09-30',NULL),(88,'Kana Hanazawa','Naho Takamiya','1989-02-25',NULL),(89,'Makoto Furukawa','Hiroto Suwa','1989-09-29',NULL),(90,'Kazuyuki okitsu','Saku Hagita','1980-03-08',NULL),(91,'Seiichiro Yamashita','Kakeru Naruse','1992-05-21','Seiichiro Yamashita - Kakeru Naruse: \"Eu quero ser mais forte, eu quero ser feliz\".'),(92,'Natsumi Takamori','Azusa Murasaka','1987-02-14',NULL),(93,'Rika Kinugawa','China Takako','1993-12-17',NULL);
/*!40000 ALTER TABLE `ator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atuação`
--

DROP TABLE IF EXISTS `atuação`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atuação` (
  `id_atuação` int(11) NOT NULL AUTO_INCREMENT,
  `nome_ator` varchar(50) NOT NULL,
  `serie_ou_filme` varchar(50) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL,
  `id_serie` int(11) DEFAULT NULL,
  `id_ator` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_atuação`),
  KEY `id_filme` (`id_filme`),
  KEY `id_serie` (`id_serie`),
  KEY `id_ator` (`id_ator`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atuação`
--

LOCK TABLES `atuação` WRITE;
/*!40000 ALTER TABLE `atuação` DISABLE KEYS */;
INSERT INTO `atuação` VALUES (1,'Cameron Dias','Shrek Para sempre',1,NULL,9),(2,'Eddie Murphy','Shrek Para sempre',1,NULL,10),(3,'Walth Dohrn','Shrek Para sempre',1,NULL,11),(4,'Eidan Gallagher',' The Umbrela Academy',NULL,1,1),(5,'Ellen Page',' The Umbrela Academy',NULL,1,2),(6,'Robert Sheehan',' The Umbrela Academy',NULL,1,3),(7,'Tom Hopper',' The Umbrela Academy',NULL,1,4),(8,'Emmy Raver-Lampman',' The Umbrela Academy',NULL,1,5),(9,'David Castaneda',' The Umbrela Academy',NULL,1,6),(10,'Justin H. Min',' The Umbrela Academy',NULL,1,7),(11,'Ryan Reynolds','Deadpool 2',2,NULL,12),(12,'Josh Brolin','Deadpool 2',2,NULL,13),(13,'Zazie Beetz','Deadpool 2',2,NULL,14),(14,'Morena Baccarian','Deadpool 2',2,NULL,15),(15,'Mone Kamishiraishi','Your Name',3,NULL,16),(16,'Ryūnosuke Kamiki','Your Name',3,NULL,17),(17,'Aoi Yuki','Your Name',3,NULL,18),(18,'Kaito Ishizawa','Your Name',3,NULL,19),(19,'Will Smith','M.I.B 3',4,NULL,20),(20,'Tommy Lee Jones','M.I.B 3',4,NULL,21),(21,'Josh Brolin','M.I.B 3',4,NULL,13),(22,'Emma Thompson','M.I.B 3',4,NULL,22),(23,'Michael Fassbender','Assassins Creed',5,NULL,23),(24,'Marion Cotillard','Assassins Creed',5,NULL,24),(25,'Jeremy Irons','Assassins Creed',5,NULL,25),(26,'Ariene Labed','Assassins Creed',5,NULL,26),(27,'Greg Cipes',' Os jovens titãs em ação',6,NULL,27),(28,'Scott Menville',' Os jovens titãs em ação',6,NULL,28),(29,'Tara strong',' Os jovens titãs em ação',6,NULL,29),(30,'Khary Payton',' Os jovens titãs em ação',6,NULL,30),(31,'Hynden Walch',' Os jovens titãs em ação',6,NULL,31),(32,'Kevin McKidd','Liga da justiça: Flashpoint',7,NULL,32),(33,'Justin Chambers','Liga da justiça: Flashpoint',7,NULL,33),(34,'C. Thomas Howell','Liga da justiça: Flashpoint',7,NULL,34),(35,'Nathan Fillion','Liga da justiça: Flashpoint',7,NULL,35),(36,'Grant Gustin','The Flash',NULL,2,36),(37,'Candice Patton','The Flash',NULL,2,37),(38,'Danielle Panabaker','The Flash',NULL,2,38),(39,'Tom Cavangh','The Flash',NULL,2,39),(40,'Carlos Valdes','The Flash',NULL,2,40),(41,'Jesse L. Martin','The Flash',NULL,2,41),(42,'Eva Green','O lar das crianças peculiares',8,NULL,42),(43,'Asa Butterfield','O lar das crianças peculiares',8,NULL,43),(44,'Ella Purnell','O lar das crianças peculiares',8,NULL,44),(45,'Samuel L. Jackson','O lar das crianças peculiares',8,NULL,45),(46,'Jessica Rothe','A morte te dá parabéns',9,NULL,46),(47,'Israel Broussard','A morte te dá parabéns',9,NULL,47),(48,'Ruby Wylder Rivera Modine','A morte te dá parabéns',9,NULL,48),(49,'Charles Aitken','A morte te dá parabéns',9,NULL,49),(50,'Michael J. Fox','De volta para o futuro',10,NULL,50),(51,'Christopher Lloyd','De volta para o futuro',10,NULL,51),(52,'Lea Thompson','De volta para o futuro',10,NULL,52),(53,'Crispim Glover','De volta para o futuro',10,NULL,53),(54,'Jake Gyllenhaal','Donnie Darko',11,NULL,54),(55,'Jena Malone','Donnie Darko',11,NULL,55),(56,'Maggie Gyllenhaal','Donnie Darko',11,NULL,56),(57,'Drew Barrymore','Donnie Darko',11,NULL,57),(58,'Mike Myers','Shrek para sempre',1,NULL,8),(59,'Rika Kinugawa','Orange',NULL,3,93),(60,'Seiichiro Yamashita','Orange',NULL,3,91),(61,'Natsumi Takamori','Orange',NULL,3,92),(62,'Kazuyuki okitsu','Orange',NULL,3,90),(63,'Makoto Furukawa','Orange',NULL,3,89),(64,'Kana Hanazawa','Orange',NULL,3,88),(65,'Tomohiro Tsuboi','Orange',NULL,3,87),(66,'Ayane Sakura','Orange',NULL,3,85),(67,'Kikuko Inoue','Orange',NULL,3,86),(68,'Rie Takahashi','Re: Zero',NULL,5,84),(69,'Yuusuke Kobayashi','Re: Zero',NULL,5,83),(70,'Arai Satomi','Re: Zero',NULL,5,82),(71,'Chinatsu Akasaki','Re: Zero',NULL,5,81),(72,'Inori Minase','Re: Zero',NULL,5,80),(73,'Kana Ueda','Re: Zero',NULL,5,88),(74,'Keiji Fujiwara','Re: Zero',NULL,5,78),(75,'Kenyuu Horiuchi','Re: Zero',NULL,5,77),(76,'Mamoru Miyano','Stein Gates',NULL,4,76),(77,'Kana Hanazawa','Stein Gates',NULL,4,75),(78,'Asami Imai','Stein Gates',NULL,4,73),(79,'Yukari Tamura','Stein Gates',NULL,4,74),(80,'Ashly Burch','Stein Gates',NULL,4,71),(81,'Yū Kobayashi','Stein Gates',NULL,4,72),(82,'Trina Nishimura','Stein Gates',NULL,4,68),(83,'Saori Goto','Stein Gates',NULL,4,69),(84,'Cherami Leigh','Stein Gates',NULL,4,70),(85,'Haruko Momoi','Stein Gates',NULL,4,66),(86,'Masaki Terasoma','Stein Gates',NULL,4,67),(87,'Cristina Valenzuela','Madoka Mágica',NULL,6,65),(88,'Christine Marie Cabanos','Madoka Mágica',NULL,6,64),(89,'Kaori Mizuhashi','Madoka Mágica',NULL,6,63),(90,'Aoi Yūki','Madoka Mágica',NULL,6,62),(91,'Carrie Keranen','Madoka Mágica',NULL,6,61),(92,'Lauren Landa','Madoka Mágica',NULL,6,59),(93,'Sarah Anne Williams','Madoka Mágica',NULL,6,60),(94,'Eri Kitamura','Madoka Mágica',NULL,6,58);
/*!40000 ALTER TABLE `atuação` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filme`
--

DROP TABLE IF EXISTS `filme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filme` (
  `id_filme` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text,
  `nome_programa` varchar(50) NOT NULL,
  `ano_lançamento` year(4) DEFAULT NULL,
  `nome_episodio` varchar(50) DEFAULT NULL,
  `num_episodio` varchar(10) DEFAULT NULL,
  `temporada` varchar(10) DEFAULT NULL,
  `cena_viagem` text,
  `tipo_viagem` varchar(150) DEFAULT NULL,
  `mecanismo` varchar(150) DEFAULT NULL,
  `frase` text,
  `ator1` varchar(50) DEFAULT NULL,
  `ator2` varchar(50) DEFAULT NULL,
  `ator3` varchar(50) DEFAULT NULL,
  `ator4` varchar(50) DEFAULT NULL,
  `ator5` varchar(50) DEFAULT NULL,
  `características_especiais1` varchar(50) DEFAULT NULL,
  `características_especiais2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_filme`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filme`
--

LOCK TABLES `filme` WRITE;
/*!40000 ALTER TABLE `filme` DISABLE KEYS */;
INSERT INTO `filme` VALUES (1,'https://lojasaraiva.vteximg.com.br/arquivos/ids/1861846/1000244747.jpg?v=637005653690570000','Shrek para sempre',2010,NULL,NULL,NULL,'após assinar um contrato com Rumpelstiltskin Shrek é enviado para outra linha do tempo onde ele volta a ser um simples ogro e não conhece suas esposa, não teve seus filhos e seus amigos não lhe reconhecem oque acaba gerando grandes confusões','Volta física','Magia','Mike Myers - Shrek: \"Sabe a melhor parte do dia ? Foi que eu pude me apaixonar por você mais uma vez\".','Mike Myers ','Cameron Dias ','Eddie Murphy ','Walth Dohrn ',NULL,'Criação de realidade alternativa',NULL),(2,'https://br.web.img3.acsta.net/c_215_290/pictures/18/04/19/15/31/2232385.jpg','Deadpool 2',2018,NULL,NULL,NULL,'Nessa cena Cable viaja no tempo após perder sua filha e esposa queimadas por um mutante oculto e após isso ele se vê nos tempos atuais onde ele deve caçar o mutante que assassinou sua família.','Volta física','Aparelhagem de viagem no tempo','Ryan Reynolds - Deadpool: \"Não para de estudar não menino, ou para eu parei e virei x-man\".','Ryan Reynolds ','Josh Brolin ','Zazie Beetz ','Morena Baccarian ',NULL,'Criação de realidade alternativa','paradoxo '),(3,'https://m.media-amazon.com/images/I/51RqKQYt8cL.jpg','Your Name',2016,NULL,NULL,NULL,'Durante algumas noites os dois jovens protagonistas inexplicávelmente trocam de corpo vivendo um no corpo do outro com 3 anos de diferença de época, um estando 3 anos no futuro e outro 3 anos no passado','Volta pela consciência','Inexplicável ','Ryūnosuke Kamiki - Taki Tachibana: \"Eu posso... saber o seu nome ?\".','Mone Kamishiraishi ','Ryūnosuke Kamiki ','Aoi Yuki ','Kaito Ishizawa ',NULL,'paradoxo',NULL),(4,'https://s2.glbimg.com/kLdWY_Eell2yMkrsunVdSzgIwv4=/362x536/https://s2.glbimg.com/bxrBlRdfAbJfRhN8rVO7irewWDs=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2019/i/P/wrTLe6SOCpVF6IA0vEZg/2018-172-homens-de-preto-3-poster.jpg','M.I.B 3',2012,NULL,NULL,NULL,'Para impedir o alienígena que pretende matar o Agente K , o Agente J decide voltar no tempo usando um mecanismo que só funciona caso ele esteja em queda livre de um lugar muito alto e assim ele faz se jogando de um prédio e voltando ao passado para salvar K','Volta física','Maquina','Tommy Lee Jones - Agente K: \"Não faça perguntas quando não quiser saber as respostas\".','Will Smith ','Tommy Lee Jones ','Josh Brolin ','Emma Thompson ',NULL,'paradoxo',NULL),(5,'https://upload.wikimedia.org/wikipedia/pt/thumb/a/a0/Assassin%27s_Creed_film_poster.jpg/250px-Assassin%27s_Creed_film_poster.jpg','Assassins Creed',2016,NULL,NULL,NULL,'Callum Lynch usa do aparelho animus para transferir sua consciência a um programa que revive a vida de seu antepassado Aguilar e com isso a vida de um assassino.','Volta pela consciência','Máquina ','Michael Fassbender - Callum Lynch: \"Eu tô aqui pra ser curado da violência, mas quem vai curar você ?\".','Michael Fassbender','Marion Cotillard ','Jeremy Irons ','Ariene Labed  ',NULL,'Não',NULL),(6,'https://br.web.img2.acsta.net/pictures/18/08/22/15/02/4052942.jpg','Os Jovens titãs em ação',2018,NULL,NULL,NULL,'Após decidirem derrotar e piorar ainda mais os passados dos super heróis os titãs para se fazerem mais importantes voltam ao passado usando de tricíclicos e de tanto pedalar voltam ao passado.','Volta física','Máquina','Scott Menville - Robin: \"Por que se o Aquaman pode ter um filme qualquer um pode\".\r\n','Greg Cipes','Scott Menville ','Tara strong ','Khary Payton  ','Hynden Walch ','Criação de realidade  alternativa',NULL),(7,'https://images-na.ssl-images-amazon.com/images/I/81LG8+sYUgL.jpg','Flashpoint',2013,NULL,NULL,NULL,'após uma luta conturbada e um dia cheio flash decide dar a volta ao mundo em alta velocidade, fazendo com que ele acabe em outra linha temporal, onde diversas coisas estão diferentes.','Volta física','Fenômeno físico desconhecido','Kevin Mckidd - Batman: \"O único jeito de salvar o mundo é fazer ele continuar existindo, pega isso e corra\".\r\n','Kevin McKidd','Justin Chambers','C. Thomas Howell ','Nathan Fillion  ',NULL,'Criação de realidade  alternativa','paradoxo '),(8,'https://pm1.narvii.com/6682/8b6454bba17ae6fb0b5bf3ce56504f5121be7e31_00.jpg','O lar das crianças peculiares',2016,NULL,NULL,NULL,'todos os dias no orfanato da senhora peregrine eles vivem o mesmo dia de um bombardeio da segunda guerra, porém no momento do bombardeio a senhora peregrine volta o relógio voltando todo o dia ao início.','Volta física','Poder','Eva Green - Senhorita Peregrine: \"Foi um privilégio cuidar de todos vocês, adeus minhas crianças\".','Eva Green','Asa Butterfly','Ella Purnel','Samuel L. Jackson ',NULL,'Criação de realidade  alternativa',NULL),(9,'https://br.web.img3.acsta.net/pictures/17/07/13/21/40/079851.jpg','A morte te dá parabéns',2017,NULL,NULL,NULL,'Todas as vezes que a protagonista vem a falecer de alguma forma brutal ou macabra ela volta ao início de seu dia sendo obrigada a vivelo do início','Loop','inexplicável','Jessica Rothe - Tree Gelbman: \"Eu não acredito nisso, é meu aniversário de 18 anos de novo\".\r\n','Tree Gelbman','Israel Broussard','Ruby Wylder Rivera Modine','Charles Aitken',NULL,'Criação de realidade  alternativa',NULL),(10,'https://upload.wikimedia.org/wikipedia/pt/9/97/BackFuturePoster.jpg','De volta pro futuro',1985,NULL,NULL,NULL,'Após um erro de cálculos na experiência do Doutor Brown, o DeLorean DMC-12 leva o jovem McFly para 1950 e com isso ele tem que fazer seus pais se apaixonarem novamente','Volta física','Máquina','Christopher Lloyd - Doctor Emmett: \"Seu futuro ainda não está escrito, o de ninguém está. Seu futuro será o que você quiser, então faça dele algo bom\".\r\n','Michael J. Fox','Christopher Lloyd','Lea Thompson','Crispim Glover',NULL,'paradoxo',NULL),(11,'https://upload.wikimedia.org/wikipedia/pt/thumb/5/58/Donnie_Darko.jpg/220px-Donnie_Darko.jpg','Donnie Darko',2001,NULL,NULL,NULL,'Após uma turbina de avião cair em sua casa devido a grande velocidade da turbina donie darko é lançado ao passado sem saber então passando a presenciar diversos fenômenos','Volta física','Inexplicável','Jake Gyllenhaal - Donnie Darko: \"Acho que algumas pessoas já nascem com a tragédia no sangue\".','Jake Gyllenhaal','Jena Malone','Maggie Gyllenhaal','Drew Barrymore',NULL,'paradoxo',NULL);
/*!40000 ALTER TABLE `filme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frase_caracteristica`
--

DROP TABLE IF EXISTS `frase_caracteristica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `frase_caracteristica` (
  `id_frase` int(11) NOT NULL AUTO_INCREMENT,
  `ator_frase` varchar(50) DEFAULT NULL,
  `personagem` varchar(50) DEFAULT NULL,
  `frase` text,
  `id_ator` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_frase`),
  KEY `nome_ator` (`id_ator`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frase_caracteristica`
--

LOCK TABLES `frase_caracteristica` WRITE;
/*!40000 ALTER TABLE `frase_caracteristica` DISABLE KEYS */;
INSERT INTO `frase_caracteristica` VALUES (1,'Mike Myers','Shrek','\"Sabe a melhor parte do dia ? Foi que eu pude me apaixonar por você mais uma vez\"',8),(2,'Ryan Reynolds','Deadpool','\"Não para de estudar não menino, ou para eu parei e virei x-man\"',12),(3,'Ryūnosuke Kamiki','Taki Tachibana','\"Eu posso... saber o seu nome ?\"',17),(4,'Tommy Lee Jones','Agente K','\"Não faça perguntas quando não quiser saber as respostas\"',21),(5,'Scott Menville','Robin','\"Por que se o Aquaman pode ter um filme qualquer um pode\"',28),(6,'Grant Gustin','Barry Allen',' \"Eu sou o Barry Allen e eu sou homem mais rápido vivo\"',36),(7,'Jessica Rothe','Tree Gelbman','\"Eu não acredito nisso, é meu aniversário de 18 anos de novo\"',46),(8,'Christopher Lloyd','Doctor Emmett','\"Seu futuro ainda não está escrito, o de ninguém está. Seu futuro será o que você quiser, então faça dele algo bom\"',51),(9,'Jake Gyllenhaal','Donnie Darko','\"Acho que algumas pessoas já nascem com a tragédia no sangue\"',54),(10,'Michael Fassbender','Callum Lynch','\"Eu tô aqui pra ser curado da violência, mas quem vai curar você ?\".',23),(12,'Seiichiro Yamashita','Kakeru Naruse','\"Eu quero ser mais forte, eu quero ser feliz\".',91),(13,'Yuusuke Kobayashi','Subaru Natsuki','\"Eu amo a Emília\".',83),(14,'Kana Hanazawa','Mayuri Shina','\"Tuturu mayushi desu\".',88),(15,'Cristina Valenzuela','Homura Akemi','\"Não se esqueça, em algum lugar, alguém está lutando por você, enquanto se lembrar dela, você não estará sozinho\".',65);
/*!40000 ALTER TABLE `frase_caracteristica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plataforma`
--

DROP TABLE IF EXISTS `plataforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plataforma` (
  `id_plataforma` int(11) NOT NULL AUTO_INCREMENT,
  `nome_plataforma` varchar(50) NOT NULL,
  `link` text,
  PRIMARY KEY (`id_plataforma`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plataforma`
--

LOCK TABLES `plataforma` WRITE;
/*!40000 ALTER TABLE `plataforma` DISABLE KEYS */;
INSERT INTO `plataforma` VALUES (1,'Netflix','https://www.netflix.com/br/'),(2,'YouTube','https://www.youtube.com'),(3,'Google Play Filmes','https://play.google.com/store/movies'),(4,'Amazon Prime','https://www.primevideo.com'),(5,'HBO Go','https://www.hbogo.com.br'),(6,'Crunchyroll','https://www.crunchyroll.com/pt');
/*!40000 ALTER TABLE `plataforma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serie`
--

DROP TABLE IF EXISTS `serie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text,
  `nome_serie` varchar(50) NOT NULL,
  `ano_lançamento` year(4) DEFAULT NULL,
  `nome_episodio` varchar(50) DEFAULT NULL,
  `num_episodio` varchar(10) DEFAULT NULL,
  `temporada` varchar(10) DEFAULT NULL,
  `dados_episódio` text,
  `tipo_viagem` varchar(150) DEFAULT NULL,
  `mecanismo` varchar(150) DEFAULT NULL,
  `frase` text,
  `ator1` varchar(100) DEFAULT NULL,
  `ator2` varchar(100) DEFAULT NULL,
  `ator3` varchar(100) DEFAULT NULL,
  `ator4` varchar(100) DEFAULT NULL,
  `ator5` varchar(100) DEFAULT NULL,
  `ator6` varchar(100) DEFAULT NULL,
  `ator7` varchar(100) DEFAULT NULL,
  `ator8` varchar(100) DEFAULT NULL,
  `ator9` varchar(100) DEFAULT NULL,
  `ator10` varchar(100) DEFAULT NULL,
  `ator11` varchar(100) DEFAULT NULL,
  `características_especiais1` varchar(50) DEFAULT NULL,
  `características_especiais2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_serie`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serie`
--

LOCK TABLES `serie` WRITE;
/*!40000 ALTER TABLE `serie` DISABLE KEYS */;
INSERT INTO `serie` VALUES (1,'https://br.web.img3.acsta.net/pictures/18/12/10/14/01/0178829.jpg','The Umbrela Academy',2019,'Só nos vemos em casamentos e funerais','1','1','\"Nós apenas nos vemos em casamentos e funerais\" é o primeiro episódio da série de televisão da web de super - heróis americana , The Umbrella Academy, baseada na série de quadrinhos de mesmo nome.','Física ','Poderes','Justin H. Min - Ben Hargreeves: \"Me abraça enquanto eu sumo\".','Eidan Gallagher','Ellen Page ','Robert Sheehan','Tom Hopper','Emmy Raver-Lampman','David Castaneda','Justin H. Min',NULL,NULL,NULL,NULL,'Criação de realidade alternativa','paradoxo'),(2,'https://br.web.img3.acsta.net/pictures/18/12/10/14/01/0178829.jpg','The Flash',2014,'Out of Time','15','1','Neste episódio flash tem que enfrentar um vilão que controla o clima, e o mesmo ataca Joe como vingança por seu irmão, enquanto isso cisco descobre a verdade sobre flash reverso e Barry ao final do episódio volta no tempo para salvar a cidade de uma onda que varreria a todos do mapa.','Física','Fenômeno físico','Grant Gustin - Flash: \"Eu sou o Barry Allen e eu sou homem mais rápido vivo\".','Grant Gustin','Candice Patton','Danielle Panabaker','Tom Cavangh','Carlos Valdes','Jesse L. Martin',NULL,NULL,NULL,NULL,NULL,'Criação de realidade alternativa','paradoxo'),(3,'https://br.web.img3.acsta.net/pictures/18/12/10/14/01/0178829.jpg','Orange',2016,'-','Todos','Todas','Durante todos os episódios os personagens recebem cartas de seus eu do futuro para poder impedir um amigo de um fim trágico.','Cartas pro passado','Cartas','Seiichirō Yamashita - Kakeru Naruse: \"Eu quero ser mais forte, eu quero ser feliz\"','Rika Kinugawa','Seiichiro Yamashita','Natsumi Takamori','kazuyuki okitsu','Makoto Furukawa','Kana Hanazawa',' Tomohiro Tsuboi','Ayane Sakura','Kikuko Inoue',NULL,NULL,'Criação de realidade alternativa','paradoxo'),(4,'https://m.media-amazon.com/images/M/MV5BMjUxMzE4ZDctODNjMS00MzIwLThjNDktODkwYjc5YWU0MDc0XkEyXkFqcGdeQXVyNjc3OTE4Nzk@._V1_UY1200_CR85,0,630,1200_AL_.jpg','Stein Gates',2011,'-','Todos','Todas','Os protagonista voltam no tempo com seu microondas para proteger a vida de uma cientista evitando seu fim trágico.','Volta física','Celular conectado no microondas','Kana Hanazawa - Mayushi: \"Tuturu mayushi desu\".','Mamoru Miyano','Kana Hanazawa','Natsumi Takamori','Asami Imai','Ashly Burch','Yū Kobayashi',' Trina Nishimura','Saori Goto',' Cherami Leigh','Haruko Momoi',' Masaki Terasoma','Criação de realidade alternativa','paradoxo'),(5,'https://static.wikia.nocookie.net/dublagem/images/f/ff/ReZERO_-Starting_Life_in_Another_World-.jpg/revision/latest?cb=20200617154042&path-prefix=pt-br','Re: Zero',2012,'-','Todos','Todas','Durante todos os episódios de alguma forma Subaru morre e logo em seguida ele volta no tempo criando diversas linhas temporais que mudam seu destino','Volta física','Morte','Yūsuke Kobayashi - Subaru: \"Eu amo a Emília\".','Rie Takahashi','Yuusuke Kobayashi','Arai Satomi','Chinatsu Akasaki','Inori Minase',' Kana Ueda','Keiji Fujiwara','Kenyuu Horiuchi Wilhelm',NULL,NULL,NULL,'Criação de realidade alternativa','paradoxo'),(6,'https://images-na.ssl-images-amazon.com/images/I/816dfPdNvbL.jpg','Madoka Mágica',2011,'O único caminhos','11','1','Após perceber que seu poder apenas serve para proteger Madoka do pacto para se tornar menina mágica, Akemi mais uma vez explode uma bomba se lançando para passado, várias e várias vezes mostrando o esforço dela até aqui para manter Madoka bem.','Volta física','Bomba temporal','Aoi Yūki - Madoka: \"Não se esqueça, em algum lugar, alguém está lutando por você, enquanto se lembrar dela, você não estará sozinho\".','Cristina Valenzuela','Christine Marie Cabanos',' Kaori Mizuhashi',' Aoi Yūki','Carrie Keranen',' Lauren Landa',' Sarah Anne Williams','Eri Kitamura',NULL,NULL,NULL,'Criação de realidade alternativa','paradoxo');
/*!40000 ALTER TABLE `serie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transmissão`
--

DROP TABLE IF EXISTS `transmissão`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transmissão` (
  `id_transmissão` int(11) NOT NULL AUTO_INCREMENT,
  `nome_plataforma1` varchar(50) DEFAULT ' ',
  `nome_plataforma2` varchar(50) DEFAULT ' ',
  `id_filme` int(11) DEFAULT NULL,
  `id_serie` int(11) DEFAULT NULL,
  `id_plataforma1` int(11) DEFAULT NULL,
  `id_plataforma2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_transmissão`),
  KEY `id_filme` (`id_filme`),
  KEY `id_serie` (`id_serie`),
  KEY `id_plataforma` (`id_plataforma1`),
  KEY `id_plataforma2` (`id_plataforma2`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transmissão`
--

LOCK TABLES `transmissão` WRITE;
/*!40000 ALTER TABLE `transmissão` DISABLE KEYS */;
INSERT INTO `transmissão` VALUES (18,'Google Play Filmes','Youtube',3,NULL,3,2),(17,'Youtube','',2,NULL,2,NULL),(16,'Netflix','Youtube',1,NULL,1,2),(15,'Netflix','',NULL,2,1,NULL),(14,'Netflix','',NULL,1,1,NULL),(19,'Amazon Prime','Youtube',4,NULL,4,2),(20,'Netflix','Youtube',5,NULL,1,2),(21,'Youtube','Google Play Filmes',6,NULL,2,3),(22,'Youtube','HBO Go',7,NULL,2,5),(23,'Youtube','Google Play Filmes',8,NULL,2,3),(24,'Youtube','Google Play Filmes',9,NULL,2,3),(25,'Netflix','',10,NULL,1,NULL),(26,'Youtube','Google Play Filmes',11,NULL,2,3),(27,'Crunchyroll',' ',NULL,3,6,NULL),(28,'Crunchyroll',' ',NULL,4,6,NULL),(29,'Crunchyroll',' ',NULL,5,6,NULL),(30,'Crunchyroll',' ',NULL,6,6,NULL),(31,'Netflix',NULL,12,NULL,1,NULL),(32,'Netflix',NULL,13,NULL,1,NULL);
/*!40000 ALTER TABLE `transmissão` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-26 22:35:50
