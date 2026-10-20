<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Iremos gerar um número de 0 a 100</h1>
    </header>
    <main>
        <?php 
            echo "<p>Gerando um número entre <strong>0 e 100</strong>...<p/>";
            echo "O número gerado foi " . rand(0,100);
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
</body>
</html>