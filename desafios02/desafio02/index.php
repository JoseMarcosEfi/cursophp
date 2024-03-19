<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Desafio02</title>
</head>
<body>
    <?php 
    $sal = $_GET['salario']??1380;
    $salMinimo = 1380;
    $numSalarios = floor($sal/$salMinimo);
    $restoSal = $sal%$salMinimo; 
    

    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Salário(R$)</label>
        <input type="number" name="salario" id="salario" step="0.01">
        <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section id="resultados">
        <h1>Resultado Final</h1>
    <?php 
    if($numSalarios < 2){
        print "<p>Quem recebe um salário de R$".number_format($sal,2,".",","). " ganha <strong>".
        number_format($numSalarios, 0)." salário mínimo + </strong> R$".number_format($restoSal, 2,".",",")."</p>";
    }else{
        print "<p>Quem recebe um salário de R$".number_format($sal,2,".",","). " ganha <strong>".
        number_format($numSalarios, 0)." salários mínimos + </strong> R$".number_format($restoSal, 2,".",",")."</p>";
    }
        
    ?>
    </section>
</body>
</html>