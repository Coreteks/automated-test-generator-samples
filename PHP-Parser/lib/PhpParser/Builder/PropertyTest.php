<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Property;

class PropertyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Property
*/
protected $property;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->property = new \PhpParser\Builder\Property($this->_name);
}

public function testMakePublic0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->makePublic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeProtected0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->makeProtected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakePrivate0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->makePrivate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeStatic0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->makeStatic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefault0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->property->setDefault($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDocComment0()
{
    $docComment = m::mock('UntypedParameter_docComment_');

    // TODO: Your mock expectations here

    $actual = $this->property->setDocComment($docComment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
