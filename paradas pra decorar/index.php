<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$nome = "Ze das couves";
const PAIS = "Brasil";
print " $nome é do país " . PAIS;
?>
<br/>
<?php 

$idade = 60;

var_dump($idade);
?>
<br/>
<?php 
$num = (int) "950";
echo $num;

?>
<br/>
<?php 
$casado = true;
print " o valor para casado é $casado";
?>
<br/>
<?php 
$vet = [6, 2.5, "maria" , 3, false];
var_dump($vet);
?>
<br/>
<?php 
    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa();
    var_dump($p);
?>
<br/>
<?php 
    $nome = "ze das couves"; 

    echo "nome da parada $nome ";
    echo 'nome simples : $nome ';

?>
</body>
<?php 
$canal = "Curso em video";
$ano = date('Y');

echo <<<TESTE
OLá Galera do $canal!
            tudo bem com vcs?
        Como esta sendo esse ano de $ano?
    Abraços! \u{1F596}
TESTE;
?>
</html>