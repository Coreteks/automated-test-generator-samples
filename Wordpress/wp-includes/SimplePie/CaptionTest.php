<?php

namespace tests;

use Mockery as m;
use SimplePie_Caption;

class SimplePie_CaptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_lang = null;
/**
* @var mixed
*/
protected $_startTime = null;
/**
* @var mixed
*/
protected $_endTime = null;
/**
* @var mixed
*/
protected $_text = null;
/**
* @var \SimplePie_Caption
*/
protected $simplePie_Caption;

public function setUp()
{
    parent::setUp();

    $this->_type = null;
    $this->_lang = null;
    $this->_startTime = null;
    $this->_endTime = null;
    $this->_text = null;
    $this->simplePie_Caption = new \SimplePie_Caption($this->_type, $this->_lang, $this->_startTime, $this->_endTime, $this->_text);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Caption->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_endtime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->endTime !== \null) == false (line 131)

    $actual = $this->simplePie_Caption->get_endtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_endtime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->endTime !== \null) == true (line 131)

    $actual = $this->simplePie_Caption->get_endtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_language0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->lang !== \null) == false (line 149)

    $actual = $this->simplePie_Caption->get_language();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_language1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->lang !== \null) == true (line 149)

    $actual = $this->simplePie_Caption->get_language();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_starttime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->startTime !== \null) == false (line 166)

    $actual = $this->simplePie_Caption->get_starttime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_starttime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->startTime !== \null) == true (line 166)

    $actual = $this->simplePie_Caption->get_starttime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_text0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->text !== \null) == false (line 183)

    $actual = $this->simplePie_Caption->get_text();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_text1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->text !== \null) == true (line 183)

    $actual = $this->simplePie_Caption->get_text();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->type !== \null) == false (line 200)

    $actual = $this->simplePie_Caption->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->type !== \null) == true (line 200)

    $actual = $this->simplePie_Caption->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
