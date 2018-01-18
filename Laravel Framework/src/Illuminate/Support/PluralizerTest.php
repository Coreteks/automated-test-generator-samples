<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Pluralizer;
use Mockery as m;

class PluralizerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Pluralizer
*/
protected $pluralizer;

public function setUp()
{
    parent::setUp();

    $this->pluralizer = new \Illuminate\Support\Pluralizer();
}

public function testPlural0()
{
    $value = m::mock('UntypedParameter_value_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ((int) $count === 1 || static::uncountable($value)) == false (line 67)

    $actual = $this->pluralizer->plural($value, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPlural1()
{
    $value = m::mock('UntypedParameter_value_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ((int) $count === 1 || static::uncountable($value)) == true (line 67)

    $actual = $this->pluralizer->plural($value, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSingular0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->pluralizer->singular($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
