<?php

namespace tests\Symfony\Bridge\Doctrine\CacheWarmer;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer;

class ProxyCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
*/
protected $proxyCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->proxyCacheWarmer = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->_registry);
}

public function testIsOptional0()
{
    // TODO: Your mock expectations here

    $actual = $this->proxyCacheWarmer->isOptional();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp0()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp1()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($proxyCacheDir = $em->getConfiguration()->getProxyDir())) == false (line 51)
    // if (!is_writable($proxyCacheDir)) == false (line 55)
    // if ($em->getConfiguration()->getAutoGenerateProxyClasses()) == false (line 60)

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp2()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($proxyCacheDir = $em->getConfiguration()->getProxyDir())) == false (line 51)
    // if (!is_writable($proxyCacheDir)) == false (line 55)
    // if ($em->getConfiguration()->getAutoGenerateProxyClasses()) == true (line 60)

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testWarmUp3()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($proxyCacheDir = $em->getConfiguration()->getProxyDir())) == false (line 51)
    // if (!is_writable($proxyCacheDir)) == true (line 55)
    // throw new \RuntimeException(sprintf('The Doctrine Proxy directory "%s" is not writeable for the current system user.', $proxyCacheDir)) -> exception (line 56)

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp4()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($proxyCacheDir = $em->getConfiguration()->getProxyDir())) == true (line 51)
    // if (false === @mkdir($proxyCacheDir, 0777, true)) == false (line 52)
    // if ($em->getConfiguration()->getAutoGenerateProxyClasses()) == false (line 60)

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp5()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($proxyCacheDir = $em->getConfiguration()->getProxyDir())) == true (line 51)
    // if (false === @mkdir($proxyCacheDir, 0777, true)) == false (line 52)
    // if ($em->getConfiguration()->getAutoGenerateProxyClasses()) == true (line 60)

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testWarmUp6()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($proxyCacheDir = $em->getConfiguration()->getProxyDir())) == true (line 51)
    // if (false === @mkdir($proxyCacheDir, 0777, true)) == true (line 52)
    // throw new \RuntimeException(sprintf('Unable to create the Doctrine Proxy directory "%s".', $proxyCacheDir)) -> exception (line 53)

    $actual = $this->proxyCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
