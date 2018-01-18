<?php

namespace tests\Illuminate\Cache\Console;

use Illuminate\Cache\CacheManager;
use Illuminate\Cache\Console\ForgetCommand;
use Mockery as m;

class ForgetCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cache;
/**
* @var \Illuminate\Cache\Console\ForgetCommand
*/
protected $forgetCommand;

public function setUp()
{
    parent::setUp();

    $this->_cache = m::mock(\Illuminate\Cache\CacheManager::class);
    $this->forgetCommand = new \Illuminate\Cache\Console\ForgetCommand($this->_cache);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->forgetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
