<?php

namespace tests\Illuminate\Routing\Events;

use Illuminate\Routing\Events\RouteMatched;
use Mockery as m;

class RouteMatchedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_route = null;
/**
* @var mixed
*/
protected $_request = null;
/**
* @var \Illuminate\Routing\Events\RouteMatched
*/
protected $routeMatched;

public function setUp()
{
    parent::setUp();

    $this->_route = null;
    $this->_request = null;
    $this->routeMatched = new \Illuminate\Routing\Events\RouteMatched($this->_route, $this->_request);
}
}
