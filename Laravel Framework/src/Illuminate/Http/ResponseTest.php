<?php

namespace tests\Illuminate\Http;

use Illuminate\Http\Response;
use Mockery as m;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Response
*/
protected $response;

public function setUp()
{
    parent::setUp();

    $this->response = new \Illuminate\Http\Response();
}

public function testSetContent0()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBeJson($content)) == false (line 32)
    // if ($content instanceof \Illuminate\Contracts\Support\Renderable) == false (line 41)

    $actual = $this->response->setContent($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContent1()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBeJson($content)) == false (line 32)
    // if ($content instanceof \Illuminate\Contracts\Support\Renderable) == true (line 41)

    $actual = $this->response->setContent($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContent2()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBeJson($content)) == true (line 32)

    $actual = $this->response->setContent($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
