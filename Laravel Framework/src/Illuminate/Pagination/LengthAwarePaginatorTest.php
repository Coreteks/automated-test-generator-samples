<?php

namespace tests\Illuminate\Pagination;

use Illuminate\Pagination\LengthAwarePaginator;
use Mockery as m;

class LengthAwarePaginatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_items = null;
/**
* @var mixed
*/
protected $_total = null;
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
* @var \Illuminate\Pagination\LengthAwarePaginator
*/
protected $lengthAwarePaginator;

public function setUp()
{
    parent::setUp();

    $this->_items = null;
    $this->_total = null;
    $this->_perPage = null;
    $this->_currentPage = null;
    $this->_options = [];
    $this->lengthAwarePaginator = new \Illuminate\Pagination\LengthAwarePaginator($this->_items, $this->_total, $this->_perPage, $this->_currentPage, $this->_options);
}

public function testLinks0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->links($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->render($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTotal0()
{
    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->total();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMorePages0()
{
    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->hasMorePages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNextPageUrl0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->lastPage() > $this->currentPage()) == false (line 141)

    $actual = $this->lengthAwarePaginator->nextPageUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNextPageUrl1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->lastPage() > $this->currentPage()) == true (line 141)

    $actual = $this->lengthAwarePaginator->nextPageUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastPage0()
{
    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->lastPage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToJson0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->lengthAwarePaginator->toJson($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
