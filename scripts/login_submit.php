<?php

// verifica se aconteceu um POST
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /?rota=login');
    exit;
}

// vai buscar os dados do POST
$usuario = $_POST['text_usuario'] ?? null;
$senha = $_POST['text_senha'] ?? null;

// verifica se os dados estão preenchidos
if(!$usuario || !$senha) {
    header('Location: /?rota=login');
    exit;
}

// a classe da base de dados já está carregada no index.php
$db = new database();

// vai procurar o usuário na base de dados
$params = [
    ':usuario' => $usuario
];
$sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
$result = $db->query($sql, $params);

// verifica se aconteceu um erro
if($result['status'] === 'error') {
    
    header('Location: index.php?rota=404');
    exit;
}

// verifica se o usuário existe
if(count($result['data']) === 0) {
    
    // erro na sessão
    $_SESSION['erro'] = 'Usuário ou senha inválidos';
    
    header('Location: index.php?rota=login');
    exit;
}

// verifica se a senha está correta
if(!password_verify($senha, $result['data'][0]->senha)) {

    // erro na sessão
    $_SESSION['erro'] = 'Usuário ou senha inválidos';
    
    header('Location: index.php?rota=login');
    exit;
}

// define a sessão do usuário
$_SESSION['usuario'] = $result['data'][0];

// redireciona para a página inicial
header('Location: index.php?rota=home');