<?php

namespace tests\TestBundle\Fabpot\FooBundle;

use Mockery as m;
use TestBundle\Fabpot\FooBundle\FabpotFooBundle;

class FabpotFooBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \TestBundle\Fabpot\FooBundle\FabpotFooBundle
*/
protected $fabpotFooBundle;

public function setUp()
{
    parent::setUp();

    $this->fabpotFooBundle = new \TestBundle\Fabpot\FooBundle\FabpotFooBundle();
}

public function testGetParent0()
{
    // TODO: Your mock expectations here

    $actual = $this->fabpotFooBundle->getParent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
