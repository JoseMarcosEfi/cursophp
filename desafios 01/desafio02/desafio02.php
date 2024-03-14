<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 02</title>
</head>

<body>
    
    
    <form action="desafio02.php" method="get">
    <main>
    <header>
    <h1>Trabalhando com numeros aleatórios</h1>
    </header>
        <?php
        $randonNumber = mt_rand(1, 100);
        echo"Gerando um número aleatório entre 0 e 100 <br/>";
        echo "O valor gerado foi <h3>$randonNumber</h3>";
        ?>
        <input type="submit" value="Gerar Outro 🥳">
    </main>
        
    </form>
</body>

</html>