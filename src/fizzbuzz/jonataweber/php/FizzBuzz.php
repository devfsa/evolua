<?php

class FizzBuzz
{

    /**
     * Translate number to FizzBuzz.
     *
     * @param integer $n
     * @return string
     */
    public function translate(int $n): string
    {
        if ($this->isFizzBuzz($n)) return 'fizzbuzz';
        if ($this->isFizz($n)) return 'fizz';
        if ($this->isBuzz($n)) return 'buzz';    

        return (string) $n;
    }

    /**
     * Check if number is Fizz.
     *
     * @param integer $n
     * @return boolean
     */
    protected function isFizz(int $n): bool
    {
        return $n % 3 === 0;
    }

    /**
     * Check if number is Buzz.
     *
     * @param integer $n
     * @return boolean
     */
    protected function isBuzz(int $n): bool
    {
        return $n % 5 === 0;
    }

    /**
     * Check if number is FizzBuzz.
     *
     * @param integer $n
     * @return boolean
     */
    protected function isFizzBuzz(int $n): bool
    {
        return $this->isFizz($n) && $this->isBuzz($n);
    }

}