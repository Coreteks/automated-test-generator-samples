<?php

namespace tests\Illuminate\Mail;

use Illuminate\Mail\TransportManager;
use Mockery as m;

class TransportManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Mail\TransportManager
*/
protected $transportManager;

public function setUp()
{
    parent::setUp();

    $this->transportManager = new \Illuminate\Mail\TransportManager();
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->transportManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->transportManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
