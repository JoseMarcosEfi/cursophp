<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio06</title>
</head>
<body>
    <?php 
        $precoProduto = $_GET['preco'];
        $aumento = $_GET['porcentagem'];
        $resultado = ($aumento/100)*$precoProduto+$precoProduto;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto(R$)</label>
            <input type="number" name="preco" step="0.01">
            <label for="porcentagem">Qual será o percentual de reajuste? <strong><span id="porcentagemLabel">0%</span></strong></label>
            <input type="range" id="porcentagemRange" name="porcentagem" min="0" max="100" value="0" oninput="atualizarLabel(this.value)">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h1>Resultado do reajuste</h1>
        <?= "O produto que custava R$" . number_format($precoProduto, 2, ",",".").", com <strong>$aumento% de aumento</strong> vai
        vai passar a custar R$". number_format($resultado, 2, ",",".") . " a partir de agora."
        ?>
    </section>
    
    <script>
        function atualizarLabel(valor){
            document.getElementById("porcentagemLabel").textContent = valor + "%";
        }
    </script>
</body>
</html>