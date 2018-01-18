<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsReadable;

class IsReadableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsReadable
*/
protected $isReadable;

public function setUp()
{
    parent::setUp();

    $this->isReadable = new \PHPUnit\Framework\Constraint\IsReadable();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isReadable->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
