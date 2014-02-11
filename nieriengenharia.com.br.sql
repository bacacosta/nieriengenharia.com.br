/*
SQLyog Community v8.82 
MySQL - 5.5.9 : Database - nieriengenharia.com.br
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu2content` int(11) NOT NULL,
  `content_name` varchar(10) NOT NULL,
  `content_title` varchar(30) NOT NULL,
  `content_data` text NOT NULL,
  `locale` char(2) NOT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `content` */

insert  into `content`(`id`,`id_menu2content`,`content_name`,`content_title`,`content_data`,`locale`,`pos`) values (1,2,'history','História','<p>A Nieri Engenharia é uma empresa especialista na elaboração de projetos estruturais\nde edificações residenciais, comerciais, industriais e também na elaboração de laudos\ntécnicos.</p>\n<p>Fundada em 1977 na cidade de Londrina localizada no norte do Paraná, a empresa já\nsoma mais de 1400 produtos realizados tornando-se referência no segmento para toda\nregião de atuação.</p>\n<p>Com foco na qualidade, segurança e economia dos empreendimentos, a Nieri busca\nsempre a superação das expectativas dos clientes.</p>','pt',1),(2,2,'vision','Visão','<p>Ser empresa de referência no mercado de Engenharia Estrutural através de sua\npolítica de qualidade e excelência técnica, consolidando uma imagem de consistência e\nprofissionalismo perante clientes, mercado e colaboradores.</p>','pt',2),(3,2,'values','Valores','<p>Resultado - Fornecer projetos que atendam ou superem a expectativa dos clientes\natravés de uma solução estrutural racional e que garantam retorno financeiro à\nempresa.</p>\n<p>Inovação - O investimento em inovação tecnológica, promovendo a melhoria continua\nda empresa.</p>\n<p>Qualidade - Garantia da qualidade dos produtos finais entregues aos clientes com a\npadronização dos vários processos da empresa.</p>\n<p>Valorização das pessoas - O aperfeiçoamento de nossos colaboradores internos, com\ntreinamento e cursos para que garantam sua constante atualização e liberdade para que\npossam expressar suas idéias.</p>\n<p>Comprometimento - Atender com eficiência as expectativas do cliente e fornecer\nassistência durante a execução da obra, conforme suas necessidades.</p>\n<p>Ética - A utilização dos padrões éticos e morais e a observação das normas legais\nem vigor garantem nossa credibilidade nos mercados em que atuamos.</p>','pt',3),(4,2,'people','Pessoas','<p>Engenheiros Responsáveis:<br />\nEng. Gilson Roberto Niero - CREA 7.222/D-PR<br />\nEng. Camila Kerst Niero - CREA 73.699/D-PR<br />\nEng. Caio Cesar Kerst Niero - CREA 109.826/D-PR</p>\n<p>Desenhistas:<br />\nLeandro | Leonilson Oliveira | Giorgie | Guilherme Saito</p>','pt',4);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu2content` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `locale` char(2) NOT NULL,
  `pos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id`,`id_menu2content`,`description`,`locale`,`pos`) values (1,1,'Nieri Engenharia Civil','pt',1),(2,2,'Empresa','pt',2),(3,3,'Portfolio','pt',3),(4,4,'Números','pt',4),(5,5,'Clientes','pt',5),(6,6,'nieri@sercomtel.com.br','pt',6);

/*Table structure for table `menu2content` */

DROP TABLE IF EXISTS `menu2content`;

CREATE TABLE `menu2content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `href` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `menu2content` */

insert  into `menu2content`(`id`,`href`) values (1,'start'),(2,'about'),(3,'portfolio'),(4,'numbers'),(5,'clients'),(6,'mail');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
