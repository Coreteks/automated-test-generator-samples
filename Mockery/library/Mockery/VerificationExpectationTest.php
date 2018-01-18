<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\VerificationExpectation;

class VerificationExpectationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\VerificationExpectation
*/
protected $verificationExpectation;

public function setUp()
{
    parent::setUp();

    $this->verificationExpectation = new \Mockery\VerificationExpectation();
}

public function testClearCountValidators0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationExpectation->clearCountValidators();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationExpectation->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
