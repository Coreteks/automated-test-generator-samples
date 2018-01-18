<?php

namespace tests\Illuminate\Pagination;

use Illuminate\Pagination\PaginationServiceProvider;
use Mockery as m;

class PaginationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Pagination\PaginationServiceProvider
*/
protected $paginationServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->paginationServiceProvider = new \Illuminate\Pagination\PaginationServiceProvider();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->runningInConsole()) == false (line 18)

    $actual = $this->paginationServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->runningInConsole()) == true (line 18)

    $actual = $this->paginationServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->paginationServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
