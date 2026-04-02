<?php

session_start();    //armazenamento temporario, p usar a sessão eu tenho q inicia-la
require_once 'data.php'; // cerrage isso ao iniciar o site, eu posso carregar todas as coisas "require_once" nessa página, já que ela vai estar em todas as páginas.

//se a sessão n estiver setada, ele seta ela.
//Isso carega os dados de todos os produtos.
if(!isset($_SESSION['produtos'])){
    $_SESSION['produtos'] = $produtos_base;
}

// session_destroy();