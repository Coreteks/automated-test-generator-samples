<?php

namespace tests\Illuminate\Contracts\Database;

use Illuminate\Contracts\Database\ModelIdentifier;
use Mockery as m;

class ModelIdentifierTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var \Illuminate\Contracts\Database\ModelIdentifier
*/
protected $modelIdentifier;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_id = null;
    $this->_connection = null;
    $this->modelIdentifier = new \Illuminate\Contracts\Database\ModelIdentifier($this->_class, $this->_id, $this->_connection);
}
}
