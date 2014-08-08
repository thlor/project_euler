<?php
$a = 1;
$b = 2;
$goal = 4000000;
$c = 0;
$sum = 0;
$i = 1;
while ( ($a + $b) <= $goal) {
	$a = $a + $b;
	$c = $a;
	$a = $b;
	$b = $c;
	if ( $b/2 == floor($b/2)) {
		echo "$b <br>";
		 $sum += $b;
		$i++;
		}
	}
echo $sum + 2;
?>