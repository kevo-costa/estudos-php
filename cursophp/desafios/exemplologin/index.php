<?php 
    //FAZER CONEXAO E CONSULTA AO BD
    $emailBD = "kevincosta1104@gmail.com";
    $senhaBD = 1234;

    if (isset($_POST["btLogar"])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        session_start();
        $_SESSION["email"] = $email;
        //VERIFICAR SE OS DADOS SAO IGUAIS AOS DO BD
        if ($email == $emailBD && $senha == $senhaBD){
            //LEVAR O USUARIO AO DASHBOARD
            header('Location: dashboard.php');
        } else echo "<p>Senha e/ou e-mail incorretos</p>"; //FALHA NO LOGIN
    }; //FIM DO IF ISSET
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Login</h1>
        <form action="index.php" method="post">
            <label for="email">Email: 
                <input type="email" name="email" id="idEmail">
            </label>
            <label for="senha">Senha: 
                <input type="password" name="senha" id="idaSenha">
            </label>
            <button type="submit" name="btLogar">Logar</button>
        </form>
    </main>
</body>
</html>