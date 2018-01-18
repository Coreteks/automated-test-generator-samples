<?php

namespace tests\Faker\Provider\en_US;

use Faker\Provider\en_US\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_US\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\en_US\Payment();
}

public function testBankAccountNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->payment->bankAccountNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBankRoutingNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->payment->bankRoutingNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCalculateRoutingNumberChecksum0()
{
    $routing = m::mock('UntypedParameter_routing_');

    // TODO: Your mock expectations here

    $actual = $this->payment->calculateRoutingNumberChecksum($routing);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
