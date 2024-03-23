<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio07</title>
</head>

<body>
    <?php
    $segundosForm = $_GET['segundos'];
    $dias = 0;
    $horas = 0;
    $minutos = 0;
    $segundos = 0;
    $semana = 0;
    $aux = 0;

    //semana
    if ($segundosForm >= 604800) {
        $semana = floor($segundosForm / 604800);
        $aux = $segundosForm % 604800;
    } else {
        $aux = $segundosForm;
    }
    //dias
    if ($aux >= 86400) {
        $dias = floor($aux / 86400);
        $aux %= 86400;
    }
    //horas
    if ($aux >= 3600) {
        $horas = floor($aux / 3600);
        $aux %= 3600;
    }
    //minutos
    if ($aux >= 60) {
        $minutos = floor($aux / 60);
        $aux %= 60;

    }
    if ($aux < 60) {
        $segundos = $aux;

    }


    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Totalizando Tudo</h1>
        <?= "<p>Analisando o valor que vc digitou, <strong>$segundosForm segundos</strong> equivalem a um total de:</p>" ?>
        <ul>
            <li>
                <?= $semana . " Semanas" ?>
            </li>
            <li>
                <?= $dias . " Dias" ?>
            </li>
            <li>
                <?= $horas . " Horas" ?>
            </li>
            <li>
                <?= $minutos . " Minutos" ?>
            </li>
            <li>
                <?= $segundos . " Segundos" ?>
            </li>
        </ul>
    </section>

</body>

</html>