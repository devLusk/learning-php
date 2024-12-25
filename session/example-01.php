<?php 

require_once("config.php");

// Cria uma variável de sessão
$_SESSION["nome"] = "Teste";  // Cria uma variável de sessão chamada "nome" e atribui o valor "Teste" a ela.

// Remove todas as variáveis de sessão, mas mantém a sessão ativa
session_unset(); // Remove todas as variáveis de sessão
echo $_SESSION["nome"];  // Tenta exibir o valor da variável de sessão "nome", que foi previamente definida

// Exibe o ID da sessão atual
echo session_id(); // Exibe o ID da sessão atual
