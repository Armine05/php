<!DOCTYPE html>
<html>
<body>

<?php
$email = "anun@example.com";
$parts = explode("@", $email);

echo $email . "\n";
echo $parts[0] . "\n";
echo $parts[1] . "\n";
$joined = $parts[0] . " at " . $parts[1];
echo $joined . "\n";
echo strrev($email) . "\n";
echo substr($email, -4) . "\n";
?>

</body>
</html>
