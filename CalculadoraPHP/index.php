<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="calculadora.css">
    
</head>
<body>


<?php

    $number1;
    $number2;
    $resultado = null;
    $calcular = 'somar';

    if(isset( $_GET['num1'],  $_GET['num2'])){
        $number1 = $_GET['num1'];
        $number2 = $_GET['num2'];
        $calcular = $_GET['calcular'];
        switch($calcular){
            case 'adicao':
                $resultado = $number1 + $number2;
            break;
            case 'subtracao':
                $resultado = $number1 - $number2;
            break;
            case 'multiplicacao':
                $resultado = $number1 * $number2;
            break;
            case 'divisao':
                $resultado = $number1 / $number2;
            break;
        }
    }


?>

    <div class="conteiner">

       <form name="calculadora">
            <div class="calculadora">
                <h1>CALCULADORA</h1>
                <input id="num1" name="num1" type="number" value=<?= $number1 ?>  required>
                <input id="num2" name="num2" type="number" value=<?= $number2 ?> required>
                <div class="button">
                    <button name="calcular" value="adicao" type="submit" >+</button>
                    <button name="calcular" value="subtracao" type="submit" >-</button>
                    <button name="calcular" value="multiplicacao" type="submit" >X</button>
                    <button name="calcular" value="divisao" type="submit" >/</button>
                </div>
                <input id="resultado" type="number" value=<?= $resultado; ?>>
            </div>
        </form>
</div>


    
</body>
</html>