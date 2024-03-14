<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio01</title>
</head>
<body>
    
    <main>
    <h1>Resultado Final</h1>
    <p><?php 
        $number = $_GET["num"];
        echo"O número escolhido foi <strong>$number</strong> </br>";
        echo "O seu antecessor é  <em>". $number-1 ."</em> </br>";
        echo"O seu sucessor é: <em>" . $number+1 ."</em>";
    
    ?>
    </p>
    
    <!-- <button onclick="javascript:window.location.href='index.html'"> &#x2B05; Voltar</button>-->
    <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar</button>
    </main>
    
</body>
</html>