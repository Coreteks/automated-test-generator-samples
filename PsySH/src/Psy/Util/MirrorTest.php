<?php

namespace tests\Psy\Util;

use Mockery as m;
use Psy\Util\Mirror;

class MirrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Util\Mirror
*/
protected $mirror;

public function setUp()
{
    parent::setUp();

    $this->mirror = new \Psy\Util\Mirror();
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testGet0()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == false (line 46)
    // if ($member === null) == false (line 52)
    // if ($filter & self::CONSTANT && $class->hasConstant($member)) == false (line 54)
    // if ($filter & self::METHOD && $class->hasMethod($member)) == false (line 56)
    // if ($filter & self::PROPERTY && $class->hasProperty($member)) == false (line 58)
    // if ($filter & self::STATIC_PROPERTY && $class->hasProperty($member) && $class->getProperty($member)->isStatic()) == false (line 60)
    // throw new \Psy\Exception\RuntimeException(sprintf('Unknown member %s on class %s', $member, is_object($value) ? get_class($value) : $value)) -> exception (line 63)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == false (line 46)
    // if ($member === null) == false (line 52)
    // if ($filter & self::CONSTANT && $class->hasConstant($member)) == false (line 54)
    // if ($filter & self::METHOD && $class->hasMethod($member)) == false (line 56)
    // if ($filter & self::PROPERTY && $class->hasProperty($member)) == false (line 58)
    // if ($filter & self::STATIC_PROPERTY && $class->hasProperty($member) && $class->getProperty($member)->isStatic()) == true (line 60)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == false (line 46)
    // if ($member === null) == false (line 52)
    // if ($filter & self::CONSTANT && $class->hasConstant($member)) == false (line 54)
    // if ($filter & self::METHOD && $class->hasMethod($member)) == false (line 56)
    // if ($filter & self::PROPERTY && $class->hasProperty($member)) == true (line 58)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == false (line 46)
    // if ($member === null) == false (line 52)
    // if ($filter & self::CONSTANT && $class->hasConstant($member)) == false (line 54)
    // if ($filter & self::METHOD && $class->hasMethod($member)) == true (line 56)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == false (line 46)
    // if ($member === null) == false (line 52)
    // if ($filter & self::CONSTANT && $class->hasConstant($member)) == true (line 54)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == false (line 46)
    // if ($member === null) == true (line 52)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet6()
{
    $value = m::mock('UntypedParameter_value_');
    $member = m::mock('UntypedParameter_member_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($member === null && is_string($value) && function_exists($value)) == true (line 46)

    $actual = $this->mirror->get($value, $member, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
