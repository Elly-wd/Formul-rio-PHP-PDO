<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Saúde</title>
</head>
<body>
<h1>Cadastro</h1>
<form action="PlanodeSaude.php" method="get">
<label for="regis">Informe o número de registro do Plano:</label>
<select number="num" namespace="Nregis">
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="1">6</option>
                </select><br/>
        </br>
        <label for="benef">Informe a quantidade de beneficiários:</label>
        <input type="number" name="qtd"/>
        </br>
        
        <input type="submit" value="Enviar">
</form>
</body>
</html>

