<?php

namespace tests\Illuminate\Pagination;

use Illuminate\Pagination\Paginator;
use Mockery as m;

class PaginatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_items = null;
/**
* @var mixed
*/
protected $_perPage = null;
/**
* @var mixed
*/
protected $_currentPage = null;
/**
* @var array
*/
protected $_options = [];
/**
* @var \Illuminate\Pagination\Paginator
*/
protected $paginator;

public function setUp()
{
    parent::setUp();

    $this->_items = null;
    $this->_perPage = null;
    $this->_currentPage = null;
    $this->_options = [];
    $this->paginator = new \Illuminate\Pagination\Paginator($this->_items, $this->_perPage, $this->_currentPage, $this->_options);
}

public function testNextPageUrl0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasMorePages()) == false (line 81)

    $actual = $this->paginator->nextPageUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNextPageUrl1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasMorePages()) == true (line 81)

    $actual = $this->paginator->nextPageUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLinks0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->paginator->links($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->paginator->render($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMorePagesWhen0()
{
    $hasMore = m::mock('UntypedParameter_hasMore_');

    // TODO: Your mock expectations here

    $actual = $this->paginator->hasMorePagesWhen($hasMore);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMorePages0()
{
    // TODO: Your mock expectations here

    $actual = $this->paginator->hasMorePages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->paginator->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->paginator->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToJson0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->paginator->toJson($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
