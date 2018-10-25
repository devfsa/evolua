<?php

require_once 'FizzBuzz.php';

$numbers = range(1, 100);

$translated = (new FizzBuzz)->translateFromList($numbers);

echo implode($translated, PHP_EOL);