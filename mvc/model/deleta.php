<?php 
    // apaga o registro
    require_once "../config/config.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM turma WHERE id = $id";
        $result = $conexao->query($sql);
        header("location: ../controller/home.php");
    }else{
        header("location: ../controller/home.php");
    }

   

?>