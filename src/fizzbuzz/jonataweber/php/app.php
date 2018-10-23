<?php

require_once 'FizzBuzz.php';

$numbers = range(1, 100);

$translated = array_map([new FizzBuzz, 'translate'], $numbers);

echo implode($translated, PHP_EOL);