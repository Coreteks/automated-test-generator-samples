<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsEmpty;

class IsEmptyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsEmpty
*/
protected $isEmpty;

public function setUp()
{
    parent::setUp();

    $this->isEmpty = new \PHPUnit\Framework\Constraint\IsEmpty();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isEmpty->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
