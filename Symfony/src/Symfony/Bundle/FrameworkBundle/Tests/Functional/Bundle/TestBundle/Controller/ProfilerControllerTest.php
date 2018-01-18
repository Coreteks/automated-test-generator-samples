<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\ProfilerController;

class ProfilerControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\ProfilerController
*/
protected $profilerController;

public function setUp()
{
    parent::setUp();

    $this->profilerController = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\ProfilerController();
}

public function testIndexAction0()
{
    // TODO: Your mock expectations here

    $actual = $this->profilerController->indexAction();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
