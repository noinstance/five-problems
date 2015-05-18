<?php

// Write a function that combines two lists by alternatingly taking 
// elements. For example: given the two lists [a, b, c] and [1, 2, 3], 
// the function should return [a, 1, b, 2, c, 3].

$list_a = [ 'a', 'b', 'c', 'd' ];
$list_b = [ '1', '2', '3'];

print_r(combineLists($list_a, $list_b));

function combineLists($l1, $l2) {

	$result = [];

	// number of items in the longest list
	$len_l1 = count($l1);
	$len_l2 = count($l2);
	$max_len = $len_l2 > $len_l1 ? $len_l2 : $len_l1;

	for($i = 0; $i < $max_len ; $i++) {

		if($i < $len_l1) {
			$result[] = $l1[$i];
		}

		if($i < $len_l2) {
			$result[] = $l2[$i];
		}
	}

	return $result;
}