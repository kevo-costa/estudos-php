<?php 
    //INICIAR SESSAO
    session_start();

    //CHAMAR CONEXAO
    require_once 'conexao.php';

    if (isset($_POST["bt_cadastrar"])) {
        //PEGAR DADOS POSTADOS E FZR ESCAPE
        $nome = mysqli_real_escape_string($con, $_POST["nacionalidade"]);
        $estado_civil = mysqli_real_escape_string($con, $_POST["estado_civil"]);
        $idade = mysqli_real_escape_string($con, $_POST["idade"]);
        $endereco = mysqli_real_escape_string($con, $_POST["endereco"]);
        $telefone = mysqli_real_escape_string($con, $_POST["telefone"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $senha = md5(mysqli_real_escape_string($con, $_POST["senha"]));

        //INSTRUCAO SQL
        $sql = "INSERT INTO usuarios (nome, nacionalidade, estado_civil, idade, endereco, telefone, email, senha) VALUES ('$nome','$nacionalidade', '$estado_civil', '$idade', '$endereco', '$telefone', '$email', '$senha')";

        //EXECUTAR VERIFICACAO SQL E VERIFICAR SUCESSO 
        if(mysqli_query($con, $sql)){
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status'] = "success";
            header('Location: ../index.php');
        } else {$_SESSION['mensagem'] = "Nao foi possivel cadastrar!";
            $_SESSION['status'] = "failed!";
            header('Location: ../index.php');
        }
        //FECHAR CONEXAO
        mysqli_close($con);
    }
?>