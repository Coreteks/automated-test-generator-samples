<?php

namespace tests\Illuminate\View;

use Illuminate\View\ViewName;
use Mockery as m;

class ViewNameTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\View\ViewName
*/
protected $viewName;

public function setUp()
{
    parent::setUp();

    $this->viewName = new \Illuminate\View\ViewName();
}

public function testNormalize0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($name, $delimiter) === false) == false (line 17)

    $actual = $this->viewName->normalize($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalize1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($name, $delimiter) === false) == true (line 17)

    $actual = $this->viewName->normalize($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
