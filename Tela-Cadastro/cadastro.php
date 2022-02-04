<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="cadastro.css">
    <meta charset="UTF-8"> <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form class="form" action="../tela-login/login.php">
            <div class="input-field"> 
            <input type="text" id="nome" placeholder="Digite seu nome">
             <label for="nome">Nome:</label>
        </div>
        <div class="input-field"> 
            <input type="text" id="email" placeholder="Digite seu email">
             <label for="nome">Email:</label>
        </div>

        <div class="input-field">
<input type="password" id="senha" placeholder="Digite a sua senha">
<label for="senha">Senha:</label>
</div>

<div class="center">
    <button type="submit">Cadastrar</button>
</div>
</form>

<div class="links">
    <a href="../tela-login/login.html"><p>Já tem conta? Faça seu login!</p></a>
</div>
</div>
</body>
</html>