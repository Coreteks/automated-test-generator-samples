<?php

namespace tests\Illuminate\Queue\Connectors;

use Illuminate\Queue\Connectors\NullConnector;
use Mockery as m;

class NullConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Connectors\NullConnector
*/
protected $nullConnector;

public function setUp()
{
    parent::setUp();

    $this->nullConnector = new \Illuminate\Queue\Connectors\NullConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->nullConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
