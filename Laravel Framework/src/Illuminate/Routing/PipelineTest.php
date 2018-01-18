<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\Pipeline;
use Mockery as m;

class PipelineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Pipeline
*/
protected $pipeline;

public function setUp()
{
    parent::setUp();

    $this->pipeline = new \Illuminate\Routing\Pipeline();
}
}
