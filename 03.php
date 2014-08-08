<pre>
<?php
function getTime()
    {
    $a = explode (' ',microtime());
    return(double) $a[0] + $a[1];
    }
$Start = getTime(); 

 const goal = 600851475143 ;
$primes[0] = 2;
for($i = 2; $i <= goal; $i++) {
	$prime = true;
	foreach($primes as $j) {
		if($i%$j == 0) {
			$prime = false;
			break;
			}
		}
		if($prime == true) {
			if(goal%$i == 0)
				$primes[] = $i;
			}
	}
print_r($primes);
$End = getTime();
echo "Time taken = ".number_format(($End - $Start),2)." secs";
?>
</pre>