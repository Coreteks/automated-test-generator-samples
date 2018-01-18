<?php

namespace tests\Faker\Provider;

use Faker\Provider\Payment;
use Mockery as m;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Payment
*/
protected $payment;

public function setUp()
{
    parent::setUp();

    $this->payment = new \Faker\Provider\Payment();
}

public function testCreditCardType0()
{
    // TODO: Your mock expectations here

    $actual = $this->payment->creditCardType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardNumber0()
{
    $type = m::mock('UntypedParameter_type_');
    $formatted = m::mock('UntypedParameter_formatted_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($type)) == false (line 158)
    // if ($formatted) == false (line 166)

    $actual = $this->payment->creditCardNumber($type, $formatted, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardNumber1()
{
    $type = m::mock('UntypedParameter_type_');
    $formatted = m::mock('UntypedParameter_formatted_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($type)) == false (line 158)
    // if ($formatted) == true (line 166)

    $actual = $this->payment->creditCardNumber($type, $formatted, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardNumber2()
{
    $type = m::mock('UntypedParameter_type_');
    $formatted = m::mock('UntypedParameter_formatted_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($type)) == true (line 158)
    // if ($formatted) == false (line 166)

    $actual = $this->payment->creditCardNumber($type, $formatted, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardNumber3()
{
    $type = m::mock('UntypedParameter_type_');
    $formatted = m::mock('UntypedParameter_formatted_');
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($type)) == true (line 158)
    // if ($formatted) == true (line 166)

    $actual = $this->payment->creditCardNumber($type, $formatted, $separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardExpirationDate0()
{
    $valid = m::mock('UntypedParameter_valid_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($valid) == false (line 184)

    $actual = $this->payment->creditCardExpirationDate($valid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardExpirationDate1()
{
    $valid = m::mock('UntypedParameter_valid_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($valid) == true (line 184)

    $actual = $this->payment->creditCardExpirationDate($valid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardExpirationDateString0()
{
    $valid = m::mock('UntypedParameter_valid_');
    $expirationDateFormat = m::mock('UntypedParameter_expirationDateFormat_');

    // TODO: Your mock expectations here

    $actual = $this->payment->creditCardExpirationDateString($valid, $expirationDateFormat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreditCardDetails0()
{
    $valid = m::mock('UntypedParameter_valid_');

    // TODO: Your mock expectations here

    $actual = $this->payment->creditCardDetails($valid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban0()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban1()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban2()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban3()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban4()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban5()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban6()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban7()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == false (line 232)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban8()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban9()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban10()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban11()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban12()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban13()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban14()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban15()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban16()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban17()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban18()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban19()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban20()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban21()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban22()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban23()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == false (line 233)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban24()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban25()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban26()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == false (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban27()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == false (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban28()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban29()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban30()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == true (line 243)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIban31()
{
    $countryCode = m::mock('UntypedParameter_countryCode_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length === null) == true (line 232)
    // if ($format === null) == true (line 233)
    // if ($format === null) == true (line 243)
    // switch ($class) (line 256)
    // Default (line 257)

    $actual = $this->payment->iban($countryCode, $prefix, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSwiftBicNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->payment->swiftBicNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
