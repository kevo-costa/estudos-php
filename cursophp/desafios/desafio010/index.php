<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $datanasc = $_GET['data_nasc']?? 0;
        $datafinal = $_GET['data_final']?? 0;
        $idade = $datafinal - $datanasc;
    ?>
    <main>
        <h1>Calculando Sua Idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Digite o ano em que você Nasceu:</label>
            <input type="number" name="data_nasc" id="id_data_nasc" required>
            <label for="ano">Quer saber a sua idade em qual ano? <?= '(atualmente estamos em '. date('Y') . ')'?></label>
            <input type="number" name="data_final" id="id_data_final" required>
            <button type="submit">Qual será minha idade?</button>
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $datanasc . ' vai ter ' . $idade . ' anos em ' . $datafinal;?></p>
    </section>
</body>
</html>