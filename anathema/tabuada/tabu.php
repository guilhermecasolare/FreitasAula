
<?php


echo "<table>";
for ($i=1; $i <= 10 ; $i++) { 
         for ($x=1; $x <= 5 ; $x++) { 
             echo "<table>";
             echo"<tr><td>".$i." x ".$x." = ".($i * $x)."</td></tr>";
             echo "</table>";
         }
         for ($y=6; $y <= 10 ; $y++) { 
              echo "<table>";
              echo"<tr><td>".$i." x ".$y." = ".($i * $y)."</td></tr>";
              echo "</table>";
         }
         echo "</td></tr>";
}
echo "</table>";
?>