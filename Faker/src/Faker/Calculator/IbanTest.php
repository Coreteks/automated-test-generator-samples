<?php

namespace tests\Faker\Calculator;

use Faker\Calculator\Iban;
use Mockery as m;

class IbanTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Calculator\Iban
*/
protected $iban;

public function setUp()
{
    parent::setUp();

    $this->iban = new \Faker\Calculator\Iban();
}

public function testChecksum0()
{
    $iban = m::mock('UntypedParameter_iban_');

    // TODO: Your mock expectations here

    $actual = $this->iban->checksum($iban);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlphaToNumber0()
{
    $char = m::mock('UntypedParameter_char_');

    // TODO: Your mock expectations here

    $actual = $this->iban->alphaToNumber($char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMod970()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 57)

    $actual = $this->iban->mod97($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMod971()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 57)
    // for (...) == false (line 57)

    $actual = $this->iban->mod97($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValid0()
{
    $iban = m::mock('UntypedParameter_iban_');

    // TODO: Your mock expectations here

    $actual = $this->iban->isValid($iban);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
