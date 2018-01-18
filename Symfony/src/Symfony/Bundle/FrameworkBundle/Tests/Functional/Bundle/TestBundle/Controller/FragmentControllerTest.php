<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\Bar;

class BarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\Bar
*/
protected $bar;

public function setUp()
{
    parent::setUp();

    $this->bar = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\Bar();
}

public function testGetBar0()
{
    // TODO: Your mock expectations here

    $actual = $this->bar->getBar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
