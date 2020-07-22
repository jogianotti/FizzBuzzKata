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
}