<?php

namespace tests\Illuminate\View\Engines;

use Illuminate\View\Engines\FileEngine;
use Mockery as m;

class FileEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\View\Engines\FileEngine
*/
protected $fileEngine;

public function setUp()
{
    parent::setUp();

    $this->fileEngine = new \Illuminate\View\Engines\FileEngine();
}

public function testGet0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->fileEngine->get($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
