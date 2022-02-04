<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8"> <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form class="form" action="../index.php">
            <div class="input-field"> 
            <input type="text" id="nome" placeholder="Digite seu nome">
             <label for="nome">Nome:</label>
        </div>

        <div class="input-field">
<input type="password" id="senha" placeholder="Digite a sua senha">
<label for="senha">Senha:</label>
</div>

<div class="center">
    <button>Entrar</button>
</div>
</form>

<div class="links">
    <a href="../Tela Esqueceu Senha/EsqueceuSenha.php"><p>Esqueceu a sua senha?</p></a>
    <a href="../Tela-Cadastro/cadastro.php"><p>Ainda não sou cadastrado?</p></a>
</div>
</div>
</body>
</html>