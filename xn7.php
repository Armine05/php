<!DOCTYPE html>
<html>
<body>

<?php
function getInitials($fullName) {
    $words = explode(" ", $fullName);
    $initials = "";
    foreach ($words as $word) {
        $initials .= strtoupper($word[0]) . ".";
    }
    return $initials;
}

$name = "john smith";
echo $name . "\n";
echo getInitials($name) . "\n";
?>


</body>
</html>
