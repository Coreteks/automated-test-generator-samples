<?php

namespace tests\Faker\Provider\fr_FR;

use Faker\Provider\fr_FR\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_FR\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\fr_FR\Person();
}

public function testPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->prefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir0()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir1()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir2()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir3()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir4()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir5()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir6()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir7()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir8()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir9()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir10()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir11()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir12()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir13()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir14()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir15()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir16()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir17()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == false (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir18()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir19()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir20()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir21()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir22()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir23()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir24()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir25()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir26()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir27()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir28()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir29()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir30()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir31()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir32()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir33()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir34()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir35()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 80)
    // if ($gender === static::GENDER_FEMALE) == true (line 82)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir36()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir37()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir38()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir39()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir40()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir41()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == false (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir42()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir43()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir44()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir45()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir46()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir47()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == false (line 99)
    // if (strlen($department) === 3) == true (line 101)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir48()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir49()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == false (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir50()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir51()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == false (line 113)
    // if ($department === '2B') == true (line 115)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir52()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == false (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNir53()
{
    $gender = m::mock('UntypedParameter_gender_');
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 80)
    // if (strlen($department) === 2) == true (line 99)
    // if ($department === '2A') == true (line 113)
    // if ($formatted) == true (line 123)

    $actual = $this->person->nir($gender, $formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
