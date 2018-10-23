<?php

require_once 'FizzBuzz.php';

$fb = new FizzBuzz;

assert($fb->translate(3) === 'fizz');
assert($fb->translate(5) === 'buzz');
assert($fb->translate(15) === 'fizzbuzz');
assert($fb->translate(16) === '16');