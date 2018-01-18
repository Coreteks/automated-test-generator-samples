<?php

namespace tests\PhpParser\ErrorHandler;

use Mockery as m;
use PhpParser\ErrorHandler\Collecting;

class CollectingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\ErrorHandler\Collecting
*/
protected $collecting;

public function setUp()
{
    parent::setUp();

    $this->collecting = new \PhpParser\ErrorHandler\Collecting();
}

public function testHandleError0()
{
    $error = m::mock(\PhpParser\Error::class);

    // TODO: Your mock expectations here

    $actual = $this->collecting->handleError($error);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->collecting->getErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->collecting->hasErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClearErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->collecting->clearErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
