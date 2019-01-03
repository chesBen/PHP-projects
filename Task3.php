<?php

function processString(string $text): array {
	$result = [];
	$sentances = explode('.', $text);
	
	for ($i = 0; $i < count($sentances) - 1; $i++) {

        $currentSentance = $sentances[$i];
        
        $words = explode(" ", $currentSentance);
        
        $lastWord = $words[count($words) - 1];
        
		array_push($result, $lastWord);
	}

	return $result;
}
