<?php
    include "conectamysql.php";
    
    $resultado = mysqli_query($conexao, "SELECT * FROM usuarios") or die (mysqli_error($conexao));
    if($resultado){
        while($row = mysqli_fetch_array($resultado)){
            echo $row["nome"]."-".$row["senha"]."<br/>";
        }
    }
    mysqli_close($conexao);
?>
<html>
    <head>
        <meta charset="utf-8">    
</head>
    <body>
        <button><a href="painel.php"> Voltar</a></button>
    
    </body>

</html>
