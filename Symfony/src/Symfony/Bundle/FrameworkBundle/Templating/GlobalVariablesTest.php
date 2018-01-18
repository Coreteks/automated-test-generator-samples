<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GlobalVariablesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables
*/
protected $globalVariables;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Symfony\Component\DependencyInjection\ContainerInterface::class);
    $this->globalVariables = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this->_container);
}

public function testGetToken0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->container->has('security.token_storage')) == false (line 38)

    $actual = $this->globalVariables->getToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetToken1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->container->has('security.token_storage')) == true (line 38)

    $actual = $this->globalVariables->getToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($token = $this->getToken())) == false (line 47)
    // if (!is_object($user)) == false (line 52)

    $actual = $this->globalVariables->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($token = $this->getToken())) == false (line 47)
    // if (!is_object($user)) == true (line 52)

    $actual = $this->globalVariables->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($token = $this->getToken())) == true (line 47)

    $actual = $this->globalVariables->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->has('request_stack')) == false (line 64)

    $actual = $this->globalVariables->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->has('request_stack')) == true (line 64)

    $actual = $this->globalVariables->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request = $this->getRequest()) == false (line 74)

    $actual = $this->globalVariables->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request = $this->getRequest()) == true (line 74)

    $actual = $this->globalVariables->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEnvironment0()
{
    // TODO: Your mock expectations here

    $actual = $this->globalVariables->getEnvironment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDebug0()
{
    // TODO: Your mock expectations here

    $actual = $this->globalVariables->getDebug();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
