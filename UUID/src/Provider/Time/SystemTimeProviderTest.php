<?php

namespace tests\Ramsey\Uuid\Provider\Time;

use Mockery as m;
use Ramsey\Uuid\Provider\Time\SystemTimeProvider;

class SystemTimeProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Provider\Time\SystemTimeProvider
*/
protected $systemTimeProvider;

public function setUp()
{
    parent::setUp();

    $this->systemTimeProvider = new \Ramsey\Uuid\Provider\Time\SystemTimeProvider();
}

public function testCurrentTime0()
{
    // TODO: Your mock expectations here

    $actual = $this->systemTimeProvider->currentTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
