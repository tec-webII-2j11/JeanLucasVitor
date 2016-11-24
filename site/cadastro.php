<!Doctype HTML>
		
<html>
<head>
<title>DC COMICS </title>
    <meta charset="UTF-8">
    
    <link rel = "stylesheet" type = "text/css" href="csmarvel.css">

</head>
<body id="backgroundblue">
    <section id="corpo">
    <header>
        <img class="img1" src="dc_comics_logo_2.png" alt="Imagem">					
        <h1 class="titulo">CADASTRE-SE </h1>

    </header>
        
        <section id="whitebackground">
       <form action="cadastrar.php" method="post">
          <p><label for="nome"> Nome: </label> 
              <input type="text" name="nome" id="nome" placeholder="primeiro nome" size="30" required value="" /><br>
              <label for='sobrenome'>Sobrenome: </label>                   
               <input type="text" name="sobrenome"  id="sobrenome" required="required" placeholder="Sobrenome" size="30" /><br>
               <label for='endereco'>Endereço: </label>                      
                    <input type="text" name="endereco"  id="endereco" required="required" placeholder="Ex: Av Bolonha 625" /><br>
                    <label for='cidade'>Cidade: </label><br>                        
                    <input type="text" name="cidade"  id="cidade" required="required" placeholder="Ex: São Paulo" /><br>
              <label for="email"  id="Email"> Email: </label> 
              <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required name=email size="30" /></p>
              <label for="senha" id="Senha"> Senha: </label> 
                  <input type="password" name="senha" id="senha" placeholder="Senha" required value="" size="******" /></p><br>
                  <label for='csenha'>Confirmar senha: </label><br>                     
                    <input type="password" name="csenha"  id="csenha" required="required" placeholder="******" /><br>
                
           <br>
           <input type="checkbox" id="desejo" name="desejo">Desejo receber atualizações e novidades por e-mail.
          <p><input type="submit" value="Enviar" name="enviar" id="enviar">
              <input type="reset"  value="Limpar" name="limpar" id="limpar"></p>
       </form>    
    <p><a href="login.php">Retornar</a></p> <p><a href="index.php">Página Principal</a> </p>
        </section>
            <footer><center> Site academico.</br>
                </center>
                    </footer>
        </section>

</body>



</html> 
