<?php

namespace tests\Symfony\Bridge\Doctrine\DataCollector;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\DataCollector\DoctrineDataCollector;

class DoctrineDataCollectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var \Symfony\Bridge\Doctrine\DataCollector\DoctrineDataCollector
*/
protected $doctrineDataCollector;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->doctrineDataCollector = new \Symfony\Bridge\Doctrine\DataCollector\DoctrineDataCollector($this->_registry);
}

public function testAddLogger0()
{
    $name = m::mock('UntypedParameter_name_');
    $logger = m::mock(\Doctrine\DBAL\Logging\DebugStack::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->addLogger($name, $logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset1()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManagers0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getManagers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnections0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getConnections();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueryCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getQueryCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueries0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getQueries();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTime0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTime1()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTime2()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineDataCollector->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
