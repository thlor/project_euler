<pre>
<?php
$triangle = 0;
$products = 0;
$missed = 0;
for($natural = 1; $products < 500; $natural++) {
	$products = 0;
	$triangle += $natural;
	$square = sqrt($triangle);
	for($i = 1; $i <= $square; $i++) {
		if($triangle % $i == 0)
			$products += 2;
		}
	if($square * $square == $triangle) $products--;
	echo $natural." ".$triangle." ".$products."\n";
	}
echo $missed/$natural;
?>
<pre>