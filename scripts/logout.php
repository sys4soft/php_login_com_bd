<?php

// destrói a sessão
session_destroy();

// redireciona para a página inicial
header('Location: index.php?rota=home');