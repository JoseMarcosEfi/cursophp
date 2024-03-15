<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio04</title>
</head>
<body>
    <main>
        <header><h1>Analisador de Número Real</h1></header>
        <?php 
        $number = $_POST["number"] ?? 0;
        print("Analisado o numero $number informado pelo usuário ");
        $parts = explode(".", $number);
        if($parts[0] != null){
            print("A parte inteira do número é $parts[0] ");
        }else{
            print("Não existe parte inteira");
        }
        if($parts[1] != null){
            print("A parte decimal do número é $parts[1]");
        }else{
            print("Não existe parte decimal");
        }
                
        
        echo"<h1>Outra forma</h1>";
                   
        $num = $_POST["number"] ?? 0;
    
        echo "<p>Analisando o numero <strong> $num</strong> informado pelo usuário:</p>";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0,",", ".")."</strong></li>";
        echo "<li> A parte fracionária do número é <strong></strong>". number_format($fra, 3,",", ".")."</li></ul>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
    
</body>
</html>