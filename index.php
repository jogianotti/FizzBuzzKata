<?php

require_once __DIR__ . '/src/Kata.php';

$kata = new Kata();

for($i = 1; $i <= 100; $i++) {
    print $kata->fizzbuzz($i) . PHP_EOL;
}