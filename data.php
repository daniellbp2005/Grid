<?php
// data.php n guarda nada, só guarda informação...
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
        'descricao_curta' => 'Perfeito para fotos de perfil em redes sociais',
        'descricao' => 'Foto profissional capturada com rigor técnico e disciplina estética, destacando os detalhes faciais com iluminação estratégica para melhor definição,',
        'imagem' => 'img/img_1.jpg',
    ],
    [
        'id' => 2,
        'nome' => 'Coração',
        'preco' => 18.20,
        'descricao_curta' => 'Ideal para reflexão e introspecção pessoal',
        'descricao' => 'Imagem contemplativa desenvolvida com profissionalismo e cuidado técnico meticioso, perfeita para momentos de reflexão profunda e conexão emocional pessoal,',
        'imagem' => 'img/img_2.jpg'
    ],
    [
        'id' => 3,
        'nome' => 'Hacker',
        'preco' => 12.20,
        'descricao_curta' => 'Perfeito para criar atmosfera intensa e assustadora',
        'descricao' => 'Composição visual intrepidante criada com elementos dramáticos, cores escuras e contraste intenso, gerando sensação de suspense e atmosfera psicológica envolvente,',
        'imagem' => 'img/img_3.jpg'
    ],
    [
        'id' => 4,
        'nome' => 'Abstrato Azul',
        'preco' => 22.50,
        'descricao_curta' => 'Excelente para capas de álbuns musicais e projetos',
        'descricao' => 'Design abstrato sofisticado trazendo tons azuis vibrantes e dinâmicos, especialmente desenvolvido para expressar criatividade artística e complementar publicações musicais profissionais com impacto visual marcante,',
        'imagem' => 'img/img_4.jpg'
    ],
    [
        'id' => 5,
        'nome' => 'Minimalista Branco',
        'preco' => 19.99,
        'descricao_curta' => 'Simplicidade elegante e sofisticada em tons neutros',
        'descricao' => 'Arte minimalista pura desenvolvida em tons brancos, focada intensamente na pureza estética e clareza visual, transmitindo serenidade e refinamento artístico através da simplicidade inteligente,',
        'imagem' => 'img/img_5.jpg'
    ],
    [
        'id' => 6,
        'nome' => 'Editorial Tech',
        'preco' => 25.00,
        'descricao_curta' => 'Ideal para revistas e publicações de tecnologia',
        'descricao' => 'Layout editorial contemporâneo e inovador integrando elementos tecnológicos sofisticados, absolutamente perfeito para publicações digitais e impressas que focam em inovação e tendências do setor tech,',
        'imagem' => 'img/img_6.jpg'
    ],
    [
        'id' => 7,
        'nome' => 'Comercial Vermelho',
        'preco' => 30.99,
        'descricao_curta' => 'Com impacto visual forte e altamente marcante',
        'descricao' => 'Design comercial poderoso destacando vermelho vibrante dinamicamente, absolutamente ideal para anúncios impactantes, campanhas publicitárias de grande alcance e estratégias de marketing visual de alta performance,',
        'imagem' => 'img/img_7.jpg'
    ],
    [
        'id' => 8,
        'nome' => 'Retrato Clássico',
        'preco' => 14.50,
        'descricao_curta' => 'Elegância atemporal e sofisticação permanente',
        'descricao' => 'Retrato clássico refinado utilizando iluminação suave e balanceada profissionalmente, perfeitamente elaborado para perfis corporativos, LinkedIn e apresentações profissionais de altíssima qualidade,',
        'imagem' => 'img/img_8.jpg'
    ],
    [
        'id' => 9,
        'nome' => 'Natureza Viva',
        'preco' => 16.75,
        'descricao_curta' => 'Conexão profunda e autêntica com a natureza',
        'descricao' => 'Fotografia de paisagem vibrante e dinâmica, capturando integralmente a essência bruta e autêntica da vida selvagem em seu estado natural mais puro e expressivo,',
        'imagem' => 'img/img_9.jpg'
    ],
    [
        'id' => 10,
        'nome' => 'Arte Urbana',
        'preco' => 28.99,
        'descricao_curta' => 'Estilo de rua moderno e autenticamente urbano',
        'descricao' => 'Grafite urban art de primeira qualidade trazendo cores extremamente ousadas e vibrantes, representando genuinamente a criatividade e cultura dinâmica das metrópoles contemporâneas,',
        'imagem' => 'img/img_10.jpg'
    ],
    [
        'id' => 11,
        'nome' => 'Pôr do Sol',
        'preco' => 20.50,
        'descricao_curta' => 'Beleza natural e envolvente do entardecer',
        'descricao' => 'Cena de pôr do sol capturada em tons quentes dourados e alaranjados, absolutamente ideal para promover relaxamento profundo, meditação e inspiração criativa em ambientes residenciais,',
        'imagem' => 'img/img_11.jpg'
    ],
    [
        'id' => 12,
        'nome' => 'Abstrato Geométrico',
        'preco' => 24.50,
        'descricao_curta' => 'Exploração criativa de formas e padrões',
        'descricao' => 'Composição geométrica abstrata sofisticada e intencional, explorando profundamente linhas precisas e formas geométricas modernas, criando composição visual harmoniosa baseada em simetria e proporção,',
        'imagem' => 'img/img_12.jpg'
    ],
    [
        'id' => 13,
        'nome' => 'Retrato Noturno',
        'preco' => 17.25,
        'descricao_curta' => 'Mistério envolvente e cativante da noite',
        'descricao' => 'Fotografia noturna sofisticada utiliza iluminação dramática e estratégica, capturando emoções psicológicas profundas e sentimentos introspectivos através de contraste sutil e clima noir,',
        'imagem' => 'img/img_13.jpg'
    ],
    [
        'id' => 14,
        'nome' => 'Floral Delicado',
        'preco' => 13.99,
        'descricao_curta' => 'Captura delicada da fragilidade da natureza',
        'descricao' => 'Close-up botânico de flores delicadas em alta resolução, simbolizando integralmente beleza efêmera e transitoriedade natural, perfeito para temas de renovação, esperança e crescimento pessoal,',
        'imagem' => 'img/img_14.jpg'
    ],
    [
        'id' => 15,
        'nome' => 'Arquitetura Moderna',
        'preco' => 32.00,
        'descricao_curta' => 'Destaque das linhas urbanas modernas e limpas',
        'descricao' => 'Fotografia arquitetônica de prédio contemporâneo capturado em perspectiva dinâmica, destacando precisamente design inovador e estrutura construtiva de vanguarda com acabamentos refinados,',
        'imagem' => 'img/img_15.jpg'
    ],
    [
        'id' => 16,
        'nome' => 'Mar Sereno',
        'preco' => 21.50,
        'descricao_curta' => 'Sensação profunda de calma oceânica absoluta',
        'descricao' => 'Vista panorâmica do mar completamente calmo capturada ao amanhecer em tons suaves, promovendo profunda sensação paz interior, tranquilidade meditativa e serenidade emocional permanente,',
        'imagem' => 'img/img_16.jpg'
    ],
    [
        'id' => 17,
        'nome' => 'Espaço Cósmico',
        'preco' => 35.50,
        'descricao_curta' => 'Exploração imersiva do infinito cósmico',
        'descricao' => 'Imagem digital artística do espaço sideral infinito, inspirada em galáxias espetaculares e campos de estrelas dinâmicos, representando grandiosidade do universo e estimulando admiração cósmica profunda,',
        'imagem' => 'img/img_17.jpg'
    ],
    [
        'id' => 18,
        'nome' => 'Café da Manhã',
        'preco' => 11.99,
        'descricao_curta' => 'Aconchego acolhedor do período matinal',
        'descricao' => 'Cena lifestyle de café da manhã completamente iluminada por luz natural suave, absolutamente perfeita para posts contagiantes em redes sociais e conteúdo lifestyle inspirador e aspiracional,',
        'imagem' => 'img/img_1.jpg'
    ],
    [
        'id' => 19,
        'nome' => 'Montanha Nevada',
        'preco' => 26.75,
        'descricao_curta' => 'Grandeza impressionante e majestade natural pura',
        'descricao' => 'Pico de montanha majestosamente coberto de neve branca imaculada, simbolizando profundamente aventura ousada, superação pessoal e majestade indomável da natureza selvagem e instintiva,',
        'imagem' => 'img/img_2.jpg'
    ],
    [
        'id' => 20,
        'nome' => 'Arte Pop',
        'preco' => 29.99,
        'descricao_curta' => 'Explosão criativa de cores vibrantes intensas',
        'descricao' => 'Design pop art contemporâneo apresentando cores brilhantes e contrastantes intensamente, inspirado artisticamente em ícones culturais pop e fenômenos sociais contemporâneos de grande impacto visual,',
        'imagem' => 'img/img_3.jpg'
    ],
    [
        'id' => 21,
        'nome' => 'Cidade Noturna',
        'preco' => 27.50,
        'descricao_curta' => 'Vida urbana dinâmica e pulsante à noite',
        'descricao' => 'Fotografia de skyline noturno luminoso capturada em perspectiva elevada, refletindo completamente a energia contagiante das metrópoles modernas, movimento urbano intenso e pulso da vida nocturna,',
        'imagem' => 'img/img_4.jpg'
    ],
    [
        'id' => 22,
        'nome' => 'Floresta Encantada',
        'preco' => 23.99,
        'descricao_curta' => 'Magia envolvente e misteriosa da floresta',
        'descricao' => 'Cena de floresta verde densa com iluminação filtrada dramaticamente através das copas, evocando misté­rio ancestral e paz interior profunda, transmitindo conexão mágica com natureza selvagem,',
        'imagem' => 'img/img_5.jpg'
    ],
    [
        'id' => 23,
        'nome' => 'Abstrato Digital',
        'preco' => 31.50,
        'descricao_curta' => 'Arte visual contemporânea e inovadora',
        'descricao' => 'Composição abstrata criata digitalmente com sofisticação máxima, explorando profundamente formas dinâmicas e cores ousadas, resultando em obra arte digital contemporânea de grande apelo visual,',
        'imagem' => 'img/img_6.jpg'
    ],
    [
        'id' => 24,
        'nome' => 'Retrato Vintage',
        'preco' => 19.75,
        'descricao_curta' => 'Estilo retrô autêntico e nostálgico',
        'descricao' => 'Fotografia sofisticada em estilo vintage puro, aplicando filtros analógicos e iluminação clássica cinematográfica, transportando visualmente para eras passadas com nostalgia genuína e charme atemporal,',
        'imagem' => 'img/img_7.jpg'
    ],
    [
        'id' => 25,
        'nome' => 'Oceano Profundo',
        'preco' => 34.50,
        'descricao_curta' => 'Exploração das profundezas marinhas',
        'descricao' => 'Imagem subaquática espetacular do oceano inexplorado, revelando vida marinha fascinante e biodiversidade extraordinária dos abismos, entre criaturas impossualmente extraterrestre e cenários de tirar fôlego,',
        'imagem' => 'img/img_8.jpg'
    ],
    [
        'id' => 26,
        'nome' => 'Arte Tribal',
        'preco' => 16.99,
        'descricao_curta' => 'Padrões ancestrais e culturais autênticos',
        'descricao' => 'Design tribal autêntico com padrões tradicionais intrincados e significativos, representando fidedignamente culturas ancestrais e civilizações antigas, honrando herança cultural e simbolismo profundo,',
        'imagem' => 'img/img_9.jpg'
    ],
    [
        'id' => 27,
        'nome' => 'Campo de Lavanda',
        'preco' => 25.25,
        'descricao_curta' => 'Tranquilidade absoluta do ambiente rural',
        'descricao' => 'Vista panorâmica de extenso campo de lavanda roxa vibrante, simbolizando calma interior, beleza natural intocada e essência aromática do campo, perfeito para refúgio mental e bem-estar meditativo,',
        'imagem' => 'img/img_10.jpg'
    ]
];
    
