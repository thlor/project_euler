<pre><?php
$day_names = array(0,0,0,0,0,0,0);
$melyiknap = 0;
$date = array(
	"year" => 1900,
	"month" => 1,
	"day" => 1);
$i =0;
$result = 0;

while($i < 100000) {
	$i++;
	if($date["year"] == 2001) {
		if($date["month"] == 1) {
			if($date["day"] == 1) {
				break;
				}
			}
		}
	if($date["year"] > 1900) $day_names[$melyiknap]++;
	$melyiknap++;
	if($melyiknap==7)
		$melyiknap = 0;
	echo $date["day"]."-".$date["month"]."-".$date["year"].": ".$melyiknap."\n";
	if($melyiknap==6 && $date["day"] == 1 && $date["year"] > 1900) $result ++;
	if( //new year
		$date["month"]==12 &&
		$date["day"]==31) {
			$date["year"]++;
			$date["month"] = 1;
			$date["day"] = 0;
		}
	else if(//new month, 31
		$date["month"]==1 ||
		$date["month"]==3 ||
		$date["month"]==5 ||
		$date["month"]==7 ||
		$date["month"]==8 ||
		$date["month"]==10) {
			if($date["day"] == 31) {
				$date["month"]++;
				$date["day"] = 0;
				}
			}
	else if(//new month, 30
		$date["month"]==4 ||
		$date["month"]==6 ||
		$date["month"]==9 ||
		$date["month"]==11) {
			if($date["day"] == 30) {
				$date["month"]++;
				$date["day"] = 0;
				}
			}
	else if(//february
		$date["month"]==2) {
			if($date["day"] == 28) {
				if($date["year"]%4 == 0) {
					if($date["year"]%100 == 0) {
						if($date["year"]%400 == 0) {
							}
							else {
								$date["month"]++;
								$date["day"] = 0;
								}
						}
					}
				else {
					$date["month"]++;
					$date["day"] = 0;
					}
				}
			else if($date["day"] == 29) {
				$date["month"]++;
				$date["day"] = 0;
				}
			}
	$date["day"]++;
	}
print_r($day_names);
echo $result;
?></pre>