<?php 

$arr = [1,2,3,4];
echo demo($arr);
function demo($arr){
    $sum = count($arr);
	for ($i=0; $i <$sum ; $i++) { 
		for ($j=0; $j <$sum ; $j++) { 
			for ($k=0; $k <$sum ; $k++) { 
				if($arr[$i] != $arr[$j] && $arr[$j] != $arr[$k] && $arr[$k] != $arr[$i]){
                     echo "<br/>";
                     echo $arr[$i].$arr[$j].$arr[$k];
				}
			}
		}
	}
}

 ?>