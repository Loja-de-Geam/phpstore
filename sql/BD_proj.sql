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
    descricao VARCHAR(50) NOT NULL,
    descricao_saiba_mais TEXT NOT NULL,
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
    id INT NOT NULL AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    estado ENUM('carrinho', 'comprado') DEFAULT('carrinho') NOT NULL,
    data_pedido DATETIME NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_cliente)
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

insert into menu values (null, 'lasanha de frango', 'lasanha de frango', 'A Lasanha de Frango é uma iguaria reconfortante que combina camadas de massa de lasanha delicadamente cozida com um recheio suculento e cremoso de frango. A cada garfada, você será envolvido pelo aroma irresistível de frango tenro e suculento, misturado com um molho de tomate ricamente temperado e uma mistura de queijos derretidos, que adicionam uma textura cremosa e um sabor indulgente.', '7.99', 'lasanha_de_frango.png', '2023-11-1'),
						(null, 'lagosta', 'lagosta', 'A lagosta, cuidadosamente preparada por chefs experientes, é cozida de forma impecável, resultando em uma carne tenra e suculenta, com um sabor do mar que se destaca de maneira gloriosa. Cada pedaço é uma explosão de frescor e textura, oferecendo uma experiência única e inesquecível.', '18.50', 'lagosta.jpeg', '2023-11-1'),
                        (null, 'Mousse de chocolate', 'Mousse de chocolate', 'O Mousse de Chocolate é uma criação celestial para os amantes de chocolate. Esta sobremesa luxuosa cativa os sentidos com sua textura sedosa e seu sabor decadente, oferecendo uma experiência culinária verdadeiramente indulgente. Cada colherada revela uma mistura perfeita de chocolate amargo de alta qualidade, cuidadosamente derretido e combinado com uma suave e arejada mistura de gemas de ovo e açúcar. O resultado é uma textura aveludada que derrete na boca, deixando um sabor rico e intenso que envolve o paladar em um abraço reconfortante.', '15.99', 'Moussedechocolate.png', '2023-11-1'),
						(null, 'Pavê de chocolate', 'Pavê de chocolate', 'A base deste pavê consiste em delicados biscoitos de chocolate embebidos em uma mistura de licor ou café, proporcionando uma base macia e levemente encharcada que se desfaz na boca. Sobre esta base, é cuidadosamente espalhada uma camada generosa de creme de chocolate sedoso e aveludado, preparado com cacau de alta qualidade e creme de leite fresco.', '20.99', 'pavedechocolate.png', '2023-11-1'),
                        (null, 'Pudim de leite', 'Pudim com calda', 'O Pudim de Leite é uma sobremesa clássica que conquista corações com sua textura sedosa e sabor delicadamente adocicado. Cada colherada é uma experiência de puro deleite, combinando a cremosidade do leite com o sabor sutilmente caramelizado. A base desse pudim é preparada com uma mistura cuidadosa de leite fresco, gemas de ovo e açúcar, resultando em uma textura aveludada e suave que derrete na boca. Uma leve nota de baunilha é adicionada para realçar os sabores e proporcionar um toque de fragrância envolvente.', '15.50', 'pudimdeleite.png', '2023-11-1'),
                        (null, 'Pizza Margherita', 'Pizza tradicional Italiana', 'A Pizza Margherita é uma obra-prima simples e clássica da culinária italiana que encanta os amantes de pizza com sua combinação perfeita de sabores frescos e autênticos. Cada fatia é uma explosão de frescor e harmonia, celebrando os ingredientes tradicionais que fazem desta pizza uma verdadeira obra de arte culinária. A base da Pizza Margherita é uma fina camada de massa de pizza, habilmente preparada e assada até ficar crocante por fora e macia por dentro. Sobre esta base perfeita, é cuidadosamente espalhado um molho de tomate feito com tomates frescos, azeite de oliva, alho e manjericão, criando uma explosão de sabor que é ao mesmo tempo fresco e reconfortante.', '43.00', 'pizza_marguerita.png', '2023-11-1'),
						(null, 'Hambúrguer Artesanal', 'Hambúrguer feito de forma artesanal', 'O Hambúrguer Artesanal é uma verdadeira experiência gastronômica, que eleva o simples ato de comer um hambúrguer a um novo patamar de sabor e qualidade. Cada mordida é uma celebração da criatividade culinária e do cuidado artesanal na preparação deste clássico favorito.', '15.65', 'hamburguer.jpg', '2023-11-1'),
                        (null, 'Buchada de bode', 'Buchada do chef Ipueira', 'O prato tem como base o estômago do bode, cuidadosamente limpo e preparado para criar uma cavidade que será recheada com uma mistura saborosa e aromática. O recheio geralmente inclui uma combinação de miúdos do bode, como fígado, rins e coração, juntamente com temperos tradicionais como cebola, alho, pimentões e cheiro-verde. Essa mistura é habilmente temperada e cozida lentamente até atingir uma textura suculenta e um sabor robusto.', '24.99', 'buchada.jpg', '2023-11-1'),
                        (null, 'Cuscuz', 'Cuscuz Nordestino', 'O prato tem como base a farinha de milho, que é delicadamente umedecida e moldada em uma forma específica para criar uma textura compacta e uniforme. A farinha é cuidadosamente temperada com sal e, muitas vezes, é enriquecida com outros ingredientes como azeite, manteiga de garrafa, legumes e até mesmo frutos do mar, dependendo da variação regional.', '10.00', 'cuscuz.jpg', '2023-11-1'),
                        (null, 'Cuscuz de Tapioca', 'Cuscuz doce feito com tapioca', 'O Cuscuz de Tapioca é uma sobremesa exótica e reconfortante que faz parte da rica tapeçaria culinária do Brasil. Com suas origens em ingredientes autênticos, esta iguaria proporciona uma experiência de sabor única e inesquecível. A base do Cuscuz de Tapioca é a tapioca granulada, que é hidratada com leite quente ou leite de coco, resultando em uma mistura macia e levemente elástica. Esta mistura é então enriquecida com ingredientes como coco ralado, leite condensado e açúcar, proporcionando uma combinação de doçura e textura que é ao mesmo tempo reconfortante e indulgente.', '13.70', 'cuscuz_de_tapioca.jpg', '2023-11-1'),
                        (null, 'Macarrão com camarão', 'Macarrão com porção de camarão', 'O Macarrão com Camarão é uma explosão de sabores e texturas que combina a suculência do camarão com a suntuosidade de uma massa perfeitamente cozida. Esta criação culinária é uma celebração dos frutos do mar em sua forma mais indulgente, proporcionando uma experiência gastronômica que é ao mesmo tempo luxuosa e reconfortante.', '43.50', 'macarrao_com_camarao.jfif', '2023-11-1'),
                        (null, 'Risoto', 'Risoto de camarão com cogumelo', 'O Risoto de Camarão com Cogumelos é uma obra-prima da culinária que combina a suculência do camarão com a textura aveludada dos cogumelos, criando uma experiência gastronômica verdadeiramente indulgente. Cada garfada é uma celebração da harmonia entre os frutos do mar e os sabores terrosos dos cogumelos. A base deste risoto é o arroz arbóreo, cuidadosamente cozido em um caldo rico e aromático, absorvendo gradualmente os sabores e criando uma textura cremosa e al dente que é característica deste prato.', '40.50', 'risoto.jpg', '2023-11-1'),
                        (null, 'Feijoada com acompanhamentos', 'Feijoada com arroz, colve, entre outros', 'A Feijoada é um tesouro da gastronomia brasileira, uma sinfonia de sabores que celebra a rica tradição culinária do país. Este prato é uma homenagem à fusão de culturas e à abundância de ingredientes que marcam a culinária brasileira. A base da Feijoada é o feijão preto, cuidadosamente cozido com uma seleção de carne suculenta e defumada, como linguiça, costela de porco, orelha, pé e rabo. A mistura é temperada com alho, cebola, pimenta e uma variedade de ervas e especiarias, proporcionando uma explosão de sabores que é ao mesmo tempo profunda e reconfortante.', '50.00', 'feijoada.jpg', '2023-11-1'),
                        (null, 'Mousse Romeu e Julieta', 'Doce de queijo com doce de goiaba', 'O Mousse Romeu e Julieta é uma sobremesa encantadora que celebra a clássica combinação de queijo minas frescal e goiabada, criando uma experiência de sabor única e memorável. Esta iguaria é uma verdadeira homenagem ao amor e à criatividade na culinária. A base do mousse é um queijo minas frescal delicadamente batido até atingir uma textura cremosa e aerada. A goiabada, doce e levemente ácida, é derretida e misturada ao queijo, criando uma fusão de sabores que é ao mesmo tempo equilibrada e irresistível.', '12.00', 'musse-romeu-julieta.jpg', '2023-11-1'),
                        (null, 'Banana Split', 'Banana Split', 'A Banana Split é uma extravagância de sorvete que combina uma variedade de sabores e texturas em uma única sobremesa incrivelmente indulgente. Esta criação clássica é uma celebração da simplicidade e da criatividade na culinária de sobremesas. A base da Banana Split é uma banana madura, cortada ao meio longitudinalmente, criando um leito natural para os elementos que a acompanham. Cada metade da banana é delicadamente disposta nas laterais de um prato ou tigela.', '20.00', 'banana_split.jfif', '2023-11-1'),
                        (null, 'Pizza de calabresa', 'Pizza calabresa com um pouco de cebola', 'A base da pizza é uma fina camada de massa de pizza, habilmente preparada e assada até atingir uma crocância perfeita por fora, enquanto mantém uma textura macia por dentro. Sobre esta base, é cuidadosamente espalhado um molho de tomate feito com tomates maduros e uma seleção de especiarias e ervas frescas, criando uma explosão de sabor que é ao mesmo tempo fresca e familiar.', '43.00', 'pizza_calabresa.jpg', '2023-11-1'),
                        (null, 'Pizza de frango com catupiry', 'Pizza de frango com catupiry', 'A base da pizza é uma fina camada de massa de pizza, habilmente preparada e assada até atingir uma crocância perfeita por fora, enquanto mantém uma textura macia por dentro. Sobre esta base, é cuidadosamente espalhado um molho de tomate caseiro, feito com tomates maduros e uma seleção de especiarias e ervas frescas, criando uma explosão de sabor que é ao mesmo tempo fresca e familiar.', '43.00', 'pizza_frango.png', '2023-11-1'),
                        (null, 'Salada Tropical', 'Salada estilo tropical', 'A base desta salada é uma mistura de folhas verdes frescas, como alface, espinafre ou rúcula, que fornecem uma textura crocante e um sabor leve e terroso. Sobre esta cama de folhas, são delicadamente dispostas uma variedade de frutas tropicais, como abacaxi, manga, kiwi e melancia, cortadas em pedaços suculentos e coloridos.', '13.00', 'salada_tropical.jfif', '2023-11-1'),
                        (null, 'Pizza Vegana', 'Pizza com ingredientes veganos', 'A Pizza Vegana é uma ode à criatividade e à diversidade de sabores da culinária vegetal. Esta versão vegana da pizza tradicional celebra os ingredientes à base de plantas de forma vibrante e deliciosa, proporcionando uma experiência culinária que é ao mesmo tempo saudável e saborosa. A base da pizza é uma fina camada de massa de pizza vegana, preparada com ingredientes como farinha integral, água, fermento e azeite de oliva. A massa é habilmente preparada e assada até atingir a textura perfeita: crocante por fora e macia por dentro.', '53.00', 'pizza_vegana.jpg', '2023-11-1'),
                        (null, 'Cocada baiana', 'Cocada baiana', 'A base da Cocada Baiana é o coco fresco ralado, cuidadosamente preparado para criar uma textura desfiada e suculenta. O coco é cozido com açúcar em fogo baixo, permitindo que os sabores se misturem e criem uma mistura espessa e caramelizada.', '3.50', 'cocada.jpg', '2023-11-1');
                        
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