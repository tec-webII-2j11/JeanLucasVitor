<!docytpe html>
<!DOCTYPE html>
<html>
    
    
    
    <style>
   
    #corpo1{
    background: url(wallpapper12.png)right;
}
     
        h3{
        margin: 10px 50px 50px 57px;
		text-align: center;
		font: normal bold 20px/1.2em Elephant;
		}
        h1{
        margin: 100px 50px 50px 57px;
		text-align: center;
		font: normal bold 40px/1.2em Elephant;
		}
        #container{
        width: 960px;
        height:400px;
        margin: 0px auto;
        }
        .main{
		background-color: #828282;
		padding: 2px 0px 0px 0px;
		}
        footer{
		width: 960px; 
		height: 40px;
		bottom: 50px;
		margin: 30px 0px;
		background-color:#4F4F4F;
		text-align: center;
		}
					
		footer p{
		padding: 12.5px 0px;
		color: white;
		}
        
        </style>
    </head>
    <body id="corpo1" >
        <div id="container">
            <section class="main">
    </style>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="csmarvel.css">
</html>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<?php
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    header("Location: login.php");
    exit;
} else{
    echo "<center><h1>Você está logado!</h1></center>";
}
?>
        <h3>O que você deseja fazer agora?</h3>
        
			
        
        <fieldset>
            <legend>Conferir dados/Atualizar dados/Excluir conta</legend>
        <form action="escolha.php" method="POST">
              <input type="radio" name="tipoCRUD" value="C" checked/>Criar usuario<br/>
            <input type="radio" name="tipoCRUD" value="R" checked/>Conferir dados<br/>
            <input type="radio" name="tipoCRUD" value="U"/>Atualizar dados<br/>
            <input type="radio" name="tipoCRUD" value="D"/>Excluir conta<br/>
            <input type="submit" name="enviar" value="START"/>
        </form>
        </fieldset>
       <a href="login.php">Retornar</a></p> <p><a href="index.php">Página Principal</a> </p>
        <center><a href="logout.php">Desconectar</a></center>
         <footer> <p>Desenvolvido por Jean</p></footer>
        </section>
        </div>
    </body>
</html>