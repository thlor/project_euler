<?php
$number = 0;
$string = strval($number);

function is_palindrome($string) {
	$length = strlen($string);
	for($i = 0; $i <= $length/2; $i++) {
		if($string[$i]!=$string[$length-$i-1]) {
			return(FALSE);
			}
		}
	return(TRUE);
	}
for($i = 100; $i <=999; $i++) {
	for($j = $i; $j <=999; $j++) {
		$k = $i*$j;
		if(is_palindrome(strval($k))==TRUE) {
			if($k > $number) $number = $k;
			}
		}
	}
echo $number;

//if(is_palindrome($string)==TRUE) printf("palindrome ".$number);
//else printf("not palindrome ".$number);
?>