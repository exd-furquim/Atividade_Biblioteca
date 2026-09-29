<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário - biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de usuário</h1>
        <p class="substitulo">Crie sua conta para acessar o sistema da biblioteca</p>

        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
            echo '<div class="mensagem-erro">Este email já está cadastrado.</div>';
        }
        ?>

        <form action="salvar_usuario.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-block">Cadastrar</button>
        </form>
    </div>
    <div class="nav-links">
        <p><a href="cadastro.php">Não tem uma conta? Cadastra-se.</a></p>
    </div>
    <a href="cadastro.php" class="btn btn-voltar">voltar para Cadastro</a>
    <div class="dica-navegacao">
        <strong>Fluxo:</strong> login → Painel → Cadastrar ou Listar Livros
    </div>
</body>

</html>