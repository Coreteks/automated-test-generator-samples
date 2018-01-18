<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ClassHasAttribute;

class ClassHasAttributeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_attributeName = null;
/**
* @var \PHPUnit\Framework\Constraint\ClassHasAttribute
*/
protected $classHasAttribute;

public function setUp()
{
    parent::setUp();

    $this->_attributeName = null;
    $this->classHasAttribute = new \PHPUnit\Framework\Constraint\ClassHasAttribute($this->_attributeName);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->classHasAttribute->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
