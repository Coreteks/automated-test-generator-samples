<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\Rule;
use Mockery as m;

class RuleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Validation\Rule
*/
protected $rule;

public function setUp()
{
    parent::setUp();

    $this->rule = new \Illuminate\Validation\Rule();
}

public function testDimensions0()
{
    $constraints = [];

    // TODO: Your mock expectations here

    $actual = $this->rule->dimensions($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $table = m::mock('UntypedParameter_table_');
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->rule->exists($table, $column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIn0()
{
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->rule->in($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotIn0()
{
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->rule->notIn($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique0()
{
    $table = m::mock('UntypedParameter_table_');
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->rule->unique($table, $column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
