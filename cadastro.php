<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <p class="subtitulo">Crie sua conta para acessar a biblioteca:</p>
<?php
if(isset($_GET["erro"])) && $_GET["erro"] === "email_existente") {
    echo "div class='erro'>Erro: O e-mail informado já está em uso. Por favor, utilize outro e-mail.</div>";
}

    </div>
</body>
</html>