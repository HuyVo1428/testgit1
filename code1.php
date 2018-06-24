<?php
function factorial($x){
	$f = 1;
	for($i = 1; $i <= $x; $i++){
		$f *= $i;
	}
	return $f;
}
$x = 4;
echo $x."! = ".factorial($x);
?>
