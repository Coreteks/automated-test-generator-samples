<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\QueueServiceProvider;
use Mockery as m;

class QueueServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\QueueServiceProvider
*/
protected $queueServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->queueServiceProvider = new \Illuminate\Queue\QueueServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->queueServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterConnectors0()
{
    $manager = m::mock('UntypedParameter_manager_');

    // TODO: Your mock expectations here

    $actual = $this->queueServiceProvider->registerConnectors($manager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterConnectors1()
{
    $manager = m::mock('UntypedParameter_manager_');

    // TODO: Your mock expectations here

    $actual = $this->queueServiceProvider->registerConnectors($manager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->queueServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
