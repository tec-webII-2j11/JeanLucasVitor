  <?php 
   include "conectamysql.php";
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST ['endereco'];
    $cidade = $_POST ['cidade'];
    $email = $_POST ['email'];
    $senha = sha1($_POST ['senha']);
    $csenha = sha1($_POST ['csenha']);
    
    $resultado = mysqli_query($conexao, "UPDATE usuarios SET nome='".$nome."', sobrenome='".$sobrenome."',  endereco='".$endereco."',  cidade='".$cidade."' ,  email='".$email."',  senha='".$senha."',  csenha='".$csenha."'" ) or die ("Não foi possível executar a SQL: ".mysqli_error($conexao));
    
    if($resultado === TRUE){
    echo "<br/>Usuário atualizado com Sucesso! ";
    } else {
        echo "<br/>Erro na atualização! ";
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