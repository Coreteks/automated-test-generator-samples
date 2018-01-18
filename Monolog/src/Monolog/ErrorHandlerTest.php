<?php

namespace tests\Monolog;

use Mockery as m;
use Monolog\ErrorHandler;
use Psr\Log\LoggerInterface;

class ErrorHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var \Monolog\ErrorHandler
*/
protected $errorHandler;

public function setUp()
{
    parent::setUp();

    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->errorHandler = new \Monolog\ErrorHandler($this->_logger);
}

public function testRegister0()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == false (line 64)
    // if ($exceptionLevelMap !== false) == false (line 67)
    // if ($fatalLevel !== false) == false (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == false (line 64)
    // if ($exceptionLevelMap !== false) == false (line 67)
    // if ($fatalLevel !== false) == true (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == false (line 64)
    // if ($exceptionLevelMap !== false) == true (line 67)
    // if ($fatalLevel !== false) == false (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == false (line 64)
    // if ($exceptionLevelMap !== false) == true (line 67)
    // if ($fatalLevel !== false) == true (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister4()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == true (line 64)
    // if ($exceptionLevelMap !== false) == false (line 67)
    // if ($fatalLevel !== false) == false (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister5()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == true (line 64)
    // if ($exceptionLevelMap !== false) == false (line 67)
    // if ($fatalLevel !== false) == true (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister6()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == true (line 64)
    // if ($exceptionLevelMap !== false) == true (line 67)
    // if ($fatalLevel !== false) == false (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister7()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $errorLevelMap = m::mock('UntypedParameter_errorLevelMap_');
    $exceptionLevelMap = m::mock('UntypedParameter_exceptionLevelMap_');
    $fatalLevel = m::mock('UntypedParameter_fatalLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errorLevelMap !== false) == true (line 64)
    // if ($exceptionLevelMap !== false) == true (line 67)
    // if ($fatalLevel !== false) == true (line 70)

    $actual = $this->errorHandler->register($logger, $errorLevelMap, $exceptionLevelMap, $fatalLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterExceptionHandler0()
{
    $levelMap = m::mock('UntypedParameter_levelMap_');
    $callPrevious = m::mock('UntypedParameter_callPrevious_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callPrevious && $prev) == false (line 86)

    $actual = $this->errorHandler->registerExceptionHandler($levelMap, $callPrevious);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterExceptionHandler1()
{
    $levelMap = m::mock('UntypedParameter_levelMap_');
    $callPrevious = m::mock('UntypedParameter_callPrevious_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callPrevious && $prev) == true (line 86)

    $actual = $this->errorHandler->registerExceptionHandler($levelMap, $callPrevious);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterExceptionHandler2()
{
    $levelMap = m::mock('UntypedParameter_levelMap_');
    $callPrevious = m::mock('UntypedParameter_callPrevious_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uncaughtExceptionLevelMap[$class])) == false (line 82)
    // if ($callPrevious && $prev) == false (line 86)

    $actual = $this->errorHandler->registerExceptionHandler($levelMap, $callPrevious);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterExceptionHandler3()
{
    $levelMap = m::mock('UntypedParameter_levelMap_');
    $callPrevious = m::mock('UntypedParameter_callPrevious_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uncaughtExceptionLevelMap[$class])) == false (line 82)
    // if ($callPrevious && $prev) == true (line 86)

    $actual = $this->errorHandler->registerExceptionHandler($levelMap, $callPrevious);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterExceptionHandler4()
{
    $levelMap = m::mock('UntypedParameter_levelMap_');
    $callPrevious = m::mock('UntypedParameter_callPrevious_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uncaughtExceptionLevelMap[$class])) == true (line 82)
    // if ($callPrevious && $prev) == false (line 86)

    $actual = $this->errorHandler->registerExceptionHandler($levelMap, $callPrevious);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterExceptionHandler5()
{
    $levelMap = m::mock('UntypedParameter_levelMap_');
    $callPrevious = m::mock('UntypedParameter_callPrevious_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uncaughtExceptionLevelMap[$class])) == true (line 82)
    // if ($callPrevious && $prev) == true (line 86)

    $actual = $this->errorHandler->registerExceptionHandler($levelMap, $callPrevious);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterErrorHandler0()
{
    $levelMap = [];
    $callPrevious = m::mock('UntypedParameter_callPrevious_');
    $errorTypes = m::mock('UntypedParameter_errorTypes_');
    $handleOnlyReportedErrors = m::mock('UntypedParameter_handleOnlyReportedErrors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callPrevious) == false (line 97)

    $actual = $this->errorHandler->registerErrorHandler($levelMap, $callPrevious, $errorTypes, $handleOnlyReportedErrors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterErrorHandler1()
{
    $levelMap = [];
    $callPrevious = m::mock('UntypedParameter_callPrevious_');
    $errorTypes = m::mock('UntypedParameter_errorTypes_');
    $handleOnlyReportedErrors = m::mock('UntypedParameter_handleOnlyReportedErrors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callPrevious) == true (line 97)

    $actual = $this->errorHandler->registerErrorHandler($levelMap, $callPrevious, $errorTypes, $handleOnlyReportedErrors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterFatalHandler0()
{
    $level = m::mock('UntypedParameter_level_');
    $reservedMemorySize = m::mock('UntypedParameter_reservedMemorySize_');

    // TODO: Your mock expectations here

    $actual = $this->errorHandler->registerFatalHandler($level, $reservedMemorySize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException0()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->previousExceptionHandler) == false (line 165)

    $actual = $this->errorHandler->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException1()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->previousExceptionHandler) == true (line 165)

    $actual = $this->errorHandler->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException2()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof $class) == false (line 153)
    // if ($this->previousExceptionHandler) == false (line 165)

    $actual = $this->errorHandler->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException3()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof $class) == false (line 153)
    // if ($this->previousExceptionHandler) == true (line 165)

    $actual = $this->errorHandler->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException4()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof $class) == true (line 153)
    // if ($this->previousExceptionHandler) == false (line 165)

    $actual = $this->errorHandler->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleException5()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof $class) == true (line 153)
    // if ($this->previousExceptionHandler) == true (line 165)

    $actual = $this->errorHandler->handleException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError0()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == false (line 177)
    // if (!$this->hasFatalErrorHandler || !in_array($code, self::$fatalErrors, true)) == false (line 182)
    // if ($this->previousErrorHandler === true) == false (line 187)
    // if ($this->previousErrorHandler) == false (line 189)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError1()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == false (line 177)
    // if (!$this->hasFatalErrorHandler || !in_array($code, self::$fatalErrors, true)) == false (line 182)
    // if ($this->previousErrorHandler === true) == false (line 187)
    // if ($this->previousErrorHandler) == true (line 189)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError2()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == false (line 177)
    // if (!$this->hasFatalErrorHandler || !in_array($code, self::$fatalErrors, true)) == false (line 182)
    // if ($this->previousErrorHandler === true) == true (line 187)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError3()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == false (line 177)
    // if (!$this->hasFatalErrorHandler || !in_array($code, self::$fatalErrors, true)) == true (line 182)
    // if ($this->previousErrorHandler === true) == false (line 187)
    // if ($this->previousErrorHandler) == false (line 189)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError4()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == false (line 177)
    // if (!$this->hasFatalErrorHandler || !in_array($code, self::$fatalErrors, true)) == true (line 182)
    // if ($this->previousErrorHandler === true) == false (line 187)
    // if ($this->previousErrorHandler) == true (line 189)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError5()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == false (line 177)
    // if (!$this->hasFatalErrorHandler || !in_array($code, self::$fatalErrors, true)) == true (line 182)
    // if ($this->previousErrorHandler === true) == true (line 187)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError6()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handleOnlyReportedErrors && !(error_reporting() & $code)) == true (line 177)

    $actual = $this->errorHandler->handleError($code, $message, $file, $line, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleFatalError0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($lastError && in_array($lastError['type'], self::$fatalErrors, true)) == false (line 202)

    $actual = $this->errorHandler->handleFatalError();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleFatalError1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($lastError && in_array($lastError['type'], self::$fatalErrors, true)) == true (line 202)
    // if ($this->logger instanceof \Monolog\Logger) == false (line 209)

    $actual = $this->errorHandler->handleFatalError();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleFatalError2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($lastError && in_array($lastError['type'], self::$fatalErrors, true)) == true (line 202)
    // if ($this->logger instanceof \Monolog\Logger) == true (line 209)

    $actual = $this->errorHandler->handleFatalError();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleFatalError3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($lastError && in_array($lastError['type'], self::$fatalErrors, true)) == true (line 202)
    // if ($this->logger instanceof \Monolog\Logger) == true (line 209)

    $actual = $this->errorHandler->handleFatalError();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
