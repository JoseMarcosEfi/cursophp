<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio04</title>
</head>
<body>
    <main>
        <header><h1>Analisador de Número Real</h1></header>
        <?php 
        $number = $_GET["number"];
        print("Analisado o numero $number informado pelo usuário");
        $parts = explode(".", $number);
        if($parts[0] != null){
            print("A parte inteira do número é $parts[0]");
        }else{
            print("Não existe parte inteira");
        }
        if($parts[1] != null){
            print("A parte decimal do número é $parts[1]");
        }else{
            print("Não existe parte decimal");
        }
        
        
        ?>


    </main>
    
</body>
</html>