<?php

namespace tests\Illuminate\Redis\Connections;

use Illuminate\Redis\Connections\PredisClusterConnection;
use Mockery as m;

class PredisClusterConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Redis\Connections\PredisClusterConnection
*/
protected $predisClusterConnection;

public function setUp()
{
    parent::setUp();

    $this->predisClusterConnection = new \Illuminate\Redis\Connections\PredisClusterConnection();
}
}
