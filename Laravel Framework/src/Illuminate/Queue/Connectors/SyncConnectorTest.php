<?php

namespace tests\Illuminate\Queue\Connectors;

use Illuminate\Queue\Connectors\SyncConnector;
use Mockery as m;

class SyncConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Connectors\SyncConnector
*/
protected $syncConnector;

public function setUp()
{
    parent::setUp();

    $this->syncConnector = new \Illuminate\Queue\Connectors\SyncConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->syncConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
