<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\QueryException;
use Mockery as m;

class QueryExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_sql = null;
/**
* @var array
*/
protected $_bindings = [];
/**
* @var mixed
*/
protected $_previous = null;
/**
* @var \Illuminate\Database\QueryException
*/
protected $queryException;

public function setUp()
{
    parent::setUp();

    $this->_sql = null;
    $this->_bindings = [];
    $this->_previous = null;
    $this->queryException = new \Illuminate\Database\QueryException($this->_sql, $this->_bindings, $this->_previous);
}

public function testGetSql0()
{
    // TODO: Your mock expectations here

    $actual = $this->queryException->getSql();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBindings0()
{
    // TODO: Your mock expectations here

    $actual = $this->queryException->getBindings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
