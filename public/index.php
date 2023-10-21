<?php

// início da sessão
session_start();

// carregamento das rotas permitidas
$rotas_permitidas = require_once __DIR__ . '/../inc/rotas.php';

// definição da rota
$rota = $_GET['rota'] ?? 'home';

// verifica se o usuario está logado
if (!isset($_SESSION['usuario'])) {
    $rota = 'login';
}

// se o usuario está logado e tenta entrar no login
if (isset($_SESSION['usuario']) && $rota === 'login') {
    $rota = 'home';
}

// se a rota não existe
if (!in_array($rota, $rotas_permitidas)) {
    $rota = '404';
}

// preparação da página
$script = __DIR__ . '/../scripts/';
switch ($rota) {
    case '404':
        $script = '404.php';
        break;
}

// apresentação da página
require_once __DIR__ . '/../inc/header.php';
require_once __DIR__ . "/../scripts/$script";
require_once __DIR__ . '/../inc/footer.php';