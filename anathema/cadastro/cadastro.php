<?php

$nomec = $_POST["nomec"];
$nomep = $_POST["nomep"];
$nomem = $_POST["nomem"];
$sexo = $_POST["sexo"];
$cpf = $_POST["cpf"];
$nasc = $_POST["nasc"];
$esc = $_POST["esc"];
$nac = $_POST["nac"];
$int = $_POST["int"];

echo "<table>";
echo "<tr><td><b>Nome Completo:</b></td><td>".$nomec."</td></tr>";
echo "<tr><td><b>Nome do Pai:</b></td><td>".$nomep."</td></tr>";
echo "<tr><td><b>Nome da Mãe:</b></td><td>".$nomem."</td></tr>";
echo "<tr><td><b>Sexo:</b></td><td>".$sexo."</td></tr>";
echo "<tr><td><b>CPF:</b></td><td>".$cpf."</td></tr>";
echo "<tr><td><b>Data de Nascimento:</b></td><td>".$nasc."</td></tr>";
echo "<tr><td><b>Escolaridade:</b></td><td>".$esc."</td></tr>";
echo "<tr><td><b>Nacionalidade:</b></td><td>".$nac."</td></tr>";
echo "<tr><td><b>Nome Completo:</b></td></tr><td>";
        foreach ($int as $value) {
         echo "- ".$value."<br>";
        }
echo "</td></tr></table>";

?>