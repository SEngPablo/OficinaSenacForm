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

echo '<p>Pedido processado ás: '.date('H:i, d/m/y').'</p>';
echo $pneu.' pneus <br>';
echo $oleo.' galões <br>';
echo $vela.' velas <br>';

?>


</body>
</html>

