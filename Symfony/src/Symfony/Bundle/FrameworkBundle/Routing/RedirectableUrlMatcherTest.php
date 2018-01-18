<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Routing;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher;

class RedirectableUrlMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
*/
protected $redirectableUrlMatcher;

public function setUp()
{
    parent::setUp();

    $this->redirectableUrlMatcher = new \Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher();
}

public function testRedirect0()
{
    $path = m::mock('UntypedParameter_path_');
    $route = m::mock('UntypedParameter_route_');
    $scheme = m::mock('UntypedParameter_scheme_');

    // TODO: Your mock expectations here

    $actual = $this->redirectableUrlMatcher->redirect($path, $route, $scheme);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
