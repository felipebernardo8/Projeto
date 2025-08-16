<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "titulo">
        <h1>Insira o seu Login!</h1>
    </div>

    <div class="formulario">
        <!-- Formulario de login que redirecionará para a pagina testLogin -->
        <form action="../model/testLogin.php" method="post">
        <label for="nome">Nome de usuario:</label>
        <input type="text" name="nome" required placeholder="Nome:" maxlength="45"><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required maxlength="45" placeholder="Senha:"><br>
        <input type="submit" value="Enviar" name="submit">
        </form>
    </div>

</body>
</html>