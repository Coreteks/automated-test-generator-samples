<?php

namespace tests\Illuminate\Pagination;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\UrlWindow;
use Mockery as m;

class UrlWindowTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_paginator;
/**
* @var \Illuminate\Pagination\UrlWindow
*/
protected $urlWindow;

public function setUp()
{
    parent::setUp();

    $this->_paginator = m::mock(\Illuminate\Contracts\Pagination\LengthAwarePaginator::class);
    $this->urlWindow = new \Illuminate\Pagination\UrlWindow($this->_paginator);
}

public function testMake0()
{
    $paginator = m::mock(\Illuminate\Contracts\Pagination\LengthAwarePaginator::class);
    $onEachSide = m::mock('UntypedParameter_onEachSide_');

    // TODO: Your mock expectations here

    $actual = $this->urlWindow->make($paginator, $onEachSide);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $onEachSide = m::mock('UntypedParameter_onEachSide_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->paginator->lastPage() < $onEachSide * 2 + 6) == false (line 47)

    $actual = $this->urlWindow->get($onEachSide);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $onEachSide = m::mock('UntypedParameter_onEachSide_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->paginator->lastPage() < $onEachSide * 2 + 6) == true (line 47)

    $actual = $this->urlWindow->get($onEachSide);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAdjacentUrlRange0()
{
    $onEachSide = m::mock('UntypedParameter_onEachSide_');

    // TODO: Your mock expectations here

    $actual = $this->urlWindow->getAdjacentUrlRange($onEachSide);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStart0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlWindow->getStart();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFinish0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlWindow->getFinish();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasPages0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlWindow->hasPages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
