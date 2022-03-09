<?php
$marks=array(
"Thomas"=>array(
"Physics"=>35,
"Maths"=>30,
"Chemistry"=>50
),
"Keerthy"=>array(
"Physics"=>90,
"Maths"=>85,
"Chemistry"=>70
),
"Maria"=>array(
"Physics"=>65,
"Maths"=>90,
"Chemistry"=>70
),
);
echo "Marks for Thomas<br";
echo">Physics:".$marks['Thomas']['Physics']."<br>
maths:".$marks['Thomas']['Maths']."<br>Chemistry:
".$marks['Thomas']['Chemistry']."<br/>";

echo "Marks for Keerthy<br";
echo">Physics:".$marks['Keerthy']['Physics']."<br>
maths:".$marks['Keerthy']['Maths']."<br>Chemistry:
".$marks['Keerthy']['Chemistry']."<br/>";
?>