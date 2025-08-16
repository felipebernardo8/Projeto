<?php 
    require_once "../config/config.php";

    if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $data = $_POST['nascimento'];
    $matr = $_POST['matricula'];
    $falta = $_POST['faltas'];

    //insere um novo registro
    $sql = "INSERT INTO turma (nome,sexo,nascimento,matricula,faltas) VALUES ('$nome','$sexo','$data','$matr','$falta')";

    $res = $conexao->query($sql);

    header("location: ../controller/home.php");


           
    }else{
        header("location: ../controller/home.php");
    }

?>