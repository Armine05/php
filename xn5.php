<!DOCTYPE html>
<html>
<body>

<?php
$sentence = "I love JavaScript, JavaScript is great";
$replaced = str_replace("JavaScript", "PHP", $sentence);

echo $sentence . "\n";
echo $replaced . "\n";
echo strpos($sentence, "JavaScript") . "\n";
echo (strpos($sentence, "love") !== false ? "Այո" : "Ոչ") . "\n";
echo substr_count($sentence, "JavaScript") . "\n";
?>


</body>
</html>

