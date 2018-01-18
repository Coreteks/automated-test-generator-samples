<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\ru_RU\Payment();
}

public function testBank0()
{
    // TODO: Your mock expectations here

    $actual = $this->payment->bank();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
