<!DOCTYPE html>
<html>
<body>

<?php
$numbers = [5, 12, 8, 130, 44, 3];

echo implode(", ", $numbers) . "\n";
echo max($numbers) . "\n";
echo min($numbers) . "\n";
echo array_sum($numbers) . "\n";

$evenNumbers = array_filter($numbers, function($n) { return $n % 2 == 0; });
echo implode(", ", $evenNumbers) . "\n";

echo (in_array(44, $numbers) ? "Ayo" : "Voch") . "\n";
?>



</body>
</html>
