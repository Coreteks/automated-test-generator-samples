<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Cache;
use Mockery as m;

class CacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Cache
*/
protected $cache;

public function setUp()
{
    parent::setUp();

    $this->cache = new \Illuminate\Support\Facades\Cache();
}
}
