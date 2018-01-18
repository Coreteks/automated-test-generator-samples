<?php

namespace tests\Symfony\Bridge\PhpUnit;

use Mockery as m;
use Symfony\Bridge\PhpUnit\DeprecationErrorHandler;

class DeprecationErrorHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\DeprecationErrorHandler
*/
protected $deprecationErrorHandler;

public function setUp()
{
    parent::setUp();

    $this->deprecationErrorHandler = new \Symfony\Bridge\PhpUnit\DeprecationErrorHandler();
}

public function testRegister0()
{
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$isRegistered) == false (line 42)
    // if (null !== $oldErrorHandler) == false (line 179)
    // if (self::hasColorSupport()) == false (line 187)

    $actual = $this->deprecationErrorHandler->register($mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$isRegistered) == false (line 42)
    // if (null !== $oldErrorHandler) == false (line 179)
    // if (self::hasColorSupport()) == true (line 187)

    $actual = $this->deprecationErrorHandler->register($mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$isRegistered) == false (line 42)
    // if (null !== $oldErrorHandler) == true (line 179)
    // if (array($UtilPrefix . 'ErrorHandler', 'handleError') === $oldErrorHandler) == false (line 181)

    $actual = $this->deprecationErrorHandler->register($mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$isRegistered) == false (line 42)
    // if (null !== $oldErrorHandler) == true (line 179)
    // if (array($UtilPrefix . 'ErrorHandler', 'handleError') === $oldErrorHandler) == true (line 181)

    $actual = $this->deprecationErrorHandler->register($mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister4()
{
    $mode = m::mock('UntypedParameter_mode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$isRegistered) == true (line 42)

    $actual = $this->deprecationErrorHandler->register($mode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollectDeprecations0()
{
    $outputFile = m::mock('UntypedParameter_outputFile_');

    // TODO: Your mock expectations here

    $actual = $this->deprecationErrorHandler->collectDeprecations($outputFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
