<?php

namespace tests\Symfony\Bundle\FrameworkBundle;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Component\BrowserKit\CookieJar;
use Symfony\Component\BrowserKit\History;
use Symfony\Component\HttpKernel\KernelInterface;

class ClientTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_kernel;
/**
* @var array
*/
protected $_server = [];
/**
* @var \Mockery\MockInterface
*/
protected $_history;
/**
* @var \Mockery\MockInterface
*/
protected $_cookieJar;
/**
* @var \Symfony\Bundle\FrameworkBundle\Client
*/
protected $client;

public function setUp()
{
    parent::setUp();

    $this->_kernel = m::mock(\Symfony\Component\HttpKernel\KernelInterface::class);
    $this->_server = [];
    $this->_history = m::mock(\Symfony\Component\BrowserKit\History::class);
    $this->_cookieJar = m::mock(\Symfony\Component\BrowserKit\CookieJar::class);
    $this->client = new \Symfony\Bundle\FrameworkBundle\Client($this->_kernel, $this->_server, $this->_history, $this->_cookieJar);
}

public function testGetContainer0()
{
    // TODO: Your mock expectations here

    $actual = $this->client->getContainer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKernel0()
{
    // TODO: Your mock expectations here

    $actual = $this->client->getKernel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProfile0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->kernel->getContainer()->has('profiler')) == false (line 69)

    $actual = $this->client->getProfile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProfile1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->kernel->getContainer()->has('profiler')) == true (line 69)

    $actual = $this->client->getProfile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnableProfiler0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->kernel->getContainer()->has('profiler')) == false (line 83)

    $actual = $this->client->enableProfiler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnableProfiler1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->kernel->getContainer()->has('profiler')) == true (line 83)

    $actual = $this->client->enableProfiler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisableReboot0()
{
    // TODO: Your mock expectations here

    $actual = $this->client->disableReboot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnableReboot0()
{
    // TODO: Your mock expectations here

    $actual = $this->client->enableReboot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
