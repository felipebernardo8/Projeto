<?php
require_once "../config/config.php";

// Verifica se o formulário foi enviado!
if (isset($_POST['submit'])) {
    //valores do formulario sendo armazenado nas variaveis
    $id    = $_POST['id'];
    $nome  = $_POST['nome'];
    $sexo  = $_POST['sexo'];
    $data  = $_POST['nascimento'];
    $matr  = $_POST['matricula'];
    $falta = $_POST['faltas'];

    //alteração dos dados
    $sql = "UPDATE turma SET nome='$nome', sexo='$sexo', nascimento='$data', matricula='$matr', faltas='$falta' WHERE id='$id'";
    $result = $conexao->query($sql);

    header("location: ../controller/home.php");
    exit();
}
?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.php">Voltar</a>

    <div class="titulo">
        <h1>Formulario do Aluno(a)</h1>
    </div>

<!-- formulario da edição -->
    <div class="formulario">
        <form action="editar.php" method="post">

            <input type="hidden" name="id" value="<?=$_GET['id']?>">

            <label for="nome">Nome do Aluno:</label>
            <input type="text" name="nome" placeholder="Nome:" required> <br>

            <p>Sexo:</p>
            <input type="radio" name="sexo" value="M" required>M
            <input type="radio" name="sexo" value="F" required>F <br>

            <label for="nascimento">Data de nascimento:</label>
            <input type="date" name="nascimento"  required>    <br>
            
            <label for="matricula">N de matricula</label>
            <input type="number" name="matricula" placeholder="matricula:" required><br>

            <label for="faltas">Quantidade de faltas</label>
            <input type="number" name="faltas" placeholder="N de faltas" required><br>

            <input type="submit" value="enviar" name="submit">
        </form>
    </div>
</body>
</html>