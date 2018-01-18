<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper;
use Symfony\Component\Stopwatch\Stopwatch;

class StopwatchHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_stopwatch;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper
*/
protected $stopwatchHelper;

public function setUp()
{
    parent::setUp();

    $this->_stopwatch = m::mock(\Symfony\Component\Stopwatch\Stopwatch::class);
    $this->stopwatchHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->_stopwatch);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->stopwatchHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == false (line 38)

    $actual = $this->stopwatchHelper->__call($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == true (line 38)
    // if (method_exists($this->stopwatch, $method)) == false (line 39)
    // throw new \BadMethodCallException(sprintf('Method "%s" of Stopwatch does not exist', $method)) -> exception (line 43)

    $actual = $this->stopwatchHelper->__call($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == true (line 38)
    // if (method_exists($this->stopwatch, $method)) == true (line 39)

    $actual = $this->stopwatchHelper->__call($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
