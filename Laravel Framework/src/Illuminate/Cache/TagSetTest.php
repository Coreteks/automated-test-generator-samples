<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\TagSet;
use Illuminate\Contracts\Cache\Store;
use Mockery as m;

class TagSetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_store;
/**
* @var array
*/
protected $_names = [];
/**
* @var \Illuminate\Cache\TagSet
*/
protected $tagSet;

public function setUp()
{
    parent::setUp();

    $this->_store = m::mock(\Illuminate\Contracts\Cache\Store::class);
    $this->_names = [];
    $this->tagSet = new \Illuminate\Cache\TagSet($this->_store, $this->_names);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->tagSet->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetTag0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->tagSet->resetTag($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->tagSet->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTagId0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->tagSet->tagId($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTagKey0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->tagSet->tagKey($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->tagSet->getNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
