<?php 

$a = 4;
$b = 6;

echo demo($a,$b);

function demo($a,$b)
{
	$sum = ($a&$b)<<1;
	$a^=$b;
	while ($sum) {
		$b = $sum;
		$sum = ($a&$b)<<1;
	    $a^=$b;
	}
	return $a;
}





 ?>