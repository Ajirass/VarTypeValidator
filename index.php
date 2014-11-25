<?php

require __DIR__.'/vendor/autoload.php';


$date = new \DateTime();
$dateMin = new \DateTime("-2 day");
$dateMax = new \DateTime('+2 day');



$result = \Ajirass\VarTypeValidator\DateTimeValidator::isBefore($date, $dateMin);

var_dump($result);
