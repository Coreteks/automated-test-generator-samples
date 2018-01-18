<?php

namespace tests\Mockery\Exception;

use Mockery as m;
use Mockery\Exception\BadMethodCallException;

class BadMethodCallExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception\BadMethodCallException
*/
protected $badMethodCallException;

public function setUp()
{
    parent::setUp();

    $this->badMethodCallException = new \Mockery\Exception\BadMethodCallException();
}

public function testDismiss0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getPrevious() && $this->getPrevious() instanceof \Mockery\Exception\BadMethodCallException) == false (line 14)

    $actual = $this->badMethodCallException->dismiss();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDismiss1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getPrevious() && $this->getPrevious() instanceof \Mockery\Exception\BadMethodCallException) == true (line 14)

    $actual = $this->badMethodCallException->dismiss();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDismissed0()
{
    // TODO: Your mock expectations here

    $actual = $this->badMethodCallException->dismissed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
