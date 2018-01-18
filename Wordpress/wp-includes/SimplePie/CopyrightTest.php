<?php

namespace tests;

use Mockery as m;
use SimplePie_Copyright;

class SimplePie_CopyrightTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_url = null;
/**
* @var mixed
*/
protected $_label = null;
/**
* @var \SimplePie_Copyright
*/
protected $simplePie_Copyright;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_label = null;
    $this->simplePie_Copyright = new \SimplePie_Copyright($this->_url, $this->_label);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Copyright->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_url0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->url !== \null) == false (line 103)

    $actual = $this->simplePie_Copyright->get_url();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_url1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->url !== \null) == true (line 103)

    $actual = $this->simplePie_Copyright->get_url();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_attribution0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->label !== \null) == false (line 120)

    $actual = $this->simplePie_Copyright->get_attribution();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_attribution1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->label !== \null) == true (line 120)

    $actual = $this->simplePie_Copyright->get_attribution();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
