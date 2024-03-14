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
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y"); 

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio . '%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);
    //var_dump($dados);
    $cotacao = $dados["value"][0]["cotacaoCompra"];
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "A cotacao foi ". numfmt_format_currency($padrao, $cotacao, "USD");

    $real = $_GET["number"];
    $resultado = $real/$cotacao;

    ?>
    </br>
    <?php 
    //echo"<h5>*Cotação fixa de R\$$cotacao informada diretamente pelo código</h5>";
    ?>
    <?php 
    //forma profissa
    //formatação de moedas com internacionalização
    //biblioteca intl(internalization PHP)
    
    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . 
    numfmt_format_currency($padrao, $resultado, "USD");
    echo"<br/>";
    
    ?>
    <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar</button>
    
    </main>
</body>
</html>