<?php

if(isset($_POST['submit']))
{
    print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['telefone']);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesform.css"/>
    <title>Formulário</title>
</head>
<body>
   <div class="box">
    <form action="formulario.php" method="POST">
    <fieldset>
        <legend><b>Realize o seu cadastro</b></legend>
        <br>
        <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput"> <strong>Nome Completo</strong></label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelInput"><strong>E-mail</strong> </label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label for="senha" class="labelInput"> <b>Senha</b></label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="tel" name="telefone" id="telefone" class="inputUser" required>
            <label for="telefone" class="labelInput"> <b>Telefone</b></label>
        </div>
        <br><br>
        <p><strong>Gênero</strong></p>
            <input type="radio" id="feminino" name="genero" class="feminino" required>
            <label for="feminino"> Feminino </label>
            <br>
            <input type="radio" id="masculino" name="genero" class="masculino" required>
            <label for="masculino"> Masculino </label>
            <br>
            <input type="radio" id="outros" name="genero" class="outros" required>
            <label for="outros"> Outros </label>
            <br><br>
            <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
         <div class="inputBox">
            <input type="text" name="endereco" id="endereco" class="inputUser" required>
            <label for="endereco" class="labelInput"> <strong>Endereço</strong></label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="cidade" id="cidade" class="inputUser" required>
            <label for="cidade" class="labelInput"> <strong>Cidade</strong></label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="estado" id="estado" class="inputUser" required>
            <label for="estado" class="labelInput"> <strong>Estado</strong></label>
        </div>
        <br><br>
        <input type="submit" name="submit" id="submit"/>  
        
    </fieldset>
    </form>
   </div> 
</body>
</html>