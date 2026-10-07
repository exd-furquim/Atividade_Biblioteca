<?php

// verificar_sessao.php
// Arquivo incluído nas páginas restritas do sistema.
// Garante que apenas usuários logados possam acessar essas páginas.

// Inicia a sessão do usuário (ou retoma uma sessão já existente)
session_start();

// Cabeçalhos HTTP que impedem o navegador de guardar a página
// em cache.
// Isso evita que o usuário consiga acessar páginas restritas após fazer logout.

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Verifica se a variável de sessão 'nome' está definida.
// Se não estiver definida, significa que o usuário não está logado.

if (!isset($_SESSION['nome'])) {
    // header() Redireciona o usuário para a página de login
    header("Location: login.php");
    // exit() encerra a execução do script atual.
    exit();
}