<pre>
<?php
const max = 1000000;
$steps = array();
for($no = 1; $no <= max; $no++) {
	$number = $no;
	$steps[$no] = 1;
	while($number != 1) {
		if($number % 2 == 0) //Ha páros
			$number = $number / 2;
		else // Ha páratlan
			$number = 3 * $number + 1;
		$steps[$no]++;
		}
	}
arsort($steps);
print_r($steps);
?>
</pre>