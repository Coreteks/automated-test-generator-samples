<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Redis;
use Mockery as m;

class RedisTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Redis
*/
protected $redis;

public function setUp()
{
    parent::setUp();

    $this->redis = new \Illuminate\Support\Facades\Redis();
}
}
