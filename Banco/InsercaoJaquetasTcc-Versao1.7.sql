use jaquetastcc;

insert into TbSexo(sexo)
values
("Masculino"),
("Feminino"),
("Outros");

insert into TbLogin(login, senha, nivelAcesso, dataCadastro,flagAtivo)
values
("adm@gmail.com","123", 2, "19/08/2015",1);

insert into TbTamanho(tamanho, flagAtivo)
values
("P", 1),
("M", 1),
("G", 1),
("GG", 1);

insert into TbTipoTelefone(tipoTelefone)
values
("Celular"),
("Residencial"),
("Comercial"),
("Recado"),
("Fax");

insert into TbDdd(ddd)
values
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(21),
(22),
(24),
(27),
(28),
(31),
(32),
(33),
(34),
(35),
(37),
(38),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(51),
(53),
(54),
(55),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(71),
(73),
(74),
(75),
(77),
(79),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(91),
(92),
(93),
(94),
(95),
(96),
(97),
(98),
(99);

insert into TbEstado(estado)
values
("Acre"),
("Alagoas"),
("Amapá"),
("Amazonas"),
("Bahia"),
("Ceará"),
("Distrito Federal"),
("Espírito Santo"),
("Goiás"),
("Maranhão"),
("Mato Grosso"),
("Mato Grosso do Sul"),
("Minas Gerais"),
("Pará"),
("Paraíba"),
("Paraná"),
("Pernambuco"),
("Piauí"),
("Rio de Janeiro"),
("Rio Grande do Norte"),
("Rio Grande do Sul"),
("Rondônia"),
("Roraima"),
("Santa Catarina"),
("São Paulo"),
("Sergipe"),
("Tocantins");

insert into TbMarca(marca, flagAtivo)
values
("Adidas", 1);

insert into TbCategoria(categoria,flagAtivo)
values
("Jaqueta Couro",1);