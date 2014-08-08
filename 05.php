<?php
$logic = false;
for($i = 1; $logic == false; $i++) {
	if(
	floor($i/2)==$i/2 &&
	floor($i/3)==$i/3 &&
	floor($i/5)==$i/5 &&
	floor($i/4)==$i/4 &&
	floor($i/6)==$i/6 &&
	floor($i/7)==$i/7 &&
	floor($i/8)==$i/8 &&
	floor($i/9)==$i/9 &&
	floor($i/10)==$i/10 &&
	floor($i/11)==$i/11 &&
	floor($i/12)==$i/12 &&
	floor($i/13)==$i/13 &&
	floor($i/14)==$i/14 &&
	floor($i/15)==$i/15 &&
	floor($i/16)==$i/16 &&
	floor($i/17)==$i/17 &&
	floor($i/18)==$i/18 &&
	floor($i/20)==$i/20 &&
	floor($i/19)==$i/19) {
		$logic = true;
		echo $i;
		}
	}
?>