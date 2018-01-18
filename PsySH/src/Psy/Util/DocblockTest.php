<?php

namespace tests\Psy\Util;

use Mockery as m;
use Psy\Util\Docblock;
use Reflector;

class DocblockTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_reflector;
/**
* @var \Psy\Util\Docblock
*/
protected $docblock;

public function setUp()
{
    parent::setUp();

    $this->_reflector = m::mock(\Reflector::class);
    $this->docblock = new \Psy\Util\Docblock($this->_reflector);
}

public function testHasTag0()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    $actual = $this->docblock->hasTag($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag0()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    $actual = $this->docblock->tag($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsTagged0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->docblock->isTagged($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStrTag0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^@[a-z0-9_]+/', $str, $matches)) == false (line 237)

    $actual = $this->docblock->strTag($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStrTag1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^@[a-z0-9_]+/', $str, $matches)) == true (line 237)

    $actual = $this->docblock->strTag($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
