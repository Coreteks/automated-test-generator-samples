<?php

namespace tests\Faker\Provider\bg_BG;

use Faker\Provider\bg_BG\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bg_BG\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\bg_BG\Payment();
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
