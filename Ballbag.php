<?php

// Create bag array

$bag = [];

// Define what needs to be put in the bag
$totals = [
	['total' => 20, 'color'=>'black'],
	['total' => 16, 'color'=>'white'],
];

// Put it in the bag
foreach($totals as $total){
	$current = 0;
	while($current < $total['total']){
		$bag[]=$total['color'];
		$current++;
	}
}

// Ensure the bag has the correct values
var_dump(array_count_values($bag));
echo '<hr />';

// Bool for the last ball
$lastBall = false;

// While we dont have the last ball do something
while(!$lastBall){
	// Shuffle the bag
	shuffle($bag);
	// Pick 2 random balls from the bag
	$balls = array_rand($bag, 2);
	// Assign them to their own vars
	$ball1 = $bag[$balls[0]];
	$ball2 = $bag[$balls[1]];
	// We have taken them out of the bag, remove them from the array
	array_splice($bag, $balls[0], 1);
	// Figure out what index we need to splice for the second ball as removing the first index might reoder it
	if($balls[0] < $balls[1]){
		array_splice($bag, ($balls[0] - 1 ), 1);
	}else{	
		array_splice($bag, ($balls[0] - 1 ), 1);
	}
	// Proof the balls we have picked
	echo $ball1 . '|' . $ball2 . ' ';

	// If they are the same, add a black ball, else add a white ball
	if($ball1 == $ball2){
		$bag[]='black';
	}else{
		$bag[]='white';
	}
	// If we are on the last ball, show it, else show the bag and out pick 
	if(count($bag) < 2){
		echo 'Last Ball : '.$bag[0] . json_encode($bag) . '<br />';
		$lastBall = true;
	}else{
		echo 'Bag : '.$bag[0] . json_encode($bag) . '<br />';
	}
}
