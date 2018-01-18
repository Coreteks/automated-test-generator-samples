<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Console;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\HttpKernel\KernelInterface;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_kernel;
/**
* @var \Symfony\Bundle\FrameworkBundle\Console\Application
*/
protected $application;

public function setUp()
{
    parent::setUp();

    $this->_kernel = m::mock(\Symfony\Component\HttpKernel\KernelInterface::class);
    $this->application = new \Symfony\Bundle\FrameworkBundle\Console\Application($this->_kernel);
}

public function testGetKernel0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getKernel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoRun0()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->registrationErrors) == false (line 67)

    $actual = $this->application->doRun($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoRun1()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->registrationErrors) == true (line 67)

    $actual = $this->application->doRun($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->application->find($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($command instanceof \Symfony\Component\DependencyInjection\ContainerAwareInterface) == false (line 105)

    $actual = $this->application->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($command instanceof \Symfony\Component\DependencyInjection\ContainerAwareInterface) == true (line 105)

    $actual = $this->application->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    $actual = $this->application->all($namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLongVersion0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getLongVersion();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    $actual = $this->application->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
