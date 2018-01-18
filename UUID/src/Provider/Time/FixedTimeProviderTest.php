<?php

namespace tests\Ramsey\Uuid\Provider\Time;

use Mockery as m;
use Ramsey\Uuid\Provider\Time\FixedTimeProvider;

class FixedTimeProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_timestamp = [];
/**
* @var \Ramsey\Uuid\Provider\Time\FixedTimeProvider
*/
protected $fixedTimeProvider;

public function setUp()
{
    parent::setUp();

    $this->_timestamp = [];
    $this->fixedTimeProvider = new \Ramsey\Uuid\Provider\Time\FixedTimeProvider($this->_timestamp);
}

public function testSetUsec0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->fixedTimeProvider->setUsec($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSec0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->fixedTimeProvider->setSec($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrentTime0()
{
    // TODO: Your mock expectations here

    $actual = $this->fixedTimeProvider->currentTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
