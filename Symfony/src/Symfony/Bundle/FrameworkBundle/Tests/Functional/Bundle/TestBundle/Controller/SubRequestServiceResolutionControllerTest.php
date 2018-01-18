<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SubRequestServiceResolutionController;

class SubRequestServiceResolutionControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SubRequestServiceResolutionController
*/
protected $subRequestServiceResolutionController;

public function setUp()
{
    parent::setUp();

    $this->subRequestServiceResolutionController = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SubRequestServiceResolutionController();
}

public function testIndexAction0()
{
    // TODO: Your mock expectations here

    $actual = $this->subRequestServiceResolutionController->indexAction();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFragmentAction0()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->subRequestServiceResolutionController->fragmentAction($logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
