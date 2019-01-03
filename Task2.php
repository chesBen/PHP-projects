<?php
$numbers = explode(',', readline());

for ($i = 0; $i < count($numbers); $i++) {
	if ($i % 2 === 0) {
		$numbers[$i] = 0;
	}
}

$result = implode(',', $numbers);

echo $result;