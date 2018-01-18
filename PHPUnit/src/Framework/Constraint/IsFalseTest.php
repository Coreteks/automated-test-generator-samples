<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsFalse;

class IsFalseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsFalse
*/
protected $isFalse;

public function setUp()
{
    parent::setUp();

    $this->isFalse = new \PHPUnit\Framework\Constraint\IsFalse();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isFalse->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
