<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\app;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\app\AppKernel;

class AppKernelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_varDir = null;
/**
* @var mixed
*/
protected $_testCase = null;
/**
* @var mixed
*/
protected $_rootConfig = null;
/**
* @var mixed
*/
protected $_environment = null;
/**
* @var mixed
*/
protected $_debug = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\app\AppKernel
*/
protected $appKernel;

public function setUp()
{
    parent::setUp();

    $this->_varDir = null;
    $this->_testCase = null;
    $this->_rootConfig = null;
    $this->_environment = null;
    $this->_debug = null;
    $this->appKernel = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\app\AppKernel($this->_varDir, $this->_testCase, $this->_rootConfig, $this->_environment, $this->_debug);
}

public function testRegisterBundles0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!file_exists($filename = $this->getRootDir() . '/' . $this->testCase . '/bundles.php')) == false (line 50)

    $actual = $this->appKernel->registerBundles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testRegisterBundles1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!file_exists($filename = $this->getRootDir() . '/' . $this->testCase . '/bundles.php')) == true (line 50)
    // throw new \RuntimeException(sprintf('The bundles file "%s" does not exist.', $filename)) -> exception (line 51)

    $actual = $this->appKernel->registerBundles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRootDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->appKernel->getRootDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCacheDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->appKernel->getCacheDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLogDir0()
{
    // TODO: Your mock expectations here

    $actual = $this->appKernel->getLogDir();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterContainerConfiguration0()
{
    $loader = m::mock(\Symfony\Component\Config\Loader\LoaderInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->appKernel->registerContainerConfiguration($loader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->appKernel->serialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnserialize0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->appKernel->unserialize($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
