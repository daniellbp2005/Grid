<?php
// data.php n guarda nada, só guarda informação...
$nomeLoja = "ScaleStyle";

$nome = $_POST['nome'] ?? "";
$email = $_POST['email'] ?? "";
$pass = $_POST['senha'] ?? "";
$tel = $_POST['telefone'] ?? "";
$tipoFoto = $_POST['tipoFoto'] ?? "";
$avaliacao = $_POST['avaliacao'] ?? "";
// $btn = $POST_['enviar'];
//?? ""

//aula passada, 01/04/26
// echo $nome;
// echo $email;
// echo $tel;
// echo $pass;
// echo $tipoFoto;
// echo $avaliacao;


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
        'descricao_curta' => 'Perfeito para fotos de perfil em redes sociais',
        'descricao' => 'Imagem moderna e versátil ideal para perfis profissionais e redes sociais, com composição equilibrada e visual atrativo.',
        'imagem' => 'img/img_1.jpg',
        'categoria' => 'Comercial'
    ],
    [
        'id' => 2,
        'nome' => 'Coração',
        'preco' => 18.20,
        'descricao_curta' => 'Ideal para reflexão e introspecção pessoal',
        'descricao' => 'Imagem emocional e simbólica que transmite sentimentos profundos, perfeita para conteúdos reflexivos e pessoais.',
        'imagem' => 'img/img_2.jpg',
        'categoria' => 'Minimalista'
    ],
    [
        'id' => 3,
        'nome' => 'Hacker',
        'preco' => 12.20,
        'descricao_curta' => 'Perfeito para criar atmosfera intensa e assustadora',
        'descricao' => 'Arte com estética sombria e tecnológica, ideal para projetos que envolvem suspense, hacking ou tecnologia.',
        'imagem' => 'img/img_3.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 4,
        'nome' => 'Abstrato Azul',
        'preco' => 22.50,
        'descricao_curta' => 'Excelente para capas de álbuns musicais e projetos',
        'descricao' => 'Composição abstrata com tons de azul que transmite calma e criatividade, ideal para capas e design artístico.',
        'imagem' => 'img/img_4.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 5,
        'nome' => 'Minimalista Branco',
        'preco' => 19.99,
        'descricao_curta' => 'Simplicidade elegante e sofisticada em tons neutros',
        'descricao' => 'Imagem clean e elegante focada na simplicidade, ideal para designs modernos e minimalistas.',
        'imagem' => 'img/img_5.jpg',
        'categoria' => 'Minimalista'
    ],
    [
        'id' => 6,
        'nome' => 'Editorial Tech',
        'preco' => 25.00,
        'descricao_curta' => 'Ideal para revistas e publicações de tecnologia',
        'descricao' => 'Imagem com estilo editorial voltado à tecnologia, perfeita para artigos, blogs e revistas tech.',
        'imagem' => 'img/img_6.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 7,
        'nome' => 'Comercial Vermelho',
        'preco' => 30.99,
        'descricao_curta' => 'Com impacto visual forte e altamente marcante',
        'descricao' => 'Imagem vibrante com predominância do vermelho, ideal para campanhas publicitárias e marketing.',
        'imagem' => 'img/img_7.jpg',
        'categoria' => 'Comercial'
    ],
    [
        'id' => 8,
        'nome' => 'Retrato Clássico',
        'preco' => 14.50,
        'descricao_curta' => 'Elegância atemporal e sofisticação permanente',
        'descricao' => 'Retrato elegante com estilo clássico, ideal para perfis profissionais e apresentações formais.',
        'imagem' => 'img/img_8.jpg',
        'categoria' => 'Comercial'
    ],
    [
        'id' => 9,
        'nome' => 'Natureza Viva',
        'preco' => 16.75,
        'descricao_curta' => 'Conexão profunda e autêntica com a natureza',
        'descricao' => 'Imagem natural vibrante que destaca a beleza da natureza e transmite sensação de vida e energia.',
        'imagem' => 'img/img_9.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 10,
        'nome' => 'Arte Urbana',
        'preco' => 28.99,
        'descricao_curta' => 'Estilo de rua moderno e autenticamente urbano',
        'descricao' => 'Arte inspirada na cultura urbana com grafite e estilo street, ideal para projetos modernos.',
        'imagem' => 'img/img_10.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 11,
        'nome' => 'Pôr do Sol',
        'preco' => 20.50,
        'descricao_curta' => 'Beleza natural e envolvente do entardecer',
        'descricao' => 'Cena de pôr do sol com cores quentes que transmite paz, relaxamento e contemplação.',
        'imagem' => 'img/img_11.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 12,
        'nome' => 'Abstrato Geométrico',
        'preco' => 24.50,
        'descricao_curta' => 'Exploração criativa de formas e padrões',
        'descricao' => 'Design geométrico abstrato com padrões modernos e simétricos, ideal para projetos criativos.',
        'imagem' => 'img/img_12.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 13,
        'nome' => 'Retrato Noturno',
        'preco' => 17.25,
        'descricao_curta' => 'Mistério envolvente e cativante da noite',
        'descricao' => 'Retrato com iluminação noturna que transmite mistério e profundidade emocional.',
        'imagem' => 'img/img_13.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 14,
        'nome' => 'Floral Delicado',
        'preco' => 13.99,
        'descricao_curta' => 'Captura delicada da fragilidade da natureza',
        'descricao' => 'Imagem suave de flores que transmite delicadeza, leveza e beleza natural.',
        'imagem' => 'img/img_14.jpg',
        'categoria' => 'Minimalista'
    ],
    [
        'id' => 15,
        'nome' => 'Arquitetura Moderna',
        'preco' => 32.00,
        'descricao_curta' => 'Destaque das linhas urbanas modernas e limpas',
        'descricao' => 'Fotografia de arquitetura contemporânea com foco em linhas e design moderno.',
        'imagem' => 'img/img_15.jpg',
        'categoria' => 'Comercial'
    ],
    [
        'id' => 16,
        'nome' => 'Mar Sereno',
        'preco' => 21.50,
        'descricao_curta' => 'Sensação profunda de calma oceânica absoluta',
        'descricao' => 'Imagem do mar calmo que transmite tranquilidade, paz e relaxamento.',
        'imagem' => 'img/img_16.jpg',
        'categoria' => 'Minimalista'
    ],
    [
        'id' => 17,
        'nome' => 'Espaço Cósmico',
        'preco' => 35.50,
        'descricao_curta' => 'Exploração imersiva do infinito cósmico',
        'descricao' => 'Arte digital do espaço com estrelas e galáxias, transmitindo imensidão e mistério.',
        'imagem' => 'img/img_17.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 18,
        'nome' => 'Café da Manhã',
        'preco' => 11.99,
        'descricao_curta' => 'Aconchego acolhedor do período matinal',
        'descricao' => 'Cena aconchegante de café da manhã ideal para conteúdos lifestyle e redes sociais.',
        'imagem' => 'img/img_1.jpg',
        'categoria' => 'Comercial'
    ],
    [
        'id' => 19,
        'nome' => 'Montanha Nevada',
        'preco' => 26.75,
        'descricao_curta' => 'Grandeza impressionante e majestade natural pura',
        'descricao' => 'Imagem de montanha coberta de neve que transmite força, natureza e aventura.',
        'imagem' => 'img/img_2.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 20,
        'nome' => 'Arte Pop',
        'preco' => 29.99,
        'descricao_curta' => 'Explosão criativa de cores vibrantes intensas',
        'descricao' => 'Arte pop com cores vibrantes e estilo moderno, ideal para projetos criativos e ousados.',
        'imagem' => 'img/img_3.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 21,
        'nome' => 'Cidade Noturna',
        'preco' => 27.50,
        'descricao_curta' => 'Vida urbana dinâmica e pulsante à noite',
        'descricao' => 'Skyline noturno com luzes da cidade, transmitindo movimento e vida urbana.',
        'imagem' => 'img/img_4.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 22,
        'nome' => 'Floresta Encantada',
        'preco' => 23.99,
        'descricao_curta' => 'Magia envolvente e misteriosa da floresta',
        'descricao' => 'Floresta densa com atmosfera mágica e misteriosa, ideal para temas naturais.',
        'imagem' => 'img/img_5.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 23,
        'nome' => 'Abstrato Digital',
        'preco' => 31.50,
        'descricao_curta' => 'Arte visual contemporânea e inovadora',
        'descricao' => 'Composição digital abstrata moderna com formas e cores criativas.',
        'imagem' => 'img/img_6.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 24,
        'nome' => 'Retrato Vintage',
        'preco' => 19.75,
        'descricao_curta' => 'Estilo retrô autêntico e nostálgico',
        'descricao' => 'Retrato com estilo vintage que remete ao passado com charme e elegância.',
        'imagem' => 'img/img_7.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 25,
        'nome' => 'Oceano Profundo',
        'preco' => 34.50,
        'descricao_curta' => 'Exploração das profundezas marinhas',
        'descricao' => 'Imagem do fundo do mar com atmosfera misteriosa e fascinante.',
        'imagem' => 'img/img_8.jpg',
        'categoria' => 'Abstratas'
    ],
    [
        'id' => 26,
        'nome' => 'Arte Tribal',
        'preco' => 16.99,
        'descricao_curta' => 'Padrões ancestrais e culturais autênticos',
        'descricao' => 'Design tribal com elementos culturais e padrões tradicionais.',
        'imagem' => 'img/img_9.jpg',
        'categoria' => 'Editorial'
    ],
    [
        'id' => 27,
        'nome' => 'Campo de Lavanda',
        'preco' => 25.25,
        'descricao_curta' => 'Tranquilidade absoluta do ambiente rural',
        'descricao' => 'Campo de lavanda com cores suaves que transmite paz e bem-estar.',
        'imagem' => 'img/img_10.jpg',
        'categoria' => 'Minimalista'
    ]
];
