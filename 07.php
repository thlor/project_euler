<?php
$j = 1;
for($i = 1; $i <= 10001; true) {
	$j++;
	$prime = true;
	for($k = 2; $k <= $j/2; $k++) {
		if($j%$k == 0) {
			$prime = false;
			break;
			}
		}
	if($prime == true) {
		$i++;
		}
	}
printf($j."<br>");
?>