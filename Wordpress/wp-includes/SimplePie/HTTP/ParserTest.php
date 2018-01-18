<?php

namespace tests;

use Mockery as m;
use SimplePie_HTTP_Parser;

class SimplePie_HTTP_ParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \SimplePie_HTTP_Parser
*/
protected $simplePie_HTTP_Parser;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->simplePie_HTTP_Parser = new \SimplePie_HTTP_Parser($this->_data);
}

public function testParse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 149)
    // if ($this->state === 'emit' || $this->state === 'body') == false (line 155)

    $actual = $this->simplePie_HTTP_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 149)
    // if ($this->state === 'emit' || $this->state === 'body') == true (line 155)

    $actual = $this->simplePie_HTTP_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == true (line 149)
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 149)
    // if ($this->state === 'emit' || $this->state === 'body') == false (line 155)

    $actual = $this->simplePie_HTTP_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == true (line 149)
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 149)
    // if ($this->state === 'emit' || $this->state === 'body') == true (line 155)

    $actual = $this->simplePie_HTTP_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
