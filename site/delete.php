<?php
    include "conectamysql.php";
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    $resultado = mysqli_query($conexao, "DELETE FROM usuarios WHERE nome='$nome'") or die ("Não foi possível executar a SQL: ".mysqli_error($conexao));
    
    if ($resultado === TRUE){
    echo "<br/>Usuário removido com Sucesso! ";
    } else {
        echo "<br/>Erro na remoção! ";
    }
    
    mysqli_close($conexao);
    ?>
<html>
    <head>
    <meta charset="utf-8">
    </head>
    
    <body>
        <br>
    <button><a href="painel.php">Voltar</a></button>
    
    </body>

</html>