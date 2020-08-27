<?php 

$a = $_POST['a'];

$b = $_POST['b'];

list($a, $b) = array($b, $a);

echo  "Value A:" . $a . "</br>". " Value B:" . $b;

?>
