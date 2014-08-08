<?php
$goal = 1000;
$a = 0;
$b = 1;
$c = $goal;
for(;$a < $c; ) {
	for(;$b < $c;) { 
		if($a*$a + $b*$b == $c*$c)
			echo $a*$b*$c;
		$b++;
		$c--;
		}
	$a++;
	$b = $a+1;
	$c = $goal - $a - $b;
	}
?>