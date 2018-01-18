<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Mockery as m;

class HandleExceptionsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\HandleExceptions
*/
protected $handleExceptions;

public function setUp()
{
    parent::setUp();

    $this->handleExceptions = new \Illuminate\Foundation\Bootstrap\HandleExceptions();
}

public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$app->environment('testing')) == false (line 40)

    $actual = $this->handleExceptions->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap1()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$app->environment('testing')) == true (line 40)

    $actual = $this->handleExceptions->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError0()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (error_reporting() & $level) == false (line 59)

    $actual = $this->handleExceptions->handleError($level, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \ErrorException
 */
public function testHandleError1()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (error_reporting() & $level) == true (line 59)
    // throw new \ErrorException($message, 0, $level, $file, $line) -> exception (line 60)

    $actual = $this->handleExceptions->handleError($level, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandleException0()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == false (line 76)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException1()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == false (line 76)
    // if ($this->app->runningInConsole()) == false (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException2()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == false (line 76)
    // if ($this->app->runningInConsole()) == true (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException3()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == false (line 76)
    // if ($this->app->runningInConsole()) == false (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException4()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == false (line 76)
    // if ($this->app->runningInConsole()) == true (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandleException5()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == true (line 76)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException6()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == true (line 76)
    // if ($this->app->runningInConsole()) == false (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException7()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == true (line 76)
    // if ($this->app->runningInConsole()) == true (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException8()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == true (line 76)
    // if ($this->app->runningInConsole()) == false (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException9()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Exception) == true (line 76)
    // if ($this->app->runningInConsole()) == true (line 86)

    $actual = $this->handleExceptions->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleShutdown0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($error = error_get_last()) && $this->isFatal($error['type'])) == false (line 122)

    $actual = $this->handleExceptions->handleShutdown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleShutdown1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($error = error_get_last()) && $this->isFatal($error['type'])) == true (line 122)

    $actual = $this->handleExceptions->handleShutdown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
