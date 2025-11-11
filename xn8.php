<!DOCTYPE html>
<html>
<body>

<?php
$fruits = ["apple", "banana", "mirg", "apelsin", "mango"];

echo implode(", ", $fruits) . "\n";
echo $fruits[1] . "\n";

array_push($fruits, "kiwi");
echo implode(", ", $fruits) . "\n";

array_unshift($fruits, "elak");
echo implode(", ", $fruits) . "\n";

array_pop($fruits);
echo implode(", ", $fruits) . "\n";

echo count($fruits) . "\n";
?>


</body>
</html>

