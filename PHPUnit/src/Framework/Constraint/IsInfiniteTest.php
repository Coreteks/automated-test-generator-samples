<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsInfinite;

class IsInfiniteTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsInfinite
*/
protected $isInfinite;

public function setUp()
{
    parent::setUp();

    $this->isInfinite = new \PHPUnit\Framework\Constraint\IsInfinite();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isInfinite->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
