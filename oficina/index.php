<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina mecânica</title>
</head>
<body>
<form action="processar.php" method = "post">
    <h1>Oficina O Chicão</h1>


   <table>
<tr>
<th>Item</th>
<th>Quantidade</th>
</tr>

<tr>
<td>Pneu</td>
<td><input type="number" name = "pneu" id = "pneu" value = "0" min = "0"></td>
</tr>

<tr>
<td>Oleo</td>
<td><input type="number" name = "oleo" id = "oleo" value = "0" min = "0"></td>
</tr>

<tr>
<td>Velas</td>
<td><input type="number" name = "vela" id = "vela" value = "0" min = "0"></td>
</tr>

    </table>

<input type="submit" value="Enviar">

</form>

</body>
</html>

