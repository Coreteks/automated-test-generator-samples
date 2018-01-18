<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsNan;

class IsNanTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsNan
*/
protected $isNan;

public function setUp()
{
    parent::setUp();

    $this->isNan = new \PHPUnit\Framework\Constraint\IsNan();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isNan->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
