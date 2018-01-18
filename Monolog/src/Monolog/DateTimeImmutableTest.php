<?php

namespace tests\Monolog;

use DateTimeZone;
use Mockery as m;
use Monolog\DateTimeImmutable;

class DateTimeImmutableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_useMicroseconds = null;
/**
* @var \Mockery\MockInterface
*/
protected $_timezone;
/**
* @var \Monolog\DateTimeImmutable
*/
protected $dateTimeImmutable;

public function setUp()
{
    parent::setUp();

    $this->_useMicroseconds = null;
    $this->_timezone = m::mock(\DateTimeZone::class);
    $this->dateTimeImmutable = new \Monolog\DateTimeImmutable($this->_useMicroseconds, $this->_timezone);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useMicroseconds) == false (line 53)

    $actual = $this->dateTimeImmutable->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useMicroseconds) == true (line 53)

    $actual = $this->dateTimeImmutable->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->dateTimeImmutable->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
