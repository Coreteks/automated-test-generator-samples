<?php

namespace tests\Illuminate\Database\Events;

use Illuminate\Database\Events\TransactionCommitted;
use Mockery as m;

class TransactionCommittedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Events\TransactionCommitted
*/
protected $transactionCommitted;

public function setUp()
{
    parent::setUp();

    $this->transactionCommitted = new \Illuminate\Database\Events\TransactionCommitted();
}
}
