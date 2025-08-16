<?php
    session_start();
    require_once "../config/config.php";
    //verefica se existe o valor do submit
    if (isset($_POST['submit'])) {

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        //verificará se existe algum registro que tenha os valores de nome e senha igual aos dados recebido pelo formulario login via POST!
        $sql = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
        $result = $conexao->query($sql);

        if ($result->num_rows>0) {
            // login correto
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header("Location: ../controller/home.php");

        } else {
            //login incorreto
            header("Location: ../controller/login.php");
            exit();
        }
        
    } else {
        //valor não existente
        echo "erro...";
        header("Location: ../controller/login.php");
    }

?>