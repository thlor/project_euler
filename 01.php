<?php
$n = 0;
	for($i = 1; $i < 1000; $i++) {
		if($i/3 == floor($i/3) || $i/5 == floor($i/5))
			$n = $n + $i;
		}
echo $n;
?>