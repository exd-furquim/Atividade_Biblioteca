<?php
 
//salvar_usuario.php
//recebe os dados do formularo e cadastro e salvar o usuario no banco
//conceitos: POST, password_hash, MySQL, INSERT, verificação de email duplicado.
 
//inclui o arquivo de conexão com o banco de dados.
include('conexao.php');
 
//recebe os dados enviados pelo formulário via metodo POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
 
// =========================================================================
// VERIFICAÇÃO DE EMAIL DUPLICADO
//antes de cadastrar, verifica se o email ja existe no banco
// =========================================================================
 
//monta a consulta SQL (SELECT) para buscar o email
$sql = "SELECT id FROM usuarios WHERE email = '$email'";
 
//executa a consula no MyQSL
$resultadoVerficar = mysqli_query ($conexao, $sqlVerificar);
 
//validação: mysqli_num_rows() conta quantos registros foram encontrados
if(mysqli_num_rows($resultadoVerficar) > 0){
    //se o email ja existe, redireciona de volta ao cadastro coom mensagem de erro
    header("Location: cadastro.php?erro=email");
    exit();
}
 
//===================
//criptografia da senha
//===================
//password_hash() gera um hash seguro da senha
//PASSWORD_DEFAULT usa um algoritmo bcrypt(padrão PHP)
$senhCriptografada = password_hash($senha, PASSWORD_DEFAULT);
 
//==========================================
//INSEÇÃO NO BANCO (CREATE DO CRUD)
//==========================================
 
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhCriptografada')";
 
//executa o INSERT no banco de dado
mysql_query($conexao, $sql);
 
//redirecionando o usuário para a página de login após um cadastro bem sucedido
header("Location: login.php");
exit();
 
 
 
 