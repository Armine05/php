<!DOCTYPE html>
<html>
<body>

<?php
$students = [
    ["anun" => "Armen", "gnahatakaner" => [85, 90, 88]],
    ["anun" => "Lusine", "gnahatakaner" => [92, 95, 89]],
    ["anun" => "Davit", "gnahatakaner" => [78, 82, 80]]
];

$bestStudent = null;
$bestAverage = 0;

foreach ($students as $student) {
    $average = array_sum($student["gnahatakaner"]) / count($student["gnahatakaner"]);
    echo "{$student['anun']}-i mijin gnahatakan: " . round($average, 2) . "\n";
    
    if ($average > $bestAverage) {
        $bestAverage = $average;
        $bestStudent = $student["anun"];
    }
}

echo "Lavaguyn usanogh: $bestStudent (mijin: " . round($bestAverage, 2) . ")\n";
echo "Bolor usanoghner: ";
foreach ($students as $s) {
    echo $s["anun"] . " ";
}
echo "\n\n";

?>



</body>
</html>

