<?php

namespace tests\Illuminate\Database\Events;

use Illuminate\Database\Events\TransactionBeginning;
use Mockery as m;

class TransactionBeginningTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Events\TransactionBeginning
*/
protected $transactionBeginning;

public function setUp()
{
    parent::setUp();

    $this->transactionBeginning = new \Illuminate\Database\Events\TransactionBeginning();
}
}
