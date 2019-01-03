<?php

function processString(string $text): string {
	$sentances = explode('.', $text);
	
	for ($i = 0; $i < count($sentances) - 1; $i++) {
		$words = explode(" ", $sentances[$i]);
		$words[count($words) - 1] = '(' . $words[count($words) - 1] . ')';
		$sentances[$i] = implode(' ', $words);
	}

	return  implode('.', $sentances);
}
						  
