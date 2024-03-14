<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio03</title>

</head>
<body>
    <main>
    <header><h2>Conversor de moedas v1.0</h2></header>
    </br>
    <?php 
    $cotacao =  4.94;
    $real = $_GET["number"];
    $resultado = $real/$cotacao;
   
        
        echo "<h4>Seus $real equivalem a $resultado</h4>";
    ?>
    </br>
    <?php 
    //echo"<h5>*Cotação fixa de R\$$cotacao informada diretamente pelo código</h5>";
    ?>
    <?php 
    //forma profissa
    //formatação de moedas com internacionalização
    //biblioteca intl(internalization PHP)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . 
    numfmt_format_currency($padrao, $resultado, "USD");
    echo"<br/>";
    
    ?>
    <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar</button>
    
    </main>
</body>
</html>