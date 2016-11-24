<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<html>
    <head>
    <meta charset="utf-8">
    <title>Autenticando</title>
        <script type="text/javascript">
        function loginsucessfully(){
            setTimeout("window.location='painel.php'", 750);
        }
            function loginfailed(){
                setTimeout("window.location='cadastro.php'", 750);
            }
        </script>
    </head>
    <body>
<?php
$email=strip_tags($_POST['email']);
$senha=strip_tags(sha1($_POST['senha']));
$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email ='$email' and senha = '$senha'") or die(mysqli_error());
$row = mysqli_num_rows($sql);

if ($row > 0){
    session_start();
    $_SESSION['email']= $_POST['email'];
    $_SESSION['senha']= $_POST['senha'];
    echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
    echo "<script>loginsucessfully()</script>";
} else{
    echo "<center>Nome de usuário ou senha incorreto! Aguarde um instante para tentar novamente.</center>";
    echo "<script>loginfailed()</script>";
}
?> 
    </body>
</html>  