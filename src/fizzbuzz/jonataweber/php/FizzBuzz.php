<?php

class FizzBuzz
{

    const FIZZ_FACTOR = 3;
    const BUZZ_FACTOR = 5;

    /**
     * Translate number to FizzBuzz.
     *
     * @param integer $number
     * @return string
     */
    public function translateNumber(int $number): string
    {
        if ($this->isFizzBuzz($number)) return 'fizzbuzz';
        if ($this->isFizz($number)) return 'fizz';
        if ($this->isBuzz($number)) return 'buzz';    

        return (string) $number;
    }

    /**
     * Translate an array of numbers to FizzBuzz.
     *
     * @param array<int> $numbers
     * @return array<string>
     */
    public function translateFromList(array $numbers): array
    {
        return array_map([$this, 'translateNumber'], $numbers);
    }

    /**
     * Check if number is Fizz.
     *
     * @param integer $number
     * @return boolean
     */
    protected function isFizz(int $number): bool
    {
        return $number % self::FIZZ_FACTOR === 0;
    }

    /**
     * Check if number is Buzz.
     *
     * @param integer $number
     * @return boolean
     */
    protected function isBuzz(int $number): bool
    {
        return $number % self::BUZZ_FACTOR === 0;
    }

    /**
     * Check if number is FizzBuzz.
     *
     * @param integer $number
     * @return boolean
     */
    protected function isFizzBuzz(int $number): bool
    {
        return $this->isFizz($number) && $this->isBuzz($number);
    }

}