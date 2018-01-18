<?php

namespace tests\Illuminate\Database\Events;

use Illuminate\Database\Events\QueryExecuted;
use Mockery as m;

class QueryExecutedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_sql = null;
/**
* @var mixed
*/
protected $_bindings = null;
/**
* @var mixed
*/
protected $_time = null;
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var \Illuminate\Database\Events\QueryExecuted
*/
protected $queryExecuted;

public function setUp()
{
    parent::setUp();

    $this->_sql = null;
    $this->_bindings = null;
    $this->_time = null;
    $this->_connection = null;
    $this->queryExecuted = new \Illuminate\Database\Events\QueryExecuted($this->_sql, $this->_bindings, $this->_time, $this->_connection);
}
}
