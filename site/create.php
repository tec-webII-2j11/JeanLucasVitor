 <?php
 
	
     $nome  =$_POST["nome"];
    $email =$_POST["email"];
    $endereco =$_POST["endereco"];
    $senha =sha1($_POST["senha"]);
    $csenha =sha1($_POST["csenha"]);
    
    ////////////////
    include "conectamysql.php";
    
    $resultado= mysqli_query($conexao,"INSERT INTO usuarios(nome, sobrenome, endereco, cidade, email, senha, csenha) VALUES('$nome', '$sobrenome', '$endereco', '$cidade', '$email', '$senha', '$csenha')");

    
    if($resultado === TRUE){
        echo "<br/>Usuario inserido com sucesso.";
    } else {
        echo "<br/>Erro ao inserir usuario.";

    }
		
    mysqli_close($conexao);
?>
<html>
<style>
#corpo1{
    background: url(wallpapper12.png)right;
}

    
</style>    

    
    
<p><a href="painel.php">Painel</a> </p>    
    
  
</html>