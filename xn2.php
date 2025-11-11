<!DOCTYPE html>
<html>
<body>


<?php

//1-ic 100 tiv generacnel
$random1 = rand(1, 100);
echo $random1. "<br>";	

//$randomFloat=$random1/2

$randomFloat = mt_rand() / mt_getrandmax();
echo $randomFloat. "<br>";
//kam $randomFloat=$random1/100;
$randomNumbers = [];
for ($i = 0; $i < 5; $i++) {
    $randomNumbers[] = rand(1, 100);
}
echo "5 tiv " . implode(", ", $randomNumbers) . "<br>";
echo   max($randomNumbers) . "<br>";
echo  min($randomNumbers) . "<br>";


?>

</body>
</html>
