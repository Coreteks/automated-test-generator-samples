<?php

namespace tests\PHPUnit\Util\TestDox;

use Mockery as m;
use PHPUnit\Util\TestDox\NamePrettifier;

class NamePrettifierTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\TestDox\NamePrettifier
*/
protected $namePrettifier;

public function setUp()
{
    parent::setUp();

    $this->namePrettifier = new \PHPUnit\Util\TestDox\NamePrettifier();
}

public function testPrettifyTestClass0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == false (line 34)
    // if (\strpos($name, 'Test') === 0) == false (line 38)
    // if ($title[0] === '\\') == false (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == false (line 34)
    // if (\strpos($name, 'Test') === 0) == false (line 38)
    // if ($title[0] === '\\') == true (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == false (line 34)
    // if (\strpos($name, 'Test') === 0) == true (line 38)
    // if ($title[0] === '\\') == false (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == false (line 34)
    // if (\strpos($name, 'Test') === 0) == true (line 38)
    // if ($title[0] === '\\') == true (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == true (line 34)
    // if (\strpos($name, 'Test') === 0) == false (line 38)
    // if ($title[0] === '\\') == false (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == true (line 34)
    // if (\strpos($name, 'Test') === 0) == false (line 38)
    // if ($title[0] === '\\') == true (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == true (line 34)
    // if (\strpos($name, 'Test') === 0) == true (line 38)
    // if ($title[0] === '\\') == false (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestClass7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($name, -1 * \strlen('Test')) === 'Test') == true (line 34)
    // if (\strpos($name, 'Test') === 0) == true (line 38)
    // if ($title[0] === '\\') == true (line 42)

    $actual = $this->namePrettifier->prettifyTestClass($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == true (line 90)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == true (line 82)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == true (line 76)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod10()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod11()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod12()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod13()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == true (line 90)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod14()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == true (line 82)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod15()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == false (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == true (line 76)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod16()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod17()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod18()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod19()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod20()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod21()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == true (line 90)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod22()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == true (line 82)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod23()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == true (line 76)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod24()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod25()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod26()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod27()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod28()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod29()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == true (line 90)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod30()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == true (line 82)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod31()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == false (line 66)
    // if ($count === 0) == true (line 68)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == true (line 76)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod32()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod33()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod34()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod35()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod36()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod37()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == true (line 90)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod38()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == true (line 82)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod39()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == false (line 72)
    // if ($name === '') == true (line 76)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod40()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod41()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod42()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == false (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod43()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == false (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod44()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == false (line 90)
    // if (!$wasNumeric && $isNumeric) == true (line 95)
    // if ($wasNumeric && !$isNumeric) == true (line 100)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod45()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == false (line 82)
    // for (...) == true (line 89)
    // if ($i > 0 && \ord($name[$i]) >= 65 && \ord($name[$i]) <= 90) == true (line 90)
    // for (...) == false (line 89)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod46()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == false (line 76)
    // if (\strpos($name, '_') !== false) == true (line 82)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod47()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == false (line 60)
    // if (\in_array($string, $this->strings)) == true (line 66)
    // if (\strpos($name, 'test') === 0) == true (line 72)
    // if ($name === '') == true (line 76)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrettifyTestMethod48()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_string($name) || $name === '') == true (line 60)

    $actual = $this->namePrettifier->prettifyTestMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
