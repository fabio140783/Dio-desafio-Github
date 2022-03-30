<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura Ideal</title>
</head>
<body>
    <form method="get" action="alturaideal.php">
   Digite Sua Altura : <input type="text" name="h"id="in"><br>
    <fieldset>
        <h1>Escolha seu genero</h1>
     <input type="radio"name="operacao"id="m"  value="1">
        <label for="masc">MASCULINO</label>aqui é o genero masculino<br>
     <input type="radio" name="operacao"id="f" value="2">
        <label for="fem">FEMININO</label><br>
    </fieldset>
    <button>CALCULAR</button>
    </form>
    <?php
    $b=$_GET["h"];
    $b1=isset($_GET["operacao"])?$_GET["operacao"]:1;
    switch($b1){
        case 1:
            $b1=(72.7*$b)-58;
            break;
            case 2:
                 $b1=(62.1*$b)-44.7;

    }
    echo "Seu peso ideal é ".$b1;
   
    ?>
</body>
</html>