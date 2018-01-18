<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper;
use Symfony\Component\HttpFoundation\RequestStack;

class SessionHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_requestStack;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper
*/
protected $sessionHelper;

public function setUp()
{
    parent::setUp();

    $this->_requestStack = m::mock(\Symfony\Component\HttpFoundation\RequestStack::class);
    $this->sessionHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->_requestStack);
}

public function testGet0()
{
    $name = m::mock('UntypedParameter_name_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->sessionHelper->get($name, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlash0()
{
    $name = m::mock('UntypedParameter_name_');
    $default = [];

    // TODO: Your mock expectations here

    $actual = $this->sessionHelper->getFlash($name, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionHelper->getFlashes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasFlash0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->sessionHelper->hasFlash($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
