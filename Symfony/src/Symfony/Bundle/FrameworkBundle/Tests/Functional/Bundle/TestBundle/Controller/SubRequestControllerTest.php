<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SubRequestController;

class SubRequestControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SubRequestController
*/
protected $subRequestController;

public function setUp()
{
    parent::setUp();

    $this->subRequestController = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SubRequestController();
}

public function testIndexAction0()
{
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    $actual = $this->subRequestController->indexAction($handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFragmentAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->subRequestController->fragmentAction($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testFragmentErrorAction0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \RuntimeException('error') -> exception (line 59)

    $actual = $this->subRequestController->fragmentErrorAction();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
