<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>EJERCICIO 1</h3>
    <form action="Ejercicios.php" method="post">
        <label for="precios">Cuanto vas a gastar peaso guarro: </label>
        <br>
        <br>
        <input type="text" id="precios" name="precios" value="">
        <input type="submit" value="Calculaçao">     
    </form>
<?php
if (isset($_POST["precios"])) {

    $valor = $_POST["precios"];

        if( $valor < 50){
        echo "Tus gastos de envio van a ser de 3'95.";
        } else if ($valor > 50 && $valor < 75){
        echo "Tus gastos de envio van a ser de 2'95.";
        } else if ($valor > 75 && $valor < 100){
        echo "Tus gastos de envio van a ser de 1'95.";
        } else if ($valor > 100){
        echo "Te lo llevas gratis maquina,";
        }
    }
?>
<hr>

<br>
<br>
 <h3>EJERCICIO 2</h3>
    <form action="Ejercicios.php" method="post">
        <label for="precios2">Cuanto vas a gastar peaso guarro: </label>
        <br>
        <br>
        <input type="text" id="precios2" name="precios2" value="">
        <input type="submit" value="Calculaçao">     
    </form>
<?php

if (isset($_POST["precios2"])) {
$valor = $_POST["precios2"];

switch ($valor) {
  case $valor < 50:
    echo "Tus gastos de envio van a ser de 3'95.";
    break;
  case $valor > 50 && $valor < 75:
    echo "Tus gastos de envio van a ser de 2'95.";
    break;
  case $valor > 75 && $valor < 100:
    echo "Tus gastos de envio van a ser de 1'95.";
    break;
  case $valor > 100:
    echo "Gratuito, por tu cara bonica.";
    break;
    default: 
    echo "";
  }
}
?>

<hr>

<br>
<br>
 <h3>EJERCICIO 3</h3>
    <form action="Ejercicios.php" method="post">
        <label for="precios2">Introduce un número en cada uno de los inputs:  </label>
        <br>
        <br>
        <input type="text" id="calculon3000" name="calculon3000[]" value=""><br>
        <input type="text" id="calculon3000" name="calculon3000[]" value=""><br>
        <input type="text" id="calculon3000" name="calculon3000[]" value=""><br>
        <input type="text" id="calculon3000" name="calculon3000[]" value=""><br>
        <input type="text" id="calculon3000" name="calculon3000[]" value=""><br>
        <br>

        <input type="submit" value="Calculaçao">     
    </form>
<?php

if (isset($_POST["calculon3000"])) {
$valorMinimo = ($_POST['calculon3000']);

$mayor = $valorMinimo[0];

for ($x = 0; $x < 5 ; $x++) {
    if($valorMinimo[$x] > $mayor){
        $mayor= $valorMinimo[$x];
    }
  }
  echo $mayor;
}
?>

<hr>

<br>
<br>
 <h3>EJERCICIO 4</h3>
    <form action="Ejercicios.php" method="post">
        <label for="Mimatriz">Si le das al boton te enseño una matriz </label>
        <br>
        <br>
        <input type="submit" value="Calculaçao" name="Mimatriz">     
    </form>

<?php
if (isset($_POST["Mimatriz"])) {

    $Matricilla = array (
        array( 3, 1),
        array(2,0),
      );
    
      foreach($Matricilla as $fila){
        foreach($fila as $elemento){
            echo "$elemento";
        }
        echo "<br>";
      }
}

?>

<hr>

<br>
<br>
 <h3>EJERCICIO 5</h3>
    <form action="Ejercicios.php" method="post">
        <label for="Mimatriz">Si le das al boton te sumo 2 matrices </label>
        <br>
        <br>
        <input type="submit" value="Calculaçao" name="Mimatriz">     
    </form>

<?php
if (isset($_POST["Mimatriz"])) {
    $Matricilla = array(
        array(1, 0),
        array(0, 1),
    );

    $Matricilla2 = array(
        array(0, 1),
        array(1, 0),
    );

    $resultado = array(
        array(0, 0),
        array(0, 0)
    );

    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $resultado[$i][$j] = $Matricilla[$i][$j] + $Matricilla2[$i][$j];
        }
    }

    echo "Matriz 1:\n";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo $Matricilla[$i][$j] . " ";
        }
        echo "\n";
    }

    echo "Matriz 2:\n";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo $Matricilla2[$i][$j] . " ";
        }
        echo "\n";
    }

    echo "Resultado de la suma:\n";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo $resultado[$i][$j] . " ";
        }
        echo "\n";
    }
}


?>
</body>
</html>