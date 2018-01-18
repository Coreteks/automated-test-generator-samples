<?php

namespace tests\Illuminate\Database\Events;

use Illuminate\Database\Events\StatementPrepared;
use Mockery as m;

class StatementPreparedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var mixed
*/
protected $_statement = null;
/**
* @var \Illuminate\Database\Events\StatementPrepared
*/
protected $statementPrepared;

public function setUp()
{
    parent::setUp();

    $this->_connection = null;
    $this->_statement = null;
    $this->statementPrepared = new \Illuminate\Database\Events\StatementPrepared($this->_connection, $this->_statement);
}
}
