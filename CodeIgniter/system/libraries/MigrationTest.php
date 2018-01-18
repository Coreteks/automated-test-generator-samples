<?php

namespace tests;

use CI_Migration;
use Mockery as m;

class CI_MigrationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_config = null;
/**
* @var \CI_Migration
*/
protected $cI_Migration;

public function setUp()
{
    parent::setUp();

    $this->_config = null;
    $this->cI_Migration = new \CI_Migration($this->_config);
}

public function testVersion0()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == false (line 222)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion3()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion4()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion5()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion6()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion7()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion8()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion9()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion10()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion11()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion12()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion13()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion14()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion15()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion16()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion17()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion18()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion19()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion20()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion21()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion22()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion23()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion24()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion25()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion26()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion27()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion28()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion29()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion30()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion31()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion32()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion33()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion34()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion35()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion36()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion37()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion38()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion39()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion40()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion41()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion42()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion43()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion44()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion45()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion46()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion47()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion48()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion49()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion50()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion51()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion52()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion53()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion54()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion55()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion56()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion57()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion58()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion59()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion60()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion61()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion62()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion63()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion64()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion65()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion66()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion67()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion68()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion69()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion70()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion71()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion72()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion73()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion74()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion75()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion76()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion77()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion78()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion79()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion80()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion81()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion82()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion83()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion84()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion85()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion86()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion87()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion88()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion89()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion90()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion91()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion92()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion93()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == false (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == true (line 212)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion94()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == false (line 222)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion95()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion96()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion97()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion98()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion99()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion100()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion101()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion102()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion103()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion104()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion105()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion106()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion107()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion108()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion109()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion110()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion111()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion112()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion113()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion114()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion115()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion116()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion117()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion118()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion119()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion120()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion121()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion122()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion123()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion124()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion125()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion126()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion127()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion128()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion129()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion130()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion131()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion132()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion133()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion134()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion135()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion136()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion137()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion138()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion139()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion140()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == false (line 218)
    // if ($target_version < $current_version) == true (line 222)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion141()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion142()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion143()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion144()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion145()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion146()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion147()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion148()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion149()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion150()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion151()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion152()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion153()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion154()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion155()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion156()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion157()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == false (line 264)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion158()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion159()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion160()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion161()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == false (line 260)
    // if ($number <= $target_version) == true (line 264)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion162()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion163()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion164()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion165()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == false (line 247)
    // if ($number > $current_version) == true (line 260)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion166()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion167()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion168()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion169()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion170()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion171()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == false (line 271)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion172()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion173()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion174()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion175()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == false (line 291)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion176()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == false (line 286)
    // if (!\is_callable(array($class, $method))) == true (line 291)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion177()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == false (line 273)
    // if (!\class_exists($class, \FALSE)) == true (line 286)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion178()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == false (line 253)
    // if ($this->_migration_type === 'sequential') == true (line 271)
    // if (isset($previous) && \abs($number - $previous) > 1) == true (line 273)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion179()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion180()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion181()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion182()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == false (line 249)
    // if ($number > $target_version) == true (line 253)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion183()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion184()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion185()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == false (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion186()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == false (line 212)
    // if ($target_version > $current_version) == true (line 218)
    // if ($method === 'up') == true (line 247)
    // if ($number <= $current_version) == true (line 249)
    // if ($current_version != $target_version) == true (line 313)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion187()
{
    $target_version = m::mock('UntypedParameter_target_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_migration_type === 'sequential') == true (line 201)
    // if ($target_version > 0 && !isset($migrations[$target_version])) == true (line 212)

    $actual = $this->cI_Migration->version($target_version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLatest0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($migrations)) == false (line 334)

    $actual = $this->cI_Migration->latest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLatest1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($migrations)) == true (line 334)

    $actual = $this->cI_Migration->latest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Migration->current();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Migration->error_string();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind_migrations0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Migration->find_migrations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind_migrations1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match($this->_migration_regex, $name)) == false (line 388)

    $actual = $this->cI_Migration->find_migrations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind_migrations2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match($this->_migration_regex, $name)) == true (line 388)
    // if (isset($migrations[$number])) == false (line 393)

    $actual = $this->cI_Migration->find_migrations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind_migrations3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match($this->_migration_regex, $name)) == true (line 388)
    // if (isset($migrations[$number])) == true (line 393)

    $actual = $this->cI_Migration->find_migrations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $var = m::mock('UntypedParameter_var_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Migration->__get($var);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
