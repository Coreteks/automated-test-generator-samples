<?php

namespace tests\Illuminate\Cache\Events;

use Illuminate\Cache\Events\CacheHit;
use Mockery as m;

class CacheHitTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_key = null;
/**
* @var mixed
*/
protected $_value = null;
/**
* @var array
*/
protected $_tags = [];
/**
* @var \Illuminate\Cache\Events\CacheHit
*/
protected $cacheHit;

public function setUp()
{
    parent::setUp();

    $this->_key = null;
    $this->_value = null;
    $this->_tags = [];
    $this->cacheHit = new \Illuminate\Cache\Events\CacheHit($this->_key, $this->_value, $this->_tags);
}
}
