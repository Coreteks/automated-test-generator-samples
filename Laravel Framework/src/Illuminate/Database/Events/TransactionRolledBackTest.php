<?php

namespace tests\Illuminate\Database\Events;

use Illuminate\Database\Events\TransactionRolledBack;
use Mockery as m;

class TransactionRolledBackTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Events\TransactionRolledBack
*/
protected $transactionRolledBack;

public function setUp()
{
    parent::setUp();

    $this->transactionRolledBack = new \Illuminate\Database\Events\TransactionRolledBack();
}
}
