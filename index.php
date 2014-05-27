<?php

for ($i = 0; $i < 100; $i++) {
	$x[$i] = rand(0,10000);
}
$start = microtime(true);
for ($i = 0; $i < count($x); $i++){
	if ($i > 0) {
		
		$temp = $x[$i];
		$j = $i;
		while ($j > 0 && $temp < $x[$j - 1]) {
			$x[$j] = $x[$j - 1];
			$j--;
		}
		$x[$j] = $temp;
	}
}

$end = microtime(true);
$final = $end - $start;
for ($i = 0; $i < count($x); $i++) {
	?>
	<h5><?= $x[$i]?></h5><br>
<?php } ?>
<h5>Time took: <?= $final?></h5>