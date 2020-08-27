<?php
$times = 2;

$start = $_POST['start'];
$end = $_POST['end'];
$times = $_POST['mult'];

for($start; $start <= $end; $start++) {

$answer = $start * $times;

 echo $start . " * " . $times . " = " . $answer . "<BR>";

}

?>