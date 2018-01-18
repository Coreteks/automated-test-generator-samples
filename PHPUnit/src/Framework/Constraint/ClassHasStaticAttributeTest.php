<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ClassHasStaticAttribute;

class ClassHasStaticAttributeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\ClassHasStaticAttribute
*/
protected $classHasStaticAttribute;

public function setUp()
{
    parent::setUp();

    $this->classHasStaticAttribute = new \PHPUnit\Framework\Constraint\ClassHasStaticAttribute();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->classHasStaticAttribute->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
