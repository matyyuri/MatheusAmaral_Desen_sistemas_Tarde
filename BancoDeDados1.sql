CREATE DATABASE empresa;

CREATE TABLE cliente (
`id_cliente` INT NOT NULL AUTO_INCREMENT,
`nome` varchar(50) NOT NULL,
`endereco` varchar(80) NOT NULL,
`telefone` varchar(20) NOT NULL,
`email` varchar(50) NOT NULL,
PRIMARY KEY (`id_cliente`)
);