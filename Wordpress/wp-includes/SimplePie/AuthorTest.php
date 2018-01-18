<?php

namespace tests;

use Mockery as m;
use SimplePie_Author;

class SimplePie_AuthorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_link = null;
/**
* @var mixed
*/
protected $_email = null;
/**
* @var \SimplePie_Author
*/
protected $simplePie_Author;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_link = null;
    $this->_email = null;
    $this->simplePie_Author = new \SimplePie_Author($this->_name, $this->_link, $this->_email);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Author->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_name0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->name !== \null) == false (line 113)

    $actual = $this->simplePie_Author->get_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_name1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->name !== \null) == true (line 113)

    $actual = $this->simplePie_Author->get_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_link0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->link !== \null) == false (line 130)

    $actual = $this->simplePie_Author->get_link();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_link1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->link !== \null) == true (line 130)

    $actual = $this->simplePie_Author->get_link();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_email0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->email !== \null) == false (line 147)

    $actual = $this->simplePie_Author->get_email();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_email1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->email !== \null) == true (line 147)

    $actual = $this->simplePie_Author->get_email();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
