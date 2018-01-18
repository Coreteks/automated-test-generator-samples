<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper;
use Symfony\Component\Asset\Packages;

class AssetsHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_packages;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
*/
protected $assetsHelper;

public function setUp()
{
    parent::setUp();

    $this->_packages = m::mock(\Symfony\Component\Asset\Packages::class);
    $this->assetsHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->_packages);
}

public function testGetUrl0()
{
    $path = m::mock('UntypedParameter_path_');
    $packageName = m::mock('UntypedParameter_packageName_');

    // TODO: Your mock expectations here

    $actual = $this->assetsHelper->getUrl($path, $packageName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVersion0()
{
    $path = m::mock('UntypedParameter_path_');
    $packageName = m::mock('UntypedParameter_packageName_');

    // TODO: Your mock expectations here

    $actual = $this->assetsHelper->getVersion($path, $packageName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->assetsHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
