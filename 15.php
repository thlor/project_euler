<pre><?php
function recursive($x, $y, $counter) {
	if($x > 0) {
		echo "x:".$x." y:".$y." counter:".$counter."\n";
		if($y > 0) {
			$counter++;
			$y--;
			recursive($x, $y, $counter);
			}
		else {
			$counter++;
			$x--;
			recursive($x, $x, $counter);
			}
		}
	else {
		echo $counter;
		return($counter);
		}
	}
echo recursive(2, 1, 0);
?></pre>