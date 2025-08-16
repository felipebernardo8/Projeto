<?php 
    require_once "../config/config.php";
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //atribuindo o nome da entidade(tabela) para a variavel $table
    $table = "usuario";

    //a variavel $check e $res terá a função de verifica se existe algum registro que tenha o nome e senha igual aos valores recebidos por via post no formulario da pagina de cadastro! 
    $check = "SELECT nome FROM $table WHERE nome = '$nome'";
    $res = $conexao->query($check);

    if ($res->num_rows < 1) {
        //se não existir um registro com o mesmo dados:
        $sql = "INSERT INTO $table (nome,senha) VALUES ('$nome','$senha')";
        $result = $conexao->query($sql); 
        header("location: ../../index.php"); 
        exit();      
    }else{
        //se existir um registro com mesmo dados, voltará para a pagina de cadastro!
        header("location: ../controller/cadastrar.php");
        exit();
    }

    
?>