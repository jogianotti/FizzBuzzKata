<?php


class Kata
{
    public function fizzbuzz(int $int)
    {
        if (0 === $int % 3) {
            return 'Fizz';
        }

        if (0 === $int % 5) {
            return 'Buzz';
        }

        return 1;
    }
}