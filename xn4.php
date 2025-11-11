<!DOCTYPE html>
<html>
<body>

<?php
$text = "  bARi ereko  ";
$trimmed = trim($text);

echo $text . "\n";
echo $trimmed . "\n";
echo strtoupper($trimmed) . "\n";
echo strtolower($trimmed) . "\n";
echo strlen($trimmed) . "\n";
echo ucfirst(strtolower($trimmed)) . "\n";
?>


</body>
</html>

