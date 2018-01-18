<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\Attribute;
use PHPUnit\Framework\Constraint\Constraint;

class AttributeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_constraint;
/**
* @var mixed
*/
protected $_attributeName = null;
/**
* @var \PHPUnit\Framework\Constraint\Attribute
*/
protected $attribute;

public function setUp()
{
    parent::setUp();

    $this->_constraint = m::mock(\PHPUnit\Framework\Constraint\Constraint::class);
    $this->_attributeName = null;
    $this->attribute = new \PHPUnit\Framework\Constraint\Attribute($this->_constraint, $this->_attributeName);
}

public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    $actual = $this->attribute->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->attribute->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
