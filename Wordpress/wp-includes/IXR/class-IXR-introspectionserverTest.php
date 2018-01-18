<?php

namespace tests;

use IXR_IntrospectionServer;
use Mockery as m;

class IXR_IntrospectionServerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \IXR_IntrospectionServer
*/
protected $iXR_IntrospectionServer;

public function setUp()
{
    parent::setUp();

    $this->iXR_IntrospectionServer = new \IXR_IntrospectionServer();
}

public function testIXR_IntrospectionServer0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_IntrospectionServer->IXR_IntrospectionServer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCallback0()
{
    $method = m::mock('UntypedParameter_method_');
    $callback = m::mock('UntypedParameter_callback_');
    $args = m::mock('UntypedParameter_args_');
    $help = m::mock('UntypedParameter_help_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_IntrospectionServer->addCallback($method, $callback, $args, $help);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall1()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == false (line 116)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall2()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == false (line 116)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall3()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall4()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall5()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall6()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall7()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall8()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall9()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall10()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall11()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall12()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall13()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall14()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall15()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall16()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall17()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall18()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall19()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == false (line 105)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall20()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == false (line 105)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall21()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == true (line 105)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall22()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == true (line 105)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall23()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall24()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall25()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall26()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall27()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall28()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall29()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall30()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall31()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall32()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall33()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall34()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall35()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall36()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall37()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall38()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall39()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == true (line 81)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall40()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == false (line 68)
    // if (!$this->hasMethod($methodname)) == true (line 73)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall41()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall42()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == false (line 116)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall43()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == false (line 116)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall44()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall45()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall46()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall47()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == false (line 115)
    // Case 'dateTime.iso8601' == true (line 116)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall48()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall49()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == false (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall50()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall51()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == false (line 110)
    // Case 'date' == true (line 115)
    // if (!\is_a($arg, 'IXR_Date')) == true (line 117)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall52()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall53()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall54()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall55()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == false (line 109)
    // Case 'double' == true (line 110)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall56()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall57()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == false (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall58()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall59()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == false (line 104)
    // Case 'float' == true (line 109)
    // if (!\is_float($arg)) == true (line 111)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall60()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == false (line 105)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall61()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == false (line 105)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall62()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == true (line 105)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall63()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == false (line 99)
    // Case 'boolean' == true (line 104)
    // if ($arg !== \false && $arg !== \true) == true (line 105)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall64()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall65()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall66()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall67()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == false (line 98)
    // Case 'string' == true (line 99)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall68()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall69()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == false (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall70()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall71()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == false (line 93)
    // Case 'base64' == true (line 98)
    // if (!\is_string($arg)) == true (line 100)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall72()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall73()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall74()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall75()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == false (line 92)
    // Case 'i4' == true (line 93)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall76()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall77()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == false (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall78()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == false (line 122)
    // for (...) == false (line 88)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall79()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == false (line 81)
    // for (...) == true (line 88)
    // switch ($type) (line 91)
    // Case 'int' == true (line 92)
    // if (\is_array($arg) || !\is_int($arg)) == true (line 94)
    // if (!$ok) == true (line 122)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall80()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == false (line 73)
    // if (\count($args) != \count($signature)) == true (line 81)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall81()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($args && !\is_array($args)) == true (line 68)
    // if (!$this->hasMethod($methodname)) == true (line 73)

    $actual = $this->iXR_IntrospectionServer->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature1()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == false (line 147)
    // Case 'dateTime.iso8601' == false (line 150)
    // Case 'boolean' == false (line 153)
    // Case 'base64' == false (line 156)
    // Case 'array' == false (line 159)
    // Case 'struct' == false (line 162)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature2()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == false (line 147)
    // Case 'dateTime.iso8601' == false (line 150)
    // Case 'boolean' == false (line 153)
    // Case 'base64' == false (line 156)
    // Case 'array' == false (line 159)
    // Case 'struct' == true (line 162)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature3()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == false (line 147)
    // Case 'dateTime.iso8601' == false (line 150)
    // Case 'boolean' == false (line 153)
    // Case 'base64' == false (line 156)
    // Case 'array' == true (line 159)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature4()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == false (line 147)
    // Case 'dateTime.iso8601' == false (line 150)
    // Case 'boolean' == false (line 153)
    // Case 'base64' == true (line 156)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature5()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == false (line 147)
    // Case 'dateTime.iso8601' == false (line 150)
    // Case 'boolean' == true (line 153)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature6()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == false (line 147)
    // Case 'dateTime.iso8601' == true (line 150)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature7()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == false (line 144)
    // Case 'double' == true (line 147)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature8()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == false (line 143)
    // Case 'i4' == true (line 144)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature9()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == false (line 140)
    // Case 'int' == true (line 143)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature10()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == false (line 132)
    // switch ($type) (line 139)
    // Case 'string' == true (line 140)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature11()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($method)) == true (line 132)

    $actual = $this->iXR_IntrospectionServer->methodSignature($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodHelp0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_IntrospectionServer->methodHelp($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
