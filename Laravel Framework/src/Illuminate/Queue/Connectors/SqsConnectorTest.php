<?php

namespace tests\Illuminate\Queue\Connectors;

use Illuminate\Queue\Connectors\SqsConnector;
use Mockery as m;

class SqsConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Connectors\SqsConnector
*/
protected $sqsConnector;

public function setUp()
{
    parent::setUp();

    $this->sqsConnector = new \Illuminate\Queue\Connectors\SqsConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config['key'] && $config['secret']) == false (line 21)

    $actual = $this->sqsConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect1()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config['key'] && $config['secret']) == true (line 21)

    $actual = $this->sqsConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
