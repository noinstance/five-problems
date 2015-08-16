<?php

// Write a program that outputs all possibilities to put + or - or 
// nothing between the numbers 1, 2, ..., 9 (in this order) such 
// that the result is always 100. For example: 1 + 2 + 34 – 5 + 67 – 8 + 9 = 100.

$total = 0;
make100();
echo "\ntotal: " . $total . "\n";

// recursive make100
// takes 1 < $n <= 9
// $trail is the current sequence
function make100($n = 1, $trail = [ 1 ]) {

	if($n === 9) {

		// get sum of current sequence
		$sum = calc($trail);

		if($sum === 100) {
			// horray, print the thing
			echo "ayy! " . $sum . "\n";
			echo flat($trail);
			echo "\n***\n";

			// increase solutions counter
			global $total;
			$total++;
		}

		// if $n = 9, stop this branch
		return;
	}

	// increase $n
	$n++;

	// make three copies of $trail, and push the new $n,
	// one for each possibility: -, +, ''
	$a = $b = $c = $trail;
	array_push($a, '-' . $n);
	array_push($b, '+' . $n);
	array_push($c, $n);

	// call itself one time per branch
	make100($n, $a);
	make100($n, $b);
	make100($n, $c);
}

function flat($trail) {
	$s = '';
	foreach ($trail as $v) {
		$s = $s . $v;
	}
	return $s;
}

function calc($trail) {
	return eval('return ' . flat($trail) .';');
}