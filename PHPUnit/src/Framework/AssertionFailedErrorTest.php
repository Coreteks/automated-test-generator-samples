<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\AssertionFailedError;

class AssertionFailedErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\AssertionFailedError
*/
protected $assertionFailedError;

public function setUp()
{
    parent::setUp();

    $this->assertionFailedError = new \PHPUnit\Framework\AssertionFailedError();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->assertionFailedError->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
