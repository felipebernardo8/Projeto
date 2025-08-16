<?php 
    session_start();
    $nome = $_SESSION['nome'];
    $senha = $_SESSION['senha'];

    //verifica a existencia 
    if (!isset($nome) || !isset($senha)) {
       unset($nome);
       unset($senha);
       header("location: login.php");
       exit();
    }

    require_once "../config/config.php";
    
    //verificará se existe algum valor enviado pelo via get na barra de pesquisa
    if (!empty($_GET['search'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM turma WHERE nome LIKE '%$search%' OR sexo LIKE '%$search%' OR matricula LIKE '%$search%' OR nascimento LIKE '%$search%' ORDER BY nome";

    } else {
     $sql = "SELECT * FROM turma";       
    }
    
    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "sair">
        <a href="../model/logout.php">SAIR</a>
    </div>
    <h1>Seja bem vindo <?= $nome ?>!</h1>

    <div class="pesquisar">
        <!-- pesquisa de registros -->
        <input type="search" placeholder="pesquisar" id="search" name="search">
        <button onclick="pesquisar()">pesquisar</button>
    </div>

    <div class="table">
        <table>
            <thead>
                <th>Id</th>
                <th>Aluno</th>
                <th>Sexo</th>
                <th>Nascimento</th>
                <th>Matricula</th>
                <th>Quant. de Faltas</th>
                <th>...</th>
            </thead>

            <tbody>
                <?php 
                    //gera os valores da tabela automaticamente
                    while($dados = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$dados['id']."</td>";
                        echo "<td>".$dados['nome']."</td>";
                        echo "<td>".$dados['sexo']."</td>";
                        echo "<td>".$dados['nascimento']."</td>";
                        echo "<td>".$dados['matricula']."</td>";
                        echo "<td>".$dados['faltas']."</td>";
                        echo "<td> <a href='../model/editar.php?id=".$dados['id']."'>editar</a> <br>";
                        echo "<a href='../model/deleta.php?id=".$dados['id']."'>deletar</a> </td>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="addAluno.php">Cadastrar Aluno(a)</a>

    <script>
        //atribuirá o valor da pesquisa na variavel
        var pesquisa = document.getElementById('search');

        //função resposavel por enviar o valor em via get
        function pesquisar(){
            window.location = "home.php?search=" + pesquisa.value;
        }
    </script>
</body>
</html>