<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand;

class ContainerDebugCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
*/
protected $containerDebugCommand;

public function setUp()
{
    parent::setUp();

    $this->containerDebugCommand = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();
}

/**
 * @expectedException \Exception
 */
public function testFilterToServiceTypes0()
{
    $serviceId = m::mock('UntypedParameter_serviceId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+$/', $serviceId)) == false (line 240)
    // if (false !== strpos($serviceId, '\\')) == false (line 245)

    $actual = $this->containerDebugCommand->filterToServiceTypes($serviceId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilterToServiceTypes1()
{
    $serviceId = m::mock('UntypedParameter_serviceId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+$/', $serviceId)) == false (line 240)
    // if (false !== strpos($serviceId, '\\')) == false (line 245)

    $actual = $this->containerDebugCommand->filterToServiceTypes($serviceId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilterToServiceTypes2()
{
    $serviceId = m::mock('UntypedParameter_serviceId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+$/', $serviceId)) == false (line 240)
    // if (false !== strpos($serviceId, '\\')) == false (line 245)

    $actual = $this->containerDebugCommand->filterToServiceTypes($serviceId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilterToServiceTypes3()
{
    $serviceId = m::mock('UntypedParameter_serviceId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+$/', $serviceId)) == false (line 240)
    // if (false !== strpos($serviceId, '\\')) == true (line 245)

    $actual = $this->containerDebugCommand->filterToServiceTypes($serviceId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilterToServiceTypes4()
{
    $serviceId = m::mock('UntypedParameter_serviceId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+$/', $serviceId)) == true (line 240)

    $actual = $this->containerDebugCommand->filterToServiceTypes($serviceId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
