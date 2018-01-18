<?php

namespace tests\Illuminate\Foundation\Console\Presets;

use Illuminate\Foundation\Console\Presets\None;
use Mockery as m;

class NoneTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\Presets\None
*/
protected $none;

public function setUp()
{
    parent::setUp();

    $this->none = new \Illuminate\Foundation\Console\Presets\None();
}

public function testInstall0()
{
    // TODO: Your mock expectations here

    $actual = $this->none->install();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
