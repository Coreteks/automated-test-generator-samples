<?php

namespace tests\Illuminate\Foundation\Console\Presets;

use Illuminate\Foundation\Console\Presets\Bootstrap;
use Mockery as m;

class BootstrapTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\Presets\Bootstrap
*/
protected $bootstrap;

public function setUp()
{
    parent::setUp();

    $this->bootstrap = new \Illuminate\Foundation\Console\Presets\Bootstrap();
}

public function testInstall0()
{
    // TODO: Your mock expectations here

    $actual = $this->bootstrap->install();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
