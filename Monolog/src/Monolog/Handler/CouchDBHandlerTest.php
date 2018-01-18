<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\CouchDBHandler;

class CouchDBHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\CouchDBHandler
*/
protected $couchDBHandler;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->_level = null;
    $this->_bubble = null;
    $this->couchDBHandler = new \Monolog\Handler\CouchDBHandler($this->_options, $this->_level, $this->_bubble);
}
}
