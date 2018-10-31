<?php
$bag = [
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'black',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
	'white',
];

$lastBall = false;

while(!$lastBall){
	shuffle($bag);
	$balls = array_rand($bag, 2);
	$ball1 = $bag[$balls[0]];
	$ball2 = $bag[$balls[1]];
	array_splice($bag, $balls[0], 1);
	if($balls[0] < $balls[1]){
		array_splice($bag, ($balls[0] - 1 ), 1);
	}else{	
		array_splice($bag, ($balls[0] - 1 ), 1);
	}
	echo $ball1;
	echo $ball2;
	if($ball1 == $ball2){
		$bag[]='black';
	}else{
		$bag[]='white';
	}
	if(count($bag) < 2){
		echo 'Last Ball : '.$bag[0] . json_encode($bag) . '<br />';
		$lastBall = true;
	}else{
		echo 'Bag : '.$bag[0] . json_encode($bag) . '<br />';
	}
}
