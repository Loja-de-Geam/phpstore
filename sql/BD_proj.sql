create schema fynderfood;

use fynderfood;

CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    cpf VARCHAR(15) NOT NULL UNIQUE,
    senha VARCHAR(60) NOT NULL,
    genero VARCHAR(3),
    data DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tipo (
    id INT NOT NULL AUTO_INCREMENT,
    tipo VARCHAR(20) NOT NULL,
    data_adicionamento_modificacao DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE menu (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    preco FLOAT(5 , 2 ) NOT NULL,
    img TEXT NOT NULL,
    data_adicionamento_modificacao DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE menutipo (
    id_menu INT NOT NULL,
    id_tipo INT NOT NULL,
    PRIMARY KEY (id_menu , id_tipo),
    FOREIGN KEY (id_menu)
        REFERENCES menu (id),
    FOREIGN KEY (id_tipo)
        REFERENCES tipo (id)
);

CREATE TABLE pedido (
    id INT NOT NULL,
    id_produto INT NOT NULL,
    quant_prod INT NOT NULL,
    email VARCHAR(50) NOT NULL,
    data_pedido DATE NOT NULL,
    PRIMARY KEY (id , email , id_produto),
    FOREIGN KEY (id)
        REFERENCES usuarios (id),
    FOREIGN KEY (id_produto)
        REFERENCES menu (id)
);

CREATE TABLE comentario_pedido (
    id INT NOT NULL AUTO_INCREMENT,
    id_pedido INT NOT NULL,
    id_usuario INT NOT NULL,
    comentario TEXT NOT NULL,
    data_comentario DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_pedido)
        REFERENCES pedido (id),
    FOREIGN KEY (id_usuario)
        REFERENCES usuarios (id)
);

CREATE TABLE adm (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(60) NOT NULL,
    dataregistro DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE formulario_de_reclamacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(200) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    descricao TEXT NOT NULL,
    anexos_de_evidencias TEXT NOT NULL,
    data_reclamacao DATE NOT NULL,
    status_reclamacao VARCHAR(20) DEFAULT 'Aberto'
);

CREATE TABLE outros_problemas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(150) NOT NULL,
    email VARCHAR(200) NOT NULL,
    titulo_problema VARCHAR(90) NOT NULL,
    descricao TEXT NOT NULL,
    anexos TEXT NOT NULL,
    data_relato DATE NOT NULL,
    status_problema VARCHAR(20) DEFAULT 'Aberto'
);

CREATE TABLE relato_bugs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo_bug VARCHAR(90) NOT NULL,
    categoria VARCHAR(50),
    descricao TEXT NOT NULL,
    anexos TEXT NOT NULL,
    data_relato DATE NOT NULL,
    status_relato VARCHAR(20) DEFAULT 'Aberto'
);

insert into usuarios values (null, 'Fulano da Silva', '(12) 34567-8900', 'fulano@gmail.com', '987.654.321-00', 'QWERTYUIOP1234', 'mas', '2023-11-1');

insert into tipo values (null, 'Massas', '2023-11-1'),
						(null, 'Bebidas Geladas', '2023-11-1'),
                        (null, 'Doces', '2023-11-1'),
						(null, 'Salgados', '2023-11-1'),
                        (null, 'Carnes', '2023-11-1'),
                        (null, 'Frutos do Mar', '2023-11-1'),
                        (null, 'Bebidas Quentes', '2023-11-1');

insert into menu values (null, 'lasanha de frango', 'lasanha de frango', '7.99', 'lasanha_de_frango.png', '2023-11-1'),
						(null, 'lagosta', 'lagosta', '18.50', 'lagosta.jpeg', '2023-11-1'),
                        (null, 'Mousse de chocolate', 'Mousse de chocolate', '15.99', 'Moussedechocolate.png', '2023-11-1'),
						(null, 'Pavê de chocolate', 'Pavê de chocolate', '20.99', 'pavedechocolate.png', '2023-11-1'),
                        (null, 'Pudim de leite', 'Pudim com calda', '15.50', 'pudimdeleite.png', '2023-11-1'),
                        (null, 'Pizza Marguerita', 'Pizza tradicional Italiana', '43.00', 'pizza_marguerita.png', '2023-11-1'),
						(null, 'Hambúrguer Artesanal', 'Hambúrguer feito de forma artesanal', '15.65', 'hamburguer.jpg', '2023-11-1'),
                        (null, 'Buchada de bode', 'Buchada do chef Ipueira', '24.99', 'buchada.jpg', '2023-11-1'),
                        (null, 'Cuscuz', 'Cuscuz Nordestino', '10.00', 'cuscuz.jpg', '2023-11-1'),
                        (null, 'Cuscuz de Tapioca', 'Cuscuz doce feito com tapioca', '13.70', 'cuscuz_de_tapioca.jpg', '2023-11-1'),
                        (null, 'Macarrão com camarão', 'Macarrão com porção de camarão', '43.50', 'macarrao_com_camarao.jfif', '2023-11-1'),
                        (null, 'Risoto', 'Risoto de camarão com cogumelo', '40.50', 'risoto.jpg', '2023-11-1'),
                        (null, 'Feijoada com acompanhamentos', 'Feijoada com arroz, colve, entre outros', '50.00', 'feijoada.jpg', '2023-11-1'),
                        (null, 'Mousse Romeu e Julieta', 'Doce de queijo com doce de goiaba', '12.00', 'musse-romeu-julieta.jpg', '2023-11-1'),
                        (null, 'Banana Split', 'Banana Split', '20.00', 'banana_split.jfif', '2023-11-1'),
                        (null, 'Pizza de calabresa', 'Pizza calabresa com um pouco de cebola', '43.00', 'pizza_calabresa.jpg', '2023-11-1'),
                        (null, 'Pizza de frango com catupiry', 'Pizza de frango com catupiry', '43.00', 'pizza_frango.png', '2023-11-1'),
                        (null, 'Salada Tropical', 'Salada estilo tropical', '13.00', 'salada_tropical.jfif', '2023-11-1'),
                        (null, 'Pizza Vegana', 'Pizza com ingredientes veganos', '53.00', 'pizza_vegana.jpg', '2023-11-1'),
                        (null, 'Cocada baiana', 'Cocada baiana', '3.50', 'cocada.jpg', '2023-11-1');
                        
insert into menutipo values (1, 1),
							(2, 6),
							(3, 3),
							(4, 3),
							(5, 3),
							(6, 4),
							(7, 4),
							(8, 4),
							(9, 4),
							(10, 3),
							(11, 1),
                            (11, 6),
							(12, 4),
							(13, 4),
							(14, 3),
							(15, 3),
							(16, 4),
							(17, 4),
							(18, 4),
							(19, 4),
							(20, 3);
							
                        
insert into adm values (null, 'adm', 'admGG@gmail.com', 'adm12345', '2023-11-1');