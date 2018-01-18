<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\Parameter;
use ReflectionParameter;

class ParameterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_rfp;
/**
* @var \Mockery\Generator\Parameter
*/
protected $parameter;

public function setUp()
{
    parent::setUp();

    $this->_rfp = m::mock(\ReflectionParameter::class);
    $this->parameter = new \Mockery\Generator\Parameter($this->_rfp);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->parameter->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClass0()
{
    // TODO: Your mock expectations here

    $actual = $this->parameter->getClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == false (line 66)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == false (line 80)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == false (line 66)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == false (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == false (line 66)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == true (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == false (line 66)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == true (line 76)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetTypeHintAsString4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) -> exception (line 68)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) -> exception (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == false (line 80)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) -> exception (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == false (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) -> exception (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == true (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) -> exception (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == true (line 76)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == false (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == false (line 80)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == false (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == false (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == false (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == true (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == false (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == true (line 76)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetTypeHintAsString13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == true (line 68)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == true (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == false (line 80)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == true (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == false (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == true (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == false (line 76)
    // if (preg_match('/^Parameter #[0-9]+ \\[ \<(required|optional)\\> (?<typehint>\\S+ )?.*\\$' . $this->rfp->getName() . ' .*\\]$/', $this->rfp->__toString(), $typehintMatch)) == true (line 80)
    // if (!empty($typehintMatch['typehint'])) == true (line 81)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == true (line 68)
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->rfp->hasType()) == true (line 76)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == false (line 58)
    // if (version_compare(PHP_VERSION, '5.4.1') >= 0) == true (line 66)
    // if ($this->rfp->getClass()) == true (line 68)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == false (line 46)
    // if ($this->rfp->isArray()) == true (line 58)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == true (line 46)
    // if (in_array($typehint, array('int', 'integer', 'float', 'string', 'bool', 'boolean'))) == false (line 51)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypeHintAsString21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->rfp, 'getTypehintText')) == true (line 46)
    // if (in_array($typehint, array('int', 'integer', 'float', 'string', 'bool', 'boolean'))) == true (line 51)

    $actual = $this->parameter->getTypeHintAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name || $name == '...') == false (line 95)

    $actual = $this->parameter->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name || $name == '...') == true (line 95)

    $actual = $this->parameter->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsVariadic0()
{
    // TODO: Your mock expectations here

    $actual = $this->parameter->isVariadic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
