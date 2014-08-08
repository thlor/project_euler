<?php
$sum_of_the_squares = 0;
$square_of_the_sum = 0;
$firsthundred = 0;
$cycle = 100;
for($i = 1; $i <= $cycle; $i++) {
	$sum_of_the_squares += $i*$i;
	$firsthundred += $i;
	}
$square_of_the_sum = $firsthundred*$firsthundred;
echo $square_of_the_sum - $sum_of_the_squares;
?>