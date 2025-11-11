<!DOCTYPE html>
<html>
<body>


<?php
$fruits = ["apple", "banana"];
$veggies = ["carrot", "potato"];

sort($fruits);
echo "Dasavorvats fruits: " . implode(", ", $fruits) . "\n";

$combined = array_merge($fruits, $veggies);
echo "Miatsvats: " . implode(", ", $combined) . "\n";

$reversed = array_reverse($combined);
echo "Hakarak kargov: " . implode(", ", $reversed) . "\n";

echo "Mek togh: " . implode(", ", $combined) . "\n\n";

?>

