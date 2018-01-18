<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\LogoutUrlExtension;
use Symfony\Component\Security\Http\Logout\LogoutUrlGenerator;

class LogoutUrlExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Symfony\Bridge\Twig\Extension\LogoutUrlExtension
*/
protected $logoutUrlExtension;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Symfony\Component\Security\Http\Logout\LogoutUrlGenerator::class);
    $this->logoutUrlExtension = new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->_generator);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->logoutUrlExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLogoutPath0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->logoutUrlExtension->getLogoutPath($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLogoutUrl0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->logoutUrlExtension->getLogoutUrl($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->logoutUrlExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
