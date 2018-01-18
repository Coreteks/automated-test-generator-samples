<?php

namespace tests\Illuminate\Foundation\Console\Presets;

use Illuminate\Foundation\Console\Presets\Vue;
use Mockery as m;

class VueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\Presets\Vue
*/
protected $vue;

public function setUp()
{
    parent::setUp();

    $this->vue = new \Illuminate\Foundation\Console\Presets\Vue();
}

public function testInstall0()
{
    // TODO: Your mock expectations here

    $actual = $this->vue->install();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
