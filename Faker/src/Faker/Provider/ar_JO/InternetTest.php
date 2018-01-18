<?php

namespace tests\Faker\Provider\ar_JO;

use Faker\Provider\ar_JO\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_JO\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\ar_JO\Internet();
}

public function testLastNameAscii0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->lastNameAscii();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstNameAscii0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->firstNameAscii();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserName0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->userName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomainName0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->domainName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
