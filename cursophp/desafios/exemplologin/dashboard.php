<?php 
    session_start();
    if (!isset($_SESSION["email"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Bem vindo ao Dashboard</h1>
        <?php 
            echo "Usuario {$_SESSION['email']} logado<br>";
        ?>
        <p><a href="logout.php">Sair</a></p>
    </main>
</body>
</html>