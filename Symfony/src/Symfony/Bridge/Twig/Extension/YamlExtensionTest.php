<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\YamlExtension;

class YamlExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Extension\YamlExtension
*/
protected $yamlExtension;

public function setUp()
{
    parent::setUp();

    $this->yamlExtension = new \Symfony\Bridge\Twig\Extension\YamlExtension();
}

public function testGetFilters0()
{
    // TODO: Your mock expectations here

    $actual = $this->yamlExtension->getFilters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode0()
{
    $input = m::mock('UntypedParameter_input_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $dumper) == false (line 41)
    // if (defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) == false (line 45)

    $actual = $this->yamlExtension->encode($input, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode1()
{
    $input = m::mock('UntypedParameter_input_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $dumper) == false (line 41)
    // if (defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) == true (line 45)

    $actual = $this->yamlExtension->encode($input, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode2()
{
    $input = m::mock('UntypedParameter_input_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $dumper) == true (line 41)
    // if (defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) == false (line 45)

    $actual = $this->yamlExtension->encode($input, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode3()
{
    $input = m::mock('UntypedParameter_input_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $dumper) == true (line 41)
    // if (defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) == true (line 45)

    $actual = $this->yamlExtension->encode($input, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump0()
{
    $value = m::mock('UntypedParameter_value_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($value)) == false (line 54)
    // if (is_array($value) || is_object($value)) == false (line 58)

    $actual = $this->yamlExtension->dump($value, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump1()
{
    $value = m::mock('UntypedParameter_value_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($value)) == false (line 54)
    // if (is_array($value) || is_object($value)) == true (line 58)

    $actual = $this->yamlExtension->dump($value, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump2()
{
    $value = m::mock('UntypedParameter_value_');
    $inline = m::mock('UntypedParameter_inline_');
    $dumpObjects = m::mock('UntypedParameter_dumpObjects_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($value)) == true (line 54)

    $actual = $this->yamlExtension->dump($value, $inline, $dumpObjects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->yamlExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
