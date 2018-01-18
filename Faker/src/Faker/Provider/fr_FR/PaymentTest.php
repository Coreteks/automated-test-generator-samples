<?php

namespace tests\Faker\Provider\fr_FR;

use Faker\Provider\fr_FR\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_FR\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\fr_FR\Payment();
}

public function testVat0()
{
    $spacedNationalPrefix = m::mock('UntypedParameter_spacedNationalPrefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($spacedNationalPrefix) == false (line 25)

    $actual = $this->payment->vat($spacedNationalPrefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVat1()
{
    $spacedNationalPrefix = m::mock('UntypedParameter_spacedNationalPrefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($spacedNationalPrefix) == true (line 25)

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
