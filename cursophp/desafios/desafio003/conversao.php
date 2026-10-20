<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real em Dólar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Convertido</h1>
    </header>
    <section>
        <?php 
            $real = $_GET["real"];
            $dolar = $real / 5.18;
            echo "<p>Você tem <strong>R$$real</strong>, que convertido em dólares dá <strong>U$$dolar</strong>.<p/>";
            echo "<p><strong>*Cotação fixa de R$5,18</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>
</body>
</html>