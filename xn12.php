<!DOCTYPE html>
<html>
<body>


<?php
$prices = [100, 200, 150, 300];

echo "Skzbnakan gner: " . implode(", ", $prices) . "\n";

$withVAT = array_map(function($p) { return $p * 1.2; }, $prices);
echo "20% AAH-ov: " . implode(", ", $withVAT) . "\n";

$withDiscount = array_map(function($p) { return $p * 0.9; }, $prices);
echo "10% zeghchov: " . implode(", ", $withDiscount) . "\n";

$formatted = array_map(function($p) { return $p . " AMD"; }, $prices);
echo "Formatavorvats: " . implode(", ", $formatted) . "\n\n";


?>


</body>
</html>

