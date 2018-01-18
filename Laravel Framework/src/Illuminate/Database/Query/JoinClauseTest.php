<?php

namespace tests\Illuminate\Database\Query;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\JoinClause;
use Mockery as m;

class JoinClauseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_parentQuery;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var \Illuminate\Database\Query\JoinClause
*/
protected $joinClause;

public function setUp()
{
    parent::setUp();

    $this->_parentQuery = m::mock(\Illuminate\Database\Query\Builder::class);
    $this->_type = null;
    $this->_table = null;
    $this->joinClause = new \Illuminate\Database\Query\JoinClause($this->_parentQuery, $this->_type, $this->_table);
}

public function testOn0()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($first instanceof \Closure) == false (line 71)

    $actual = $this->joinClause->on($first, $operator, $second, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOn1()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($first instanceof \Closure) == true (line 71)

    $actual = $this->joinClause->on($first, $operator, $second, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrOn0()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->joinClause->orOn($first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewQuery0()
{
    // TODO: Your mock expectations here

    $actual = $this->joinClause->newQuery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
