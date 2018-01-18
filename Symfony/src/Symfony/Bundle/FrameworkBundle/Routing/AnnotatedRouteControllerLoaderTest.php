<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Routing;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader;

class AnnotatedRouteControllerLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader
*/
protected $annotatedRouteControllerLoader;

public function setUp()
{
    parent::setUp();

    $this->annotatedRouteControllerLoader = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader();
}
}
