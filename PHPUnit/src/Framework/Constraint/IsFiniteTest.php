<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsFinite;

class IsFiniteTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsFinite
*/
protected $isFinite;

public function setUp()
{
    parent::setUp();

    $this->isFinite = new \PHPUnit\Framework\Constraint\IsFinite();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isFinite->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
