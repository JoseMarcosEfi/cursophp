<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio03</title>
</head>
<body>
    <?php 
        $numero = $_GET['number']??1;
        $RaizQ = sqrt($numero);
        $RaizC = pow($numero, 1/3);
    ?>



    <main>
        <h1>Informe um numero</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Número</label>
            <input type="number" name="number" id="number">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?= "Analisando o <strong>Número $numero</strong>, temos"?>
        <ul>
            <li><?= "A Raíz Quadrada é <strong>". number_format($RaizQ, 3)."</strong>"?></li>
            <li><?= "A Raíz Cúbica é <strong>".number_format($RaizC,3)."</strong>"?></li>
        </ul>
    </section>
    
</body>
</html>