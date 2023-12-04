<?php

// Inicie a sessão
session_start();

//Verifica se o cookie de autenticação está definido, caso contrário, redireciona para a página de login
if (!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_token'])) {
    header("Location: ../views/index.php");
    exit();
}

require_once '../views/login-index.php';

?>