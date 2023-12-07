<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina mecânica</title>
</head>
<body>
<h1>Oficina O Chicão</h1>
    <h2>Pedidos</h2>

<?php

$pneu = $_POST['pneu'];
$oleo = $_POST['oleo'];
$vela = $_POST['vela'];
$valortotal = 0.00;
$qtdtotal = 0;
$taxrate = 0.27;

define('PRECOPNEU',100);
define('PRECOOLEO',10);
define('PRECOVELA',4);

$valortotal = $pneu*PRECOPNEU + $oleo*PRECOOLEO + $vela*PRECOVELA;

echo '<p>Pedido processado ás: '.date('H:i, d/m/y').'</p>';
echo $pneu.' pneus <br>';
echo $oleo.' galões <br>';
echo $vela.' velas <br>';
$qtdtotal = $pneu + $oleo + $vela;
echo 'A quantidade total é: '.$qtdtotal.'<br>';
echo 'O subtotal a pagar é: R$'.number_format($valortotal, 2,',','.').'<br>';

echo 'O valor total é: ';
echo $valortotal * (1 + $taxrate).'<br>';
echo 'Total de imposto: '.$valortotal * $taxrate;

?>


</body>
</html>

