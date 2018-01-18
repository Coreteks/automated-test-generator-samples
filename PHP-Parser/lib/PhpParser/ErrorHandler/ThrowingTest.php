<?php

namespace tests\PhpParser\ErrorHandler;

use Mockery as m;
use PhpParser\ErrorHandler\Throwing;

class ThrowingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\ErrorHandler\Throwing
*/
protected $throwing;

public function setUp()
{
    parent::setUp();

    $this->throwing = new \PhpParser\ErrorHandler\Throwing();
}

/**
 * @expectedException \Exception
 */
public function testHandleError0()
{
    $error = m::mock(\PhpParser\Error::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw $error -> exception (line 16)

    $actual = $this->throwing->handleError($error);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
