<pre>
<?php
const goal = 1000;
$egyes = array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
$teen = array("ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
$tizes = array("", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");
$array = array("");
$counter = 0;
function egyes($string) {
	global $egyes;
	$helyiertek = intval($string[strlen($string)-1]);
	return $egyes[$helyiertek];
	}

function teen($string) {
	global $teen;
	$helyiertek = intval($string[strlen($string)-1]);
	return $teen[$helyiertek];
	}

function tizes($string) {
	global $tizes;
	$helyiertek = intval($string[strlen($string)-2]);
	if($helyiertek == 1)
		return teen($string);
	else
		return
			implode("",
				array(
					$tizes[$helyiertek],
					egyes($string)
					)
				);
	}

function szazas($string) {
	global $egyes;
	$helyiertek = intval($string[strlen($string)-3]);
	if(intval($string[strlen($string)-2]) == 0 && intval($string[strlen($string)-1]) == 0)
		$and = "";
	else
		$and = "and";
	return
		implode("",
			array(
				$egyes[$helyiertek],
				"hundred",
				$and,
				tizes($string)
				)
			);
	}

for($i = 1; $i <= goal; $i++) {
	$i_string = strval($i);
	if(strlen($i_string) == 1)
		$array[] = egyes($i_string);
	else if(strlen($i_string) == 2)
		$array[] = tizes($i_string);
	else if(strlen($i_string) == 3)
		$array[] = szazas($i_string);
	else
		$array[] = "onethousand";
	$counter += strlen($array[$i]);
	}
print_r($array);
echo $counter;
?>
</pre>