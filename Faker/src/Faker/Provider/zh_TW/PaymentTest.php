<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\zh_TW\Payment();
}

public function testCreditCardDetails0()
{
    $valid = m::mock('UntypedParameter_valid_');

    // TODO: Your mock expectations here

    $actual = $this->payment->creditCardDetails($valid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
