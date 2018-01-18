<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsWritable;

class IsWritableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsWritable
*/
protected $isWritable;

public function setUp()
{
    parent::setUp();

    $this->isWritable = new \PHPUnit\Framework\Constraint\IsWritable();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isWritable->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
