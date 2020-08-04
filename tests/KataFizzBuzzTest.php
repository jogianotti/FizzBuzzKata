<?php

require_once __DIR__ . "/../src/Kata.php";

use PHPUnit\Framework\TestCase;

class KataFizzBuzzTest extends TestCase
{
    public function testCanPrintNumber(): void
    {
        $kata = new Kata();

        $this->assertEquals(31, $kata->fizzbuzz(31));
    }

    public function testCanReplaceMultiplesOfThreeWithFizz(): void
    {
        $kata = new Kata();

        $number = $this->generateMultipleOfThree();

        $this->assertEquals('Fizz', $kata->fizzbuzz($number));
    }

    public function testCanReplaceMultiplesOfFiveWithBuzz(): void
    {
        $kata = new Kata();

        $number = $this->generateMultipleOfFive();

        $this->assertEquals('Buzz', $kata->fizzbuzz($number));
    }

    public function testCanReplaceMultiplesOfThreeAndFiveWithFizzBuzz(): void
    {
        $kata = new Kata();

        $number = $this->generateMultipleOfThreeAndFive();

        $this->assertEquals('FizzBuzz', $kata->fizzbuzz($number));
    }

    private function generateMultipleOfThree(): int
    {
        do {
            $random = rand(1, 99);
        } while(!$this->isOnlyMultipleOfThree($random));

        return $random;
    }

    private function generateMultipleOfFive(): int
    {
        do {
            $random = rand(1, 99);
        } while(!$this->isOnlyMultipleOfFive($random));

        return $random;
    }

    private function generateMultipleOfThreeAndFive(): int
    {
        do {
            $random = rand(1, 99);
        } while(!$this->isMultipleOfThreeAndFive($random));

        return $random;
    }

    private function isMultipleOfThree(int $number): bool
    {
        return $number % 3 === 0;
    }

    private function isMultipleOfFive(int $number): bool
    {
        return $number % 5 === 0;
    }

    private function isMultipleOfThreeAndFive(int $number): bool
    {
        return $this->isMultipleOfThree($number) && $this->isMultipleOfFive($number);
    }

    private function isOnlyMultipleOfThree(int $number): bool
    {
        return $this->isMultipleOfThree($number) && !$this->isMultipleOfFive($number);
    }

    private function isOnlyMultipleOfFive(int $number): bool
    {
        return !$this->isMultipleOfThree($number) && $this->isMultipleOfFive($number);
    }
}