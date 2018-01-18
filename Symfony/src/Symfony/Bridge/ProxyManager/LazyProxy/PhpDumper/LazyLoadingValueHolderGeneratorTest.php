<?php

namespace tests\Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper;

use Mockery as m;
use Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\LazyLoadingValueHolderGenerator;

class LazyLoadingValueHolderGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\LazyLoadingValueHolderGenerator
*/
protected $lazyLoadingValueHolderGenerator;

public function setUp()
{
    parent::setUp();

    $this->lazyLoadingValueHolderGenerator = new \Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\LazyLoadingValueHolderGenerator();
}

public function testGenerate0()
{
    $originalClass = m::mock(\ReflectionClass::class);
    $classGenerator = m::mock(\Zend\Code\Generator\ClassGenerator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($classGenerator->hasMethod('__destruct')) == false (line 29)

    $actual = $this->lazyLoadingValueHolderGenerator->generate($originalClass, $classGenerator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $originalClass = m::mock(\ReflectionClass::class);
    $classGenerator = m::mock(\Zend\Code\Generator\ClassGenerator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($classGenerator->hasMethod('__destruct')) == true (line 29)
    // if ($body === $newBody) == false (line 34)

    $actual = $this->lazyLoadingValueHolderGenerator->generate($originalClass, $classGenerator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \UnexpectedValueException
 */
public function testGenerate2()
{
    $originalClass = m::mock(\ReflectionClass::class);
    $classGenerator = m::mock(\Zend\Code\Generator\ClassGenerator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($classGenerator->hasMethod('__destruct')) == true (line 29)
    // if ($body === $newBody) == true (line 34)
    // throw new \UnexpectedValueException(sprintf('Unexpected lazy-proxy format generated for method %s::__destruct()', $originalClass->name)) -> exception (line 35)

    $actual = $this->lazyLoadingValueHolderGenerator->generate($originalClass, $classGenerator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
