<?php

// Write a function that computes the list of the first 100 Fibonacci 
// numbers. By definition, the first two numbers in the Fibonacci 
// sequence are 0 and 1, and each subsequent number is the sum of the 
// previous two. As an example, here are the first 10 Fibonnaci numbers: 
// 0, 1, 1, 2, 3, 5, 8, 13, 21, and 34.

$limit = 100;

print_r(fibonnaci($limit));

function fibonnaci($limit) {

	$result = [ 0, 1 ];

	for($i = 2; $i < $limit; $i++) {
		$len = count($result);
		$result[] = $result[$len - 1] + $result[$len - 2];
	}

	return $result;
}