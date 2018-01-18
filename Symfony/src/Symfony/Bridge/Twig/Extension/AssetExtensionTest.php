<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\AssetExtension;
use Symfony\Component\Asset\Packages;

class AssetExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_packages;
/**
* @var \Symfony\Bridge\Twig\Extension\AssetExtension
*/
protected $assetExtension;

public function setUp()
{
    parent::setUp();

    $this->_packages = m::mock(\Symfony\Component\Asset\Packages::class);
    $this->assetExtension = new \Symfony\Bridge\Twig\Extension\AssetExtension($this->_packages);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->assetExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAssetUrl0()
{
    $path = m::mock('UntypedParameter_path_');
    $packageName = m::mock('UntypedParameter_packageName_');

    // TODO: Your mock expectations here

    $actual = $this->assetExtension->getAssetUrl($path, $packageName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAssetVersion0()
{
    $path = m::mock('UntypedParameter_path_');
    $packageName = m::mock('UntypedParameter_packageName_');

    // TODO: Your mock expectations here

    $actual = $this->assetExtension->getAssetVersion($path, $packageName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->assetExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
