<?php
$mensagem2 = "";

$numeros=$_GET["numeros"]; //aqui eu consigo puxar os 10 números pelo array [] criado no front
//se eu fosse filtrar pelo filtro de objeto do php teria que ser cada uma das informações recebidas
//usando o filtro/tipo no front posso apenas usar o get neste caso

$par=0;
$impar=0;

for($i= 0;$i< count($numeros);$i++){ //$i nesse caso "roda" os números do array
    if($numeros[$i] % 2 == 0 ){ // eu divido o número por dois, se ele não precisar de virgula para dar 0 é par
        $par++; //salvar quantos são pares
    } else { $impar++; }

    $mensagem2 .= "<li>$numeros[$i]</li>"; //resultado do for sem a parte do if/else

}

$mensagem = "Existem ".$par." números pares e ".$impar." quantidade de números impares." //resultado do if/else 

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou par</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1>Resultado</h1>
    <div id="resultado">

        <?= $mensagem; ?>
        <?= $mensagem2; ?>


    </div>
</body>

</html>