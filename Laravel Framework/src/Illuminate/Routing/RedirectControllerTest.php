<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RedirectController;
use Mockery as m;

class RedirectControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RedirectController
*/
protected $redirectController;

public function setUp()
{
    parent::setUp();

    $this->redirectController = new \Illuminate\Routing\RedirectController();
}

public function test__invoke0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->redirectController->__invoke($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
