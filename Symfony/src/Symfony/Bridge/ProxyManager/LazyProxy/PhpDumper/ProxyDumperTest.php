<?php

namespace tests\Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper;

use Mockery as m;
use Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\ProxyDumper;

class ProxyDumperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_salt = null;
/**
* @var \Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\ProxyDumper
*/
protected $proxyDumper;

public function setUp()
{
    parent::setUp();

    $this->_salt = null;
    $this->proxyDumper = new \Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\ProxyDumper($this->_salt);
}

public function testIsProxyCandidate0()
{
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);

    // TODO: Your mock expectations here

    $actual = $this->proxyDumper->isProxyCandidate($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProxyFactoryCode0()
{
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);
    $id = m::mock('UntypedParameter_id_');
    $factoryCode = m::mock('UntypedParameter_factoryCode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->isShared()) == false (line 55)
    // if (null === $factoryCode) == false (line 59)

    $actual = $this->proxyDumper->getProxyFactoryCode($definition, $id, $factoryCode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetProxyFactoryCode1()
{
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);
    $id = m::mock('UntypedParameter_id_');
    $factoryCode = m::mock('UntypedParameter_factoryCode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->isShared()) == false (line 55)
    // if (null === $factoryCode) == true (line 59)
    // throw new \InvalidArgumentException(sprintf('Missing factory code to construct the service "%s".', $id)) -> exception (line 60)

    $actual = $this->proxyDumper->getProxyFactoryCode($definition, $id, $factoryCode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProxyFactoryCode2()
{
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);
    $id = m::mock('UntypedParameter_id_');
    $factoryCode = m::mock('UntypedParameter_factoryCode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->isShared()) == true (line 55)
    // if (null === $factoryCode) == false (line 59)

    $actual = $this->proxyDumper->getProxyFactoryCode($definition, $id, $factoryCode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetProxyFactoryCode3()
{
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);
    $id = m::mock('UntypedParameter_id_');
    $factoryCode = m::mock('UntypedParameter_factoryCode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->isShared()) == true (line 55)
    // if (null === $factoryCode) == true (line 59)
    // throw new \InvalidArgumentException(sprintf('Missing factory code to construct the service "%s".', $id)) -> exception (line 60)

    $actual = $this->proxyDumper->getProxyFactoryCode($definition, $id, $factoryCode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProxyCode0()
{
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);

    // TODO: Your mock expectations here

    $actual = $this->proxyDumper->getProxyCode($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
