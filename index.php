<?php

require __DIR__.'/vendor/autoload.php';


$equalInt = \Ajirass\VarTypeValidator\IntegerValidator::negative(10);

var_dump($equalInt);