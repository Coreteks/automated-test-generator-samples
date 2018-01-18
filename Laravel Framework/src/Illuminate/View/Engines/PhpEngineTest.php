<?php

namespace tests\Illuminate\View\Engines;

use Illuminate\View\Engines\PhpEngine;
use Mockery as m;

class PhpEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\View\Engines\PhpEngine
*/
protected $phpEngine;

public function setUp()
{
    parent::setUp();

    $this->phpEngine = new \Illuminate\View\Engines\PhpEngine();
}

public function testGet0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->phpEngine->get($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
