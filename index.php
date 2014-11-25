<?php

require __DIR__.'/vendor/autoload.php';


$string = "abcdef";

$result = \Ajirass\VarTypeValidator\StringValidator::noWhiteSpaceStartEnd($string);

var_dump($result);