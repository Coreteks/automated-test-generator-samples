<?php

namespace tests\Symfony\Bundle\SecurityBundle\Debug;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener;

class TraceableFirewallListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
*/
protected $traceableFirewallListener;

public function setUp()
{
    parent::setUp();

    $this->traceableFirewallListener = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener();
}

public function testGetWrappedListeners0()
{
    // TODO: Your mock expectations here

    $actual = $this->traceableFirewallListener->getWrappedListeners();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
