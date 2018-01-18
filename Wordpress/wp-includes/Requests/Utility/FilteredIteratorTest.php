<?php

namespace tests;

use Mockery as m;
use Requests_Utility_FilteredIterator;

class Requests_Utility_FilteredIteratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_callback = null;
/**
* @var \Requests_Utility_FilteredIterator
*/
protected $requests_Utility_FilteredIterator;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->_callback = null;
    $this->requests_Utility_FilteredIterator = new \Requests_Utility_FilteredIterator($this->_data, $this->_callback);
}

public function testCurrent0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Utility_FilteredIterator->current();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
