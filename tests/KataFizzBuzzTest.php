<?php

require_once "src/Kata.php";

use PHPUnit\Framework\TestCase;

class KataFizzBuzzTest extends TestCase
{
    public function testCanPrintNumber(): void
    {
        $kata = new Kata();

        $this->assertEquals(1, $kata->fizzbuzz(1));
    }

    public function testCanReplaceMultiplesOfThreeWithFizz()
    {
        $kata = new Kata();

        $this->assertEquals('Fizz', $kata->fizzbuzz(3));
        $this->assertEquals('Fizz', $kata->fizzbuzz(48));
        $this->assertEquals('Fizz', $kata->fizzbuzz(99));
    }

    public function testCanReplaceMiltiplesOfFiveWithBuzz()
    {
        $kata = new Kata();

        $this->assertEquals('Buzz', $kata->fizzbuzz(5));
        $this->assertEquals('Buzz', $kata->fizzbuzz(25));
        $this->assertEquals('Buzz', $kata->fizzbuzz(80));
    }

    public function testCanReplaceMúltiplesOfThreeAndFiveWithFizzBuzz()
    {
        $kata = new Kata();

        $this->assertEquals('FizzBuzz', $kata->fizzbuzz(15));
        $this->assertEquals('FizzBuzz', $kata->fizzbuzz(45));
        $this->assertEquals('FizzBuzz', $kata->fizzbuzz(75));
    }
}