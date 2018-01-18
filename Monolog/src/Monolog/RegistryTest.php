<?php

namespace tests\Monolog;

use Mockery as m;
use Monolog\Registry;

class RegistryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Registry
*/
protected $registry;

public function setUp()
{
    parent::setUp();

    $this->registry = new \Monolog\Registry();
}

public function testAddLogger0()
{
    $logger = m::mock(\Monolog\Logger::class);
    $name = m::mock('UntypedParameter_name_');
    $overwrite = m::mock('UntypedParameter_overwrite_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(self::$loggers[$name]) && !$overwrite) == false (line 59)

    $actual = $this->registry->addLogger($logger, $name, $overwrite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAddLogger1()
{
    $logger = m::mock(\Monolog\Logger::class);
    $name = m::mock('UntypedParameter_name_');
    $overwrite = m::mock('UntypedParameter_overwrite_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(self::$loggers[$name]) && !$overwrite) == true (line 59)
    // throw new \InvalidArgumentException('Logger with the given name already exists') -> exception (line 60)

    $actual = $this->registry->addLogger($logger, $name, $overwrite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasLogger0()
{
    $logger = m::mock('UntypedParameter_logger_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger instanceof \Monolog\Logger) == false (line 73)

    $actual = $this->registry->hasLogger($logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasLogger1()
{
    $logger = m::mock('UntypedParameter_logger_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger instanceof \Monolog\Logger) == true (line 73)

    $actual = $this->registry->hasLogger($logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveLogger0()
{
    $logger = m::mock('UntypedParameter_logger_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger instanceof \Monolog\Logger) == false (line 89)

    $actual = $this->registry->removeLogger($logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveLogger1()
{
    $logger = m::mock('UntypedParameter_logger_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger instanceof \Monolog\Logger) == true (line 89)
    // if (false !== ($idx = array_search($logger, self::$loggers, true))) == false (line 90)

    $actual = $this->registry->removeLogger($logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveLogger2()
{
    $logger = m::mock('UntypedParameter_logger_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger instanceof \Monolog\Logger) == true (line 89)
    // if (false !== ($idx = array_search($logger, self::$loggers, true))) == true (line 90)

    $actual = $this->registry->removeLogger($logger);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->registry->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInstance0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$loggers[$name])) == false (line 114)

    $actual = $this->registry->getInstance($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetInstance1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$loggers[$name])) == true (line 114)
    // throw new \InvalidArgumentException(sprintf('Requested "%s" logger instance is not in the registry', $name)) -> exception (line 115)

    $actual = $this->registry->getInstance($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->registry->__callStatic($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
