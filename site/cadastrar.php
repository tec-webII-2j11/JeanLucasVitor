<?php include "conectamysql.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Cadastrando...</title>
        <style>
        h1{
        margin: 100px 50px 50px 57px;
		text-align: center;
		font: normal bold 40px/1.2em Elephant;
		}
        h2{
        margin: 10px 50px 50px 57px;
		text-align: center;
		font: normal bold 40px/1.2em Elephant;
		}
        #container{
        width: 960px;
        height:400px;
        margin: 0px auto;
        }
        .main{
        background-image:url(fundo.png);
	
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
    <body>
        <div id="container">
            <section class="main">
<?php
$erro = false;
if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi postado.';
}
foreach ( $_POST as $chave => $valor ) {
	$$chave = trim( strip_tags( $valor ) );
	
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}

if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}
if($senha!=$csenha){
$erro = 'senhas diferentes.';
}


if ( $erro ) {
	echo "<center><h1>$erro</h1></center>";
} else {
echo "<center><h1> Dados enviados</h1></center>";

$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());

    
    
$nome=strip_tags($_POST['nome']);
$sobrenome=strip_tags($_POST['sobrenome']);
$endereco=strip_tags($_POST['endereco']);
$cidade=strip_tags($_POST['cidade']);
$email=strip_tags($_POST['email']);
$senha=strip_tags(sha1($_POST['senha']));
$csenha=strip_tags(sha1($_POST['csenha']));
$sql = mysqli_query($conexao,"INSERT INTO usuarios(nome, sobrenome, endereco, cidade, email, senha, csenha) VALUES('$nome', '$sobrenome', '$endereco', '$cidade', '$email', '$senha', '$csenha')");
echo "<center><h2>Cadastro efetuado com sucesso!</h2></center>";
}
?>
                <a href="login.php"><center>Volte para o site</center></a>
                <a href="cadastro.php"><center>Se deu errado, volte para se cadastrar</center></a>
                <footer> <p>Desenvolvido por Jean</p></footer>
        </section>
        </div>
    </body>
</html>