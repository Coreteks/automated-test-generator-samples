<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Route;
use Mockery as m;

class RouteTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Route
*/
protected $route;

public function setUp()
{
    parent::setUp();

    $this->route = new \Illuminate\Support\Facades\Route();
}
}
