<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\LuaScripts;
use Mockery as m;

class LuaScriptsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\LuaScripts
*/
protected $luaScripts;

public function setUp()
{
    parent::setUp();

    $this->luaScripts = new \Illuminate\Queue\LuaScripts();
}

public function testSize0()
{
    // TODO: Your mock expectations here

    $actual = $this->luaScripts->size();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    // TODO: Your mock expectations here

    $actual = $this->luaScripts->pop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease0()
{
    // TODO: Your mock expectations here

    $actual = $this->luaScripts->release();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMigrateExpiredJobs0()
{
    // TODO: Your mock expectations here

    $actual = $this->luaScripts->migrateExpiredJobs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
