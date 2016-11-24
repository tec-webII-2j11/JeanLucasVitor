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


if ( $erro ) {
	echo $erro;
} else {
echo "<h1> Dados enviados</h1>";
}
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <form action="index.php">
<input type="submit" name="Voltar ao site" title="Voltar ao site" value="Voltar ao site" />
        </form>
        </body>
</html>