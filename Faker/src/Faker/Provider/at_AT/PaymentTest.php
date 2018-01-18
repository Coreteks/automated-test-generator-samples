<?php

namespace tests\Faker\Provider\at_AT;

use Faker\Provider\at_AT\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\at_AT\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\at_AT\Payment();
}

public function testVat0()
{
    $spacedNationalPrefix = m::mock('UntypedParameter_spacedNationalPrefix_');

    // TODO: Your mock expectations here

    $actual = $this->payment->vat($spacedNationalPrefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
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
}
