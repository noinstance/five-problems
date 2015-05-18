<?php

// Write a function that given a list of non negative integers,
// arranges them such that they form the largest possible number.
// For example, given [50, 2, 1, 9], the largest formed number is 95021.

$list = [ 50, 2, 1, 9 ];

$map = [];
foreach ($list as $value) {
	$map[] = [ 'value' => $value, 'weight' => getWeight($value) ];
}

sortMap($map);
echo getValue($map) . "\n";

function getWeight($value) {
	$s = (string)$value;
	return $s[0];
}

function sortMap(&$map) {
	$result = [ $map[0] ];
	for ($i = 1; $i < count($map); $i ++) {
		$item = $map[$i];
		$index_weight = $result[count($result) - 1]['weight'];
		if((int)$item['weight'] > (int)$index_weight) {
			array_unshift($result, $item);
		} else {
			array_push($result, $item);
		}
	}
	$map = $result;
}

function getValue($map) {
	$value = '';
	foreach ($map as $item) {
		$value .= $item['value'];
	}
	return $value;
}