<?php

namespace tests\Faker\Provider\pt_PT;

use Faker\Provider\pt_PT\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pt_PT\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\pt_PT\Person();
}

public function testTaxpayerIdentificationNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->taxpayerIdentificationNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDvCalcMod110()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 81)
    // if ($res == 0 || $res == 1) == false (line 92)

    $actual = $this->person->dvCalcMod11($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDvCalcMod111()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 81)
    // if ($res == 0 || $res == 1) == true (line 92)

    $actual = $this->person->dvCalcMod11($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDvCalcMod112()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 81)
    // if ($factor == $base) == false (line 85)
    // for (...) == false (line 81)
    // if ($res == 0 || $res == 1) == false (line 92)

    $actual = $this->person->dvCalcMod11($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDvCalcMod113()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 81)
    // if ($factor == $base) == false (line 85)
    // for (...) == false (line 81)
    // if ($res == 0 || $res == 1) == true (line 92)

    $actual = $this->person->dvCalcMod11($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDvCalcMod114()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 81)
    // if ($factor == $base) == true (line 85)
    // for (...) == false (line 81)
    // if ($res == 0 || $res == 1) == false (line 92)

    $actual = $this->person->dvCalcMod11($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDvCalcMod115()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 81)
    // if ($factor == $base) == true (line 85)
    // for (...) == false (line 81)
    // if ($res == 0 || $res == 1) == true (line 92)

    $actual = $this->person->dvCalcMod11($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
