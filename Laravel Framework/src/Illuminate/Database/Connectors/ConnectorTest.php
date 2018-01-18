<?php

namespace tests\Illuminate\Database\Connectors;

use Illuminate\Database\Connectors\Connector;
use Mockery as m;

class ConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Connectors\Connector
*/
protected $connector;

public function setUp()
{
    parent::setUp();

    $this->connector = new \Illuminate\Database\Connectors\Connector();
}

/**
 * @expectedException \Exception
 */
public function testCreateConnection0()
{
    $dsn = m::mock('UntypedParameter_dsn_');
    $config = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->connector->createConnection($dsn, $config, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnection1()
{
    $dsn = m::mock('UntypedParameter_dsn_');
    $config = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->connector->createConnection($dsn, $config, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnection2()
{
    $dsn = m::mock('UntypedParameter_dsn_');
    $config = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->connector->createConnection($dsn, $config, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOptions0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->connector->getOptions($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->connector->getDefaultOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultOptions0()
{
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->connector->setDefaultOptions($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
