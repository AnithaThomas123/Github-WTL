<?php
$cars=array(
	array("Honda Accord","V6",830000),
	array("Toyota Camry","LE",924333),
	array("Nissan Altima","V1",890000),
	);
for($i=0;$i<count($cars);$i++)
{
$c=0;
foreach($cars[$i] as $key=>$value)
{
$c++;
echo $key."=".$value;
if($c<count($cars[$i]))echo",";
}
echo"<br>";
}
?>