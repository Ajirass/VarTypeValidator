<?php

require __DIR__.'/vendor/autoload.php';


$string = [
    'test' => 'test',
    'osef' => 'test',
    'blabla' => 'test'
];

$result = \Ajirass\VarTypeValidator\ArrayValidator::numberElementsBetween($string, 1, 4);

var_dump($result);