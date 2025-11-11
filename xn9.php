<!DOCTYPE html>
<html>
<body>


<?php
$student = [
    "anun" => "Arman",
    "tarik" => 20,
    "gnahatakan" => 85
];

echo implode(", ", array_keys($student)) . "\n";
echo implode(", ", array_values($student)) . "\n";
echo (array_key_exists("tarik", $student) ? "Ayo" : "Voch") . "\n";

$student["qaxaq"] = "Yerevan";
echo $student["qaxaq"] . "\n";
?>


</body>
</html>

