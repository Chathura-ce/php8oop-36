<?php
declare(strict_types=1);
require '../Transaction.php';

$transaction1 = (new Transaction(100, 'hi ...'))
    ->addTax(8)
    ->applyDiscount(8);

$transaction2 = (new Transaction(100, 'hi ...'))
    ->addTax(8)
    ->applyDiscount(15);


var_dump($transaction1->getAmount(),$transaction2->getAmount());