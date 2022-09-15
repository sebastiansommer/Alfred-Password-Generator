<?php
require_once 'vendor/autoload.php';

use Hackzilla\PasswordGenerator\Generator\HybridPasswordGenerator;

$generator = new HybridPasswordGenerator();

$generator
  ->setUppercase()
  ->setLowercase()
  ->setNumbers()
  ->setSymbols(false)
  ->setSegmentLength(4)
  ->setSegmentCount(3)
  ->setSegmentSeparator('');

$results = [];

foreach ($generator->generatePasswords(10) as $password) {
    $results['items'][] = [
        'title' => $password,
        'arg' => $password
    ];
}

echo json_encode($results);