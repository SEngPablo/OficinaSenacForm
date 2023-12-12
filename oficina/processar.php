<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina mecânica</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
<h1>Oficina O Chicão</h1>
    <h2>Pedidos</h2>

<?php

$pneu = $_POST['pneu'];
$oleo = $_POST['oleo'];
$vela = $_POST['vela'];
$achar = $_POST['achar'];
$valortotal = 0.00;
$qtdtotal = 0;
$taxa = 0.22;

define('PRECOPNEU',100);
define('PRECOOLEO',10);
define('PRECOVELA',4);

$valortotal = $pneu*PRECOPNEU + $oleo*PRECOOLEO + $vela*PRECOVELA;

echo '<p>Pedido processado ás: '.date('H:i, d/m/y').'</p>';

$qtdtotal = $pneu + $oleo + $vela;

if ($qtdtotal == 0) {
     echo 'Você não pediu nada na página anterior! <br>';
    } else {
        echo $pneu.' pneus <br>';
        echo $oleo.' galões <br>';
        echo $vela.' velas <br>';
    }



echo 'A quantidade total é: '.$qtdtotal.'<br>';
echo 'O subtotal a pagar é: R$'.number_format($valortotal, 2,',','.').'<br>';


$valorfinal = $valortotal * (1 + $taxa);

if ($pneu <10) {
    $descontopneu = 0;
} elseif (($pneu >= 10) && ($pneu <=49)) {
    $descontopneu = 0.05;
} elseif (($pneu >=50) && ($pneu <=99)) {
    $descontopneu = 0.10;
} elseif ($pneu >=100) {
    $descontopneu = 0.15;
} 

echo 'O valor total com imposto é: '.number_format($valorfinal, 2,',','.').'<br>';

$valorfinal = $valorfinal * (1 - $descontopneu);

echo 'O valor total com desconto é de: '.number_format($valorfinal, 2,',','.').'<br>';

switch ($achar) {
    case 'a':
        echo '<p>Cliente regular</p>';
        break;
    case 'b':
        echo '<p>Anúncio da TV</p>';
        break;
    case 'c':
        echo '<p>Telefone</p>';
        break;
    case 'd':
        echo '<p>Boca a boca</p>';
        break;
    default:
        echo '<p>Não encontrado</p>';
        break;
}



?>


</body>
</html>

