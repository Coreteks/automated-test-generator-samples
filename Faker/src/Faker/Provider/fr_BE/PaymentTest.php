<?php

namespace tests\Faker\Provider\fr_BE;

use Faker\Provider\fr_BE\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_BE\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\fr_BE\Payment();
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

public function testVat0()
{
    $spacedNationalPrefix = m::mock('UntypedParameter_spacedNationalPrefix_');

    // TODO: Your mock expectations here

    $actual = $this->payment->vat($spacedNationalPrefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
