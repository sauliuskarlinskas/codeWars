<?php

require __DIR__ . '/President.php';

$us_president = new President;

//Išsaugokite $us_prezidento vardą kitame kintamajame, pavadintame $prezidento_vardas
$president_name = $us_president->name;


echo $us_president->name;

echo '<br>';

//Išsaugokite $us_president pasveikinimo metodo iškvietimo rezultatą su argumentu "Donaldas" į kintamąjį $greetings_from_president.
echo $greatings_from_president=$us_president->greet("Donald");


