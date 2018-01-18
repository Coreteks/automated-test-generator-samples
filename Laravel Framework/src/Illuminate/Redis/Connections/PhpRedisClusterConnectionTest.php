<?php

namespace tests\Illuminate\Redis\Connections;

use Illuminate\Redis\Connections\PhpRedisClusterConnection;
use Mockery as m;

class PhpRedisClusterConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Redis\Connections\PhpRedisClusterConnection
*/
protected $phpRedisClusterConnection;

public function setUp()
{
    parent::setUp();

    $this->phpRedisClusterConnection = new \Illuminate\Redis\Connections\PhpRedisClusterConnection();
}
}
