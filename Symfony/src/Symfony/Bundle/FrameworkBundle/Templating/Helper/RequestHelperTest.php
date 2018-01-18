<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper;
use Symfony\Component\HttpFoundation\RequestStack;

class RequestHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_requestStack;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper
*/
protected $requestHelper;

public function setUp()
{
    parent::setUp();

    $this->_requestStack = m::mock(\Symfony\Component\HttpFoundation\RequestStack::class);
    $this->requestHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->_requestStack);
}

public function testGetParameter0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->requestHelper->getParameter($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestHelper->getLocale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
