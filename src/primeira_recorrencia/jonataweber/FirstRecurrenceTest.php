<?php

require_once __DIR__ . '/FirstRecurrence.php';

use function Evolua\Recurrence\first;

assert(first('ABCDA') === 'A');
assert(first('ABBCDA') === 'B');
assert(first('ABBCDDA') === 'B');
assert(first('ABC') === null);
