<?php

$nomeLoja = "ScaleStyle";

$nome = $_POST['nome'] ?? "";
$email = $_POST['email'] ?? "";
$pass = $_POST['senha'] ?? "";
$tel = $_POST['telefone'] ?? "";
$tipoFoto = $_POST['tipoFoto'] ?? "";
$avaliacao = $_POST['avaliacao'] ?? "";
// $btn = $POST_['envial']
//?? ""

echo $nome;
echo $email;
echo $tel;
echo $pass;
echo $tipoFoto;
echo $avaliacao;

$categorias = [
    'Abstratas' => 'Abstratas',
    'Minimalista' => 'Minimalista',
    'Editorial' => 'Editorial',
    'Comercial' => 'Comercial',
];

$produtos_base = [
    [
        'id' => 1,
        'nome' => 'Bangela',
        'preco' => 15.99,
        'descricao_curta' => 'Ideal para fotos de perfil',
        'descricao' => 'Foto feita com muito profissionalismo e disciplina',
        'imagem' => 'img/img_1.jpg'
    ],
    [
        'id' => 2,
        'nome' => 'Coração',
        'preco' => 18.00,
        'descricao_curta' => 'Ideal para refletir',
        'descricao' => 'Foto feita com muito profissionalismo e disciplina',
        'imagem' => 'img/img_2.jpg'
    ],
    [
        'id' => 3,
        'nome' => 'Hacker',
        'preco' => 12.00,
        'descricao_curta' => 'Ideal para botar medo',
        'descricao' => 'Foto feita com muito medo e insegurança',
        'imagem' => 'img/img_3.jpg'
    ],
    [
        'id' => 4,
        'nome' => 'Abstrato Azul',
        'preco' => 22.50,
        'descricao_curta' => 'Perfeito para capas de álbuns',
        'descricao' => 'Design abstrato com tons azuis vibrantes, ideal para expressar criatividade',
        'imagem' => 'img/img_4.jpg'
    ],
    [
        'id' => 5,
        'nome' => 'Minimalista Branco',
        'preco' => 19.99,
        'descricao_curta' => 'Simplicidade elegante',
        'descricao' => 'Arte minimalista em branco, focada na pureza e clareza visual',
        'imagem' => 'img/img_5.jpg'
    ],
    [
        'id' => 6,
        'nome' => 'Editorial Tech',
        'preco' => 25.00,
        'descricao_curta' => 'Para revistas de tecnologia',
        'descricao' => 'Layout editorial moderno com elementos tecnológicos, perfeito para publicações',
        'imagem' => 'img/img_6.jpg'
    ],
    [
        'id' => 7,
        'nome' => 'Comercial Vermelho',
        'preco' => 30.00,
        'descricao_curta' => 'Impacto visual forte',
        'descricao' => 'Design comercial com vermelho vibrante, ideal para anúncios e campanhas',
        'imagem' => 'img/img_7.jpg'
    ],
    [
        'id' => 8,
        'nome' => 'Retrato Clássico',
        'preco' => 14.50,
        'descricao_curta' => 'Elegância atemporal',
        'descricao' => 'Retrato clássico com iluminação suave, perfeito para perfis profissionais',
        'imagem' => 'img/img_8.jpg'
    ],
    [
        'id' => 9,
        'nome' => 'Natureza Viva',
        'preco' => 16.75,
        'descricao_curta' => 'Conexão com a natureza',
        'descricao' => 'Fotografia de paisagem vibrante, capturando a essência da vida selvagem',
        'imagem' => 'img/img_9.jpg'
    ],
    [
        'id' => 10,
        'nome' => 'Arte Urbana',
        'preco' => 28.99,
        'descricao_curta' => 'Estilo de rua moderno',
        'descricao' => 'Grafite urbano com cores ousadas, representando a cultura da cidade',
        'imagem' => 'img/img_10.jpg'
    ],
    [
        'id' => 11,
        'nome' => 'Pôr do Sol',
        'preco' => 20.00,
        'descricao_curta' => 'Beleza do entardecer',
        'descricao' => 'Cena de pôr do sol com tons quentes, ideal para relaxamento e inspiração',
        'imagem' => 'img/img_11.jpg'
    ],
    [
        'id' => 12,
        'nome' => 'Abstrato Geométrico',
        'preco' => 24.50,
        'descricao_curta' => 'Formas e padrões',
        'descricao' => 'Composição geométrica abstrata, explorando linhas e formas modernas',
        'imagem' => 'img/img_12.jpg'
    ],
    [
        'id' => 13,
        'nome' => 'Retrato Noturno',
        'preco' => 17.25,
        'descricao_curta' => 'Mistério da noite',
        'descricao' => 'Fotografia noturna com iluminação dramática, capturando emoções profundas',
        'imagem' => 'img/img_13.jpg'
    ],
    [
        'id' => 14,
        'nome' => 'Floral Delicado',
        'preco' => 13.99,
        'descricao_curta' => 'Fragilidade da natureza',
        'descricao' => 'Close-up de flores delicadas, simbolizando beleza e transitoriedade',
        'imagem' => 'img/img_14.jpg'
    ],
    [
        'id' => 15,
        'nome' => 'Arquitetura Moderna',
        'preco' => 32.00,
        'descricao_curta' => 'Linhas urbanas',
        'descricao' => 'Fotografia de prédio moderno, destacando design e estrutura',
        'imagem' => 'img/img_15.jpg'
    ],
    [
        'id' => 16,
        'nome' => 'Mar Sereno',
        'preco' => 21.50,
        'descricao_curta' => 'Calma oceânica',
        'descricao' => 'Vista do mar calmo ao amanhecer, promovendo paz e serenidade',
        'imagem' => 'img/img_16.jpg'
    ],
    [
        'id' => 17,
        'nome' => 'Espaço Cósmico',
        'preco' => 35.00,
        'descricao_curta' => 'Exploração infinita',
        'descricao' => 'Imagem digital do espaço sideral, inspirada em galáxias e estrelas',
        'imagem' => 'img/img_17.jpg'
    ],
    [
        'id' => 18,
        'nome' => 'Café da Manhã',
        'preco' => 11.99,
        'descricao_curta' => 'Aconchego matinal',
        'descricao' => 'Cena de café da manhã com luz natural, perfeita para posts de lifestyle',
        'imagem' => 'img/img_1.jpg'
    ],
    [
        'id' => 19,
        'nome' => 'Montanha Nevada',
        'preco' => 26.75,
        'descricao_curta' => 'Grandeza natural',
        'descricao' => 'Pico de montanha coberto de neve, simbolizando aventura e majestade',
        'imagem' => 'img/img_2.jpg'
    ],
    [
        'id' => 20,
        'nome' => 'Arte Pop',
        'preco' => 29.99,
        'descricao_curta' => 'Cores vibrantes',
        'descricao' => 'Design pop art com cores brilhantes, inspirado em ícones culturais',
        'imagem' => 'img/img_3.jpg'
    ],
    [
        'id' => 21,
        'nome' => 'Cidade Noturna',
        'preco' => 27.50,
        'descricao_curta' => 'Vida urbana dinâmica',
        'descricao' => 'Fotografia de skyline noturno, capturando a energia das metrópoles',
        'imagem' => 'img/img_4.jpg'
    ],
    [
        'id' => 22,
        'nome' => 'Floresta Encantada',
        'preco' => 23.99,
        'descricao_curta' => 'Magia da natureza',
        'descricao' => 'Cena de floresta densa com luz filtrada, evocando mistério e paz',
        'imagem' => 'img/img_5.jpg'
    ],
    [
        'id' => 23,
        'nome' => 'Abstrato Digital',
        'preco' => 31.00,
        'descricao_curta' => 'Arte contemporânea',
        'descricao' => 'Composição abstrata criada digitalmente, explorando formas e cores',
        'imagem' => 'img/img_6.jpg'
    ],
    [
        'id' => 24,
        'nome' => 'Retrato Vintage',
        'preco' => 19.75,
        'descricao_curta' => 'Estilo retrô',
        'descricao' => 'Fotografia em estilo vintage, com filtros e iluminação clássica',
        'imagem' => 'img/img_7.jpg'
    ],
    [
        'id' => 25,
        'nome' => 'Oceano Profundo',
        'preco' => 34.50,
        'descricao_curta' => 'Profundezas marinhas',
        'descricao' => 'Imagem subaquática do oceano, revelando vida marinha fascinante',
        'imagem' => 'img/img_8.jpg'
    ],
    [
        'id' => 26,
        'nome' => 'Arte Tribal',
        'preco' => 16.99,
        'descricao_curta' => 'Padrões ancestrais',
        'descricao' => 'Design tribal com padrões tradicionais, representando culturas antigas',
        'imagem' => 'img/img_9.jpg'
    ],
    [
        'id' => 27,
        'nome' => 'Campo de Lavanda',
        'preco' => 25.25,
        'descricao_curta' => 'Tranquilidade rural',
        'descricao' => 'Vista de campo de lavanda roxa, simbolizando calma e beleza natural',
        'imagem' => 'img/img_10.jpg'
    ]
];
    
