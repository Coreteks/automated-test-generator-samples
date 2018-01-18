<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\JsonMatchesErrorMessageProvider;

class JsonMatchesErrorMessageProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\JsonMatchesErrorMessageProvider
*/
protected $jsonMatchesErrorMessageProvider;

public function setUp()
{
    parent::setUp();

    $this->jsonMatchesErrorMessageProvider = new \PHPUnit\Framework\Constraint\JsonMatchesErrorMessageProvider();
}

public function testDetermineJsonError0()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == false (line 29)
    // Case JSON_ERROR_DEPTH == false (line 31)
    // Case JSON_ERROR_STATE_MISMATCH == false (line 33)
    // Case JSON_ERROR_CTRL_CHAR == false (line 35)
    // Case JSON_ERROR_SYNTAX == false (line 37)
    // Case JSON_ERROR_UTF8 == false (line 39)
    // Default (line 41)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetermineJsonError1()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == false (line 29)
    // Case JSON_ERROR_DEPTH == false (line 31)
    // Case JSON_ERROR_STATE_MISMATCH == false (line 33)
    // Case JSON_ERROR_CTRL_CHAR == false (line 35)
    // Case JSON_ERROR_SYNTAX == false (line 37)
    // Case JSON_ERROR_UTF8 == true (line 39)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetermineJsonError2()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == false (line 29)
    // Case JSON_ERROR_DEPTH == false (line 31)
    // Case JSON_ERROR_STATE_MISMATCH == false (line 33)
    // Case JSON_ERROR_CTRL_CHAR == false (line 35)
    // Case JSON_ERROR_SYNTAX == true (line 37)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetermineJsonError3()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == false (line 29)
    // Case JSON_ERROR_DEPTH == false (line 31)
    // Case JSON_ERROR_STATE_MISMATCH == false (line 33)
    // Case JSON_ERROR_CTRL_CHAR == true (line 35)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetermineJsonError4()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == false (line 29)
    // Case JSON_ERROR_DEPTH == false (line 31)
    // Case JSON_ERROR_STATE_MISMATCH == true (line 33)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetermineJsonError5()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == false (line 29)
    // Case JSON_ERROR_DEPTH == true (line 31)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetermineJsonError6()
{
    $error = m::mock('UntypedParameter_error_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($error) (line 28)
    // Case JSON_ERROR_NONE == true (line 29)

    $actual = $this->jsonMatchesErrorMessageProvider->determineJsonError($error, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslateTypeToPrefix0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower($type)) (line 55)
    // Case 'expected' == false (line 56)
    // Case 'actual' == false (line 60)
    // Default (line 64)

    $actual = $this->jsonMatchesErrorMessageProvider->translateTypeToPrefix($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslateTypeToPrefix1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower($type)) (line 55)
    // Case 'expected' == false (line 56)
    // Case 'actual' == true (line 60)

    $actual = $this->jsonMatchesErrorMessageProvider->translateTypeToPrefix($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslateTypeToPrefix2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower($type)) (line 55)
    // Case 'expected' == true (line 56)

    $actual = $this->jsonMatchesErrorMessageProvider->translateTypeToPrefix($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
