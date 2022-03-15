<?php

//Tabuada

$antagonista = $_POST["antagonista"];

$numero = $_POST["num"];


echo "<h1><b>Suas Operações!</b></h1>";

echo "<h2><b>Soma e subtração.</b></h2>";

echo "<table>";

echo "<tr><td>".$numero."+".$antagonista."=".($numero + $antagonista)."</td></tr>";
echo "<tr><td>".$numero."-".$antagonista."=".($numero - $antagonista)."</td></tr>";
echo "<tr><td>".$numero."/".$antagonista."=".($numero / $antagonista)."</td></tr>";

echo "</table>";


//


echo "<h2><b>Tabuada.</b></h2>";

echo "<table>";

for ($i=1; $i <= 10 ; $i++) { 
     
     echo "<tr><td>".$numero."x".$i."=".($numero * $i)."</td></tr>";
}

echo "</table>";

?>