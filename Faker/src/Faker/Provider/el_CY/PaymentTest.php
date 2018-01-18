<?php

namespace tests\Faker\Provider\el_CY;

use Faker\Provider\el_CY\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_CY\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\el_CY\Payment();
}

public function testBankAccountNumber0()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->payment->bankAccountNumber($prefix, $countryCode, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBank0()
{
    // TODO: Your mock expectations here

    $actual = $this->payment->bank();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
