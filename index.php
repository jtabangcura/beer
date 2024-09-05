<!DOCTYPE html>
<html>
<head>
	<title>99 Bottles of Beer on the Wall...</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Why are there beers on the wall?? Is it a shelf on the wall, or are they floating..? I don't get it..." />
</head>
<body>


<?php

function bottles($beer) {

	$n = new NumberFormatter('en',NumberFormatter::SPELLOUT);

	if ($beer != 1)
		$unit = 'bottles';
	else
		$unit = 'bottle';

	if ($beer == 0)
		return 'No '.$unit.' of beer';
	else
		return ucfirst($n->format($beer)).' '.$unit.' of beer';

}

for ($beer = 99; $beer >= 0; $beer--) {

	if ($beer == 1) $one = 'it';
	else $one = 'one';

	if ($beer == 0)
		print_r('<h1>Go home, you\'re drunk...</h1>');
	else
		print_r('<p>'.bottles($beer).' on the wall<br>'.bottles($beer).'<br>You take '.$one.' down and pass it around<br>'.bottles($beer-1).' on the wall</p>');

}


?>


</body>
</html>