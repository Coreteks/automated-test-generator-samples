<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\SortedMiddleware;
use Mockery as m;

class SortedMiddlewareTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_priorityMap = [];
/**
* @var mixed
*/
protected $_middlewares = null;
/**
* @var \Illuminate\Routing\SortedMiddleware
*/
protected $sortedMiddleware;

public function setUp()
{
    parent::setUp();

    $this->_priorityMap = [];
    $this->_middlewares = null;
    $this->sortedMiddleware = new \Illuminate\Routing\SortedMiddleware($this->_priorityMap, $this->_middlewares);
}
}
