<?php

require __DIR__ . '/Person.php';

$asmuo1 = new Person("Petras", "Petraitis");
$asmuo2 = new Person("Ona", "Onyte");

echo $asmuo1->get_full_name();

echo '<br>';

echo $asmuo2->get_full_name();

