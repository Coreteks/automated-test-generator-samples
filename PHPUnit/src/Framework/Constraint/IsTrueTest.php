<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsTrue;

class IsTrueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsTrue
*/
protected $isTrue;

public function setUp()
{
    parent::setUp();

    $this->isTrue = new \PHPUnit\Framework\Constraint\IsTrue();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isTrue->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
