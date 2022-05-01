<?php
$a = 10;
$b = 20;
$c;

echo "Value of a before swapping:" . $a;
echo "\n";
echo "Value of b before swapping:" . $b;
echo "\n";

$c = $a;
$a = $b;
$b = $c;

echo "Value of a after swapping:" . $a;
echo "\n";
echo "Value of b after swapping:" . $b;
echo "\n";
?>

Output
[Running] php "e:\4th SEM\JavaScript\Assignment\swapping.php"
Value of a before swapping:10
Value of b before swapping:20
Value of a after swapping:20
Value of b after swapping:10
