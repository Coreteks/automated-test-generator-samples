<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsNull;

class IsNullTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsNull
*/
protected $isNull;

public function setUp()
{
    parent::setUp();

    $this->isNull = new \PHPUnit\Framework\Constraint\IsNull();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isNull->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
