<pre>
<?php
const goal = 200000;
$primes[0] = 2;
for($i = 2; $i <= goal; $i++) {
	$prime = true;
	foreach($primes as $j) {
		if($i%$j == 0) {
			$prime = false;
			break;
			}
		}
	if($prime == true) $primes[] = $i;
	}
print_r($primes);
?>
</pre>