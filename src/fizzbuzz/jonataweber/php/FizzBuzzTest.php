<?php

require_once 'FizzBuzz.php';

$fb = new FizzBuzz;

assert($fb->translateNumber(3) === 'fizz');
assert($fb->translateNumber(5) === 'buzz');
assert($fb->translateNumber(15) === 'fizzbuzz');
assert($fb->translateNumber(16) === '16');