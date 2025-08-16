
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

    <div class="titulo">
        <h1>Cadastro</h1>
    </div>

    <div class="formulario">
        <!-- formulario para inserir dados para a entidade(tabela) usuario! -->
        <form action="../model/novolog.php" method="post">
            <label for="nome">Nome de usuario:</label>
            <input type="text" name="nome" maxlength="45" placeholder="Nome:" required> <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" maxlength="45" placeholder="Senha:" required> <br>
            <input type="submit" value="Enviar">


        </form>
    </div>

</body>
</html>