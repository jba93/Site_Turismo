CREATE DATABASE holiday_turismo;

CREATE TABLE mensagens_contato
(   
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    email varchar(50) not null,
    telefone varchar(14) not null,
    mensagem varchar(500) not null,
    recebera_promocoes char (1) DEFAULT 'S',
    data_horario datetime DEFAULT CURRENT_TIMESTAMP
)