<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>desafio04</title>
</head>
<body>
    <?php 
    $valor1 = $_GET['v1'];
    $valor1Peso = $_GET['v1p'];
    $valor2 = $_GET['v2'];
    $valor2Peso = $_GET['v2p'];    
    ?>

    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1"><strong>1º Valor</strong></label>
            <input type="number" name="v1">
            <label for="v1p"><strong>1º Peso</strong></label>
            <input type="number" name="v1p" >
            <label for="v2"><strong>2º Valor</strong></label>
            <input type="number" name="v2">
            <label for="v2p"><strong>2º Peso</strong></label>
            <input type="number" name="v2p" >
            <input type="submit" value="Calcular Médias">
        </form>
    </main>


    <section>
        <h1>Cálculo das médias</h1>
        <p>Analisando os valores </p>

    </section>
</body>
</html>