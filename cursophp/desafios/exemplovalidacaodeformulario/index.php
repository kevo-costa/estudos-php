<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        //PROCESSAR E RECEBER DADOS AO CLICAR O BOTAO SUBMIT
        if(isset($_POST["botaoEnviar"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $idade = $_POST["idade"];
            $peso = $_POST["peso"];
        };
        
        //ARRAY VAZIO PARA RECEBER ERROS
        $erros = [];

        //SANITIZAR DADOS
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); //SANITIZAR CARACTERES ESPECIAIS
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //SANITIZAR EMAIL PARA O PADRAO
        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT); //SANITIZAR NUMEROS INTEIROS
        $peso = filter_input(INPUT_POST, "peso", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); //SANITIZAR O NUMERO FLUTUANTE E PERMITIR FRACOES
        
        echo "<p>$nome</p>";
        echo "<p>$email</p>";
        echo "<p>$idade</p>";
        echo "<p>$peso</p>";
        
        //APOS SANITIZAR OS DADOS, PRECISAMOS FILTRALOS

        //FILTRAGEM DOS DADOS COM VALIDATE COM O FILTER INPUT
        /*
        if(!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
            $erros = ["Email invalido"];
        };

        if(!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)){
            $erros = ["Idade invalida"];
        };

        if(!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)){
            $erros = ["Peso invalido"];
        };

        //CASO O ARRAY ERROS NAO ESTEJA VAZIO, CADA ELEMENTO SE CHAMARA $ERRO E SERA LISTADO
        if(!empty($erros)){ 
            foreach($erros as $erro) {
                echo "<li>$erro</li>";
            }
        } else echo "<p>Dados corretos</p>";
        */

        //FILTROS VALIDATE APOS SANITIZAR OS DADOS COM FILTER VAR
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erros[] = "Email invalido X";
        };

        if(!filter_var($idade, FILTER_VALIDATE_INT)){
            $erros[] = "Idade invalida X";
        };

        if(!filter_var($peso, FILTER_VALIDATE_FLOAT)){
            $erros[] = "Peso invalido X";
        };

        if(!empty($erros)){
            foreach ($erros as $erro){
                echo "<li>$erro</li>";
            }
        } else echo "Dados Corretos";
        
    ?>


    <main>
        <form action="index.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="idNome">
            <label for="email">Email: </label>
            <input type="email" name="email" id="idEmail">
            <label for="idade">Idade em anos: </label>
            <input type="number" name="idade" id="idIdade" step="1" min="1" max="120">
            <label for="peso">Peso em KGs: </label>
            <input type="number" name="peso" id="idPeso" step="0.1" min="10.0" max="200.0">
            <button type="submit" name="botaoEnviar">Enviar</button>
        </form>
    </main>
</body>
</html>