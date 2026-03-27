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
        'nome' => 'bangela',
        'preco' => 15.99,
        'descricao_curta' => 'ideal para fotos de perfil',
        'descricao' => 'Foto feita com muito profissionalismo e disclipina',
        'imagem' => 'endereco_da_imagem'
    ],
    [
        'id' => 2,
        'nome' => 'coracao',
        'preco' => 18.00,
        'descricao_curta' => 'ideal para refletir',
        'descricao' => 'Foto feita com muito profissionalismo e disclipina',
        'imagem' => 'endereco_da_imagem'
    ],
    [
        'id' => 3,
        'nome' => 'hacker',
        'preco' => 12.00,
        'descricao_curta' => 'ideal para botar medo',
        'descricao' => 'Foto feita com muito medo e insegurança',
        'imagem' => 'endereco_da_imagem'
    ]
];
