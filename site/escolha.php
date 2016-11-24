<?php
    $opcao = $_POST['tipoCRUD'];
    switch($opcao)
    {
        case "C":
        echo "<h3> CRIAR </h3>
        <fieldset>
        <form action='create.php' method='POST'>
            Nome: <input type='text' name='nome'/><br/>
            Email: <input type='text' name='email'/> <br/>
            Endereco: <input type='text' name='endereco'/> <br/>
            Senha: <input type='text' name='senha'/> 
            <input type='submit' value='INSERIR'/>
            </form>
            </fieldset>";
     break;
        
        case "R":
            $formulario = "<h3>Buscar</h3>
                <form action='read.php' method='POST'>
                    <input type='submit' value='Buscar'/>
                </form>";
        break;
        
        case "U":
            $formulario = "<h3>Atualizar</h3>
                <form action='update.php' method='POST'> 
                Nome: <input type='text' name='nome'/><br/>
                Sobrenome: <input type='text' name='sobrenome'/><br/>
                Endereço: <input type='text' name='endereco'/><br/>
                Cidade: <input type='text' name='cidade'/><br/>
                E-mail: <input type='text' name='email'/><br/>
                Senha: <input type='text' name='senha'/><br/>
                Confirmar senha: <input type='text' name='csenha'/><br/>
                <input type='submit' value='Atualizar'/>
            </form>";
        break;
        
        case "D":
            $formulario = "<h3>Apagar</h3>
                <form action='delete.php' method='POST'>
                Nome: <input type='text' name='nome'/><br/>
                Senha: <input type='text' name='senha'/><br/>
                <input type='submit' value='Remover'/>
            </form>";
        break;
    }
    echo $formulario;
?>