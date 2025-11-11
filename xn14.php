<!DOCTYPE html>
<html>
<body>


<?php
$keys = ["name", "age", "city"];
$values = ["John", 25, "Yerevan"];

$combined = array_combine($keys, $values);
echo "Hamakcvat zangvats:\n";
print_r($combined);

$combined["country"] = "Armenia";
echo "Avelacvats 'country': {$combined['country']}\n";

unset($combined["age"]);
echo "Heracvac 'age'\n";

echo "Verjnakan zangvats:\n";
print_r($combined);;


?>


</body>
</html>
