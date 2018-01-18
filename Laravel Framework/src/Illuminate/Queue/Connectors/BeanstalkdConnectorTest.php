<?php

namespace tests\Illuminate\Queue\Connectors;

use Illuminate\Queue\Connectors\BeanstalkdConnector;
use Mockery as m;

class BeanstalkdConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Connectors\BeanstalkdConnector
*/
protected $beanstalkdConnector;

public function setUp()
{
    parent::setUp();

    $this->beanstalkdConnector = new \Illuminate\Queue\Connectors\BeanstalkdConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
