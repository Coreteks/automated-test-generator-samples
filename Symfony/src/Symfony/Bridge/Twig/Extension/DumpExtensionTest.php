<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\DumpExtension;
use Symfony\Component\VarDumper\Cloner\ClonerInterface;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

class DumpExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cloner;
/**
* @var \Mockery\MockInterface
*/
protected $_dumper;
/**
* @var \Symfony\Bridge\Twig\Extension\DumpExtension
*/
protected $dumpExtension;

public function setUp()
{
    parent::setUp();

    $this->_cloner = m::mock(\Symfony\Component\VarDumper\Cloner\ClonerInterface::class);
    $this->_dumper = m::mock(\Symfony\Component\VarDumper\Dumper\HtmlDumper::class);
    $this->dumpExtension = new \Symfony\Bridge\Twig\Extension\DumpExtension($this->_cloner, $this->_dumper);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->dumpExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenParsers0()
{
    // TODO: Your mock expectations here

    $actual = $this->dumpExtension->getTokenParsers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->dumpExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump0()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == false (line 61)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump1()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == false (line 61)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump2()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == true (line 61)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump3()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == true (line 61)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump4()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == true (line 61)
    // if (!$value instanceof \Twig\Template) == false (line 64)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump5()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == true (line 61)
    // if (!$value instanceof \Twig\Template) == false (line 64)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump6()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == true (line 61)
    // if (!$value instanceof \Twig\Template) == true (line 64)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump7()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == false (line 57)
    // if (2 === func_num_args()) == true (line 61)
    // if (!$value instanceof \Twig\Template) == true (line 64)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump8()
{
    $env = m::mock(\Twig\Environment::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$env->isDebug()) == true (line 57)

    $actual = $this->dumpExtension->dump($env, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
