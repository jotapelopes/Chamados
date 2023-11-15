CREATE DATABASE chamados;

CREATE TABLE `problemas_chamados` (
  `id_problema` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `tipo_problema` varchar(65) NOT NULL
)

INSERT INTO `problemas_chamados`(`id_problema`, `tipo_problema`) VALUES ('1','Wifi'),
 ('2','Senha Admin'),  ('3','Pc explodiu'),  ('4','Pé quebrado'),  ('5','Outros assuntos')

CREATE TABLE `chamados_cadastrados` (
  `id_chamado` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ra` int(11) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `problema` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `sala` int(3) NOT NULL,
  `hora_cadastro` datetime NOT NULL,
  `situacao` varchar(60) NOT NULL,
  `hora_resolvidos` datetime,
  FOREIGN KEY (`problema`) REFERENCES problemas_chamados(`id_problema`)
);

