<?php

namespace tests\Illuminate\Pipeline;

use Illuminate\Pipeline\PipelineServiceProvider;
use Mockery as m;

class PipelineServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Pipeline\PipelineServiceProvider
*/
protected $pipelineServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->pipelineServiceProvider = new \Illuminate\Pipeline\PipelineServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->pipelineServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->pipelineServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
