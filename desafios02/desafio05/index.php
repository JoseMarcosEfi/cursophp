<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio05</title>
</head>
<body>
    <?php 
        $anoNasc = $_GET['dataNasc'];
        $anoFuturo = $_GET['dataFutura'];
        $resultado = $anoFuturo - $anoNasc;
    ?>
    <main>
        <h1>Caculando a sua idade</h1>
        <form action= <?= $_SERVER['PHP_SELF']?> method="get">
        <label for="dataNasc">Em que ano você nasceu?</label>
        <input type="number" name="dataNasc">
        <label for="dataFutura">Quer saber sua idade em que ano? (atualmente estamos em <strong><?php $datahoje = date("Y"); echo $datahoje?></strong> )</label>
        <input type="number" name = "dataFutura">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h1>Resultado</h1>
        <?= "<p>Quem nasceu em $anoNasc vai ter <strong>$resultado anos</strong> em $anoFuturo!"?>
    </section>
</body>
</html>