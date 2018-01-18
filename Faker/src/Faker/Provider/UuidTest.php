<?php

namespace tests\Faker\Provider;

use Faker\Provider\Uuid;
use Mockery as m;

class UuidTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Uuid
*/
protected $uuid;

public function setUp()
{
    parent::setUp();

    $this->uuid = new \Faker\Provider\Uuid();
}

public function testUuid0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (pack('L', 0x6162797a) == pack('N', 0x6162797a)) == false (line 28)

    $actual = $this->uuid->uuid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (pack('L', 0x6162797a) == pack('N', 0x6162797a)) == true (line 28)

    $actual = $this->uuid->uuid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
