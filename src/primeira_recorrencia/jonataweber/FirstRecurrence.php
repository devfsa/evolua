<?php

namespace Evolua\Recurrence;

/**
 * Find the first recurrence in the text.
 * 
 * in: 'ABCDA' out: 'A'
 * in: 'ABBCDA' out: 'B'
 * in: 'ABBCDDA' out: 'B'
 * in: 'ABC' out: null
 *
 * @param string $haystack
 * @param integer $offset
 * @param Array $carry
 * @return (string | null)
 */
function first(string $haystack, int $offset = 0, Array $carry = [])
{
    $char = $haystack[$offset];
    $carry[$char] = ($carry[$char] ?? 0) + 1;

    $isLastCharacter = $offset >= (strlen($haystack) - 1);
    $isRecurrence = $carry[$char] > 1;
    $notFoundRecurrence = $isLastCharacter && false === $isRecurrence;

    if ($notFoundRecurrence) return null;
    if ($isLastCharacter || $isRecurrence) return $char;

    return first($haystack, $offset + 1, $carry);
}