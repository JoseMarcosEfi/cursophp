<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Desafio01</title>
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo']??1;
    $divisor = $_GET['divisor']??1;
    $resultado = $dividendo/$divisor;
    $resto = $dividendo%$divisor;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo">
        <label for="divisor">divisor</label>
        <input type="number" name="divisor" id="divisor">
        <input type="submit" value="Analisar">
    </form>
    </main>
    <section id="resultados">
        <h1>Estrutura da Divisão</h1>
    <?php 
        echo "<h1>$dividendo | $divisor</h1>";
        echo "<h1>$resto | ".number_format($resultado,0) ."</h1>";
    ?>
    </section>
</body>
</html>