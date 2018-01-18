<?php

namespace tests\Illuminate\Foundation\Console\Presets;

use Illuminate\Foundation\Console\Presets\React;
use Mockery as m;

class ReactTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\Presets\React
*/
protected $react;

public function setUp()
{
    parent::setUp();

    $this->react = new \Illuminate\Foundation\Console\Presets\React();
}

public function testInstall0()
{
    // TODO: Your mock expectations here

    $actual = $this->react->install();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
