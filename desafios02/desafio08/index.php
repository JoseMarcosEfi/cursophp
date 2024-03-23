<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>desafio08</title>
</head>
<body>
    <?php 
        $saque = $_GET['saque'];
        $aux =$saque;
        $cem=0;
        $cinquenta=0;
        $dez=0;
        $cinco=0;
        if($saque >=100){$cem = floor($saque/100); $aux=$saque%100; }
        if($aux >=50){$cinquenta = floor($aux/50);$aux%=50;}
        if($aux >=10){$dez = floor($aux/10);$aux%=10;}
        if($aux <=5){$cinco = floor($aux/5);}
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="saque">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="saque" id="saque" step="0.01">
        <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
    </form>
    </main>
    <section>
        <h1>Saque de R$<?= number_format($saque,2,".",",")?> realizado</h1>
        <?php 
        echo "O caixa eletrônico vai te entregar as seguintes notas:";
        ?>
        <ul>
        <li><img src="../img/100.png" alt="100"> x <?=$cem ?></li>
        <br/>
        <li><img src="../img/50.png" alt="50"> x <?=$cinquenta ?></li>
        <br/>
        <li><img src="../img/10.png" alt="10"> x <?=$dez ?></li>
        <br/>
        <li><img src="../img/5.png" alt="5"> x <?=$cinco ?></li>
        <br/>
        </ul>
    </section>

    <script>
        document.getElementById('saque').addEventListener('input', function(){
            //obtem o valor do input
            let value = this.value;
            //remove qualquer não digito
            value = value.replace(/[^\d]g, '');

            //verifica se o valor termina em 0 ou 5
            if(value != '' && (value.slice(-1) != '0' && value.slice(-1) != '5')){
                //SE NAO TERMINAR EM 0 OU 5, EXIBE UMA MENSAGEM DE ERRO
                this.setCustomValidity('Número inválido!')
            }else{
                //SE TERMINAR EM 0 OU 5, EXIBE UMA MENSAGEM DE SUCESSO
                this.setCustomValidity('');
            }
        });
    </script>
<body>

</body>

</html>