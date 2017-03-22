<?php
    $Radio = $_POST['Radio'];
    $Pi = 3.1416;
    $AreaC = $Pi * ($Radio * $Radio);
    echo 'El Area del Circulo Es: ' . $AreaC."<br>";

    $Lado = $_POST['LadoC'];
    $AreaCu = $Lado * $Lado;
    echo 'El Area del Cuadrado Es: ' . $AreaCu."<br>";

    $Base = $_POST['Base'];
    $Largo = $_POST['Largo'];
    $AreaR = $Base * $Largo;
    echo 'El Area del Rectangulo Es: ' . $AreaR."<br>";

    $Baset = $_POST['BaseT'];
    $Altura = $_POST['Altura'];
    $AreaT = ($Baset * $Altura) / 2;
    echo 'El Area del Triangulo Es: ' . $AreaT."<br>";
//= ($Pi * (($Area * 2)/4)
//($Pi * ($Area * 2));
?>