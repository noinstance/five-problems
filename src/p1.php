<?php

echo "Problem #1\n\n";

$list = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ]; // sum = 45

$sum = forLoopSum($list);
echo "for-loop: " . $sum . "\n";

$sum = whileLoopSum($list);
echo "while-loop: " . $sum . "\n";

$sum = recursionSum($list);
echo "recursion: " . $sum . "\n";

function forLoopSum($list) {
	$sum = 0;
	for($i = 0; $i < count($list); $i++) {
		$sum = $sum + $list[$i];
	}
	return $sum;
}

function whileLoopSum($list) {
	$sum = 0;
	while(count($list) > 0) {
		$sum = $sum + array_pop($list);
	}
	return $sum;
}

function recursionSum($list, $sum = 0) {	
	if(count($list) > 0) {
		$n = array_pop($list);
		return recursionSum($list, $sum + $n);
	} else {
		return $sum;
	}	
}
